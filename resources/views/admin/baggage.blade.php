@extends('layouts.admin.main')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="mb-2 row">
                <div class="col-sm-12">
                    <h1 class="m-0 text-dark">
                        Baggage
                    </h1>
                </div>
                <div class="col-sm-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item text-danger">
                            <a href="{{ url('/home') }}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Baggage</li>
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
                                                <form action="{{url('cms/baggage/update')}}" method="post"
                                                      enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row">
                                                        <input type="hidden" value="{{$baggage->id}}" name="id">
                                                        <div class="form-group col-sm-6">
                                                            <label for="">Title 1</label>
                                                            <input type="text" class="form-control" id="title_1"
                                                                   name="title_1" value="{{$baggage->title1}}">
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label for="">Title 2</label>
                                                            <input type="text" class="form-control" id="title_2"
                                                                   name="title_2" value="{{$baggage->title2}}">
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label for="">Title 3</label>
                                                            <input type="text" class="form-control" id="title_3"
                                                                   name="title_3" value="{{$baggage->title3}}">
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label for="">Title 4</label>
                                                            <input type="text" class="form-control" id="title_4"
                                                                   name="title_4" value="{{$baggage->title4}}">
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label for="">Title 5</label>
                                                            <input type="text" class="form-control" id="title_5"
                                                                   name="title_5" value="{{$baggage->title5}}">
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label for="">Title 6</label>
                                                            <input type="text" class="form-control" id="title_6"
                                                                   name="title_6" value="{{$baggage->title6}}">
                                                        </div>

                                                        <div class="form-group col-sm-6">
                                                            <label for="">image 1</label>
                                                            <input type="file" class="form-control" id="image_1"
                                                                   name="image_1" value="{{$baggage->image1}}">
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label for="">image 2</label>
                                                            <input type="file" class="form-control" id="image_2"
                                                                   name="image_2" value="{{$baggage->image2}}">
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label for="">image 3</label>
                                                            <input type="file" class="form-control" id="image_3"
                                                                   name="image_3" value="{{$baggage->image3}}">
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label for="">Icon 1</label>
                                                            <input type="text" id="icon_1" name="icon_1"
                                                                   class="form-control" value="{{$baggage->icon1}}">

                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label for="">Icon 2</label>
                                                            <input type="text" id="icon_2" name="icon_2"
                                                                   class="form-control" value="{{$baggage->icon2}}">
                                                        </div>
                                                    </div>


                                                    <div class="form-group">
                                                        <label for="">Content 1</label>
                                                        <textarea name="content_1" class="my-editor" id="content_1"
                                                                  cols="30"
                                                                  rows="10">{!! $baggage->content1 !!}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Content 2</label>
                                                        <textarea name="content_2" class="my-editor" id="content_2"
                                                                  cols="30"
                                                                  rows="10">{!! $baggage->content2 !!}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Content 3</label>
                                                        <textarea name="content_3" class="my-editor" id="content_3"
                                                                  cols="30"
                                                                  rows="10">{!! $baggage->content3 !!}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Content 4 </label>
                                                        <textarea name="content_4" class="my-editor" id="content_4"
                                                                  cols="30"
                                                                  rows="10">{!! $baggage->content4 !!}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Content 5 </label>
                                                        <textarea name="content_5" class="my-editor" id="content_5"
                                                                  cols="30"
                                                                  rows="10">{!! $baggage->content5 !!}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Content 6</label>
                                                        <textarea name="content_6" class="my-editor" id="content_6"
                                                                  cols="30"
                                                                  rows="10">{!! $baggage->content6 !!}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Content 7</label>
                                                        <textarea name="content_7" class="my-editor" id="content_7"
                                                                  cols="30"
                                                                  rows="10">{!! $baggage->content7 !!}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Content 8</label>
                                                        <textarea name="content_8" class="my-editor" id="content_8"
                                                                  cols="30"
                                                                  rows="10">{!! $baggage->content8 !!}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Content 9</label>
                                                        <textarea name="content_9" class="my-editor" id="content_9"
                                                                  cols="30"
                                                                  rows="10">{!! $baggage->content9 !!}</textarea>
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
                                                <form action="{{url('cms/baggage/update')}}" method="post"
                                                      enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row">
                                                        <input type="hidden" value="{{$baggage_fr->id}}" name="id">
                                                        <div class="form-group col-sm-6">
                                                            <label for="">Title 1</label>
                                                            <input type="text" class="form-control" id="title_1_fr" name="title_1"
                                                                   value="{{$baggage_fr->title1}}">
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label for="">Title 2</label>
                                                            <input type="text" class="form-control" id="title_2_fr" name="title_2"
                                                                   value="{{$baggage_fr->title2}}">
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label for="">Title 3</label>
                                                            <input type="text" class="form-control" id="title_3_fr" name="title_3"
                                                                   value="{{$baggage_fr->title3}}">
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label for="">Title 4</label>
                                                            <input type="text" class="form-control" id="title_4_fr" name="title_4"
                                                                   value="{{$baggage_fr->title4}}">
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label for="">Title 5</label>
                                                            <input type="text" class="form-control" id="title_5_fr" name="title_5"
                                                                   value="{{$baggage_fr->title5}}">
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label for="">Title 6</label>
                                                            <input type="text" class="form-control" id="title_6_fr" name="title_6"
                                                                   value="{{$baggage_fr->title6}}">
                                                        </div>

                                                        <div class="form-group col-sm-6">
                                                            <label for="">image 1</label>
                                                            <input type="file" class="form-control" id="image_1_fr" name="image_1"
                                                                   value="{{$baggage_fr->image1}}">
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label for="">image 2</label>
                                                            <input type="file" class="form-control" id="image_2" name="image_2"
                                                                   value="{{$baggage_fr->image2}}">
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label for="">image 3</label>
                                                            <input type="file" class="form-control" id="image_3_fr" name="image_3"
                                                                   value="{{$baggage_fr->image3}}">
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label for="">Icon 1</label>
                                                            <input type="text" id="icon_1_fr" name="icon_1" class="form-control"
                                                                   value="{{$baggage_fr->icon1}}">

                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label for="">Icon 2</label>
                                                            <input type="text" id="icon_2_fr" name="icon_2" class="form-control"
                                                                   value="{{$baggage_fr->icon2}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Content 1</label>
                                                        <textarea name="content_1" class="my-editor" id="content_1_fr" cols="30"
                                                                  rows="10">{!! $baggage_fr->content1 !!}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Content 2</label>
                                                        <textarea name="content_2" class="my-editor" id="content_2_fr" cols="30"
                                                                  rows="10">{!! $baggage_fr->content2 !!}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Content 3</label>
                                                        <textarea name="content_3" class="my-editor" id="content_3_fr" cols="30"
                                                                  rows="10">{!! $baggage_fr->content3 !!}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Content 4 </label>
                                                        <textarea name="content_4" class="my-editor" id="content_4_fr" cols="30"
                                                                  rows="10">{!! $baggage_fr->content4 !!}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Content 5 </label>
                                                        <textarea name="content_5" class="my-editor" id="content_5_fr" cols="30"
                                                                  rows="10">{!! $baggage_fr->content5 !!}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Content 6</label>
                                                        <textarea name="content_6" class="my-editor" id="content_6_fr" cols="30"
                                                                  rows="10">{!! $baggage_fr->content6 !!}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Content 7</label>
                                                        <textarea name="content_7" class="my-editor" id="content_7_fr" cols="30"
                                                                  rows="10">{!! $baggage_fr->content7 !!}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Content 8</label>
                                                        <textarea name="content_8" class="my-editor" id="content_8_fr" cols="30"
                                                                  rows="10">{!! $baggage_fr->content8 !!}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Content 9</label>
                                                        <textarea name="content_9" class="my-editor" id="content_9_fr" cols="30"
                                                                  rows="10">{!! $baggage_fr->content9 !!}</textarea>
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
                                                <form action="{{url('cms/baggage/update')}}" method="post"
                                                      enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row">
                                                        <input type="hidden" value="{{$baggage_cn->id}}" name="id">
                                                        <div class="form-group col-sm-6">
                                                            <label for="">Title 1</label>
                                                            <input type="text" class="form-control" id="title_1_cn" name="title_1"
                                                                   value="{{$baggage_cn->title1}}">
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label for="">Title 2</label>
                                                            <input type="text" class="form-control" id="title_2_cn" name="title_2"
                                                                   value="{{$baggage_cn->title2}}">
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label for="">Title 3</label>
                                                            <input type="text" class="form-control" id="title_3_cn" name="title_3"
                                                                   value="{{$baggage_cn->title3}}">
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label for="">Title 4</label>
                                                            <input type="text" class="form-control" id="title_4_cn" name="title_4"
                                                                   value="{{$baggage_cn->title4}}">
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label for="">Title 5</label>
                                                            <input type="text" class="form-control" id="title_5_cn" name="title_5"
                                                                   value="{{$baggage_cn->title5}}">
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label for="">Title 6</label>
                                                            <input type="text" class="form-control" id="title_6_cn" name="title_6"
                                                                   value="{{$baggage_cn->title6}}">
                                                        </div>

                                                        <div class="form-group col-sm-6">
                                                            <label for="">image 1</label>
                                                            <input type="file" class="form-control" id="image_1_cn" name="image_1"
                                                                   value="{{$baggage_cn->image1}}">
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label for="">image 2</label>
                                                            <input type="file" class="form-control" id="image_2_cn" name="image_2"
                                                                   value="{{$baggage_cn->image2}}">
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label for="">image 3</label>
                                                            <input type="file" class="form-control" id="image_3_cn" name="image_3"
                                                                   value="{{$baggage_cn->image3}}">
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label for="">Icon 1</label>
                                                            <input type="text" id="icon_1_cn" name="icon_1" class="form-control"
                                                                   value="{{$baggage_cn->icon1}}">

                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label for="">Icon 2</label>
                                                            <input type="text" id="icon_2_cn" name="icon_2" class="form-control"
                                                                   value="{{$baggage_cn->icon2}}">
                                                        </div>
                                                    </div>


                                                    <div class="form-group">
                                                        <label for="">Content 1</label>
                                                        <textarea name="content_1" class="my-editor" id="content_1_cn" cols="30"
                                                                  rows="10">{!! $baggage->content1 !!}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Content 2</label>
                                                        <textarea name="content_2" class="my-editor" id="content_2_cn" cols="30"
                                                                  rows="10">{!! $baggage->content2 !!}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Content 3</label>
                                                        <textarea name="content_3" class="my-editor" id="content_3_cn" cols="30"
                                                                  rows="10">{!! $baggage->content3 !!}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Content 4 </label>
                                                        <textarea name="content_4" class="my-editor" id="content_4_cn" cols="30"
                                                                  rows="10">{!! $baggage->content4 !!}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Content 5 </label>
                                                        <textarea name="content_5" class="my-editor" id="content_5_cn" cols="30"
                                                                  rows="10">{!! $baggage->content5 !!}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Content 6</label>
                                                        <textarea name="content_6" class="my-editor" id="content_6_cn" cols="30"
                                                                  rows="10">{!! $baggage->content6 !!}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Content 7</label>
                                                        <textarea name="content_7" class="my-editor" id="content_7_cn" cols="30"
                                                                  rows="10">{!! $baggage->content7 !!}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Content 8</label>
                                                        <textarea name="content_8" class="my-editor" id="content_8_cn" cols="30"
                                                                  rows="10">{!! $baggage->content8 !!}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Content 9</label>
                                                        <textarea name="content_9" class="my-editor" id="content_9_cn" cols="30"
                                                                  rows="10">{!! $baggage->content9 !!}</textarea>
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



