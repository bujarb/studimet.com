@extends('layouts.account')

@section('styles')
<style media="screen">
  .js-example-basic-multiple{
    width: 100%;
  }

  .headtitle{
    font-weight: bold;
    text-align: center;
    color: #3F729B;
  }
</style>
@endsection

@section('content')
<div class="row mt-5">
  <div class="col-md-8 offset-md-2">
    <h1 class="text-center">Welcome <strong>{{Auth::guard('user')->user()->name}}</strong></h1>
    <h3 class="text-center text-info">Pleas answer questions below to complete your account</h3>
    <hr>
    <form class="" action="{{route('complete-user-account')}}" method="post">
      {{csrf_field()}}
      <div class="row">
        <div class="col-md-8 offset-md-2 ">
          <h2 class="headtitle">Select area of study</h2>
          <select class="js-example-basic-multiple" name="area[]" multiple="multiple">
            <option value="bachelor">Bachelor</option>
            <option value="masters">Masters</option>
            <option value="phd">PHD</option>
            <option value="diploma">Diploma</option>
            <option value="online">Online</option>
            <option value="training">Training</option>
          </select>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-8 offset-md-2 ">
          <h2 class="headtitle">Select subject of interest</h2>
          <select class="js-example-basic-multiple" name="subject[]" multiple="multiple">
            @foreach ($disciplines as $discipline)
              <option value="{{$discipline->name}}">{{$discipline->name}}</option>
            @endforeach
          </select>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-8 offset-md-2 ">
          <h2 class="headtitle">Select country</h2>
          <select class="js-example-basic-multiple" name="states[]" multiple="multiple">
            @foreach ($countries as $country)
              <option value="{{$country->name}}">{{$country->name}}</option>
            @endforeach
          </select>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-4 offset-md-4">
          <input type="submit" value="Complete your account" class="btn btn-primary">
        </div>
      </div>
    </form>
  </div>
</div>
@endsection

@section('script')
<script>
$(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
</script>
@endsection
