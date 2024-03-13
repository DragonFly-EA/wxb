@extends('layouts.admin.main')
@section('title','About Page')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="mb-2 row">
                <div class="col-sm-12">
                    <h1 class="m-0 text-dark">
                       About
                    </h1>
                </div>
                <div class="col-sm-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item text-danger">
                            <a href="{{ url('/home') }}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">About</li>
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
                                                <form action="{{url('cms/about/update')}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row">
                                                        <input type="hidden" value="{{$about->id}}" name="id">
                                                        <input type="hidden" value="{{$about->language}}" name="language">
                                                        <div class="form-group col-sm-6">
                                                            <label for="">Title 1</label>
                                                            <input type="text" class="form-control" id="title" name="title" value="{{$about->title}}">
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label for="">Title 2</label>
                                                            <input type="text" class="form-control" id="title_1" name="title_2" value="{{$about->title_2}}">
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label for="">Banner 1</label>
                                                            <input type="file" class="form-control" id="banner" name="banner" value="{{$about->banner}}">
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label for="">Banner 2</label>
                                                            <input type="file" class="form-control" id="banner_2" name="banner_2" value="{{$about->banner_2}}">
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label for="">Icon 1</label>
                                                            <input type="file" class="form-control" id="icon_1" name="icon_1" value="{{$about->icon_1}}">
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label for="">Icon 2</label>
                                                            <input type="file" class="form-control" id="icon_2" name="icon_2" value="{{$about->icon_2}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Content 1</label>
                                                        <textarea name="content_1" class="my-editor" id="content_1" cols="30" rows="10">{!! $about->content !!}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Content 2</label>
                                                        <textarea name="content_2" class="my-editor" id="content_2" cols="30" rows="10">{{ $about->content_1 }}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Content 3</label>
                                                        <textarea name="content_3" class="my-editor" id="content_3" cols="30" rows="10">{!! $about->content_2 !!}</textarea>
                                                    </div>
                                                    <button class="btn btn-sm btn-outline-success">
                                                        Update
                                                    </button>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-french" role="tabpanel" aria-labelledby="pills-french-tab">
                                        <div class="card">
                                            <div class="card-body">
                                                <form action="{{url('cms/about/update')}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row">
                                                        <input type="hidden" value="{{$about_fr->id}}" name="id">
                                                        <input type="hidden" value="{{$about_fr->language}}" name="language">
                                                        <div class="form-group col-sm-6">
                                                            <label for="">Title 1</label>
                                                            <input type="text" class="form-control" id="title_fr" name="title" value="{{$about_fr->title}}">
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label for="">Title 2</label>
                                                            <input type="text" class="form-control" id="title_1_fr" name="title_2" value="{{$about_fr->title_2}}">
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label for="">Banner 1</label>
                                                            <input type="file" class="form-control" id="banner_fr" name="banner" value="{{$about_fr->banner}}">
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label for="">Banner 2</label>
                                                            <input type="file" class="form-control" id="banner_2_fr" name="banner_2" value="{{$about_fr->banner_2}}">
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label for="">Icon 1</label>
                                                            <input type="file" class="form-control" id="icon_1_fr" name="icon_1" value="{{$about_fr->icon_1}}">
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label for="">Icon 2</label>
                                                            <input type="file" class="form-control" id="icon_2_fr" name="icon_2" value="{{$about_fr->icon_2}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Content 1</label>
                                                        <textarea name="content_1" class="my-editor" id="content_1_fr" cols="30" rows="10">{!! $about_fr->content !!}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Content 2</label>
                                                        <textarea name="content_2" class="my-editor" id="content_2_fr" cols="30" rows="10">{{ $about_fr->content_1 }}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Content 3</label>
                                                        <textarea name="content_3" class="my-editor" id="content_3_fr" cols="30" rows="10">{!! $about_fr->content_2 !!}</textarea>
                                                    </div>
                                                    <button class="btn btn-sm btn-outline-success">
                                                        Update
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-chinese" role="tabpanel" aria-labelledby="pills-chinese-tab">
                                        <div class="card">
                                            <div class="card-body">
                                                <form action="{{url('cms/about/update')}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row">
                                                        <input type="hidden" value="{{$about_cn->id}}" name="id">
                                                        <input type="hidden" value="{{$about_cn->language}}" name="language">
                                                        <div class="form-group col-sm-6">
                                                            <label for="">Title 1</label>
                                                            <input type="text" class="form-control" id="title_cn" name="title" value="{{$about_cn->title}}">
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label for="">Title 2</label>
                                                            <input type="text" class="form-control" id="title_1_cn" name="title_2" value="{{$about_cn->title_2}}">
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label for="">Banner 1</label>
                                                            <input type="file" class="form-control" id="banner_cn" name="banner" value="{{$about_cn->banner}}">
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label for="">Banner 2</label>
                                                            <input type="file" class="form-control" id="banner_2_cn" name="banner_2" value="{{$about_cn->banner_2}}">
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label for="">Icon 1</label>
                                                            <input type="file" class="form-control" id="icon_1" name="icon_1" value="{{$about_cn->icon_1}}">
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label for="">Icon 2</label>
                                                            <input type="file" class="form-control" id="icon_2_cn" name="icon_2" value="{{$about_cn->icon_2}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Content 1</label>
                                                        <textarea name="content_1" class="my-editor" id="content_1_cn" cols="30" rows="10">{!! $about_cn->content !!}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Content 2</label>
                                                        <textarea name="content_2" class="my-editor" id="content_2_cn" cols="30" rows="10">{{ $about_cn->content_1 }}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Content 3</label>
                                                        <textarea name="content_3" class="my-editor" id="content_3_cn" cols="30" rows="10">{!! $about_cn->content_2 !!}</textarea>
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
