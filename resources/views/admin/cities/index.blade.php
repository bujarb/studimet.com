@extends('layouts.adminmain')

@section('content')
<div class="row">
  <div class="col-lg-12">
      <h1 class="page-header"><i class="fa fa-flag" aria-hidden="true"></i> All Cities</h1>
  </div>
</div>
<div class="row">
  <div class="col-md-6 col-md-offset-3" id="colmdof2">
    <div class="panel panel-default">
      <div class="panel-heading">
        <div class="row">
          <div class="col-md-4">
            <h3 class="panel-title">View all cities</h3>
          </div>
        </div>
      </div>
      <div class="panel-body">
      @if (count($cities)>0)
        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cities as $city)
                  <tr>
                      <td>{{$city->name}}</td>
                      <td><a href="{{route('city.edit',$city->id)}}" class="btn btn-primary btn-sm btn-block">Edit</a></td>
                      <td>
                          <a href="#" data-toggle="modal" class="btn btn-danger btn-sm btn-block" data-target="#myModal">Delete</a>
                          
                          <form action="{{route('city.destroy',$city->id)}}" method="post">
                          {{csrf_field()}}
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
                                      <input type="submit" class="btn btn-delete btn-block" value="Delete">
                                    </div>
                                    <div class="col-md-6">
                                      <button data-dismiss="modal" class="btn btn-default btn-block">Close</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          {{ method_field('DELETE') }}
                        </form>
                      </td>
                  </tr>
                @endforeach
            </tbody>
        </table>
      @else
        <p class="text-center text-danger">No cities found</p>
      @endif
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
  <script type="text/javascript">
    $(function(){
      if (/id/.test(window.location.href)){
        $('#colmdof2').removeClass('col-md-offset-3');
        $('#mypanel').fadeIn(1000);
      }else{
        $('#mypanel').hide();
      }
    });
  </script>
@endsection
