@extends('layouts.admin.main')
@section('title',$user->first_name.' '.$user->last_name)
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="mb-2 row">
                <div class="col-sm-12">
                    <h1 class="m-0 text-dark">
                        {{$user->first_name.' '.$user->last_name}}
                    </h1>
                </div>
                <div class="col-sm-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item text-danger">
                            <a href="{{ url('/home') }}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{url('/users')}}">
                                Administrators
                            </a>
                        </li>
                        <li class="breadcrumb-item active">{{$user->first_name.' '.$user->last_name}}</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body text-center box-profile">
                                <img src="{{ asset('https://img.icons8.com/bubbles/256/administrator-male.png') }}"
                                     class="profile-user-img img-fluid img-circle" alt="image">
                                <h3 class="profile-username text-center">{{ $user->first_name.' '.$user->last_name }}</h3>
                                <h5 class="profile-username text-center">{{ $user->job_title}}</h5>
                                <p class="text-center" style="font-family: 'Poppins'">{{ $user->phone }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <div class="card">
                            <div class="card-header">
                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-home" type="button" role="tab"
                                                aria-controls="pills-home" aria-selected="true">Update
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-update-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-update" type="button" role="tab"
                                                aria-controls="pills-update" aria-selected="false">Update Password
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-activity-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-activity" type="button" role="tab"
                                                aria-controls="pills-activity" aria-selected="false">Activity Log
                                        </button>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                         aria-labelledby="pills-home-tab">
                                        <div class="card">
                                            <div class="card-body">
                                                <form action="{{url('users/update')}}" method="post">
                                                    @csrf
                                                    <div class="row">
                                                        <input type="hidden" name="id" value="{{$user->id}}">
                                                        <div class="form-group col-sm-6">
                                                            <label for="">First Name</label>
                                                            <input type="text" name="first_name" class="form-control"
                                                                   value="{{$user->first_name}}">
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label for="">Last Name</label>
                                                            <input type="text" name="last_name" class="form-control"
                                                                   value="{{$user->last_name}}">
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label for="">Email</label>
                                                            <input type="text" name="email" class="form-control"
                                                                   value="{{$user->email}}">
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label for="">Phone</label>
                                                            <input type="text" name="phone" class="form-control"
                                                                   value="{{$user->phone}}">
                                                        </div>
                                                    </div>
                                                    <button class="btn  btn-sm btn-outline-success">
                                                        Update
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-update" role="tabpanel"
                                         aria-labelledby="pills-update-tab">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="card">
                                                    <form action="{{ url('users/updatePassword') }}" method="post">
                                                        @csrf
                                                        <div class="card-body">
                                                            <input type="hidden" value="{{ $user->id }}" name="id">
                                                            <div class="form-group">
                                                                <label for="password">Password</label>
                                                                <input type="password" name="password"
                                                                       class="form-control" id="password">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="confirm_password">Confirm Password</label>
                                                                <input type="password" name="confirm_password"
                                                                       class="form-control" id="confirm_password">
                                                            </div>
                                                        </div>
                                                        <div class="card-footer">
                                                            <button class="btn btn-sm btn-outline-success">
                                                                Update
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-activity" role="tabpanel"
                                         aria-labelledby="pills-activity-tab">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="timeline">
                                                            @forelse($user->activities as $activity)
                                                                <div class="time-label">
                                                                    <span class="bg-red">{{$activity->created_at->diffForHumans()}}</span>
                                                                </div>
                                                                <div>
                                                                    <i class="fas fa-envelope bg-blue"></i>
                                                                    <div class="timeline-item">
                                                                        <span class="time"><i class="fas fa-clock"></i> {{date('H:i',strtotime($activity->created_at))}}</span>
                                                                        <div class="timeline-body">
                                                                           {{$activity->activity}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @empty
                                                            @endforelse
                                                            <div>
                                                                <i class="fas fa-clock bg-gray"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
