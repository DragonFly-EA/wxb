@extends('layouts.admin.main')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="mb-2 row">
                <div class="col-sm-12">
                    <h1 class="m-0 text-dark">
                        Accessibility
                    </h1>
                </div>
                <div class="col-sm-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item text-danger">
                            <a href="{{ url('/home') }}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Accessibility</li>
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
                                                <form action="{{url('cms/accessibility/update')}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row">
                                                        <input type="hidden" value="{{$accessibility->id}}" name="id">
                                                        <div class="form-group col-sm-6">
                                                            <label for="title_1">Title 1</label>
                                                            <input type="text" class="form-control" id="title_1" name="title_1" value="{{$accessibility->title}}">
                                                        </div>

                                                        <div class="form-group col-sm-6">
                                                            <label for="banner_1">Banner 1</label>
                                                            <input type="file" class="form-control" id="banner_1" name="banner_1" value="{{$accessibility->banner}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="content_1">Content 1</label>
                                                        <textarea name="content_1" class="my-editor" id="content_1" cols="30" rows="10">{!! $accessibility->content !!}</textarea>
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
                                                <form action="{{url('cms/accessibility/update')}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row">
                                                        <input type="hidden" value="{{$accessibility_fr->id}}" name="id">
                                                        <div class="form-group col-sm-6">
                                                            <label for="title_1">Title 1</label>
                                                            <input type="text" class="form-control" id="title_1" name="title_1" value="{{$accessibility_fr->title}}">
                                                        </div>

                                                        <div class="form-group col-sm-6">
                                                            <label for="banner_1">Banner 1</label>
                                                            <input type="file" class="form-control" id="banner_1" name="banner_1" value="{{$accessibility_fr->banner}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="content_1">Content 1</label>
                                                        <textarea name="content_1" class="my-editor" id="content_1" cols="30" rows="10">{!! $accessibility_fr->content !!}</textarea>
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
                                                <form action="{{url('cms/accessibility/update')}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row">
                                                        <input type="hidden" value="{{$accessibility_cn->id}}" name="id">
                                                        <div class="form-group col-sm-6">
                                                            <label for="title_1">Title 1</label>
                                                            <input type="text" class="form-control" id="title_1" name="title_1" value="{{$accessibility_cn->title}}">
                                                        </div>

                                                        <div class="form-group col-sm-6">
                                                            <label for="banner_1">Banner 1</label>
                                                            <input type="file" class="form-control" id="banner_1" name="banner_1" value="{{$accessibility_cn->banner}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="content_1">Content 1</label>
                                                        <textarea name="content_1" class="my-editor" id="content_1" cols="30" rows="10">{!! $accessibility_cn->content !!}</textarea>
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









