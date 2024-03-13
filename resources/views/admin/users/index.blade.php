@extends('layouts.admin.main')
@section('title','Administrators')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="mb-2 row">
                <div class="col-sm-12">
                    <h1 class="m-0 text-dark">
                        Administrators
                    </h1>
                </div>
                <div class="col-sm-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item text-danger">
                            <a href="{{ url('/home') }}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Administrators</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <button class="btn btn-sm btn-outline-info mb-2" onclick="addUsers()">
                                    Add Users
                                </button>
                                <table class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Fullnames</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $count = 1 ?>
                                    @forelse($users as $user)
                                        <tr>
                                            <td>{{$count++}}</td>
                                            <td>
                                                <a href="{{url('users/view/'.$user->id)}}">
                                                    {{$user->first_name.' '.$user->last_name}}
                                                </a>
                                            </td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->phone}}</td>

                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary dropdown-toggle"
                                                            type="button" id="dropdownMenuButton"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                        Action
                                                    </button>
                                                    <ul class="dropdown-menu"
                                                        aria-labelledby="dropdownMenuButton">
                                                        <li class="dropdown-item text-info">
                                                            <a
                                                                href="{{url('users/view/'.$user->id)}}">View</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="add_users" class="modal fade">
            <div class="modal-dialog ">
                <div class="modal-content">
                    <form enctype="multipart/form-data" method="post" action="{{url('users/store')}}">
                        @csrf
                        <div class="modal-body">
                            <div id="main_content_user">
                                <div class="form-group ">
                                    <label for="name">First Name</label>
                                    <input type="text" name="fname" id="fname" class="form-control">
                                </div>
                                <div class="form-group ">
                                    <label for="name">Last Name</label>
                                    <input type="text" name="lname" id="lname" class="form-control">
                                </div>
                                <div class="form-group ">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" id="email" class="form-control">
                                </div>
                                <div class="form-group ">
                                    <label for="phone">Phone Number</label>
                                    <input type="number" name="phone" id="phone" class="form-control">
                                </div>
                            </div>
                            <div id="main_loader_user" class="text-center" style="display: none;">
                                <img src="{{asset('images/loader.gif')}}" alt="loader">
                            </div>
                        </div>
                        <div class="modal-footer justify-content-center">
                            <button class="btn btn-sm btn-outline-warning" type="button" onclick="addUsers()">
                                Close
                            </button>
                            <button class="btn btn-sm btn-outline-success" type="submit" onclick="submitUser()" >
                                Add Users
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('admin.users.script')

@endsection
