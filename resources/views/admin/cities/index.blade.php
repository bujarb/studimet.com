@extends('layouts.adminmain')

@section('content')
  @section('content')
    <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-flag" aria-hidden="true"></i> All Cities</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
<div class="row">
  <div class="col-md-6 col-md-offset-3" id="colmdof2">
    <div class="panel panel-default">
      <div class="panel-heading">
        <div class="row">
          <div class="col-md-4">
            <h3 class="panel-title">View all cities</h3>
          </div>
          <div class="col-md-4 pull-right">
            <select class="form-control" name="conutry" id="country">
              <option value="1">Kosovo</option>
            </select>
          </div>
        </div>
      </div>
      <div class="panel-body">
      @if (count($cities)>0)
        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Country</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cities as $city)
                  <tr>
                      <td>{{$city->name}}</td>
                      <td>{{$city->countryname}}</td>
                      <td><a href="{{url()->current()}}?id={{$city->id}}" id="btnEdit"class="btn btn-primary btn-sm btn-block">Edit</a></td>
                      <td>
                        <form action="{{route('admin-city-delete',$city->name)}}" method="post">
                          {{csrf_field()}}
                          <input type="submit" value="Delete" class="btn btn-danger btn-sm btn-block">
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
  @isset($city)
    <div class="col-md-6">
      <div class="panel panel-default" style="display:none;" id="mypanel">
        <div class="panel-heading">
          <h3 class="panel-title">Update the city</h3>
        </div>
        <div class="panel-body">
          <form class="" action="{{route('admin-city-update',$city->id)}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
              <label for="">Name</label>
              <input type="text" name="city" id="city" value="{{$city->name}}" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Country</label>
              <select class="form-control" name="country" id="country">
                @foreach ($countries as $country)
                  <option value="{{$country->id}}" selected="{{$city->country}}">{{$country->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="row">
              <div class="col-md-6">
                <a href="{{url('admin/cities')}}" class="btn btn-danger btn-sm btn-block">Cancel</a>
              </div>
              <div class="col-md-6">
                <input type="submit" value="Update" class="btn btn-primary btn-sm btn-block">
              </div>
            </div>
          </form>
        </div>
        <div class="panel-footer">

        </div>
      </div>
    </div>
  @endisset
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
