@extends('layouts.main')

@section('styles')
  <style media="screen">
    .show-error{
      border-color: violet;
      color: violet;
    }
  </style>
@endsection

@section('content')
<div class="row">
  <div class="col-md-10 offset-md-1">
    <div class="card text-center" id="searchCard">
      <div class="card-body">
        <h4 class="card-title">Kerkoni kurset tuaja te preferuara</h4>
        <hr class="smallhr">
        <form action="{{route('search-res')}}" method="get">
          <div class="row">
            <div class="col-md-3">
              <input type="text" name="discipline" id="discipline" class="form-control front-search-control" placeholder="Shkruaj drejtimin ...">
            </div>
            <div class="col-md-3">
              <select class="form-control front-search-control" name="city" id="city">
                <option value="" id="first-option">Zgjidhe qytetin e kerkimit</option>
                @foreach ($cities as $city)
                  <option value="{{$city->name}}">{{$city->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="col-md-3">
              <select class="form-control front-search-control" name="type" id="type">
                <option value="" id="first-option">Zgjidhe llogin e kerkimit</option>
                <option value="University">Universitet</option>
                <option value="Course">Kurse</option>
              </select>
            </div>
            <div class="col-md-3">
              <input type="submit" class="btn btn-primary-one btn-block" value="Kerko">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<hr class="bighr m-t-100">

<div class="row m-t-100">
  <div class="col-md-8 offset-md-2">
    <div class="row">
      <div class="col-md-4">
        <div class="card text-white bg-primary-one mb-3" style="max-width: 20rem;" id="type-card">
          <div class="card-header"><a href="#">Gjej drejtime <i class="fa fa-arrow-right"></a></i></div>
          <div class="card-body">
            <h4 class="card-title">Drejtime Universiteti</h4>
            <p class="card-text">Këtu mund të gjeni të gjitha drejtimet nga universitetet në Kosovë</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card text-white bg-primary-one mb-3" style="max-width: 20rem;" id="type-card">
          <div class="card-header"><a href="#">Gjej kurse <i class="fa fa-arrow-right"></a></i></div>
          <div class="card-body">
            <h4 class="card-title">Kurse të ndryshme</h4>
            <p class="card-text">Këtu mund të gjeni të gjitha kurset e gjuhëve dhe kurse të tjera në Kosovë</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card text-white bg-primary-one mb-3" style="max-width: 20rem;" id="type-card">
          <div class="card-header"><a href="#">Gjej trajnime <i class="fa fa-arrow-right"></a></i></div>
          <div class="card-body">
            <h4 class="card-title">Trajnime</h4>
            <p class="card-text">Këtu mund të gjeni të gjitha trajnimet në Kosovë</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection


@section('script')
    <script>
        $( function() {
            $( "#discipline" ).autocomplete({
                source: 'http://127.0.0.1:8000/search'
            });
            var availableTags = [
              "Bachelor",
              "Masters",
              "PHD",
            ];

            var cities = [
              "Ferizaj",
              "Prishtina",
              "Peje",
            ];
            $( "#degree" ).autocomplete({
              source: availableTags
            });
            $( "#city" ).autocomplete({
              source: cities
            });

            if ($("#discipline").val()=="") {
              $('#show-disc-error').show();
            }
        });
    </script>
@endsection
