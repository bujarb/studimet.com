@extends('layouts.adminmain')

@section('content')

<div class="row space">
  <!-- Just some space -->
</div>
<div class="row view-uni-wrapper">
  <div class="col-md-8 col-md-offset-2">
    <div class="col-md-5">
      <h4>Inserted By: <strong>Bujar</strong></h4>
    </div>
    <div class="col-md-2 pull-right" id="icons">
      <form class="" action="{{route('admin-course-delete',$course->name)}}" method="post">
        {{csrf_field()}}
        <button  name="button" class="btn btn-default">Delete <span class="glyphicon glyphicon-trash"></span></button>
      </form>
    </div>
    <div class="col-md-2 pull-right" id="icons">
      <a href="{{route('admin-edit-course',$course->name)}}">Edit <span class="glyphicon glyphicon-pencil"></span></a>
    </div>
  </div>
  <div class="col-md-8 col-md-offset-2">
    <div class="row" id="titleandphoto">
      <div class="col-md-10">
        <h1 class="text-center">Software Development, Msc</h1>
      </div>
    </div>
    <hr>
    <div class="row" id="header-box">
      <div class="col-md-7">
        <i class="fa fa-university" aria-hidden="true" id="header-sign"></i></i> <p><a href="#">University for Bussines and Technology</a>
      </div>
      <div class="col-md-5 pull-right">
      <p><i class="fa fa-clock-o" aria-hidden="true"></i> Computer Science and Engineering</p></div>
    </div>
    <hr>
    <div class="row" id="info-box">
      <div class="col-md-12">
        <div class="col-md-3" id="estyear">
          <p><i class="fa fa-clock-o" aria-hidden="true"></i> 24 Months</p>
        </div>
        <div class="col-md-3" id="email">
          <p><i class="fa fa-language" aria-hidden="true"></i> English</p>
        </div>
        <div class="col-md-3" id="phone">
          <p><i class="fa fa-usd" aria-hidden="true"></i> 2000</p>
        </div>
        <div class="col-md-3" id="fax">
          <p><i class="fa fa-calendar" aria-hidden="true"></i> 12/12/2017</p>
        </div>
      </div>
    </div>
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
    <hr>
    <div class="row" id="social-network-box">
      <div class="row">
        <div class="col-md-6">
          <p class="text-center"><i class="fa fa-globe" aria-hidden="true"></i>  <a href="#">www.facebook.com</a></p>
        </div>
        <div class="col-md-6">
          <p class="text-center"><i class="fa fa-globe" aria-hidden="true"></i> <a href="#">www.twitter.com</a></p>
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
