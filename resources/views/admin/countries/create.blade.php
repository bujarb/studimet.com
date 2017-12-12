@extends('layouts.adminmain')

@section('content')
  <div class="row">
              <div class="col-lg-12">
                  <h1 class="page-header"><i class="fa fa-flag" aria-hidden="true"></i> Create a Country</h1>
              </div>
              <!-- /.col-lg-12 -->
          </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        Create a new country
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
                <form method="post" action="{{route('admin-country-insert')}}" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="">Population</label>
                            <input type="text" name="population" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="">Students</label>
                            <input type="text" name="students" class="form-control">
                        </div>
                    </div><div class="row">
                        <div class="col-md-3">
                            <label for="">Ranked Universities</label>
                            <input type="text" name="ranked_universities" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label for="">Academic Year</label>
                            <input type="text" name="academic_year" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label for="">Country Website</label>
                            <input type="text" name="country_website_link" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label for="">Admission Inquiry</label>
                            <input type="text" name="admission_inquiry_link" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" name="flag" class="form-control">
                        </div>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                        <ul class="nav nav-tabs">
                            <li><a data-toggle="tab" href="#overview">Overview</a></li>
                            <li><a data-toggle="tab" href="#outline">Student Visa</a></li>
                            <li><a data-toggle="tab" href="#facts">Living</a></li>
                            <li><a data-toggle="tab" href="#admission">Institutes</a></li>
                            <li><a data-toggle="tab" href="#fee">Funding & Grants</a></li>
                        </ul>

                        <div class="tab-content">
                            <div id="overview" class="tab-pane fade in active">
                                <textarea name='overview' class="form-control"></textarea>
                            </div>
                            <div id="outline" class="tab-pane fade">
                                <textarea name='student_visa' class="form-control"></textarea>
                            </div>
                            <div id="facts" class="tab-pane fade">
                                <textarea name='living' class="form-control"></textarea>
                            </div>
                            <div id="admission" class="tab-pane fade">
                                <textarea name='institutes' class="form-control"></textarea>
                            </div>
                            <div id="fee" class="tab-pane fade">
                                <textarea name='funding_grants' class="form-control"></textarea>
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
