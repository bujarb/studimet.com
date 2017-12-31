@extends('layouts.adminmain')

@section('content')
  <div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"><i class="fa fa-flag" aria-hidden="true"></i> All Cities</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Update the city</h3>
        </div>
        <div class="panel-body">
          <form action="{{route('city.update',$city->id)}}" method="post">

            {{csrf_field()}}

            <div class="form-group">
              <label for="">Name</label>
              <input type="text" name="city" id="city" value="{{$city->name}}" class="form-control">
            </div>
            <div class="row">
              <div class="col-md-6">
                <a href="#" class="btn btn-danger btn-sm btn-block">Cancel</a>
              </div>
              <div class="col-md-6">
                <input type="submit" value="Update" class="btn btn-primary btn-sm btn-block">
              </div>
            </div>

            {{ method_field('PUT') }}

          </form>
        </div>
        <div class="panel-footer">

        </div>
      </div>
    </div>
  </div>
@endsection
