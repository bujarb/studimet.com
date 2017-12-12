@extends('layouts.adminmain')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"><i class="fa fa-flag" aria-hidden="true"></i> Disciplines & Degrees</h1>
    </div>
</div>
    <div class="row">
        <div class="col-md-7">
            <div class="panel panel-default">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-md-6" style="margin-top:5px;">
                    <h3 class="panel-title">View and Manage disciplines</h3>
                  </div>
                  <div class="col-md-3 pull-right">
                    <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">Add new discipline</a>
                  </div>
                </div>
              </div>
              <div class="panel-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Nmae</th>
                        <th>Description</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($disciplines as $discipline)
                        <tr>
                            <td>{{$discipline->name}}</td>
                            <td>{{$discipline->description}}</td>
                            <td><a href="{{url()->current()}}?disciplineid={{$discipline->id}}" class="btn btn-info btn-sm">Edit</a></td>
                            <td>
                              <form class="" action="{{route('discipline.destroy',$discipline->id)}}" method="post">
                                {{csrf_field()}}
                                <input type="submit" class="btn btn-danger btn-sm">
                              </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
              </div>
              <div class="panel-footer">
                {{$disciplines->links()}}
              </div>
            </div>
            @isset($discipline)
              <div class="panel panel-default" style="display:none;" id="disciplinePanel">
                <div class="panel-heading">
                  <h3 class="panel-title">Update Discipline</h3>
                </div>
                <div class="panel-body">
                  <form class="" action="{{route('discipline.update',$discipline->id)}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                      <label for="">Discipline Name</label>
                      <input type="text" name="name" class="form-control" value="{{$discipline->name}}">
                    </div>
                    <div class="form-group">
                      <label for="">Discipline Description</label>
                      <textarea name="description" rows="8" cols="80">{{$discipline->description}}</textarea>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-6">
                          <input type="submit" class="btn btn-primary btn-block" value="Update">
                        </div>
                        <div class="col-md-6">
                          <input type="submit" class="btn btn-danger btn-block" value="Cancel">
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="panel-footer">

                </div>
              </div>
            @endisset
        </div>
        <div class="col-md-5">
          <div class="panel panel-default">
            <div class="panel-heading">
              <div class="row">
                <div class="col-md-6">
                  <h3 class="panel-title">View and Manage degrees</h3>
                </div>
                <div class="col-md-3">
                  <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#newDegree">Insert new degree</a>
                </div>
              </div>
            </div>
            <div class="panel-body">
              <table class="table table-bordered">
                  <thead>
                  <tr>
                      <th>Nmae</th>
                      <th>Description</th>
                      <th>Edit</th>
                      <th>Delete</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($degrees as $degree)
                      <tr>
                          <td>{{$degree->name}}</td>
                          <td>{{$degree->display_name}}</td>
                          <td><a href="{{url()->current()}}?degreeid={{$degree->id}}" class="btn btn-info btn-sm">Edit</a></td>
                          <td>
                            <form class="" action="{{route('degree.destroy',$degree->id)}}" method="post">
                              {{csrf_field()}}
                              <input type="submit" class="btn btn-danger btn-sm">
                            </form>
                          </td>
                      </tr>
                  @endforeach
                  </tbody>
              </table>
            </div>
            <div class="panel-footer">

            </div>
          </div>
          <div class="panel panel-default" id="degreePanel" style="dispay:none;">
            <div class="panel-heading">
              <h3 class="panel-title">Update degree</h3>
            </div>
            <div class="panel-body">
              <form class="" action="#" method="post">
                {{csrf_field()}}
                <div class="form-group">
                  <label for="">Degree Name</label>
                  <input type="text" name="name" class="form-control" value="{{$degree->name}}">
                </div>
                <div class="form-group">
                  <label for="">Degree Display Name</label>
                  <input type="text" name="display_name" class="form-control" value="{{$degree->display_name}}">
                </div>
                <div class="form-group">
                  <input type="submit" class="btn btn-primary btn-block">
                </div>
              </form>
            </div>
            <div class="panel-footer">

            </div>
          </div>
        </div>
    </div>


    <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Insert a new discipline</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <form class="" action="{{route('discipline.store')}}" method="post">
              {{csrf_field()}}
              <div class="form-group">
                <label for="">Discipline Name</label>
                <input type="text" name="name" class="form-control">
              </div>
              <div class="form-group">
                <label for="">Discipline Description</label>
                <textarea name="description" rows="8" cols="43"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary btn-block">
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
    <!-- Modal -->
<div id="newDegree" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Insert a new degree</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <form class="" action="{{route('degree.store')}}" method="post">
              {{csrf_field()}}
              <div class="form-group">
                <label for="">Discipline Name</label>
                <input type="text" name="name" class="form-control">
              </div>
              <div class="form-group">
                <label for="">Discipline Description</label>
                <input type="text" name="display_name" class="form-control">
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary btn-block">
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
@endsection

@section('scripts')
  <script type="text/javascript">
    $(function(){
      if (/disciplineid/.test(window.location.href)){
        $('#disciplinePanel').fadeIn(1000);
      }else{
        $('#disciplinePanel').hide();
      }

      if (/degreeid/.test(window.location.href)){
        $('#degreePanel').fadeIn(1000);
      }else{
        $('#degreePanel').hide();
      }
    });
  </script>
@endsection
