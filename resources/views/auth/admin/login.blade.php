@extends('layouts.adminlogin')

@section('styles')
<style media="screen">
.panel{
  margin-top: 50%;
}
</style>
@endsection
@section('content')
<div class="row">
  <div class="col-md-4 col-md-offset-4">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title text-center">Admininstrator Login</h3>
      </div>
      <div class="panel-body">
        <form class="" action="{{route('admin-login')}}" method="post">
          {{csrf_field()}}
          <div class="form-group">
            <label for="">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Type in your email...">
          </div>
          <div class="form-group">
            <label for="">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Type in your email...">
          </div>
          <input type="submit" value="Login" class="btn btn-primary btn-block">
        </form>
      </div>
      <div class="panel-footer">

      </div>
    </div>
  </div>
</div>
@endsection
