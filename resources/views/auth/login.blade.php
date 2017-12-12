@extends('layouts.main')

@section('content')
<div class="row loginform">
  <div class="col-md-4 offset-md-4 p-5">
    <!--Panel-->
    <div class="card">
        <div class="card-header white-text text-center">
            Login to your account
        </div>
        <div class="card-body">
          <form class="" action="{{route('login')}}" method="post">
            {{csrf_field()}}
            <div class="md-form form-group mt-5">
                <i class="fa fa-envelope prefix myi"></i>
                <input type="email" id="email" name="email" class="form-control validate">
                <label for="form91" data-error="wrong" data-success="right">Type your email</label>
            </div>
            <div class="md-form form-group mt-5">
                <i class="fa fa-lock prefix myi"></i>
                <input type="password" id="password" name="password" class="form-control validate">
                <label for="form91" data-error="wrong" data-success="right">Type your email</label>
            </div>
            <div class="md-form form-group mt-5">
                <input type="submit" name="" value="Login" class="mybtn">
            </div>
          </form>
        </div>
    </div>
    <!--/.Panel-->
  </div>
</div>
@endsection
