@extends('layouts.main')

@section('content')
<div class="row universitywrapper">
  <div class="col-md-8 offset-md-2">
    <div class="row uniheader mt-5">
      <div class="col-md-2">
        <img src="{{URL::asset($institution->logo_path)}}" class="img-responsive img-circle" height="60px" width="60px">
      </div>
      <div class="col-md-10 text-center">
        <h1>{{$institution->name}}</h1>
      </div>
    </div>
    <hr>
    <div class="row locationinfo">
      <div class="col-sm-6">
        <i class="fa fa-map-marker"></i> <a href="#">{{$institution->countryname}}</a>, <a href="#">{{$institution->cityname}}</a>
      </div>
    </div>
    <div class="row imgbox mt-3">
      <div class="col-md-12">
        <img src="{{URL::asset($institution->background_image_path)}}" alt="profile Pic" width="100%" height="400px" class="img-responsive img-rounded">
      </div>
    </div>
    <hr>
    <div class="row descriptions-box mt-5">
      <div class="col-md-3 descbox text-center" id="type">
        <i class="fa fa-university animated" id="typeanim" aria-hidden="true"></i>
        <p>{{$institution->type}}</p>
      </div>
      <div class="col-md-3  text-center" id="year">
        <i class="fa fa-calendar animated" id="yearanim" aria-hidden="true"></i>
        <p>{{$institution->establishment_year}}</p>
      </div>
      <div class="col-md-3  text-center" id="phone">
        <i class="fa fa-phone animated" id="phoneanim" aria-hidden="true"></i>
        <p>{{$institution->phone_number}}</p>
      </div>
      <div class="col-md-3  text-center" id="fax">
        <i class="fa fa-fax animated" id="faxanim" aria-hidden="true"></i>
        <p>{{$institution->fax}}</p>
      </div>
    </div>
    <hr>
    <div class="row descriptions2 mt-5">
      <div class="col-md-4 text-center">
        <p><i class="fa fa-user-circle" aria-hidden="true"></i> {{$institution->students_numbers}} total students</p>
      </div>
      <div class="col-md-4 text-center">
        <p><i class="fa fa-user-circle" aria-hidden="true"></i> {{$institution->administrative_staff_number}} administrative staff</p>
      </div>
      <div class="col-md-4 text-center">
        <p><i class="fa fa-user-circle" aria-hidden="true"></i> {{$institution->teaching_staff_number}} teaching staff</p>
      </div>
    </div>
    <hr>
    <div class="row social mt-5">
      <div class="col-md-3 text-center facebook">
        <p><i class="fa fa-facebook" aria-hidden="true"></i> {{$institution->facebook_page}}</p>
      </div>
      <div class="col-md-3 text-center twitter">
        <p><i class="fa fa-twitter" aria-hidden="true"></i> {{$institution->twitter_page}}</p>
      </div>
      <div class="col-md-3 text-center linkedin">
        <p><i class="fa fa-linkedin" aria-hidden="true"></i> {{$institution->linkedin_page}}</p>
      </div>
      <div class="col-md-3 text-center instagram">
        <p><i class="fa fa-instagram" aria-hidden="true"></i> {{$institution->teaching_staff_number}} teaching staff</p>
      </div>
    </div>
    <hr>
    <div class="row related-disciplines">
      <div class="col-md-4 text-center">
        <h3>Bachelor Programmes</h3>
        <hr>
        <div class="list-group">
          <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
          <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
          <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
          <a href="#" class="list-group-item list-group-item-action">Vestibulum at eros</a>
        </div>
      </div>
      <div class="col-md-4 text-center">
        <h3>Master Programmes</h3>
        <hr>
        <div class="list-group">
          <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
          <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
          <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
          <a href="#" class="list-group-item list-group-item-action">Vestibulum at eros</a>
        </div>
      </div>
      <div class="col-md-4 text-center">
        <h3>Phd Programmes</h3>
        <hr>
        <div class="list-group">
          <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
          <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
          <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
          <a href="#" class="list-group-item list-group-item-action">Vestibulum at eros</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
  $(function(){
    $('#type').hover(function() {
        $('#typeanim').addClass("bounce");
    }, function() {
        $('#typeanim').removeClass("bounce");
    });

    $('#year').hover(function() {
        $('#yearanim').addClass("bounce");
    }, function() {
        $('#yearanim').removeClass("bounce");
    });

    $('#phone').hover(function() {
        $('#phoneanim').addClass("bounce");
    }, function() {
        $('#phoneanim').removeClass("bounce");
    });

    $('#fax').hover(function() {
        $('#faxanim').addClass("bounce");
    }, function() {
        $('#faxanim').removeClass("bounce");
    });
  });;
</script>
@endsection
