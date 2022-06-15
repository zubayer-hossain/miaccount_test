@extends('layouts.app')

@section('content')
    <div class="container-fluid mt-4">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Table Report
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th scope="col">Acc Head Id</th>
                                    <th scope="col">G. Lvl 1</th>
                                    <th scope="col">G. Lvl 2</th>
                                    <th scope="col">G. Lvl 3</th>
                                    <th scope="col">Acc Head</th>
                                    <th scope="col">Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($report_data as $report)
                                    <tr>
                                        <td>{{ $report['account_head_id'] }}</td>
                                        <td>{{ $report['group_level_1'] }}</td>
                                        <td>{{ $report['group_level_2'] }}</td>
                                        <td>{{ $report['group_level_3'] }}</td>
                                        <td>{{ $report['account_head_name'] }}</td>
                                        <td>{{ $report['total'] }}</td>
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
    </div>
@endsection
