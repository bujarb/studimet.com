@extends('layouts.adminmain')

@section('content')
  <div class="row">
              <div class="col-lg-12">
                  <h1 class="page-header"><i class="fa fa-flag" aria-hidden="true"></i> All Countries</h1>
              </div>
              <!-- /.col-lg-12 -->
          </div>
          <!-- /.row -->
          <div class="row">
              <div class="col-md-10 col-md-offset-1">
                  <div class="panel panel-default">
                      <div class="panel-heading">
                          <div class="row">
                            <div class="col-md-6">
                              Here you can view all countries in this web app.
                            </div>
                            <div class="col-md-2 pull-right">
                              <a href="#" class="btn btn-info btn-sm btn-block" id="btnShowTable" style="display:none;">Show Table</a>
                            </div>
                          </div>
                      </div>
                      <!-- /.panel-heading -->
                      <div class="panel-body">
                          <table width="100%" class="table table-striped table-bordered table-hover" id="dataTable">
                              <thead>
                                  <tr>
                                      <th>Name</th>
                                      <th>Population</th>
                                      <th>Students</th>
                                      <th>Inserted</th>
                                      <th>Edit</th>
                                      <th>Delete</th>
                                      <th>View Full Profile</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  @foreach ($countries as $country)
                                    <tr>
                                        <td>{{$country->name}}</td>
                                        <td>{{$country->population}}</td>
                                        <td>{{$country->students}}</td>
                                        <td>{{$country->created_at->format('M d Y')}}</td>
                                        <td><a href="{{url()->current()}}?id={{$country->id}}" class="btn btn-primary btn-block btn-sm">Edit</a></td>
                                        <td>
                                          <form class="" action="{{route('admin-country-delete',$country->name)}}" method="post">
                                            {{csrf_field()}}
                                            <input type="submit" value="Delete" class="btn btn-danger btn-block btn-sm" />
                                          </form>
                                        </td>
                                        <td><a href="{{route('admin-view-country',$country->name)}}" class="btn btn-info btn-sm">View Full Profile</a></td>
                                    </tr>
                                  @endforeach
                              </tbody>
                          </table>
                      </div>
                      <!-- /.panel-body -->
                  </div>
                  <!-- /.panel -->
              </div>
              <!-- /.col-lg-12 -->
          </div>

          <script type="text/javascript" src="{{ asset('/js/tinymce/tinymce.min.js') }}"></script>
          <script type="text/javascript">
              tinymce.init({
                  selector : "textarea",
                  plugins : ["advlist autolink lists link image charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime media table contextmenu paste"],
                  toolbar : "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
              });
          </script>

          @isset($country)
            <div class="row" id="mypanel" style="display:none;">
              <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">Update this country</h3>
                  </div>
                  <div class="panel-body">
                    <form method="post" action="{{route('admin-country-update',$country->name)}}" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control" value="{{$country->name}}">
                            </div>
                            <div class="col-md-4">
                                <label for="">Population</label>
                                <input type="text" name="population" class="form-control" value="{{$country->population}}">
                            </div>
                            <div class="col-md-4">
                                <label for="">Students</label>
                                <input type="text" name="students" class="form-control" value="{{$country->students}}">
                            </div>
                        </div><div class="row">
                            <div class="col-md-3">
                                <label for="">Ranked Universities</label>
                                <input type="text" name="ranked_universities" class="form-control" value="{{$country->ranked_universities}}">
                            </div>
                            <div class="col-md-3">
                                <label for="">Academic Year</label>
                                <input type="text" name="academic_year" class="form-control" value="{{$country->academic_year}}">
                            </div>
                            <div class="col-md-3">
                                <label for="">Country Website</label>
                                <input type="text" name="country_website_link" class="form-control" value="{{$country->country_website_link}}">
                            </div>
                            <div class="col-md-3">
                                <label for="">Admission Inquiry</label>
                                <input type="text" name="admission_inquiry_link" class="form-control" value="{{$country->admission_inquiry_link}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" name="image" class="form-control">
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
                                    <textarea name='overview' class="form-control">{{$country->overview}}</textarea>
                                </div>
                                <div id="outline" class="tab-pane fade">
                                    <textarea name='student_visa' class="form-control">{{$country->student_visa}}</textarea>
                                </div>
                                <div id="facts" class="tab-pane fade">
                                    <textarea name='living' class="form-control">{{$country->living}}</textarea>
                                </div>
                                <div id="admission" class="tab-pane fade">
                                    <textarea name='institutes' class="form-control">{{$country->institutes}}</textarea>
                                </div>
                                <div id="fee" class="tab-pane fade">
                                    <textarea name='funding_grants' class="form-control">{{$country->funding_grants}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <input type="submit" class="btn btn-primary btn-block" value="Update">
                        </div>
                    </form>
                  </div>
                  <div class="panel-footer">

                  </div>
                </div>
              </div>
            </div>
          @endisset
@endsection

@section('scripts')
<script type="text/javascript">
  $(function(){
    if (/id/.test(window.location.href)){
      $('#btnShowTable').css('display','block');
      $('#dataTable').css('display','none');
      $('#mypanel').fadeIn(1000);
    }else{
        $('#btnShowTable').css('display','none');
      $('#mypanel').hide();
    }

    $('#btnShowTable').on('click',function(){
      $('#mypanel').hide();
      $('#btnShowTable').css('display','none');
      $('#dataTable').toggle();
    });
  });
</script>
@endsection
