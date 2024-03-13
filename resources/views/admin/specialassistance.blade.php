@extends('layouts.admin.main')
@section('title','Special Assistance')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="mb-2 row">
                <div class="col-sm-12">
                    <h1 class="m-0 text-dark">
                        Special Assistance
                    </h1>
                </div>
                <div class="col-sm-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item text-danger">
                            <a href="{{ url('/home') }}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">
                            Special Assistance
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
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
                                                <form action="{{url('cms/special-assistance/update')}}" method="post"
                                                      enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row">
                                                        <input type="hidden" value="{{$specialAssistance->id}}"
                                                               name="id">
                                                        <div class="form-group col-sm-6">
                                                            <label for="">Title1</label>
                                                            <input type="text" class="form-control" id="title_1"
                                                                   name="title_1"
                                                                   value="{{$specialAssistance->title_1}}">
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label for="">Icon</label>
                                                            <input type="file" class="form-control" id="icon"
                                                                   name="icon" value="{{$specialAssistance->icon}}">
                                                        </div>

                                                        <div class="form-group col-sm-6">
                                                            <label for="">Banner</label>
                                                            <input type="file" class="form-control" id="banner"
                                                                   name="banner" value="{{$specialAssistance->banner}}">
                                                        </div>

                                                    </div>

                                                    <div class="form-group">
                                                        <label for="">Description</label>
                                                        <textarea name="description" class="my-editor" id="description"
                                                                  cols="30"
                                                                  rows="10">{!! $specialAssistance->short_description !!}</textarea>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="">Content 1</label>
                                                        <textarea name="content_1" class="my-editor" id="content_1"
                                                                  cols="30"
                                                                  rows="10">{!! $specialAssistance->content_1 !!}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Content 2</label>
                                                        <textarea name="content_2" class="my-editor" id="content_2"
                                                                  cols="30"
                                                                  rows="10">{!! $specialAssistance->content_2 !!}</textarea>
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
                                                <form action="{{url('cms/special-assistance/update')}}" method="post"
                                                      enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row">
                                                        <input type="hidden" value="{{$specialAssistance_fr->id}}"
                                                               name="id">
                                                        <div class="form-group col-sm-6">
                                                            <label for="">Title1</label>
                                                            <input type="text" class="form-control" id="title_1_fr"
                                                                   name="title_1"
                                                                   value="{{$specialAssistance_fr->title_1}}">
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label for="">Icon</label>
                                                            <input type="file" class="form-control" id="icon_fr"
                                                                   name="icon" value="{{$specialAssistance_fr->icon}}">
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label for="">Banner</label>
                                                            <input type="file" class="form-control" id="banner_fr"
                                                                   name="banner" value="{{$specialAssistance_fr->banner}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Description</label>
                                                        <textarea name="description" class="my-editor" id="description_fr"
                                                                  cols="30"
                                                                  rows="10">{!! $specialAssistance_fr->short_description !!}</textarea>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="">Content 1</label>
                                                        <textarea name="content_1" class="my-editor" id="content_1_fr"
                                                                  cols="30"
                                                                  rows="10">{!! $specialAssistance_fr->content_1 !!}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Content 2</label>
                                                        <textarea name="content_2" class="my-editor" id="content_2_fr"
                                                                  cols="30"
                                                                  rows="10">{!! $specialAssistance_fr->content_2 !!}</textarea>
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
                                                <form action="{{url('cms/special-assistance/update')}}" method="post"
                                                      enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row">
                                                        <input type="hidden" value="{{$specialAssistance_cn->id}}"
                                                               name="id">
                                                        <div class="form-group col-sm-6">
                                                            <label for="">Title1</label>
                                                            <input type="text" class="form-control" id="title_1_cn"
                                                                   name="title_1"
                                                                   value="{{$specialAssistance_cn->title_1}}">
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label for="">Icon</label>
                                                            <input type="file" class="form-control" id="icon_cn"
                                                                   name="icon" value="{{$specialAssistance_cn->icon}}">
                                                        </div>

                                                        <div class="form-group col-sm-6">
                                                            <label for="">Banner</label>
                                                            <input type="file" class="form-control" id="banner_cn"
                                                                   name="banner" value="{{$specialAssistance_cn->banner}}">
                                                        </div>

                                                    </div>

                                                    <div class="form-group">
                                                        <label for="">Description</label>
                                                        <textarea name="description" class="my-editor" id="description_cn"
                                                                  cols="30"
                                                                  rows="10">{!! $specialAssistance_cn->short_description !!}</textarea>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="">Content 1</label>
                                                        <textarea name="content_1" class="my-editor" id="content_1_cn"
                                                                  cols="30"
                                                                  rows="10">{!! $specialAssistance_cn->content_1 !!}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Content 2</label>
                                                        <textarea name="content_2" class="my-editor" id="content_2_cn"
                                                                  cols="30"
                                                                  rows="10">{!! $specialAssistance_cn->content_2 !!}</textarea>
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
    </div>
@endsection
