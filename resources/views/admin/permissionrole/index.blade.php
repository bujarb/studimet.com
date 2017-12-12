@extends('layouts.adminmain')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"><i class="fa fa-flag" aria-hidden="true"></i> Permissions & Roles</h1>
    </div>
</div>
<div class="row">
  <div class="col-md-8">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Permissions</h3>
      </div>
      <div class="panel-body">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Nmae</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($permissions as $permission)
                <tr>
                    <td>{{$permission->name}}</td>
                    <td>{{$permission->description}}</td>
                    <td><a href="#" class="btn btn-info btn-sm">Edit</a></td>
                    <td><a href="#" class="btn btn-danger btn-sm">Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
      </div>
      <div class="panel-footer">
        <div class="row">
          <div class="col-md-6">
            {{$permissions->links()}}
          </div>
          <div class="col-md-2 pull-right createnew" style="margin-top:20px;">
            <a href="#" class="btn btn-info btn-sm btn-block">Create New <i class="fa fa-plus"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Roles</h3>
      </div>
      <div class="panel-body">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Nmae</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($roles as $role)
                <tr>
                    <td>{{$role->name}}</td>
                    <td>{{$role->display_name}}</td>
                    <td><a href="#" class="btn btn-info btn-sm">Edit</a></td>
                    <td><a href="#" class="btn btn-danger btn-sm">Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
      </div>
      <div class="panel-footer">

      </div>
    </div>
  </div>
</div>
@endsection
