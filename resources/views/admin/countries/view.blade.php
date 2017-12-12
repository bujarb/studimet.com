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
  <!-- Pop up -->
<div class="row space">
  <!-- Just some space -->
</div>
<div class="row view-uni-wrapper">
  <div class="col-md-8 col-md-offset-2">
    <div class="row" id="titleandphoto">
      <div class="col-md-2">
        <img src="https://www.crossed-flag-pins.com/animated-flag-gif/images/Flag_Kosovo.jpg" alt="" class="img-responsive pull-left" width="70px">
      </div>
      <div class="col-md-10 pull-right">
        <h1 class="text-center">Kosovo</h1>
      </div>
    </div>
    <hr>
    <div class="row" id="image-box">
      <img src="https://cdn.allwallpaper.in/wallpapers/1600x900/15995/kosovo-prishtina-pristina-1600x900-wallpaper.jpg" alt="" class="img-responsive img-thumbnail">
    </div>
    <div class="row" id="info-box">
      <div class="col-md-12">
        <div class="col-md-4" id="estyear">
          <p class="text-nowrap"><i class="fa fa-calendar" aria-hidden="true"></i> 20000000 People</p>
        </div>
        <div class="col-md-4" id="email">
          <p><i class="fa fa-envelope-o" aria-hidden="true"></i> 100000 Students</p>
        </div>
        <div class="col-md-4" id="phone">
          <p><i class="fa fa-phone" aria-hidden="true"></i> Ranked Uni. 5</p>
        </div>
      </div>
    </div>
    <hr>
    <div class="row" id="descriptions">
      <div class="row" id="overview">
        <div class="row">
          <div class="col-md-2">
            <button type="button" id="btnoverview" class="btn btn-info btn-circle"><span class="glyphicon glyphicon-plus"></span></button>
          </div>
          <div class="col-md-10">
            <h3 class="text-center">Overview</h3>
          </div>
        </div>
        <div class="row" id="overviewview" style="display:none;">
          <p>
            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

            The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
          </p>
        </div>
      </div>
      <hr>
      <div class="row" id="outline">
        <div class="row">
          <div class="col-md-2">
            <button class="btn btn-info btn-circle" id="btnoutline"><span class="glyphicon glyphicon-plus"></span></button>
          </div>
          <div class="col-md-10">
            <h3 class="text-center">Program Outline</h3>
          </div>
        </div>
        <div class="row" id="outlineview" style="display:none;">
          <p>
            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

            The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
          </p>
        </div>
      </div>
      <hr>
      <div class="row" id="facts">
        <div class="row">
          <div class="col-md-2">
            <button class="btn btn-info btn-circle" id="btnfacts"><span class="glyphicon glyphicon-plus"></span></button>
          </div>
          <div class="col-md-10">
            <h3 class="text-center">Key Facts</h3>
          </div>
        </div>
        <div class="row" id="factsview" style="display:none;">
          <p>
            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

            The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
          </p>
        </div>
      </div>
      <hr>
      <div class="row" id="overview">
        <div class="row">
          <div class="col-md-2">
            <button class="btn btn-info btn-circle" id="btnadmission"><span class="glyphicon glyphicon-plus"></span></button>
          </div>
          <div class="col-md-10">
            <h3 class="text-center">Admission Requirements</h3>
          </div>
        </div>
        <div class="row" id="admissionview" style="display:none;">
          <p>
            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

            The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
          </p>
        </div>
      </div>
      <hr>
      <div class="row" id="overview">
        <div class="row">
          <div class="col-md-2">
            <button class="btn btn-info btn-circle" id="btnstudents"><span class="glyphicon glyphicon-plus"></span></button>
          </div>
          <div class="col-md-10">
            <h3 class="text-center">Students Service</h3>
          </div>
        </div>
        <div class="row" id="studentsview" style="display:none;">
          <p>
            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

            The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
          </p>
        </div>
      </div>
      <hr>
      <div class="row" id="overview">
        <div class="row">
          <div class="col-md-2">
            <button class="btn btn-info btn-circle" id="btnfunding"><span class="glyphicon glyphicon-plus"></span></button>
          </div>
          <div class="col-md-10">
            <h3 class="text-center">Fee & Funding</h3>
          </div>
        </div>
        <div class="row" id="fundingview" style="display:none;">
          <p>
            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

            The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
          </p>
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
  $(function(){
    $('#btnoutline').on('click',function(){
      $('#outlineview').slideToggle();
    });

    $('#btnoverview').on('click',function(){
      $('#overviewview').slideToggle();
    });

    $('#btnfacts').on('click',function(){
      $('#factsview').slideToggle();
    });

    $('#btnadmission').on('click',function(){
      $('#admissionview').slideToggle();
    });

    $('#btnstudents').on('click',function(){
      $('#studentsview').slideToggle();;
    });

    $('#btnfunding').on('click',function(){
      $('#fundingview').slideToggle();
    });
  });
</script>
@endsection
