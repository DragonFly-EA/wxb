@extends('layouts.admin.main')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="mb-2 row">
                <div class="col-sm-12">
                    <h1 class="m-0 text-dark">
                        Menu Items
                    </h1>
                </div>
                <div class="col-sm-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item text-danger">
                            <a href="{{ url('/home') }}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Menu Items</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <button class="btn btn-sm btn-outline-success" onclick="addMenu()">
                                    Add Menu
                                </button>
                                <button class="btn btn-sm btn-outline-info" onclick="addSubMenu()">
                                    Add Sub Menu
                                </button>
                                @if (session('alert-success'))
                                    <div class="alert alert-success mt-2" role="alert">
                                        {{ session('alert-success') }}
                                    </div>
                                @endif
                                @if ($errors->any())
                                    <div class="row">
                                        @foreach ($errors->all() as $error)
                                            <div class="col-4">
                                                <div class="alert mt-2 alert-dismissible alert-highlighted fade show alert-danger"
                                                     role="alert">
                                                    {{ $error }}
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif
                                <table class="table table-bordered mt-2">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Menu Name</th>
                                        <th>Path</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $count = 1 ?>
                                    @forelse($menus as $menu)
                                        <tr>
                                            <td>{{$count++}}</td>
                                            <td>{{$menu->name}}</td>
                                            <td>{{$menu->url}}</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-outline-info dropdown-toggle"
                                                            type="button" id="dropdownMenuButton"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                        Action
                                                    </button>
                                                    <ul class="dropdown-menu"
                                                        aria-labelledby="dropdownMenuButton">
                                                        <li class="dropdown-item text-info">Add Sub Menus</li>
                                                        <li class="dropdown-item text-success"
                                                            onclick="updateMenuModal({{$menu->id}})">Update
                                                        </li>
                                                        <a class="dropdown-item text-red"
                                                           href="{{ url('menus/delete/'.$menu->id) }}">Delete</a>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="text-center">
                                                <i class="fa fa-bars fa-5x"></i>
                                                <p>Add Menus</p>
                                            </td>
                                        </tr>
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="menu_modal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="menu_name">Name</label>
                                <input type="text" class="form-control" id="menu_name" name="menu_name">
                            </div>
                            <div class="form-group">
                                <label for="menu_name">Language</label>
                                <select name="language" class="form-control" id="language">
                                    <option value="en">English</option>
                                    <option value="fr">French</option>
                                    <option value="cn">Chinese</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="url">URL</label>
                                <input type="text" class="form-control" id="url" name="url">
                            </div>
                            <button class="btn btn-sm btn-light" type="button" onclick="addSubMenuTitle()">
                                <i class="fa fa-plus fa-2x"></i>
                            </button>
                            <label for="">Add Sub Menu Titles</label>
                            <div id="sub_menu_titles"></div>
                        </div>
                        <div class="modal-footer justify-content-center">
                            <button class="btn btn-sm btn-outline-success" type="button" onclick="storeMenu()">
                                Add Menu
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="sub_menu_modal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="">Menu</label>
                                <select name="menu_id" id="menu_id" class="form-control">
                                    @forelse($menus as $menu)
                                        <option value="{{$menu->id}}">{{$menu->name}}</option>
                                    @empty
                                        <option disabled>Add Menu Items</option>
                                    @endforelse
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="sub_menu_title_id">Sub Menu Title</label>
                                <span id="dHolder">
                                    <select name="sub_menu_title_id" id="sub_menu_title_id" class="form-control">
                                        <option selected disabled>--Please Select Menu first--</option>
                                    </select>
                                </span>
                                <div class="mb-3 input-group input-group-md" id="loaderField" style="display: none;">
                                    <div class="input-group-prepend"><span class="input-group-text"><img src="{{asset('resources/settings/loading.gif')}}" width="15px" height="15px" style="margin-top: -5px !important;"></span></div>
                                    <input type="text" readonly="" class="form-control" placeholder="Loading Sub Menu Titles.." >
                                </div>
                            </div>
                            <button class="btn btn-sm btn-light" type="button" onclick="addItem()">
                                <i class="fa fa-plus fa-2x"></i>
                            </button>
                            <label for="">Add Sub Menus</label>
                            <div id="sub_menu_items"></div>
                        </div>
                        <div class="modal-footer justify-content-center">
                            <button class="btn btn-sm btn-outline-warning" type="button" onclick="addSubMenu()">
                                Close
                            </button>
                            <button class="btn btn-sm btn-outline-success" type="button" onclick="storeSubMenus()">
                                Add Sub Menu
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('cms/menu.js')}}"></script>
@endsection
