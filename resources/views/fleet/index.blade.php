@extends('layouts.admin.main')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="mb-2 row">
                <div class="col-sm-12">
                    <h1 class="m-0 text-dark">
                        Fleets
                    </h1>
                </div>
                <div class="col-sm-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item text-danger">
                            <a href="{{ url('/home') }}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Fleets</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div id="error-list"></div>
                            <div class="card-header">
                                <button class="btn btn-sm btn-outline-info mb-2" onclick="addFleet()">
                                    Add Fleet
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
                                @if (session('alert-success'))
                                    <div class="alert alert-success mt-2" role="alert">
                                        {{ session('alert-success') }}
                                    </div>
                                @endif
                                @if ($errors->any())
                                    <div class="row">
                                        @foreach ($errors->all() as $error)
                                            <div class="col-4">
                                                <div
                                                    class="alert mt-2 alert-dismissible alert-highlighted fade show alert-danger"
                                                    role="alert">
                                                    {{ $error }}
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-english" role="tabpanel"
                                         aria-labelledby="pills-english-tab">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row mt-2">
                                                    <?php $count = 1; ?>
                                                    @forelse($fleets as $fleet)
                                                        <div class="col-md-4 mb-4">
                                                            <div class="card">
                                                                @if(strpos($fleet->banner, "fleet/") !== false)
                                                                    <img src="{{asset('').'storage/'.$fleet->banner}}"
                                                                         class="card-img-top" alt="{{$fleet->banner}}">
                                                                @else
                                                                    <img src="{{ asset('').$fleet->banner }}"
                                                                         class="card-img-top" alt="{{ $fleet->title }}">
                                                                @endif
                                                                <div class="card-body">
                                                                    <h5 class="card-title">{{ $fleet->title }}</h5>
                                                                    <p class="card-text">{!! $fleet->description !!}</p>
                                                                </div>
                                                                <ul class="list-group list-group-flush">
                                                                    <li class="list-group-item"><strong>Title
                                                                            1:</strong> {{ $fleet->title_1 }}</li>
                                                                    <li class="list-group-item"><strong>Input
                                                                            1:</strong> {{ $fleet->input_1 }}</li>
                                                                    <li class="list-group-item"><strong>Title
                                                                            2:</strong> {{ $fleet->title_2 }}</li>
                                                                    <li class="list-group-item"><strong>Input
                                                                            2:</strong> {{ $fleet->input_2 }}</li>
                                                                    <li class="list-group-item">
                                                                        <strong>Status:</strong> {{ $fleet->status }}
                                                                    </li>
                                                                </ul>
                                                                <div class="card-body">
                                                                    <div class="dropdown">
                                                                        <button
                                                                            class="btn btn-outline-info dropdown-toggle"
                                                                            type="button" id="dropdownMenuButton"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-expanded="false">
                                                                            Action
                                                                        </button>
                                                                        <ul class="dropdown-menu"
                                                                            aria-labelledby="dropdownMenuButton">
                                                                            <li class="dropdown-item text-success"
                                                                                onclick="UpdateFleet({{$fleet->id}})">
                                                                                Update
                                                                            </li>
                                                                            <a class="dropdown-item text-danger"
                                                                               onclick="DeleteFleet({{$fleet->id}})">Delete</a>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="update_fleet{{$fleet->id}}" class="modal fade">
                                                            <div class="modal-dialog modal-lg">
                                                                <div class="modal-content">
                                                                    <form enctype="multipart/form-data" method="post" action="{{url('cms/fleet/update/'.$fleet->id)}}">
                                                                        @csrf
                                                                        <div class="modal-body">
                                                                            <div id="main_content_fleet{{$fleet->id}}">
                                                                                <div class="row">
                                                                                    <div class="form-group col-3">
                                                                                        <label for="title">Title</label>
                                                                                        <input type="text" name="title"
                                                                                               id="title{{$fleet->id}}"
                                                                                               value="{{$fleet->title}}"
                                                                                               class="form-control">
                                                                                    </div>
                                                                                    <div class="form-group col-3">
                                                                                        <label for="url">Title 1</label>
                                                                                        <input type="text"
                                                                                               name="title_1"
                                                                                               id="title_1{{$fleet->id}}"
                                                                                               value="{{$fleet->title_1}}"
                                                                                               class="form-control">
                                                                                    </div>
                                                                                    <div class="form-group col-3">
                                                                                        <label for="url">Input 1</label>
                                                                                        <input type="number"
                                                                                               name="input_1"
                                                                                               id="input_1{{$fleet->id}}"
                                                                                               value="{{$fleet->input_1}}"
                                                                                               class="form-control">
                                                                                    </div>
                                                                                    <div class="form-group col-3">
                                                                                        <label for="url">Title 2</label>
                                                                                        <input type="text"
                                                                                               name="title_2"
                                                                                               id="title_2{{$fleet->id}}"
                                                                                               value="{{$fleet->title_2}}"
                                                                                               class="form-control">
                                                                                    </div>
                                                                                    <div class="form-group col-3">
                                                                                        <label for="url">Input 2</label>
                                                                                        <input type="number"
                                                                                               name="input_2"
                                                                                               id="input_2{{$fleet->id}}"
                                                                                               value="{{$fleet->input_2}}"
                                                                                               class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="">Content</label>
                                                                                    <textarea name="contents"
                                                                                              class="my-editor"
                                                                                              id="content{{$fleet->id}}"
                                                                                              cols="30"
                                                                                              rows="10">{!! $fleet->content !!}</textarea>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="">Description</label>
                                                                                    <textarea name="description"
                                                                                              class="my-editor"
                                                                                              id="description{{$fleet->id}}"
                                                                                              cols="30"
                                                                                              rows="10">{!! $fleet->description !!}</textarea>
                                                                                </div>
                                                                            </div>
                                                                            <div id="main_loader_fleet{{$fleet->id}}"
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
                                                                                onclick="UpdateFleet({{$fleet->id}})">
                                                                                Close
                                                                            </button>
                                                                            <button
                                                                                class="btn btn-sm btn-outline-success"
                                                                                onclick="FleetUpdate({{$fleet->id}})">
                                                                                Update Fleet
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
                                                                <p> Add Fleets</p>
                                                            </td>
                                                        </tr>
                                                        @endforelse
                                                        </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-french" role="tabpanel"
                                         aria-labelledby="pills-french-tab">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row mt-2">
                                                    <?php $count = 1; ?>
                                                    @forelse($fleets_fr as $fleet)
                                                        <div class="col-md-4 mb-4">
                                                            <div class="card">
                                                                @if(strpos($fleet->banner, "fleet/") !== false)
                                                                    <img src="{{asset('').'storage/'.$fleet->banner}}"
                                                                         class="card-img-top" alt="{{$fleet->banner}}">
                                                                @else
                                                                    <img src="{{ asset('').$fleet->banner }}"
                                                                         class="card-img-top" alt="{{ $fleet->title }}">
                                                                @endif
                                                                <div class="card-body">
                                                                    <h5 class="card-title">{{ $fleet->title }}</h5>
                                                                    <p class="card-text">{!! $fleet->description !!}</p>
                                                                </div>
                                                                <ul class="list-group list-group-flush">
                                                                    <li class="list-group-item"><strong>Title
                                                                            1:</strong> {{ $fleet->title_1 }}</li>
                                                                    <li class="list-group-item"><strong>Input
                                                                            1:</strong> {{ $fleet->input_1 }}</li>
                                                                    <li class="list-group-item"><strong>Title
                                                                            2:</strong> {{ $fleet->title_2 }}</li>
                                                                    <li class="list-group-item"><strong>Input
                                                                            2:</strong> {{ $fleet->input_2 }}</li>
                                                                    <li class="list-group-item">
                                                                        <strong>Status:</strong> {{ $fleet->status }}
                                                                    </li>
                                                                </ul>
                                                                <div class="card-body">
                                                                    <div class="dropdown">
                                                                        <button
                                                                            class="btn btn-outline-info dropdown-toggle"
                                                                            type="button" id="dropdownMenuButton"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-expanded="false">
                                                                            Action
                                                                        </button>
                                                                        <ul class="dropdown-menu"
                                                                            aria-labelledby="dropdownMenuButton">
                                                                            <li class="dropdown-item text-success"
                                                                                onclick="UpdateFleet({{$fleet->id}})">
                                                                                Update
                                                                            </li>
                                                                            <a class="dropdown-item text-danger"
                                                                               onclick="DeleteFleet({{$fleet->id}})">Delete</a>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="update_fleet{{$fleet->id}}" class="modal fade">
                                                            <div class="modal-dialog modal-lg">
                                                                <div class="modal-content">
                                                                    <form enctype="multipart/form-data" method="post" action="{{url('cms/fleet/update/'.$fleet->id)}}">
                                                                        @csrf
                                                                        <div class="modal-body">
                                                                            <div id="main_content_fleet{{$fleet->id}}">
                                                                                <div class="row">
                                                                                    <div class="form-group col-3">
                                                                                        <label for="title
                                                                        ">Title</label>
                                                                                        <input type="text" name="title"
                                                                                               id="title{{$fleet->id}}"
                                                                                               value="{{$fleet->title}}"
                                                                                               class="form-control">
                                                                                    </div>
                                                                                    <div class="form-group col-3">
                                                                                        <label for="url">Title 1</label>
                                                                                        <input type="text"
                                                                                               name="title_1"
                                                                                               id="title_1{{$fleet->id}}"
                                                                                               value="{{$fleet->title_1}}"
                                                                                               class="form-control">
                                                                                    </div>
                                                                                    <div class="form-group col-3">
                                                                                        <label for="url">Input 1</label>
                                                                                        <input type="number"
                                                                                               name="input_1"
                                                                                               id="input_1{{$fleet->id}}"
                                                                                               value="{{$fleet->input_1}}"
                                                                                               class="form-control">
                                                                                    </div>
                                                                                    <div class="form-group col-3">
                                                                                        <label for="url">Title 2</label>
                                                                                        <input type="text"
                                                                                               name="title_2"
                                                                                               id="title_2{{$fleet->id}}"
                                                                                               value="{{$fleet->title_2}}"
                                                                                               class="form-control">
                                                                                    </div>
                                                                                    <div class="form-group col-3">
                                                                                        <label for="url">Input 2</label>
                                                                                        <input type="number"
                                                                                               name="input_2"
                                                                                               id="input_2{{$fleet->id}}"
                                                                                               value="{{$fleet->input_2}}"
                                                                                               class="form-control">
                                                                                    </div>

                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="">Content</label>
                                                                                    <textarea name="contents"
                                                                                              class="my-editor"
                                                                                              id="content{{$fleet->id}}"
                                                                                              cols="30"
                                                                                              rows="10">{!! $fleet->content !!}</textarea>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="">Description</label>
                                                                                    <textarea name="description"
                                                                                              class="my-editor"
                                                                                              id="description{{$fleet->id}}"
                                                                                              cols="30"
                                                                                              rows="10">{!! $fleet->description !!}</textarea>
                                                                                </div>
                                                                            </div>
                                                                            <div id="main_loader_fleet{{$fleet->id}}"
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
                                                                                onclick="UpdateFleet({{$fleet->id}})">
                                                                                Close
                                                                            </button>
                                                                            <button
                                                                                class="btn btn-sm btn-outline-success"
                                                                                onclick="FleetUpdate({{$fleet->id}})">
                                                                                Update Fleet
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
                                                                <p> Add Fleets</p>
                                                            </td>
                                                        </tr>
                                                        @endforelse
                                                        </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-chinese" role="tabpanel"
                                         aria-labelledby="pills-chinese-tab">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row mt-2">
                                                    <?php $count = 1; ?>
                                                    @forelse($fleets_cn as $fleet)
                                                        <div class="col-md-4 mb-4">
                                                            <div class="card">
                                                                @if(strpos($fleet->banner, "fleet/") !== false)
                                                                    <img src="{{asset('').'storage/'.$fleet->banner}}"
                                                                         class="card-img-top" alt="{{$fleet->banner}}">
                                                                @else
                                                                    <img src="{{ asset('').$fleet->banner }}"
                                                                         class="card-img-top" alt="{{ $fleet->title }}">
                                                                @endif
                                                                <div class="card-body">
                                                                    <h5 class="card-title">{{ $fleet->title }}</h5>
                                                                    <p class="card-text">{!! $fleet->description !!}</p>
                                                                </div>
                                                                <ul class="list-group list-group-flush">
                                                                    <li class="list-group-item"><strong>Title
                                                                            1:</strong> {{ $fleet->title_1 }}</li>
                                                                    <li class="list-group-item"><strong>Input
                                                                            1:</strong> {{ $fleet->input_1 }}</li>
                                                                    <li class="list-group-item"><strong>Title
                                                                            2:</strong> {{ $fleet->title_2 }}</li>
                                                                    <li class="list-group-item"><strong>Input
                                                                            2:</strong> {{ $fleet->input_2 }}</li>
                                                                    <li class="list-group-item">
                                                                        <strong>Status:</strong> {{ $fleet->status }}
                                                                    </li>
                                                                </ul>
                                                                <div class="card-body">
                                                                    <div class="dropdown">
                                                                        <button
                                                                            class="btn btn-outline-info dropdown-toggle"
                                                                            type="button" id="dropdownMenuButton"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-expanded="false">
                                                                            Action
                                                                        </button>
                                                                        <ul class="dropdown-menu"
                                                                            aria-labelledby="dropdownMenuButton">
                                                                            <li class="dropdown-item text-success"
                                                                                onclick="UpdateFleet({{$fleet->id}})">
                                                                                Update
                                                                            </li>
                                                                            <a class="dropdown-item text-danger"
                                                                               onclick="DeleteFleet({{$fleet->id}})">Delete</a>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="update_fleet{{$fleet->id}}" class="modal fade">
                                                            <div class="modal-dialog modal-lg">
                                                                <div class="modal-content">
                                                                    <form enctype="multipart/form-data" method="post" action="{{url('cms/fleet/update/'.$fleet->id)}}">
                                                                        @csrf
                                                                        <div class="modal-body">
                                                                            <div id="main_content_fleet{{$fleet->id}}">
                                                                                <div class="row">
                                                                                    <div class="form-group col-3">
                                                                                        <label for="title">Title</label>
                                                                                        <input type="text" name="title"
                                                                                               id="title{{$fleet->id}}"
                                                                                               value="{{$fleet->title}}"
                                                                                               class="form-control">
                                                                                    </div>
                                                                                    <div class="form-group col-3">
                                                                                        <label for="url">Title 1</label>
                                                                                        <input type="text"
                                                                                               name="title_1"
                                                                                               id="title_1{{$fleet->id}}"
                                                                                               value="{{$fleet->title_1}}"
                                                                                               class="form-control">
                                                                                    </div>
                                                                                    <div class="form-group col-3">
                                                                                        <label for="url">Input 1</label>
                                                                                        <input type="number"
                                                                                               name="input_1"
                                                                                               id="input_1{{$fleet->id}}"
                                                                                               value="{{$fleet->input_1}}"
                                                                                               class="form-control">
                                                                                    </div>
                                                                                    <div class="form-group col-3">
                                                                                        <label for="url">Title 2</label>
                                                                                        <input type="text"
                                                                                               name="title_2"
                                                                                               id="title_2{{$fleet->id}}"
                                                                                               value="{{$fleet->title_2}}"
                                                                                               class="form-control">
                                                                                    </div>
                                                                                    <div class="form-group col-3">
                                                                                        <label for="url">Input 2</label>
                                                                                        <input type="number"
                                                                                               name="input_2"
                                                                                               id="input_2{{$fleet->id}}"
                                                                                               value="{{$fleet->input_2}}"
                                                                                               class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="">Content</label>
                                                                                    <textarea name="contents"
                                                                                              class="my-editor"
                                                                                              id="content{{$fleet->id}}"
                                                                                              cols="30"
                                                                                              rows="10">{!! $fleet->content !!}</textarea>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="">Description</label>
                                                                                    <textarea name="description"
                                                                                              class="my-editor"
                                                                                              id="description{{$fleet->id}}"
                                                                                              cols="30"
                                                                                              rows="10">{!! $fleet->description !!}</textarea>
                                                                                </div>
                                                                            </div>
                                                                            <div id="main_loader_fleet{{$fleet->id}}"
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
                                                                                onclick="UpdateFleet({{$fleet->id}})">
                                                                                Close
                                                                            </button>
                                                                            <button
                                                                                class="btn btn-sm btn-outline-success">
                                                                                Update Fleet
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
                                                                <p> Add Fleets</p>
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


        <div id="add_fleet" class="modal fade">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form enctype="multipart/form-data" method="post" action="{{url('cms/fleet/store')}}">
                        @csrf
                        <div class="modal-body">
                            <div id="main_content_fleet">
                                <div class="row">
                                    <div class="form-group col-4">
                                        <label for="title">Title</label>
                                        <input type="text" name="title" id="title" class="form-control">
                                    </div>
                                    <div class="form-group col-4">
                                        <label for="input2">Language</label>
                                        <select name="language" id="language" class="form-control">
                                            <option value="en">English</option>
                                            <option value="fr">French</option>
                                            <option value="cn">Chinese</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-4">
                                        <label for="input1">Input1</label>
                                        <input type="number" name="input_1" id="input_1" class="form-control">
                                    </div>
                                    <div class="form-group col-4">
                                        <label for="title2">Title2</label>
                                        <input type="text" name="title_2" id="title_2" class="form-control">
                                    </div>
                                    <div class="form-group col-4">
                                        <label for="input2">Input2</label>
                                        <input type="number" name="input_2" id="input_2" class="form-control">
                                    </div>
                                    <div class="form-group col-4">
                                        <label for="input2">Language</label>
                                        <select name="language" id="language" class="form-control">
                                            <option value="en">English</option>
                                            <option value="fr">French</option>
                                            <option value="cn">Chinese</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Content</label>
                                    <textarea name="contents" class="my-editor" id="content" cols="30"
                                              rows="10"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Description</label>
                                    <textarea name="description" class="my-editor" id="description" cols="30"
                                              rows="10"></textarea>
                                </div>

                            </div>
                            <div id="main_loader_fleet" class="text-center" style="display: none;">
                                <img src="{{asset('images/loader.gif')}}" alt="loader">
                            </div>
                        </div>
                        <div class="modal-footer justify-content-center">
                            <button class="btn btn-sm btn-outline-warning" type="button" onclick="addFleet()">
                                Close
                            </button>
                            <button class="btn btn-sm btn-outline-success" type="submit">
                                Add Fleet
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>




    </div>
    @include('fleet.script')
@endsection




