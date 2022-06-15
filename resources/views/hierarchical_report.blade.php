@extends('layouts.app')

@section('content')
    <div class="container-fluid mt-4">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Hierarchical Report
                        </div>
                        <div class="card-body">
                            <table style="width:100%;">
                                <thead>
                                <th>
                                    Group Group/Heads
                                    <span class="float-right text-bold">Total Amounts</span>
                                </th>
                                </thead>
                                <tbody>
                                @foreach($groups as $group)
                                    <tr>
                                        <td>
                                            {{$group->name}}
                                            <span
                                                class="float-right">{{ \App\Models\Group::getGroupTotalAmount($group->account_heads, $group->children) }}</span>
                                            <br>

                                            @if ($group->children)
                                                @foreach($group->children as $subgroup)
                                                    <span class="tab1">{{ $subgroup->name }}</span>
                                                    <span
                                                        class="float-right">{{ \App\Models\Group::getGroupTotalAmount($subgroup->account_heads, $subgroup->children) }}</span>
                                                    <br>
                                                    @if ($subgroup->account_heads)
                                                        @foreach($subgroup->account_heads as $sub_account_head)
                                                            <span class="tab2">{{ $sub_account_head->name }}</span>
                                                            <span
                                                                class="float-right">{{ \App\Models\AccountHead::getTransactionsTotalAmount($sub_account_head->transactions) }}</span>
                                                            <br>
                                                        @endforeach
                                                    @endif
                                                    @if ($subgroup->children)
                                                        @foreach($subgroup->children as $subsubgroup)
                                                            &nbsp;<span class="tab2">{{ $subsubgroup->name }}</span>
                                                            <span
                                                                class="float-right">{{ \App\Models\Group::getGroupTotalAmount($subsubgroup->account_heads, $subsubgroup->children) }}</span>
                                                            <br>
                                                            @if ($subsubgroup->account_heads)
                                                                @foreach($subsubgroup->account_heads as $sub_sub_account_head)
                                                                    <span
                                                                        class="tab3">{{ $sub_sub_account_head->name }}</span>
                                                                    <span
                                                                        class="float-right">{{ \App\Models\AccountHead::getTransactionsTotalAmount($sub_sub_account_head->transactions) }}</span>
                                                                    <br>
                                                                @endforeach
                                                            @endif
                                                        @endforeach
                                                    @endif
                                                @endforeach
                                            @endif
                                            @if ($group->account_heads)
                                                @foreach($group->account_heads as $account_head)
                                                    <span class="tab1">{{ $account_head->name }}</span>
                                                    <span
                                                        class="float-right">{{ \App\Models\AccountHead::getTransactionsTotalAmount($account_head->transactions) }}</span>
                                                    <br/>
                                                @endforeach
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .tab1 {
            margin-left: 3rem !important;
        }

        .tab2 {
            margin-left: 6rem !important;
        }

        .tab3 {
            margin-left: 9rem !important;
        }
    </style>
@endsection
