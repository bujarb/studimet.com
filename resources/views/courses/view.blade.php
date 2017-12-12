@extends('layouts.main')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="row title-box mt-5">
        <div class="col-md-8 offset-md-2 text-center">
          <h1>{{$course->name}}</h1>
        </div>
      </div>
      <hr>
      <div class="row title-box">
        <div class="col-md-6 text-left">
          <i class="fa fa-university"></i> <a href="{{route('view-university',$course->uniname)}}">{{$course->uniname}}</a>
        </div>
        <div class="col-md-6 ">
          <a href="#" class="pull-right">Kosovo</a> <a href="#" class="pull-right mr-2">Ferizaj</a><i class="fa fa-map-marker pull-right mr-2 mt-1" aria-hidden="true"></i>
        </div>
      </div>
      <hr>
      <div class="row websitelinks">
        <div class="col-md-3 text-center">
          <i class="fa fa-globe"></i>  <a href="{{$course->program_website_link}}">Visit Programme Website</a>
        </div>
        <div class="col-md-3 text-center">
          <i class="fa fa-globe"></i>  <a href="{{$course->program_website_link}}">Visit Admission Inquiry Website</a>
        </div>
      </div>
      <div class="row info-box mt-5">
        <div class="col-md-2 small-box text-center ">
          <i class="fa fa-clock-o mt-3" aria-hidden="true"></i>
          <hr>
          <p>{{$course->duration}} / Years</p>
        </div>
        <div class="col-md-2 small-box text-center ">
          <i class="fa fa-comment-o mt-3" aria-hidden="true"></i>
          <hr>
          <p>{{$course->language}}</p>
        </div>
        <div class="col-md-2 small-box text-center ">
          <i class="fa fa-euro mt-3" aria-hidden="true"></i>
          <hr>
          <p>{{$course->fee}} / Year</p>
        </div>
        <div class="col-md-2 small-box text-center">
          <i class="fa fa-calendar mt-3" aria-hidden="true"></i>
          <hr>
          <p>{{$course->deadline}}</p>
        </div>
      </div>
      <hr>
      <div class="row descriptions">
        <div class="col-md-12">
          <div class="row text-center">
            <div class="col-md-2 button-box" id="btnoverview">
              <p>Overview</p>
            </div>
            <div class="col-md-2 button-box" id="btnoutline">
              <p>Outline</p>
            </div>
            <div class="col-md-2 button-box" id="btnfacts">
              <p>Key Facts</p>
            </div>
            <div class="col-md-2 button-box" id="btnadmission">
              <p>Admission Requirements</p>
            </div>
            <div class="col-md-2 button-box" id="btnstudents">
              <p>Students Service</p>
            </div>
            <div class="col-md-2 button-box" id="btnfee">
              <p>Fee & Funding</p>
            </div>
          </div>
          <hr>
          <div class="row mt-5" id="overviewview" style="display:none;">
            <div class="col-md-4">
              <h2 class="ml-5 align-middle">Overview</h2>
            </div>
            <div class="col-md-8">
              {!! $course->overview !!}
            </div>
          </div>

          <div class="row mt-5" id="outlineview" style="display:none;">
            <div class="col-md-4">
              <h2 class="ml-5 align-middle">Ouline</h2>
            </div>
            <div class="col-md-8">
              {!! $course->programme_outline !!}
            </div>
          </div>

          <div class="row mt-5" id="factsview" style="display:none;">
            <div class="col-md-4">
              <h2 class="ml-5 align-middle">Key Facts</h2>
            </div>
            <div class="col-md-8">
              {!! $course->key_facts !!}
            </div>
          </div>

          <div class="row mt-5" id="admissionview" style="display:none;">
            <div class="col-md-4">
              <h2 class="ml-5 align-middle">Admission Requirements</h2>
            </div>
            <div class="col-md-8">
              {!! $course->addmission_requirments !!}
            </div>
          </div>

          <div class="row mt-5" id="studentsview" style="display:none;">
            <div class="col-md-4">
              <h2 class="ml-5 align-middle">Students Service</h2>
            </div>
            <div class="col-md-8">
              {!! $course->students_service !!}
            </div>
          </div>

          <div class="row mt-5" id="feeview" style="display:none;">
            <div class="col-md-4">
              <h2 class="ml-5 align-middle">Fee and Funding</h2>
            </div>
            <div class="col-md-8">
              {!! $course->fee_funding !!}
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
$(function(){
  $('#btnoverview').on('click',function(){
    $('#overviewview').slideToggle();
  });

  $('#btnoutline').on('click',function(){
    $('#outlineview').slideToggle();
  });

  $('#btnfacts').on('click',function(){
    $('#factsview').slideToggle();
  });

  $('#btnadmission').on('click',function(){
    $('#admissionview').slideToggle();
  });

  $('#btnstudents').on('click',function(){
    $('#studentsview').slideToggle();
  });

  $('#btnfee').on('click',function(){
    $('#feeview').slideToggle();
  });

  $('#btnoverview').css('cursor','pointer');
  $('#btnoutline').css('cursor','pointer');
  $('#btnfacts').css('cursor','pointer');
  $('#btnadmission').css('cursor','pointer');
  $('#btnstudents').css('cursor','pointer');
  $('#btnfee').css('cursor','pointer');
});
</script>
@endsection
