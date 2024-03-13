@extends('layouts.admin.main')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="mb-2 row">
                <div class="col-sm-12">
                    <h1 class="m-0 text-dark">
                        Values
                    </h1>
                </div>
                <div class="col-sm-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item text-danger">
                            <a href="{{ url('/home') }}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Values</li>
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
                                @if (session('alert-success'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('alert-success') }}
                                    </div>
                                @endif
                                @if ($errors->any())
                                    @foreach ($errors->all() as $error)
                                        <div class="alert alert-dismissible alert-highlighted fade show alert-danger"
                                             role="alert">
                                            {{ $error }}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    @endforeach
                                @endif
                                <button class="btn btn-sm btn-outline-info" onclick="valuesAdd()">
                                    Add Value
                                </button>
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
                                                    <table class="table table-bordered table-striped mt-2">
                                                        <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Title</th>
                                                            <th>Description</th>
                                                            <th>Icon</th>
                                                            <th>Action</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php $count = 1; ?>
                                                        @foreach ($values as $value)
                                                            <tr>
                                                                <td>{{ $count++ }}</td>
                                                                <td>{{ $value->title }}</td>
                                                                <td>{!! $value->content !!}</td>
                                                                <td>{!! $value->icon !!}</td>
                                                                <td>
                                                                    <div class="dropdown">
                                                                        <button class="btn btn-outline-info dropdown-toggle"
                                                                                type="button"
                                                                                id="dropdownMenuButton"
                                                                                data-bs-toggle="dropdown"
                                                                                aria-expanded="false">
                                                                            Action
                                                                        </button>
                                                                        <ul class="dropdown-menu"
                                                                            aria-labelledby="dropdownMenuButton">
                                                                            <a class="dropdown-item text-success"
                                                                               onclick="viewValue({{$value->id}})">View</a>
                                                                            <a class="dropdown-item text-info"
                                                                               onclick="updateModal({{$value->id}})">Update</a>
                                                                            <a class="dropdown-item text-danger"
                                                                               href="{{ url('values/delete/' . $value->id) }}">Delete</a>
                                                                        </ul>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <div id="updateModal{{$value->id}}" class="modal fade">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <form action="{{ url('values/update') }}" method="post">
                                                                            <div class="modal-body">
                                                                                @csrf
                                                                                <input type="hidden" value="{{$value->id}}"
                                                                                       name="id">
                                                                                <div class="form-group">
                                                                                    <label for="title">Title</label>
                                                                                    <input type="text" name="title" id="title"
                                                                                           value="{{$value->title}}"
                                                                                           class="form-control">
                                                                                </div>


                                                                                <div class="form-group">
                                                                                    <label for="description">Description</label>
                                                                                    <textarea name="description"
                                                                                              id="description"
                                                                                              class="form-control my-editor"
                                                                                              cols="30"
                                                                                              rows="10">{!! $value->content !!}</textarea>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="icon">Icon</label>
                                                                                    <input type="text" class="form-control"
                                                                                           value="{{$value->icon}}" name="icon"
                                                                                           id="icon">
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer justify-content-center">
                                                                                <button class="btn btn-sm btn-outline-warning"
                                                                                        type="button"
                                                                                        onclick="updateModal({{$value->id}})">
                                                                                    Close
                                                                                </button>
                                                                                <button class="btn btn-sm btn-outline-success">
                                                                                    Update Value
                                                                                </button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal fade" id="view_value{{$value->id}}">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-body">
                                                                            <div class="table">
                                                                                <div>
                                                                                    <h4>{{$value->title}}</h4>
                                                                                </div>
                                                                                <div>
                                                                                    <p>{!! $value->content !!}</p>
                                                                                </div>
                                                                                <div>
                                                                                    <h4>{!! $value->icon !!}</h4>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade " id="pills-french" role="tabpanel"
                                             aria-labelledby="pills-french-tab">
                                            <table class="table table-bordered table-striped mt-2">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Title</th>
                                                    <th>Description</th>
                                                    <th>Icon</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php $count = 1; ?>
                                                @foreach ($values_fr as $value)
                                                    <tr>
                                                        <td>{{ $count++ }}</td>
                                                        <td>{{ $value->title }}</td>
                                                        <td>{!! $value->content !!}</td>
                                                        <td>{!! $value->icon !!}</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button class="btn btn-outline-info dropdown-toggle"
                                                                        type="button"
                                                                        id="dropdownMenuButton"
                                                                        data-bs-toggle="dropdown"
                                                                        aria-expanded="false">
                                                                    Action
                                                                </button>
                                                                <ul class="dropdown-menu"
                                                                    aria-labelledby="dropdownMenuButton">
                                                                    <a class="dropdown-item text-success"
                                                                       onclick="viewValue({{$value->id}})">View</a>
                                                                    <a class="dropdown-item text-info"
                                                                       onclick="updateModal({{$value->id}})">Update</a>
                                                                    <a class="dropdown-item text-danger"
                                                                       href="{{ url('values/delete/' . $value->id) }}">Delete</a>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <div id="updateModal{{$value->id}}" class="modal fade">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <form action="{{ url('values/update') }}" method="post">
                                                                    <div class="modal-body">
                                                                        @csrf
                                                                        <input type="hidden" value="{{$value->id}}"
                                                                               name="id">
                                                                        <div class="form-group">
                                                                            <label for="title">Title</label>
                                                                            <input type="text" name="title" id="title"
                                                                                   value="{{$value->title}}"
                                                                                   class="form-control">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="description">Description</label>
                                                                            <textarea name="description"
                                                                                      id="description"
                                                                                      class="form-control my-editor"
                                                                                      cols="30"
                                                                                      rows="10">{!! $value->content !!}</textarea>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="icon">Icon</label>
                                                                            <input type="text" class="form-control"
                                                                                   value="{{$value->icon}}" name="icon"
                                                                                   id="icon">
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer justify-content-center">
                                                                        <button class="btn btn-sm btn-outline-warning"
                                                                                type="button"
                                                                                onclick="updateModal({{$value->id}})">
                                                                            Close
                                                                        </button>
                                                                        <button class="btn btn-sm btn-outline-success">
                                                                            Update Value
                                                                        </button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal fade" id="view_value{{$value->id}}">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <div class="table">
                                                                        <div>
                                                                            <h4>{{$value->title}}</h4>
                                                                        </div>
                                                                        <div>
                                                                            <p>{!! $value->content !!}</p>
                                                                        </div>
                                                                        <div>
                                                                            <h4>{!! $value->icon !!}</h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                                </tbody>
                                            </table>

                                        </div>
                                        <div class="tab-pane fade" id="pills-chinese" role="tabpanel"
                                             aria-labelledby="pills-chinese-tab">

                                            <table class="table table-bordered table-striped mt-2">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Title</th>
                                                    <th>Description</th>
                                                    <th>Icon</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php $count = 1; ?>
                                                @foreach ($values_cn as $value)
                                                    <tr>
                                                        <td>{{ $count++ }}</td>
                                                        <td>{{ $value->title }}</td>
                                                        <td>{!! $value->content !!}</td>
                                                        <td>{!! $value->icon !!}</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button class="btn btn-outline-info dropdown-toggle"
                                                                        type="button"
                                                                        id="dropdownMenuButton"
                                                                        data-bs-toggle="dropdown"
                                                                        aria-expanded="false">
                                                                    Action
                                                                </button>
                                                                <ul class="dropdown-menu"
                                                                    aria-labelledby="dropdownMenuButton">
                                                                    <a class="dropdown-item text-success"
                                                                       onclick="viewValue({{$value->id}})">View</a>
                                                                    <a class="dropdown-item text-info"
                                                                       onclick="updateModal({{$value->id}})">Update</a>
                                                                    <a class="dropdown-item text-danger"
                                                                       href="{{ url('values/delete/' . $value->id) }}">Delete</a>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <div id="updateModal{{$value->id}}" class="modal fade">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <form action="{{ url('values/update') }}" method="post">
                                                                    <div class="modal-body">
                                                                        @csrf
                                                                        <input type="hidden" value="{{$value->id}}"
                                                                               name="id">
                                                                        <div class="form-group">
                                                                            <label for="title">Title</label>
                                                                            <input type="text" name="title" id="title"
                                                                                   value="{{$value->title}}"
                                                                                   class="form-control">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="description">Description</label>
                                                                            <textarea name="description"
                                                                                      id="description"
                                                                                      class="form-control my-editor"
                                                                                      cols="30"
                                                                                      rows="10">{!! $value->content !!}</textarea>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="icon">Icon</label>
                                                                            <input type="text" class="form-control"
                                                                                   value="{{$value->icon}}" name="icon"
                                                                                   id="icon">
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer justify-content-center">
                                                                        <button class="btn btn-sm btn-outline-warning"
                                                                                type="button"
                                                                                onclick="updateModal({{$value->id}})">
                                                                            Close
                                                                        </button>
                                                                        <button class="btn btn-sm btn-outline-success">
                                                                            Update Value
                                                                        </button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal fade" id="view_value{{$value->id}}">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <div class="table">
                                                                        <div>
                                                                            <h4>{{$value->title}}</h4>
                                                                        </div>
                                                                        <div>
                                                                            <p>{!! $value->content !!}</p>
                                                                        </div>
                                                                        <div>
                                                                            <h4>{!! $value->icon !!}</h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                                </tbody>
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
    <div id="valuesAdd" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ url('values/store') }}" method="post">
                    <div class="modal-body">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="input2">Language</label>
                            <select name="language" id="language" class="form-control">
                                <option value="en">English</option>
                                <option value="fr">French</option>
                                <option value="cn">Chinese</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" class="form-control my-editor" cols="30"
                                      rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="icon">Icon</label>
                            <input type="text" class="form-control" name="icon" id="icon">
                        </div>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button class="btn btn-sm btn-outline-warning" type="button" onclick="valuesAdd()">
                            Close
                        </button>
                        <button class="btn btn-sm btn-outline-success">
                            Add Value
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        function valuesAdd() {
            $("#valuesAdd").modal('show').modal('hide');
        }
        function viewValue(id) {
            $("#view_value" + id).modal('show').modal('hide');
        }
        function updateModal(id) {
            $("#updateModal" + id).modal('show').modal('hide')
        }
    </script>
@endsection
