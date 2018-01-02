@extends('layouts.adminmain')

@section('content')
  <div class="row">
              <div class="col-lg-12">
                  <h1 class="page-header"><i class="fa fa-book" aria-hidden="true"></i> Edit <strong>{{$course->name}}</strong></h1>
              </div>
              <!-- /.col-lg-12 -->
          </div>
    <div class="panel panel-default">
      <div class="panel-heading">
          Edit course
      </div>
      <div class="panel-body">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <script type="text/javascript" src="{{ asset('/js/tinymce/tinymce.min.js') }}"></script>
                <script type="text/javascript">
                    tinymce.init({
                        selector : "textarea",
                        plugins : ["advlist autolink lists link image charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime media table contextmenu paste"],
                        toolbar : "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
                    });
                </script>
                <form method="post" action="{{route('admin-course-update',$course->id)}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="">Course Name</label>
                        <input required="required" type="text" name="name" class="form-control" value="{{$course->name}}"/>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">University</label>
                                <select name="uni" id="uni" class="form-control">
                                    @foreach($universities as $uni)
                                        <option value="{{$uni->id}}">{{$uni->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="">Discipline</label>
                            <select name="degree" id="degree" class="form-control">
                                @foreach($degrees as $degree)
                                    <option value="{{$degree->id}}">{{$degree->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">Degree</label>
                            <select name="discipline" id="discipline" class="form-control">
                                @foreach($disciplines as $discipline)
                                    <option value="{{$discipline->id}}">{{$discipline->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Duration</label>
                                <input required="required" type="text" name="duration" class="form-control" value="{{$course->duration}}"/>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Language</label>
                                <input required="required" type="text" name="language" class="form-control" value="{{$course->language}}"/>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Fee</label>
                                <input required="required" type="text" name="fee" class="form-control" value="{{$course->fee}}"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="">Deadline</label>
                            <input type="date" class="form-control" name="deadline" value="{{$course->deadline}}">
                        </div>
                        <div class="col-md-4">
                            <label for="">Website Link</label>
                            <input type="text" class="form-control" name="websitelink" value="{{$course->	program_website_link}}">
                        </div>
                        <div class="col-md-4">
                            <label for="">Admission Link</label>
                            <input type="text" class="form-control" name="admissionlink" value="{{$course->admission_inquiry_link}}">
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#overview">Overview</a></li>
                            <li><a data-toggle="tab" href="#outline">Programme Outline</a></li>
                            <li><a data-toggle="tab" href="#facts">Key Facts</a></li>
                            <li><a data-toggle="tab" href="#admission">Admission Requirments</a></li>
                            <li><a data-toggle="tab" href="#service">Student Service</a></li>
                            <li><a data-toggle="tab" href="#fee">Fee & Funding</a></li>
                        </ul>

                        <div class="tab-content">
                            <div id="overview" class="tab-pane fade in active">
                                <textarea name='overview' class="form-control">{{$course->overview}}</textarea>
                            </div>
                            <div id="outline" class="tab-pane fade">
                                <textarea name='outline' class="form-control">{{$course->programme_outline}}</textarea>
                            </div>
                            <div id="facts" class="tab-pane fade">
                                <textarea name='facts' class="form-control">{{$course->key_facts}}</textarea>
                            </div>
                            <div id="admission" class="tab-pane fade">
                                <textarea name='admission' class="form-control">{{$course->addmission_requirments}}</textarea>
                            </div>
                            <div id="service" class="tab-pane fade">
                                <textarea name='students_service' class="form-control">{{$course->students_service}}</textarea>
                            </div>
                            <div id="fee" class="tab-pane fade">
                                <textarea name='funding' class="form-control">{{$course->fee_funding}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <input type="submit" class="btn btn-primary btn-block" value="Insert">
                    </div>
                </form>
            </div>
        </div>
      </div>
    </div>
@endsection
