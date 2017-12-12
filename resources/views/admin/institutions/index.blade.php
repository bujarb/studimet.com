@extends('layouts.adminmain')

@section('content')
  <div class="row">
              <div class="col-lg-12">
                  <h1 class="page-header"><i class="fa fa-university" aria-hidden="true"></i> All Institutions</h1>
              </div>
              <!-- /.col-lg-12 -->
          </div>
          <!-- /.row -->
          <div class="row">
              <div class="col-lg-12">
                  <div class="panel panel-default">
                      <div class="panel-heading">
                          Here you can view all universities or course provides.
                      </div>
                      <!-- /.panel-heading -->
                      <div class="panel-body">
                          <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                              <thead>
                                  <tr>
                                      <th>Name</th>
                                      <th>Type</th>
                                      <th>Est. Year</th>
                                      <th>City</th>
                                      <th>Address</th>
                                      <th>Email</th>
                                      <th>View Full Profile</th>
                                      <th>View Courses</th>
                                      <th>Create Course</th>
                                  </tr>
                              </thead>
                              <tbody class="text-center">
                                  @foreach ($institutions as $institution)
                                    <tr>
                                        <td>{{$institution->name}}</td>
                                        <td>{{$institution->type}}</td>
                                        <td>{{$institution->year}}</td>
                                        <td class="center">{{$institution->city}}</td>
                                        <td class="center">{{$institution->address}}</td>
                                        <td class="center">{{$institution->email}}</td>
                                        <td class="center"><a href="{{route('institution.show',$institution->id)}}" class="btn btn-info btn-sm btn-block">View Full Profile</a></td>
                                        <td class="center"><a href="{{route('course.index',$institution->id)}}" class="btn btn-success btn-sm btn-block">View Courses</a></td>
                                        <td class="center"><a href="{{route('course.create')}}" class="btn btn-primary btn-sm btn-block">Add New Course</a></td>
                                    </tr>
                                  @endforeach
                              </tbody>
                          </table>
                      </div>
                      <div class="panel-footer">
                        {{$institutions->links()}}
                      </div>
                      <!-- /.panel-body -->
                  </div>
                  <!-- /.panel -->
              </div>
              <!-- /.col-lg-12 -->
          </div>
@endsection
@section('scripts')
  <!-- Custom Theme JavaScript -->
  <script src="../dist/js/sb-admin-2.js"></script>

  <!-- Page-Level Demo Scripts - Tables - Use for reference -->
  <script>
  $(document).ready(function() {
      $('#dataTables-example').DataTable({
          responsive: true
      });
  });
  </script>
@endsection
