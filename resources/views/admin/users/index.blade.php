@extends('layouts.adminmain')

@section('content')
<div class="row">
  <div class="col-lg-12">
      <h1 class="page-header"><i class="fa fa-user"></i> All Users</h1>
  </div>
</div>
<div class="row">
  <div class="col-md-6 col-md-offset-3">
    @if (count($users)>0)
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Users</h3>
        </div>
        <div class="panel-body">
          <table class="table table-responsive table-condensed">
            <thead>
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($users as $user)
                <tr>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <form action="{{route('user.destroy',$user->id)}}" method="post">
                    {{csrf_field()}}
                    <td><a href="#" data-toggle="modal" data-target="#myModal" class="btn btn-danger btn-sm">Delete</a></td>
                    {{ method_field('DELETE') }}

                    <!-- Modal -->
                    <div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document" id="deletemodal">
                        <div class="modal-content" id="deletemodal-body">
                          <div class="modal-body">
                            <h3 class="text-center">Confirm</h3>
                          </div>
                          <div class="modal-footer" id="deletemodal-footer">
                            <div class="row">
                              <div class="col-md-6">
                                <button name="button" class="btn btn-delete btn-block">Delete</button>
                              </div>
                              <div class="col-md-6">
                                <button data-dismiss="modal" class="btn btn-default btn-block">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <div class="panel-footer">
          {{$users->links()}}
        </div>
      </div>
    @else
      <h1 class="text-center text-danger">No users found</h1>
    @endif
  </div>
</div>

@endsection

@section('scripts')

@endsection
