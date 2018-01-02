@extends('layouts.adminmain')

@section('content')
  <div class="row">
              <div class="col-lg-12">
                  <h1 class="page-header"><i class="fa fa-flag" aria-hidden="true"></i> Create a City</h1>
              </div>
              <!-- /.col-lg-12 -->
          </div>
<div class="row">
  <div class="col-md-6 col-md-offset-2">
    <div class="panel panel-default">
      <div class="panel-heading">
        Here you can insert a new city in a particular country
      </div>
      <div class="panel-body">
        <form class="" action="{{route('city.store')}}" method="post">
          {{csrf_field()}}
          <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" class="form-control">
          </div>
          <div class="row">
            <div class="col-md-12">
              <input type="submit" name="submit" value="Insert City" class="btn btn-primary btn-block">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
