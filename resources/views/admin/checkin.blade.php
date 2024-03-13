@extends('layouts.admin.main')
@section('title','Check In')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="mb-2 row">
                <div class="col-sm-12">
                    <h1 class="m-0 text-dark">
                        Check In Online
                    </h1>
                </div>
                <div class="col-sm-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item text-danger">
                            <a href="{{ url('/home') }}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Check In Online</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="card">
                        <div class="card-header">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-english-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-english" type="button" role="tab"
                                            aria-controls="pills-english" aria-selected="true">English
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-french-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-french" type="button" role="tab"
                                            aria-controls="pills-french" aria-selected="false">French
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-chinese-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-chinese" type="button" role="tab"
                                            aria-controls="pills-chinese" aria-selected="false">Chinese
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-english" role="tabpanel"
                                     aria-labelledby="pills-english-tab">
                                    <div class="card">
                                        <div class="card-body">
                                            <form action="{{url('cms/check-online/update')}}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <input type="hidden" name="id" value="{{$check_in->id}}">
                                                    <div class="form-group col-sm-4">
                                                        <label for="">Header</label>
                                                        <input type="text" class="form-control" name="header" value="{{$check_in->header}}">
                                                    </div>
                                                    <div class="form-group col-sm-4">
                                                        <label for="">Header 1</label>
                                                        <input type="text" class="form-control" name="header1" value="{{$check_in->header1}}">
                                                    </div>
                                                    <div class="form-group col-sm-4">
                                                        <label for="">Title 1</label>
                                                        <input type="text" class="form-control" name="title1" value="{{$check_in->title1}}">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-sm-6">
                                                        <label for="">Banner Background</label>
                                                        <input type="file" class="form-control" name="image1" value="{{$check_in->image1}}">
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        <label for="">Banner 1</label>
                                                        <input type="text" class="form-control" name="banner1" value="{{$check_in->banner1}}">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Content 1</label>
                                                    <textarea name="content1" class="my-editor" cols="30" rows="10">{!! $check_in->content1 !!}</textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Content 2</label>
                                                    <textarea name="content2" class="my-editor" cols="30" rows="10">{!! $check_in->content2 !!}</textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Content 3</label>
                                                    <textarea name="content3" class="my-editor" cols="30" rows="10">{!! $check_in->content3 !!}</textarea>
                                                </div>
                                                <button class="btn btn-sm btn-outline-success">
                                                    Update
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-french" role="tabpanel"
                                     aria-labelledby="pills-french-tab">
                                    <div class="card">
                                        <div class="card-body">
                                            <form action="{{url('cms/check-online/update')}}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <input type="hidden" name="id" value="{{$check_in_fr->id}}">
                                                    <div class="form-group col-sm-4">
                                                        <label for="">Header</label>
                                                        <input type="text" class="form-control" name="header" value="{{$check_in_fr->header}}">
                                                    </div>
                                                    <div class="form-group col-sm-4">
                                                        <label for="">Header 1</label>
                                                        <input type="text" class="form-control" name="header1" value="{{$check_in_fr->header1}}">
                                                    </div>
                                                    <div class="form-group col-sm-4">
                                                        <label for="">Title 1</label>
                                                        <input type="text" class="form-control" name="title1" value="{{$check_in_fr->title1}}">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-sm-6">
                                                        <label for="">Banner Background</label>
                                                        <input type="file" class="form-control" name="image1" value="{{$check_in_fr->image1}}">
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        <label for="">Banner 1</label>
                                                        <input type="text" class="form-control" name="banner1" value="{{$check_in_fr->banner1}}">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Content 1</label>
                                                    <textarea name="content1" class="my-editor" cols="30" rows="10">{!! $check_in_fr->content1 !!}</textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Content 2</label>
                                                    <textarea name="content2" class="my-editor" cols="30" rows="10">{!! $check_in_fr->content2 !!}</textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Content 3</label>
                                                    <textarea name="content3" class="my-editor" cols="30" rows="10">{!! $check_in_fr->content3 !!}</textarea>
                                                </div>
                                                <button class="btn btn-sm btn-outline-success">
                                                    Update
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-chinese" role="tabpanel"
                                     aria-labelledby="pills-chinese-tab">
                                    <div class="card">
                                        <div class="card-body">
                                            <form action="{{url('cms/check-online/update')}}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <input type="hidden" name="id" value="{{$check_in_cn->id}}">
                                                    <div class="form-group col-sm-4">
                                                        <label for="">Header</label>
                                                        <input type="text" class="form-control" name="header" value="{{$check_in_cn->header}}">
                                                    </div>
                                                    <div class="form-group col-sm-4">
                                                        <label for="">Header 1</label>
                                                        <input type="text" class="form-control" name="header1" value="{{$check_in_cn->header1}}">
                                                    </div>
                                                    <div class="form-group col-sm-4">
                                                        <label for="">Title 1</label>
                                                        <input type="text" class="form-control" name="title1" value="{{$check_in_cn->title1}}">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-sm-6">
                                                        <label for="">Banner Background</label>
                                                        <input type="file" class="form-control" name="image1" value="{{$check_in_cn->image1}}">
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        <label for="">Banner 1</label>
                                                        <input type="text" class="form-control" name="banner1" value="{{$check_in_cn->banner1}}">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Content 1</label>
                                                    <textarea name="content1" class="my-editor" cols="30" rows="10">{!! $check_in_cn->content1 !!}</textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Content 2</label>
                                                    <textarea name="content2" class="my-editor" cols="30" rows="10">{!! $check_in_cn->content2 !!}</textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Content 3</label>
                                                    <textarea name="content3" class="my-editor" cols="30" rows="10">{!! $check_in_cn->content3 !!}</textarea>
                                                </div>
                                                <button class="btn btn-sm btn-outline-success">
                                                    Update
                                                </button>
                                            </form>
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
