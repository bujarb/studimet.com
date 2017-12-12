@extends('layouts.main')

@section('content')
  <script type="text/javascript" src="{{ asset('/js/tinymce/tinymce.min.js') }}"></script>
  <script type="text/javascript">
      tinymce.init({
          selector : "textarea",
          plugins : ["advlist autolink lists link image charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime media table contextmenu paste"],
          toolbar : "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
      });
  </script>
<div class="row mt-5">
  <div class="col-md-6 offset-md-3">
    <h1 class="text-center">Edit <strong>{{$course->name}}</strong></h1>
    <hr>
    <form class="" action="{{route('course-insert')}}" method="post">
      {{csrf_field()}}
      <div class="md-form">
          <input type="text" name="name" class="form-control" value="{{$course->name}}">
          <label  class="">Course Name</label>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="md-form">
              <input type="text" name="duration" class="form-control" value="{{$course->duration}}">
              <label  class="">Duration</label>
          </div>
        </div>
        <div class="col-md-3">
          <div class="md-form">
              <input type="text" name="language" class="form-control" value="{{$course->language}}">
              <label  class="">Language</label>
          </div>
        </div>
        <div class="col-md-3">
          <div class="md-form">
              <input type="text" name="fee" class="form-control" value="{{$course->fee}}">
              <label  class="">Fee</label>
          </div>
        </div>
        <div class="col-md-3">
          <div class="md-form">
              <input type="date" name="deadline" class="form-control" value="{{$course->deadline}}">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 offset-md-1">
          <div class="md-form">
              <input type="text" name="websitelink" class="form-control" value="{{$course->program_website_link}}">
              <label  class="">Website Link</label>
          </div>
        </div>
        <div class="col-md-4 ofsset-md-1">
          <div class="md-form">
              <input type="text" name="admissionlink" class="form-control" value="{{$course->admission_inquiry_link}}">
              <label  class="">Admission Inquiry Link</label>
          </div>
        </div>
      </div>
      <div class="row ml-auto">
        <div class="col-md-3">
          <div class="md-form">
            <select class="form-control myselect" name="uni">
              <option value="">- Please Select -</option>
              @foreach ($universities as $institution)
                <option value="{{$institution->id}}">{{$institution->name}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="col-md-3">
          <div class="md-form">
            <select class="form-control myselect" name="discipline">
              <option value="">- Please Select -</option>
              @foreach ($disciplines as $discipline)
                <option value="{{$discipline->id}}">{{$discipline->name}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="col-md-3">
          <div class="md-form">
            <select class="form-control myselect" name="degree">
              <option value="">- Please Select -</option>
              @foreach ($degrees as $degree)
                <option value="{{$degree->id}}">{{$degree->display_name}}</option>
              @endforeach
            </select>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs nav-justified">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#panel1" role="tab">Overview</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#panel2" role="tab">Program Outline</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#panel3" role="tab">Facts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#panel4" role="tab">Admission Requirements</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#panel5" role="tab">Students</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#panel6" role="tab">Funding</a>
            </li>
        </ul>
        <!-- Tab panels -->
        <div class="tab-content card">
            <div class="tab-pane fade in show active" id="panel1" role="tabpanel"><textarea name='overview' class="form-control"></textarea></div>
            <div class="tab-pane fade in show" id="panel2" role="tabpanel"><textarea name='outline' class="form-control"></textarea></div>
            <div class="tab-pane fade in show" id="panel3" role="tabpanel"><textarea name='facts' class="form-control"></textarea></div>
            <div class="tab-pane fade in show" id="panel4" role="tabpanel"><textarea name='admission' class="form-control"></textarea></div>
            <div class="tab-pane fade in show" id="panel5" role="tabpanel"><textarea name='students' class="form-control"></textarea></div>
            <div class="tab-pane fade in show" id="panel6" role="tabpanel"><textarea name='funding' class="form-control"></textarea></div>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-md-6">
          <a href="#" class="btn btn-danger btn-block">Cancel</a>
        </div>
        <div class="col-md-6">
          <input type="submit" value="Insert" class="btn btn-primary btn-block">
        </div>
      </div>
    </form>
  </div>
</div>
@endsection
