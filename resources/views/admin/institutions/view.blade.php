@extends('layouts.adminmain')

@section('content')
  <!-- HIDDEN / POP-UP DIV -->
  <div id="pop-up" class="popuptype">
    <p>Type</p>
  </div>

  <div id="pop-up" class="popupyear">
    <p>Establishment Year</p>
  </div>

  <div id="pop-up" class="popupemail">
    <p>Email</p>
  </div>

  <div id="pop-up" class="popupphone">
    <p>Phone Number</p>
  </div>

  <div id="pop-up" class="popupfax">
    <p>Fax</p>
  </div>
  <div id="pop-up" class="popupstudents">
    <p>Total Students</p>
  </div>
  <div id="pop-up" class="popupstaff">
    <p>Total Teaching Staff</p>
  </div>
  <!-- Pop up -->
  <div class="row space">

  </div>
<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <div class="col-md-1 pull-right" id="icons">
      <form action="{{route('institution.destroy',$institution->id)}}" method="post">
        {{csrf_field()}}
        <a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-trash"></a>
        {{ method_field('DELETE') }}

        <!-- Modal -->
        <div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document" id="deletemodal">
            <div class="modal-content" id="deletemodal-body">
              <div class="modal-body">
                <h3 class="text-center">Confirm</h3>
              </div>
              <div class="modal-footer" id="deletemodal-footer">
                <div class="row">
                  <div class="col-md-6">
                    <button name="button" class="btn btn-delete btn-block">Delete</button>
                  </div>
                  <div class="col-md-6">
                    <button data-dismiss="modal" class="btn btn-default btn-block">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


      </form>
    </div>
    <div class="col-md-1 pull-right" id="icons">
      <a href="{{route('admin-edit-university',$institution->name)}}"><span class="glyphicon glyphicon-pencil"></span></a>
    </div>
  </div>
</div>
<div class="row view-uni-wrapper">
  <div class="col-md-8 col-md-offset-2">
    <div class="row" id="titleandphoto">
      <div class="col-md-2">
        <img src="{{$institution->logo_path}}" alt="" class="img-responsive img-circle pull-left" width="70px">
      </div>
      <div class="col-md-10 pull-right">
        <h1 class="text-center">{{$institution->name}}</h1>
      </div>
    </div>
    <hr>
    <div class="row" id="header-box">
      <div class="col-md-9">
        <i class="fa fa-map-marker" aria-hidden="true" id="location-sign"></i> <p><a href="#">{{$institution->city}}</a></p> | {{$institution->address}}
      </div>
      <div class="col-md-2 pull-right">
        <p class="text-right" id="university-type">{{$institution->type}}</p>
      </div>
    </div>
    <div class="row" id="image-box">
      <img src="{{$institution->background_image_path}}" alt="" class="img-responsive img-thumbnail">
    </div>
    <hr>
    <div class="row" id="info-box">
      <div class="col-md-12">
        <div class="col-md-2" id="estyear">
          <p><i class="fa fa-calendar" aria-hidden="true"></i> {{$institution->year}}</p>
        </div>
        <div class="col-md-3" id="email">
          <p><i class="fa fa-envelope-o" aria-hidden="true"></i> {{$institution->email}}</p>
        </div>
        <div class="col-md-2" id="phone">
          <p><i class="fa fa-phone" aria-hidden="true"></i> +{{$institution->phone_number}}</p>
        </div>
        <div class="col-md-2" id="students">
          <p><i class="fa fa-graduation-cap"></i> 10000</p>
        </div>
        <div class="col-md-2" id="staff">
          <p><i class="fa fa-user"></i> 10000</p>
        </div>
      </div>
    </div>
    <hr>
    <div class="row" id="social-network-box">
      <div class="row">
        <div class="col-md-6">
          <p class="text-center"><i class="fa fa-facebook" aria-hidden="true"></i>  <a href="#">{{$institution->facebook}}</a></p>
        </div>
        <div class="col-md-6">
          <p class="text-center"><i class="fa fa-twitter" aria-hidden="true"></i> <a href="#">{{$institution->twitter}}</a></p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <p class="text-center"><i class="fa fa-instagram" aria-hidden="true"></i> <a href="#">{{$institution->linkedin}}</a></p>
        </div>
        <div class="col-md-6">
          <p class="text-center"><i class="fa fa-linkedin" aria-hidden="true"></i> <a href="#">{{$institution->instagram}}</a></p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row space">
  <!-- Just some space -->
</div>
@endsection

@section('scripts')
<script type="text/javascript">
$(function() {
  var moveLeft = 20;
  var moveDown = 10;

  $('#university-type').hover(function(e) {
    $('.popuptype').show();
      //.css('top', e.pageY + moveDown)
      //.css('left', e.pageX + moveLeft)
      //.appendTo('body');
  }, function() {
    $('.popuptype').hide();
  });

  $('#university-type').mousemove(function(e) {
    $(".popuptype").css('top', e.pageY + moveDown).css('left', e.pageX + moveLeft);
  });


  // Separator

  $('#estyear').hover(function(e) {
    $('.popupyear').show();
      //.css('top', e.pageY + moveDown)
      //.css('left', e.pageX + moveLeft)
      //.appendTo('body');
  }, function() {
    $('.popupyear').hide();
  });

  $('#estyear').mousemove(function(e) {
    $(".popupyear").css('top', e.pageY + moveDown).css('left', e.pageX + moveLeft);
  });


  $('#students').hover(function(e) {
    $('.popupstudents').show();
      //.css('top', e.pageY + moveDown)
      //.css('left', e.pageX + moveLeft)
      //.appendTo('body');
  }, function() {
    $('.popupstudents').hide();
  });

  $('#students').mousemove(function(e) {
    $(".popupstudents").css('top', e.pageY + moveDown).css('left', e.pageX + moveLeft);
  });


  $('#staff').hover(function(e) {
    $('.popupstaff').show();
      //.css('top', e.pageY + moveDown)
      //.css('left', e.pageX + moveLeft)
      //.appendTo('body');
  }, function() {
    $('.popupstaff').hide();
  });

  $('#staff').mousemove(function(e) {
    $(".popupstaff").css('top', e.pageY + moveDown).css('left', e.pageX + moveLeft);
  });

  // Seaprator

  $('#email').hover(function(e) {
    $('.popupemail').show();
      //.css('top', e.pageY + moveDown)
      //.css('left', e.pageX + moveLeft)
      //.appendTo('body');
  }, function() {
    $('.popupemail').hide();
  });

  $('#email').mousemove(function(e) {
    $(".popupemail").css('top', e.pageY + moveDown).css('left', e.pageX + moveLeft);
  });

  // Separator

  $('#phone').hover(function(e) {
    $('.popupphone').show();
      //.css('top', e.pageY + moveDown)
      //.css('left', e.pageX + moveLeft)
      //.appendTo('body');
  }, function() {
    $('.popupphone').hide();
  });

  $('#phone').mousemove(function(e) {
    $(".popupphone").css('top', e.pageY + moveDown).css('left', e.pageX + moveLeft);
  });

  // Separator

  $('#fax').hover(function(e) {
    $('.popupfax').show();
      //.css('top', e.pageY + moveDown)
      //.css('left', e.pageX + moveLeft)
      //.appendTo('body');
  }, function() {
    $('.popupfax').hide();
  });

  $('#fax').mousemove(function(e) {
    $(".popupfax").css('top', e.pageY + moveDown).css('left', e.pageX + moveLeft);
  });

});
  </script>
@endsection
