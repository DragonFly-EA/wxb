@extends('layouts.admin.main')
@section('title','Seat')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="mb-2 row">
                <div class="col-sm-12">
                    <h1 class="m-0 text-dark">
                        Seat
                    </h1>
                </div>
                <div class="col-sm-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item text-danger">
                            <a href="{{ url('/home') }}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Seat</li>
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
                                            <form action="{{url('cms/seat/update')}}" method="post"
                                                  enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <input type="hidden" name="id" value="{{$seat->id}}">
                                                    <div class="form-group col-sm-6">
                                                        <label for="">Header</label>
                                                        <input type="text" name="header1" class="form-control"
                                                               value="{{$seat->header1}}">
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        <label for="">Header 2</label>
                                                        <input type="text" name="header2" class="form-control"
                                                               value="{{$seat->header2}}">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-sm-4">
                                                        <label for="">Icon 1</label>
                                                        <input type="file" name="icon1" class="form-control">
                                                    </div>
                                                    <div class="form-group col-sm-4">
                                                        <label for="">Image 1</label>
                                                        <input type="file" name="image1" class="form-control">
                                                    </div>
                                                    <div class="form-group col-sm-4">
                                                        <label for="">Image 2</label>
                                                        <input type="file" name="image2" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Content 1</label>
                                                    <textarea class="my-editor"
                                                              name="content1">{!! $seat->content1 !!}</textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Content 2</label>
                                                    <textarea class="my-editor"
                                                              name="content2">{!! $seat->content2 !!}</textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Content 3</label>
                                                    <textarea class="my-editor"
                                                              name="content3">{!! $seat->content3 !!}</textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Content 4</label>
                                                    <textarea class="my-editor"
                                                              name="content4">{!! $seat->content4 !!}</textarea>
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
                                            <form action="{{url('cms/seat/update')}}" method="post"
                                                  enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <input type="hidden" name="id" value="{{$seat_fr->id}}">
                                                    <div class="form-group col-sm-6">
                                                        <label for="">Header</label>
                                                        <input type="text" name="header1" class="form-control"
                                                               value="{{$seat_fr->header1}}">
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        <label for="">Header 2</label>
                                                        <input type="text" name="header2" class="form-control"
                                                               value="{{$seat_fr->header2}}">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-sm-4">
                                                        <label for="">Icon 1</label>
                                                        <input type="file" name="icon1" class="form-control">
                                                    </div>
                                                    <div class="form-group col-sm-4">
                                                        <label for="">Image 1</label>
                                                        <input type="file" name="image1" class="form-control">
                                                    </div>
                                                    <div class="form-group col-sm-4">
                                                        <label for="">Image 2</label>
                                                        <input type="file" name="image2" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Content 1</label>
                                                    <textarea class="my-editor"
                                                              name="content1">{!! $seat_fr->content1 !!}</textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Content 2</label>
                                                    <textarea class="my-editor"
                                                              name="content2">{!! $seat_fr->content2 !!}</textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Content 3</label>
                                                    <textarea class="my-editor"
                                                              name="content3">{!! $seat_fr->content3 !!}</textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Content 4</label>
                                                    <textarea class="my-editor"
                                                              name="content4">{!! $seat_fr->content4 !!}</textarea>
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
                                            <form action="{{url('cms/seat/update')}}" method="post"
                                                  enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <input type="hidden" name="id" value="{{$seat_cn->id}}">
                                                    <div class="form-group col-sm-6">
                                                        <label for="">Header</label>
                                                        <input type="text" name="header1" class="form-control"
                                                               value="{{$seat_cn->header1}}">
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        <label for="">Header 2</label>
                                                        <input type="text" name="header2" class="form-control"
                                                               value="{{$seat_cn->header2}}">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-sm-4">
                                                        <label for="">Icon 1</label>
                                                        <input type="file" name="icon1" class="form-control">
                                                    </div>
                                                    <div class="form-group col-sm-4">
                                                        <label for="">Image 1</label>
                                                        <input type="file" name="image1" class="form-control">
                                                    </div>
                                                    <div class="form-group col-sm-4">
                                                        <label for="">Image 2</label>
                                                        <input type="file" name="image2" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Content 1</label>
                                                    <textarea class="my-editor"
                                                              name="content1">{!! $seat_cn->content1 !!}</textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Content 2</label>
                                                    <textarea class="my-editor"
                                                              name="content2">{!! $seat_cn->content2 !!}</textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Content 3</label>
                                                    <textarea class="my-editor"
                                                              name="content3">{!! $seat_cn->content3 !!}</textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Content 4</label>
                                                    <textarea class="my-editor"
                                                              name="content4">{!! $seat_cn->content4 !!}</textarea>
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
