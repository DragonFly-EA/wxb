@extends('layouts.admin.main')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="mb-2 row">
                <div class="col-sm-12">
                    <h1 class="m-0 text-dark">
                        Payment Option
                    </h1>
                </div>
                <div class="col-sm-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item text-danger">
                            <a href="{{ url('/home') }}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">
                            Payment Option
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
                                                <form action="{{url('cms/payment-option/update')}}" method="post"
                                                      enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row">
                                                        <input type="hidden" value="{{$paymentOptions->id}}" name="id">
                                                        <div class="form-group col-sm-6">
                                                            <label for="">Title1</label>
                                                            <input type="text" class="form-control" id="title_1"
                                                                   name="title_1" value="{{$paymentOptions->title_1}}">
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label for="">Title2</label>
                                                            <input type="text" class="form-control" id="title_2"
                                                                   name="title_2" value="{{$paymentOptions->title_2}}">
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label for="">Title3</label>
                                                            <input type="text" class="form-control" id="title_3"
                                                                   name="title_3" value="{{$paymentOptions->title_3}}">
                                                        </div>

                                                        <div class="form-group col-sm-6">
                                                            <label for="">Banner</label>
                                                            <input type="file" class="form-control" id="banner"
                                                                   name="banner" value="{{$paymentOptions->banner}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Content 1</label>
                                                        <textarea name="content_1" class="my-editor" id="content_1"
                                                                  cols="30"
                                                                  rows="10">{!! $paymentOptions->content_1 !!}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Content 2</label>
                                                        <textarea name="content_2" class="my-editor" id="content_2"
                                                                  cols="30"
                                                                  rows="10">{!! $paymentOptions->content_2 !!}</textarea>
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
                                                <form action="{{url('cms/payment-option/update')}}" method="post"
                                                      enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row">
                                                        <input type="hidden" value="{{$paymentOptions_fr->id}}"
                                                               name="id">
                                                        <div class="form-group col-sm-6">
                                                            <label for="">Title1</label>
                                                            <input type="text" class="form-control" id="title_1_fr"
                                                                   name="title_1"
                                                                   value="{{$paymentOptions_fr->title_1}}">
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label for="">Title2</label>
                                                            <input type="text" class="form-control" id="title_2_fr"
                                                                   name="title_2"
                                                                   value="{{$paymentOptions_fr->title_2}}">
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label for="">Title3</label>
                                                            <input type="text" class="form-control" id="title_3_fr"
                                                                   name="title_3"
                                                                   value="{{$paymentOptions_fr->title_3}}">
                                                        </div>

                                                        <div class="form-group col-sm-6">
                                                            <label for="">Banner</label>
                                                            <input type="file" class="form-control" id="banner_fr"
                                                                   name="banner" value="{{$paymentOptions_fr->banner}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Content 1</label>
                                                        <textarea name="content_1" class="my-editor" id="content_1_fr"
                                                                  cols="30"
                                                                  rows="10">{!! $paymentOptions_fr->content_1 !!}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Content 2</label>
                                                        <textarea name="content_2" class="my-editor" id="content_2_fr"
                                                                  cols="30"
                                                                  rows="10">{!! $paymentOptions_fr->content_2 !!}</textarea>
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
                                                <form action="{{url('cms/payment-option/update')}}" method="post"
                                                      enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row">
                                                        <input type="hidden" value="{{$paymentOptions_cn->id}}"
                                                               name="id">
                                                        <div class="form-group col-sm-6">
                                                            <label for="">Title1</label>
                                                            <input type="text" class="form-control" id="title_1_cn"
                                                                   name="title_1"
                                                                   value="{{$paymentOptions_cn->title_1}}">
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label for="">Title2</label>
                                                            <input type="text" class="form-control" id="title_2_cn"
                                                                   name="title_2"
                                                                   value="{{$paymentOptions_cn->title_2}}">
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label for="">Title3</label>
                                                            <input type="text" class="form-control" id="title_3_cn"
                                                                   name="title_3"
                                                                   value="{{$paymentOptions_cn->title_3}}">
                                                        </div>

                                                        <div class="form-group col-sm-6">
                                                            <label for="">Banner</label>
                                                            <input type="file" class="form-control" id="banner_cn"
                                                                   name="banner" value="{{$paymentOptions_cn->banner}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Content 1</label>
                                                        <textarea name="content_1" class="my-editor" id="content_1_cn"
                                                                  cols="30"
                                                                  rows="10">{!! $paymentOptions_cn->content_1 !!}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Content 2</label>
                                                        <textarea name="content_2" class="my-editor" id="content_2_cn"
                                                                  cols="30"
                                                                  rows="10">{!! $paymentOptions_cn->content_2 !!}</textarea>
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
