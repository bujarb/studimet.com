@extends('layouts.main')

@section('styles')
  <style>
    .price {
      font-size: 2em;
    }

    .price-cents {
      vertical-align: super;
      font-size: 50%;
    }

    .price-month {
      font-size: 35%;
      font-style: italic;
    }

    .panel {
      -webkit-transition-property : scale;
      -webkit-transition-duration : 0.2s;
      -webkit-transition-timing-function : ease-in-out;
      -moz-transition : all 0.2s ease-in-out;
    }

    .panel:hover {
      box-shadow: 0 0 10px rgba(0,0,0,.5);
      -moz-box-shadow: 0 0 10px rgba(0,0,0,.5);
      -webkit-box-shadow: 0 0 10px rgba(0,0,0,.5);
      -webkit-transform: scale(1.05);
      -moz-transform: scale(1.05);
    }
  </style>
@endsection

@section('content')
<div class="row m-t-100">
  <div class="col-md-8 offset-md-2">
    <div class="row">
      @foreach($courses as $course)
        <div class="col-sm-4 offset-md-1">
          <div class="panel panel-default text-center">
            <div class="panel-heading">
              <img src="{{asset($course->instlogo)}}" width="100px">
            </div>
            <div class="m-t-10"></div>
            <ul class="list-group">
              <li class="list-group-item">{{$course->inst_name}}</li>
              <li class="list-group-item">{{$course->name}}</li>
              <li class="list-group-item">{{$course->discname}}</li>
              <li class="list-group-item">{{$course->degree}}</li>
              <li class="list-group-item">{{\Carbon\Carbon::parse($course->deadline)->format('M d Y')}}</li>
              <li class="list-group-item">{{$course->fee}} <i class="fa fa-eur"></i></li>
            </ul>
            <div class="panel-footer">
              <a href="#" class="btn btn-primary-one m-t-10">Add to wishlist!</a>
              <a href="#" class="btn btn-primary-outline-one m-t-10">Remove</a>
            </div>
            <div class="row m-t-10"></div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</div>
@endsection