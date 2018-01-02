@extends('layouts.adminmain')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"><i class="fa fa-university" aria-hidden="true"></i> View courses for {{$inst_name}}</h1>
    </div>
</div>
<div class="row">
  <div class="col-md-8 col-md-offset-1">
    <div class="list-group">
      @if (count($courses)>0)
        @foreach ($courses as $course)
          <div class="row">
            <div class="col-md-10">
              <a href="{{route('course.show',$course->id)}}" class="list-group-item">{{$course->name}}</a>
            </div>
            <div class="col-md-1">
              <form class="" action="{{route('course.destroy',$course->id)}}" method="post">
                {{csrf_field()}}

                <a href="#" data-toggle="modal" data-target="#myModal" class="list-group-item"><i class="fa fa-trash"></i></a>

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
                            <button name="button" class="btn btn-delete btn-block">Delete</button>
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
            </div>
            <div class="col-md-1">
              <a href="{{route('course.edit',$course->id)}}" class="list-group-item"><i class="fa fa-edit"></i></a>
            </div>
          </div>
          <hr>
        @endforeach
      @else
        <h1 class="text-center text-danger">No courses found for this institution</h1>
      @endif
    </div>
  </div>
</div>
@endsection
