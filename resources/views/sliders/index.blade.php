@extends('layouts.admin.main')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="mb-2 row">
                <div class="col-sm-12">
                    <h1 class="m-0 text-dark">
                        Sliders
                    </h1>
                </div>
                <div class="col-sm-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item text-danger">
                            <a href="{{ url('/home') }}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Sliders</li>
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
                                <button class="btn btn-sm mb-2 btn-outline-info" onclick="addSlider()">
                                    Add Slider
                                </button>
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
                                                <table class="table table-striped table-bordered mt-2">
                                                    <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Title</th>
                                                        <th>Description</th>
                                                        <th>Position</th>
                                                        <th>Link</th>
                                                        <th>Image</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    <?php $count = 1 ?>
                                                    @forelse($sliders as $slider)
                                                        <tr>
                                                            <td>{{$count++}}</td>
                                                            <td>{{$slider->title}}</td>
                                                            <td>{{$slider->description}}</td>
                                                            <td>{{$slider->position}}</td>
                                                            <td>{{$slider->url}}</td>
                                                            <td>
                                                                <img src="{{asset('').'storage/'.$slider->image}}"
                                                                     style="width: 200px;width: 100px" alt="">
                                                            </td>
                                                            <td>
                                                                @if($slider->enable == true)
                                                                    <span class="btn btn-sm btn-outline-success">
                                                        Enabled
                                                    </span>
                                                                @else
                                                                    <span class="btn btn-sm btn-outline-warning">
                                                        Disabled
                                                    </span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <button class="btn btn-outline-info dropdown-toggle"
                                                                            type="button" id="dropdownMenuButton"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-expanded="false">
                                                                        Action
                                                                    </button>
                                                                    <ul class="dropdown-menu"
                                                                        aria-labelledby="dropdownMenuButton">
                                                                        <li class="dropdown-item text-success"
                                                                            onclick="updateSlider({{$slider->id}})">
                                                                            Update
                                                                        </li>
                                                                        <a class="dropdown-item text-danger"
                                                                           onclick="DeleteSlider({{$slider->id}})">Delete</a>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <div id="update_slider{{$slider->id}}" class="modal fade">
                                                            <div class="modal-dialog modal-lg">
                                                                <div class="modal-content">
                                                                    <form enctype="multipart/form-data">
                                                                        <div class="modal-body">
                                                                            <div
                                                                                id="main_content_slider{{$slider->id}}">
                                                                                <div class="row">
                                                                                    <div class="form-group col-3">
                                                                                        <label for="title">Title</label>
                                                                                        <input type="text" name="title"
                                                                                               id="title{{$slider->id}}"
                                                                                               value="{{$slider->title}}"
                                                                                               class="form-control">
                                                                                    </div>
                                                                                    <div class="form-group col-3">
                                                                                        <label for="image">Image</label>
                                                                                        <input type="file" name="image"
                                                                                               id="image{{$slider->id}}"
                                                                                               class="form-control">
                                                                                    </div>
                                                                                    <div class="form-group col-3">
                                                                                        <label for="url">URL</label>
                                                                                        <input class="form-control"
                                                                                               id="url{{$slider->id}}"
                                                                                               value="{{$slider->url}}"
                                                                                               name="url" type="text">
                                                                                    </div>
                                                                                    <div class="form-group col-3">
                                                                                        <label
                                                                                            for="position">Position</label>
                                                                                        <select class="form-control"
                                                                                                id="position{{$slider->id}}">
                                                                                            <option>Home Slider</option>
                                                                                            <option>Home Services &
                                                                                                Product
                                                                                            </option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="form-group col-sm-3">
                                                                                        <label for="language">Language</label>
                                                                                        <select name="language" id="language{{$slider->id}}" class="form-control">
                                                                                            <option value="en">English</option>
                                                                                            <option value="fr">French</option>
                                                                                            <option value="cn">Chinese</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="">Description</label>
                                                                                    <textarea name="description"
                                                                                              class="form-control"
                                                                                              id="description{{$slider->id}}"
                                                                                              cols="30"
                                                                                              rows="10">{!! $slider->description !!}</textarea>
                                                                                </div>
                                                                            </div>
                                                                            <div id="main_loader_slider{{$slider->id}}"
                                                                                 class="text-center"
                                                                                 style="display: none;">
                                                                                <img
                                                                                    src="{{asset('images/loader.gif')}}"
                                                                                    alt="loader">
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="modal-footer justify-content-center">
                                                                            <button
                                                                                class="btn btn-sm btn-outline-warning"
                                                                                type="button"
                                                                                onclick="updateSlider({{$slider->id}})">
                                                                                Close
                                                                            </button>
                                                                            <button
                                                                                class="btn btn-sm btn-outline-success"
                                                                                onclick="SliderUpdate({{$slider->id}})">
                                                                                Update Slider
                                                                            </button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @empty
                                                        <tr>
                                                            <td colspan="8" class="text-center">
                                                                <i class="fa fa-sliders fa-5x"></i>
                                                                <p> Add Sliders</p>
                                                            </td>
                                                        </tr>
                                                    @endforelse
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-french" role="tabpanel"
                                         aria-labelledby="pills-french-tab">
                                        <div class="card">
                                            <div class="card-body">
                                                <table class="table table-striped table-bordered mt-2">
                                                    <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Title</th>
                                                        <th>Description</th>
                                                        <th>Position</th>
                                                        <th>Link</th>
                                                        <th>Image</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    <?php $count = 1 ?>
                                                    @forelse($sliders_fr as $slider)
                                                        <tr>
                                                            <td>{{$count++}}</td>
                                                            <td>{{$slider->title}}</td>
                                                            <td>{{$slider->description}}</td>
                                                            <td>{{$slider->position}}</td>
                                                            <td>{{$slider->url}}</td>
                                                            <td>
                                                                <img src="{{asset('').'storage/'.$slider->image}}"
                                                                     style="width: 200px;width: 100px" alt="">
                                                            </td>
                                                            <td>
                                                                @if($slider->enable == true)
                                                                    <span class="btn btn-sm btn-outline-success">
                                                        Enabled
                                                    </span>
                                                                @else
                                                                    <span class="btn btn-sm btn-outline-warning">
                                                        Disabled
                                                    </span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <button class="btn btn-outline-info dropdown-toggle"
                                                                            type="button" id="dropdownMenuButton"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-expanded="false">
                                                                        Action
                                                                    </button>
                                                                    <ul class="dropdown-menu"
                                                                        aria-labelledby="dropdownMenuButton">
                                                                        <li class="dropdown-item text-success"
                                                                            onclick="updateSlider({{$slider->id}})">
                                                                            Update
                                                                        </li>
                                                                        <a class="dropdown-item text-danger"
                                                                           onclick="DeleteSlider({{$slider->id}})">Delete</a>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <div id="update_slider{{$slider->id}}" class="modal fade">
                                                            <div class="modal-dialog modal-lg">
                                                                <div class="modal-content">
                                                                    <form enctype="multipart/form-data">
                                                                        <div class="modal-body">
                                                                            <div
                                                                                id="main_content_slider{{$slider->id}}">
                                                                                <div class="row">
                                                                                    <div class="form-group col-3">
                                                                                        <label for="title">Title</label>
                                                                                        <input type="text" name="title"
                                                                                               id="title{{$slider->id}}"
                                                                                               value="{{$slider->title}}"
                                                                                               class="form-control">
                                                                                    </div>
                                                                                    <div class="form-group col-3">
                                                                                        <label for="image">Image</label>
                                                                                        <input type="file" name="image"
                                                                                               id="image{{$slider->id}}"
                                                                                               class="form-control">
                                                                                    </div>
                                                                                    <div class="form-group col-3">
                                                                                        <label for="url">URL</label>
                                                                                        <input class="form-control"
                                                                                               id="url{{$slider->id}}"
                                                                                               value="{{$slider->url}}"
                                                                                               name="url" type="text">
                                                                                    </div>
                                                                                    <div class="form-group col-3">
                                                                                        <label
                                                                                            for="position">Position</label>
                                                                                        <select class="form-control"
                                                                                                id="position{{$slider->id}}">
                                                                                            <option>Home Slider</option>
                                                                                            <option>Home Services &
                                                                                                Product
                                                                                            </option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="form-group col-sm-3">
                                                                                        <label for="language">Language</label>
                                                                                        <select name="language" id="language{{$slider->id}}" class="form-control">
                                                                                            <option value="en">English</option>
                                                                                            <option value="fr">French</option>
                                                                                            <option value="cn">Chinese</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="">Description</label>
                                                                                    <textarea name="description"
                                                                                              class="form-control"
                                                                                              id="description{{$slider->id}}"
                                                                                              cols="30"
                                                                                              rows="10">{!! $slider->description !!}</textarea>
                                                                                </div>
                                                                            </div>
                                                                            <div id="main_loader_slider{{$slider->id}}"
                                                                                 class="text-center"
                                                                                 style="display: none;">
                                                                                <img
                                                                                    src="{{asset('images/loader.gif')}}"
                                                                                    alt="loader">
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="modal-footer justify-content-center">
                                                                            <button
                                                                                class="btn btn-sm btn-outline-warning"
                                                                                type="button"
                                                                                onclick="updateSlider({{$slider->id}})">
                                                                                Close
                                                                            </button>
                                                                            <button
                                                                                class="btn btn-sm btn-outline-success"
                                                                                onclick="SliderUpdate({{$slider->id}})">
                                                                                Update Slider
                                                                            </button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @empty
                                                        <tr>
                                                            <td colspan="8" class="text-center">
                                                                <i class="fa fa-sliders fa-5x"></i>
                                                                <p> Add Sliders</p>
                                                            </td>
                                                        </tr>
                                                    @endforelse
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-chinese" role="tabpanel"
                                         aria-labelledby="pills-chinese-tab">
                                        <div class="card">
                                            <div class="card-body">
                                                <table class="table table-striped table-bordered mt-2">
                                                    <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Title</th>
                                                        <th>Description</th>
                                                        <th>Position</th>
                                                        <th>Link</th>
                                                        <th>Image</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    <?php $count = 1 ?>
                                                    @forelse($sliders_cn as $slider)
                                                        <tr>
                                                            <td>{{$count++}}</td>
                                                            <td>{{$slider->title}}</td>
                                                            <td>{{$slider->description}}</td>
                                                            <td>{{$slider->position}}</td>
                                                            <td>{{$slider->url}}</td>
                                                            <td>
                                                                <img src="{{asset('').'storage/'.$slider->image}}"
                                                                     style="width: 200px;width: 100px" alt="">
                                                            </td>
                                                            <td>
                                                                @if($slider->enable == true)
                                                                    <span class="btn btn-sm btn-outline-success">
                                                        Enabled
                                                    </span>
                                                                @else
                                                                    <span class="btn btn-sm btn-outline-warning">
                                                        Disabled
                                                    </span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <button class="btn btn-outline-info dropdown-toggle"
                                                                            type="button" id="dropdownMenuButton"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-expanded="false">
                                                                        Action
                                                                    </button>
                                                                    <ul class="dropdown-menu"
                                                                        aria-labelledby="dropdownMenuButton">
                                                                        <li class="dropdown-item text-success"
                                                                            onclick="updateSlider({{$slider->id}})">
                                                                            Update
                                                                        </li>
                                                                        <a class="dropdown-item text-danger"
                                                                           onclick="DeleteSlider({{$slider->id}})">Delete</a>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <div id="update_slider{{$slider->id}}" class="modal fade">
                                                            <div class="modal-dialog modal-lg">
                                                                <div class="modal-content">
                                                                    <form enctype="multipart/form-data">
                                                                        <div class="modal-body">
                                                                            <div
                                                                                id="main_content_slider{{$slider->id}}">
                                                                                <div class="row">
                                                                                    <div class="form-group col-3">
                                                                                        <label for="title">Title</label>
                                                                                        <input type="text" name="title"
                                                                                               id="title{{$slider->id}}"
                                                                                               value="{{$slider->title}}"
                                                                                               class="form-control">
                                                                                    </div>
                                                                                    <div class="form-group col-3">
                                                                                        <label for="image">Image</label>
                                                                                        <input type="file" name="image"
                                                                                               id="image{{$slider->id}}"
                                                                                               class="form-control">
                                                                                    </div>
                                                                                    <div class="form-group col-3">
                                                                                        <label for="url">URL</label>
                                                                                        <input class="form-control"
                                                                                               id="url{{$slider->id}}"
                                                                                               value="{{$slider->url}}"
                                                                                               name="url" type="text">
                                                                                    </div>
                                                                                    <div class="form-group col-3">
                                                                                        <label
                                                                                            for="position">Position</label>
                                                                                        <select class="form-control"
                                                                                                id="position{{$slider->id}}">
                                                                                            <option>Home Slider</option>
                                                                                            <option>Home Services &
                                                                                                Product
                                                                                            </option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="form-group col-sm-3">
                                                                                        <label for="language">Language</label>
                                                                                        <select name="language" id="language{{$slider->id}}" class="form-control">
                                                                                            <option value="en">English</option>
                                                                                            <option value="fr">French</option>
                                                                                            <option value="cn">Chinese</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="">Description</label>
                                                                                    <textarea name="description"
                                                                                              class="form-control"
                                                                                              id="description{{$slider->id}}"
                                                                                              cols="30"
                                                                                              rows="10">{!! $slider->description !!}</textarea>
                                                                                </div>
                                                                            </div>
                                                                            <div id="main_loader_slider{{$slider->id}}"
                                                                                 class="text-center"
                                                                                 style="display: none;">
                                                                                <img
                                                                                    src="{{asset('images/loader.gif')}}"
                                                                                    alt="loader">
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="modal-footer justify-content-center">
                                                                            <button
                                                                                class="btn btn-sm btn-outline-warning"
                                                                                type="button"
                                                                                onclick="updateSlider({{$slider->id}})">
                                                                                Close
                                                                            </button>
                                                                            <button
                                                                                class="btn btn-sm btn-outline-success"
                                                                                onclick="SliderUpdate({{$slider->id}})">
                                                                                Update Slider
                                                                            </button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @empty
                                                        <tr>
                                                            <td colspan="8" class="text-center">
                                                                <i class="fa fa-sliders fa-5x"></i>
                                                                <p> Add Sliders</p>
                                                            </td>
                                                        </tr>
                                                    @endforelse
                                                </table>
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
    <div id="add_slider" class="modal fade">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form enctype="multipart/form-data">
                    <div class="modal-body">
                        <div id="main_content_slider">
                            <div class="row">
                                <div class="form-group col-3">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" id="title" class="form-control">
                                </div>
                                <div class="form-group col-3">
                                    <label for="image">Image</label>
                                    <input type="file" name="image" id="image" class="form-control">
                                </div>
                                <div class="form-group col-3">
                                    <label for="url">URL</label>
                                    <input class="form-control" id="url" name="url" type="text">
                                </div>
                                <div class="form-group col-3">
                                    <label for="position">Position</label>
                                    <select class="form-control" id="position">
                                        <option>Home Slider</option>
                                        <option>Home Services & Product</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-3">
                                    <label for="language">Language</label>
                                    <select name="language" id="language" class="form-control">
                                        <option value="en">English</option>
                                        <option value="fr">French</option>
                                        <option value="cn">Chinese</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea name="description" class="form-control" id="description" cols="30"
                                          rows="10"></textarea>
                            </div>
                        </div>
                        <div id="main_loader_slider" class="text-center" style="display: none;">
                            <img src="{{asset('images/loader.gif')}}" alt="loader">
                        </div>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button class="btn btn-sm btn-outline-warning" type="button" onclick="addSlider()">
                            Close
                        </button>
                        <button class="btn btn-sm btn-outline-success" onclick="submitSlider()">
                            Add Slider
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('sliders.script')
@endsection
