@extends('layouts.main')

@section('content')
  <div class="row searchresultsrow">
      <div class="col-md-8 offset-md-2">
          <p class="text-info headersp">{{count($courses)}} total results</p>
          Courses in
          @foreach (Request::all() as $request)
            <a href="#" class="headers">{{$request}}</a>
          @endforeach
          <hr>
          @foreach($courses as $course)
            <!--News card-->
              <div class="card border-primary mb-3 text-center hoverable">
                <div class="card-body">
                    <div class="row">
                      <div class="col-md-6 text-left">
                        <h4><strong>{{$course->name}}</strong>, {{$course->degree_name}}</h4>
                      </div>
                      <div class="col-md-6 text-right">
                        <a href="{{route('view-university',$course->university_name)}}" class="green-text">
                          <h6 class="font-bold"><i class="fa fa-desktop"></i> {{$course->university_name}}</h6>
                        </a>
                      </div>
                    </div>
                    <div class="row mb-2">
                      <div class="col-md-6 text-left countryinfo">
                        <a href="#">{{$course->countryname}}</a> , <a href="#">{{$course->cityname}}</a>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                          <!--Featured image-->
                          <div class="view overlay hm-white-slight">
                              <img src="{{$course->image}}" class="img-fluid" alt="Sample image for first version of blog listing">
                              <a>
                                  <div class="mask"></div>
                              </a>
                          </div>
                      </div>
                      <div class="col-md-7 text-left ml-3 ">

                          <!--Excerpt-->
                          <div class="row mt-3 smallinfo">
                            <div class="col-md-4">
                              <p><i class="fa fa-usd" aria-hidden="true"></i> {{$course->fee}} / Year</p>
                            </div>
                            <div class="col-md-4">
                              <p><i class="fa fa-clock-o" aria-hidden="true"></i> {{$course->duration}} Years</p>
                            </div>
                            <div class="col-md-4">
                              <p><i class="fa fa-comment-o" aria-hidden="true"></i> {{$course->language}}</p>
                            </div>
                            <hr>
                          </div>
                          <div class="row">
                            {{str_limit($course->overview, $limit = 200, $end = '...')}}
                          </div>
                          <div class="row mt-3 text-center pull-right ">
                            <div class="col-md-4 ">
                              <a href="{{route('view-course',$course->name)}}" class="btn btn-info">View</a>
                            </div>
                            <div class="col-md-8 ">
                                @if (!(\App\MyFacades\Comparison::courseExits($course->id)))
                                  <form class="" action="{{route('add-to-comparison',$course->id)}}" method="post">
                                    {{csrf_field()}}
                                    <input type="submit" value="Compare" class="btn btn-primary">
                                  </form>
                                @else
                                  <form class="" action="#" method="post">
                                    {{csrf_field()}}
                                    <input type="submit" value="Remove" class="btn btn-primary">
                                  </form>
                                @endif
                            </div>
                          </div>
                      </div>
                      <!--Grid column-->
                    </div>
                </div>
              </div>
              <!--News card-->
          @endforeach
            {{$courses->appends(request()->input())->links()}}
      </div>
  </div>
@endsection
