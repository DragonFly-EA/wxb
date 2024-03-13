@extends('layouts.admin.main')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="mb-2 row">
                <div class="col-sm-12">
                    <h1 class="m-0 text-dark">
                        Sustainability
                    </h1>
                </div>
                <div class="col-sm-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item text-danger">
                            <a href="{{ url('/home') }}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Sustainability</li>
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
                                                <form action="{{url('cms/update/sustainability')}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row">
                                                        <input type="hidden" value="{{$sustainability->id}}" name="id">
                                                        <input type="hidden" value="{{$sustainability->language}}" name="language">

                                                        <div class="form-group col-sm-6">
                                                            <label for="">Image 1</label>
                                                            <input type="file" class="form-control" id="image1" name="image1" value="{{$sustainability->image1}}">
                                                        </div>

                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Content 1</label>
                                                        <textarea name="content1" class="my-editor" id="content1" cols="30" rows="10">{!! $sustainability->content1 !!}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Content 2</label>
                                                        <textarea name="content2" class="my-editor" id="content2" cols="30" rows="10">{{ $sustainability->content2 }}</textarea>
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

                                                <form action="{{url('cms/update/sustainability')}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row">
                                                        <input type="hidden" value="{{$sustainability_fr->id}}" name="id">
                                                        <input type="hidden" value="{{$sustainability_fr->language}}" name="language">

                                                        <div class="form-group col-sm-6">
                                                            <label for="">Image 1</label>
                                                            <input type="file" class="form-control" id="image1" name="image1" value="{{$sustainability_fr->image1}}">
                                                        </div>

                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Content 1</label>
                                                        <textarea name="content1" class="my-editor" id="content1" cols="30" rows="10">{!! $sustainability_fr->content1 !!}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Content 2</label>
                                                        <textarea name="content2" class="my-editor" id="content2" cols="30" rows="10">{{ $sustainability_fr->content2 }}</textarea>
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


                                                <form action="{{url('cms/update/sustainability')}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row">
                                                        <input type="hidden" value="{{$sustainability_cn->id}}" name="id">
                                                        <input type="hidden" value="{{$sustainability_cn->language}}" name="language">

                                                        <div class="form-group col-sm-6">
                                                            <label for="">Image 1</label>
                                                            <input type="file" class="form-control" id="image1" name="image1" value="{{$sustainability_cn->image1}}">
                                                        </div>

                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Content 1</label>
                                                        <textarea name="content1" class="my-editor" id="content1" cols="30" rows="10">{!! $sustainability_cn->content1 !!}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Content 2</label>
                                                        <textarea name="content2" class="my-editor" id="content2" cols="30" rows="10">{{ $sustainability_cn->content2 }}</textarea>
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
