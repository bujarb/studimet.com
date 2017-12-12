@extends('layouts.account')

@section('content')
<div class="row">
  <div class="col-md-6 offset-md-3">
    <h1 class="text-center">Complete university info</h1>
    <form class="" action="{{route('university-register',$institution->id)}}" method="post" enctype="multipart/form-data">
      {{csrf_field()}}
      <div class="form-group">
        <label for="">Logo</label>
        <input type="file" class="form-control" id="logo" name="logo" placeholder="">
      </div>
      <div class="form-group">
        <label for="">Year</label>
        <input type="text" class="form-control" id="year" name="year" placeholder="">
      </div>
      <div class="form-group">
        <label for="">Year</label>
        <select class="form-control" name="type">
          <option value="public">Public</option>
          <option value="private">Private</option>
        </select>
      </div>
      <div class="form-group">
        <label for="">University Address</label>
        <input type="text" class="form-control" id="address" name="address" placeholder="">
      </div>
      <div class="form-group">
        <label for="">University Fax</label>
        <input type="text" class="form-control" id="fax" name="fax" placeholder="">
      </div>
      <input type="submit" value="Complete">
    </form>
  </div>
</div>
@endsection
