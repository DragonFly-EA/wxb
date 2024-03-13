{{--@extends('layouts.admin.main')--}}
{{--@section('content')--}}
{{--    <div class="content-wrapper">--}}
{{--        <div class="content-header">--}}
{{--            <div class="mb-2 row">--}}
{{--                <div class="col-sm-12">--}}
{{--                    <h1 class="m-0 text-dark">--}}
{{--                        About--}}
{{--                    </h1>--}}
{{--                </div>--}}
{{--                <div class="col-sm-12">--}}
{{--                    <ol class="breadcrumb">--}}
{{--                        <li class="breadcrumb-item text-danger">--}}
{{--                            <a href="{{ url('/home') }}">Dashboard</a>--}}
{{--                        </li>--}}
{{--                        <li class="breadcrumb-item active">About</li>--}}
{{--                    </ol>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="content">--}}
{{--            <div class="container-fluid">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-sm-12">--}}
{{--                        <div class="card">--}}
{{--                            <div class="card-body">--}}
{{--                                <form action="{{url('cms/about/update')}}" method="post" enctype="multipart/form-data">--}}
{{--                                    @csrf--}}
{{--                                    <div class="row">--}}
{{--                                        <input type="hidden" value="{{$about->id}}" name="id">--}}
{{--                                        <div class="form-group col-sm-6">--}}
{{--                                            <label for="">Title 1</label>--}}
{{--                                            <input type="text" class="form-control" id="title" name="title" value="{{$about->title}}">--}}
{{--                                        </div>--}}
{{--                                        <div class="form-group col-sm-6">--}}
{{--                                            <label for="">Title 2</label>--}}
{{--                                            <input type="text" class="form-control" id="title_1" name="title_2" value="{{$about->title_2}}">--}}
{{--                                        </div>--}}
{{--                                        <div class="form-group col-sm-6">--}}
{{--                                            <label for="">Banner 1</label>--}}
{{--                                            <input type="file" class="form-control" id="banner" name="banner" value="{{$about->banner}}">--}}
{{--                                        </div>--}}
{{--                                        <div class="form-group col-sm-6">--}}
{{--                                            <label for="">Banner 2</label>--}}
{{--                                            <input type="file" class="form-control" id="banner_2" name="banner_2" value="{{$about->banner_2}}">--}}
{{--                                        </div>--}}
{{--                                        <div class="form-group col-sm-6">--}}
{{--                                            <label for="">Icon 1</label>--}}
{{--                                            <input type="file" class="form-control" id="icon_1" name="icon_1" value="{{$about->icon_1}}">--}}
{{--                                        </div>--}}
{{--                                        <div class="form-group col-sm-6">--}}
{{--                                            <label for="">Icon 2</label>--}}
{{--                                            <input type="file" class="form-control" id="icon_2" name="icon_2" value="{{$about->icon_2}}">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label for="">Content 1</label>--}}
{{--                                        <textarea name="content_1" class="my-editor" id="content_1" cols="30" rows="10">{!! $about->content !!}</textarea>--}}
{{--                                    </div>--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label for="">Content 2</label>--}}
{{--                                        <textarea name="content_2" class="my-editor" id="content_2" cols="30" rows="10">{{ $about->content_1 }}</textarea>--}}
{{--                                    </div>--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label for="">Content 3</label>--}}
{{--                                        <textarea name="content_3" class="my-editor" id="content_3" cols="30" rows="10">{!! $about->content_2 !!}</textarea>--}}
{{--                                    </div>--}}
{{--                                    <button class="btn btn-sm btn-outline-success">--}}
{{--                                        Update--}}
{{--                                    </button>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endsection--}}
