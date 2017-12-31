@extends('layouts.main')

@section('styles')
<style media="screen">
  #rescontent{
    display: none;
  }

  .preload{
    margin: 0px;
    position: absolute;
    top: 30%;
    left: 35%;
  }

  .expandbox{
    margin-left: 20px;
  }


  .filtersbox p,h4{
    color:#f05f40!important;
  }

  #arrow-down{
    margin-top: 5px;
  }

  .checklabel{
    margin:0px;
    padding: 0px;
    margin-left: 10px;
  }

  .fa-circle{
    margin-top: 10px;
    font-size: 15px;
  }
  .myhr{
    background-color: #f05f40;
  }

</style>
@endsection

@section('loading')
  <div class="preload">
    <img src="{{asset('images/other/loader1.gif')}}" alt="">
  </div>
@endsection

@section('content')
<div class="row m-t-40">
  <div class="col-md-2 offset-md-1 m-t-20 filtersbox">
    <h4>Additional Filters <i class="fa fa-circle pull-right" id="expandi"></i></h4>
    <hr class="myhr">
    <div id="expanddiv">
      <div class="box">
        <p id="price">Price</i></p>
        <div class="expandbox" id="expandbox">
          <div class="smallbox">
            <input type="checkbox" name="" value=""> <label class="checklabel">Low to high</label>
          </div>
          <div class="smallbox">
            <input type="checkbox" name="" value=""> <label class="checklabel">High to low</label>
          </div>
        </div>
      </div>
      <div class="box m-t-20">
        <p id="control">Control Type</p>
        <div class="expandbox" id="expandbox">
          <div class="smallbox">
            <input type="checkbox" name="" value=""> <label class="checklabel">Public</label>
          </div>
          <div class="smallbox">
            <input type="checkbox" name="" value=""> <label class="checklabel">Private</label>
          </div>
        </div>
      </div>
      <div class="box m-t-20">
        <p id="type">Type</p>
        <div class="expandbox" id="expandbox">
          <div class="smallbox">
            <input type="checkbox" name="" value=""> <label class="checklabel">Bachelor</label>
          </div>
          <div class="smallbox">
            <input type="checkbox" name="" value=""> <label class="checklabel">Masters</label>
          </div>
          <div class="smallbox">
            <input type="checkbox" name="" value=""> <label class="checklabel">A1</label>
          </div>
          <div class="smallbox">
            <input type="checkbox" name="" value=""> <label class="checklabel">A2</label>
          </div>
          <div class="smallbox">
            <input type="checkbox" name="" value=""> <label class="checklabel">B1</label>
          </div>
          <div class="smallbox">
            <input type="checkbox" name="" value=""> <label class="checklabel">B2</label>
          </div>
          <div class="smallbox">
            <input type="checkbox" name="" value=""> <label class="checklabel">C1</label>
          </div>
          <div class="smallbox">
            <input type="checkbox" name="" value=""> <label class="checklabel">C2</label>
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-primary-one btn-block m-t-20" id="">Apply</button>
    </div>
  </div>
  <div class="col-md-6 offset-md-2" id="rescontent">
    @foreach ($courses as $course)
      <div class="row resultsrow">
        <div class="col-md-12">
          <div class="row results-header">
            <div class="col-md-8">
              <h3 class="text-nowrap m-l-5 results-name">{{$course->name}}</h3>
              <p class="text-nowrap results-discname">{{$course->discname}}</p>
              <p class="text-nowrap results-discname"><i class="fa fa-university"></i> {{$course->inst_name}}</p>
            </div>
          </div>
          <div class="row results-info">
            <div class="col-md-12 results-info-box">
              <div class="row">
                <div class="col-md-2">
                  <p class="text-center">{{$course->fee}} <i class="fa fa-euro"></i></p>
                </div>
                <div class="col-md-2">
                  <p class="text-center">{{$course->deadline}} <i class="fa fa-calendar"></i></p>
                </div>

                <div class="col-md-2">
                  <p class="text-center">{{$course->duration}} Vjet</i></p>
                </div>

                <div class="col-md-2">
                  <p class="text-center">{{$course->degree}} <i class="fa fa-book"></i></i></p>
                </div>
              </div>
            </div>
          </div>
          <div class="row results-footer">
            <div class="col-md-3">
              <form action="{{route('comparison.add',$course->id)}}" method="post">
                {{csrf_field()}}
                <input type="submit" class="btn btn-primary-outline-one btn-block" value="Compare">
              </form>
            </div>
            <div class="col-md-2">
              <a href="#" class="btn btn-primary-outline-one btn-block"><i class="fa fa-heart"></i></a>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
@endsection

@section('script')
  <script type="text/javascript">
    $(function(){
      $(".preload").fadeOut(2000,function(){
        $("#rescontent").fadeIn(1000);
      });

      $('#expandi').on('click', function(event) {
        event.preventDefault();
        $('#expanddiv').toggle();
      });
    });
  </script>
@endsection
