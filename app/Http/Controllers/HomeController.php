<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AccountHead;
use App\Models\Group;
use App\Models\AccountHeadGroup;
use App\Models\Transaction;

class HomeController extends Controller
{


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function hierarchicalReport()
    {
        $groups = Group::whereNull('parent_id')->with('children', 'account_heads.transactions')->get();

        return view('hierarchical_report', compact('groups'));
    }

    public function tableReport()
    {
        $groups      = Group::whereNull('parent_id')->with('children', 'account_heads.transactions')->get();
        $report_data = $this->getReportData($groups);

        return view('table_report', compact('report_data'));
    }

    public function getReportData($groups): array
    {
        $final_data = [];
        foreach ($groups as $group) {
            if (count($group->children) > 0) {
                foreach ($group->children as $subgroup) {
                    if (count($subgroup->children) > 0) {
                        foreach ($subgroup->children as $subsubgroup) {
                            if ($subsubgroup->account_heads) {
                                foreach ($subsubgroup->account_heads  as $account_head) {
                                    $final_data[] = $this->makeAccountHeadWiseReport($account_head, $group->name, $subgroup->name, $subsubgroup->name);
                                }
                            }
                        }
                    }
                    if ($subgroup->account_heads) {
                        foreach ($subgroup->account_heads  as $account_head) {
                            $final_data[] = $this->makeAccountHeadWiseReport($account_head, $group->name, $subgroup->name);
                        }
                    }
                }
            }
            if ($group->account_heads) {
                foreach ($group->account_heads  as $account_head) {
                    $final_data[] = $this->makeAccountHeadWiseReport($account_head, $group->name);
                }
            }
        }

        return $final_data;
    }

    public function makeAccountHeadWiseReport($account_head, $group_level_1 = '', $group_level_2 = '', $group_level_3 = ''): array
    {
        $report                      = [];
        $report['account_head_id']   = $account_head->id;
        $report['group_level_1']     = $group_level_1;
        $report['group_level_2']     = $group_level_2;
        $report['group_level_3']     = $group_level_3;
        $report['account_head_name'] = $account_head->name;
        $report['total']             =  AccountHead::getTransactionsTotalAmount($account_head->transactions);

        return $report;
    }

}
