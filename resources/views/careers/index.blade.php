@extends('layouts.admin.main')
@section('title','Careers')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="mb-2 row">
                <div class="col-sm-12">
                    <h1 class="m-0 text-dark">
                        Careers
                    </h1>
                </div>
                <div class="col-sm-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item text-danger">
                            <a href="{{ url('/home') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Careers</li>
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
                                <button class="btn btn-sm btn-outline-warning" onclick="addCareer()">
                                    Add Career
                                </button>
                                @if (session('alert-success'))
                                    <div class="alert alert-success mt-2" role="alert">
                                        {{ session('alert-success') }}
                                    </div>
                                @endif
                                @if ($errors->any())
                                    <div class="row">
                                        @foreach ($errors->all() as $error)
                                            <div class="col-4">
                                                <div class="alert mt-2 alert-dismissible alert-highlighted fade show alert-danger"
                                                     role="alert">
                                                    {{ $error }}
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="add_career_modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{url('cms/careers/store')}}" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <label id="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title">
                            </div>
                            <div class="form-group">
                                <label id="expires_on">Expires On</label>
                                <input type="date" class="form-control" id="expires_on" name="title">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" class="my-editor" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-center">
                            <button class="btn btn-sm btn-outline-warning" type="button" onclick="addCareer()">
                                Close
                            </button>
                            <button class="btn btn-sm btn-outline-success">
                                Add Career
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('careers.script')
@endsection
