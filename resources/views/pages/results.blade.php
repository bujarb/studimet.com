@extends('layouts.main')

@section('styles')
<style media="screen">

    #rescontent{
      display: none;
    }

  .preload{
    margin: 0px;
    position: absolute;
    top: 30%;
    left: 35%;
  }
</style>
@endsection

@section('loading')
  <div class="preload">
    <img src="{{asset('images/other/loader1.gif')}}" alt="">
  </div>
@endsection

@section('content')
<div class="row m-t-20">
  <div class="col-md-2">
    asd
  </div>
  <div class="col-md-6 offset-md-2" id="rescontent">
    @foreach ($courses as $course)
      <div class="row resultsrow">
        <div class="col-md-12">
          <div class="row results-header">
            <div class="col-md-8">
              <h3 class="text-nowrap m-l-5 results-name">{{$course->name}}</h3>
              <p class="text-nowrap results-discname">{{$course->discname}}</p>
              <p class="text-nowrap results-discname"><i class="fa fa-university"></i> {{$course->inst_name}}</p>
            </div>
          </div>
          <div class="row results-info">
            <div class="col-md-12 results-info-box">
              <div class="row">
                <div class="col-md-2">
                  <p class="text-center">{{$course->fee}} <i class="fa fa-euro"></i></p>
                </div>
                <div class="col-md-2">
                  <p class="text-center">{{$course->deadline}} <i class="fa fa-calendar"></i></p>
                </div>

                <div class="col-md-2">
                  <p class="text-center">{{$course->duration}} Vjet</i></p>
                </div>

                <div class="col-md-2">
                  <p class="text-center">{{$course->degree}} <i class="fa fa-book"></i></i></p>
                </div>
              </div>
            </div>
          </div>
          <div class="row results-footer">
            <div class="col-md-3">
              <a href="#" class="btn btn-primary-outline-one btn-block">Compare</a>
            </div>
            <div class="col-md-2">
              <a href="#" class="btn btn-primary-outline-one btn-block"><i class="fa fa-heart"></i></a>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
@endsection

@section('script')
  <script type="text/javascript">
    $(function(){
      $(".preload").fadeOut(2000,function(){
        $("#rescontent").fadeIn(1000);
      });
    });
  </script>
@endsection
