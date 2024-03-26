@extends('layouts.admin.main')
@section('title','Dashboard')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="mb-2 row">
                <div class="col-sm-12">
                    <h1 class="m-0 text-dark">
                        Welcome ---
                        {{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}
                    </h1>
                </div>
                <div class="col-sm-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item text-danger">
                            <a href="{{ url('/home') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <div id="browsers"></div>
                                @donutchart('topBrowsers', 'browsers')
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <div id="top_country"></div>
                                @donutchart('topCountries','top_country')
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <div id="top_devices"></div>
                                @donutchart('topDevices','top_devices')
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card" style="height: 232px">
                            <div class="card-body">
                                <h5 class="card-title text-blue font-weight-bold">Total Website Visitors</h5>
                                <p class="card-text"></p>
                                <div class="d-flex justify-content-between">
                                    <p class="display-1 degree">{{$activeUsers}}</p>
                                    <i class="fas fa-sun-o fa-5x pt-3 text-warning"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div id="pageVisitorsAnalytics" style="height: 400px;"></div>
                                @linechart('pageVisitorsAnalytics', 'pageVisitorsAnalytics')
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div id="pageVisitorsAnalytics1" style="height: 400px;"></div>
                                @linechart('pageVisitorsAnalytics1', 'pageVisitorsAnalytics1')
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div id="country_sessions"></div>
                                @geochart('countrySessions','country_sessions')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
