@extends('layouts.main')

@section('content')
<div class="row mt-5 insertuniform">
  <div class="col-md-8 offset-md-2 ">
    <h1 class="text-center">Insert a new university</h1>
    <hr>
    <form class="" action="{{route('university-insert')}}" method="post" enctype="multipart/form-data">
      {{csrf_field()}}
      <div class="form-group">
        <div class="md-form">
            <input type="text" name="name" class="form-control">
            <label  class="">University Name</label>
        </div>
        <div class="row">
          <div class="col-md-3">
            <div class="md-form">
              <input type="text" name="type" id="type" class="form-control">
              <label  class="">Type</label>
            </div>
          </div>
          <div class="col-md-3">
            <div class="md-form">
              <input type="text" name="year" class="form-control">
              <label  class="">Establishment Year</label>
            </div>
          </div>
          <div class="col-md-3">
            <div class="md-form">
              <select class="form-control myselect" name="country">
                @foreach ($countries as $country)
                  <option value="{{$country->id}}">{{$country->name}}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="col-md-3">
            <div class="md-form">
              <select class="form-control myselect" name="city">
                @foreach ($cities as $city)
                  <option value="{{$city->id}}">{{$city->name}}</option>
                @endforeach
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <div class="md-form">
              <input type="text" name="address" class="form-control">
              <label  class="">Address</label>
            </div>
          </div>
          <div class="col-md-3">
            <div class="md-form">
              <input type="text" name="email" class="form-control">
              <label  class="">Email</label>
            </div>
          </div>
          <div class="col-md-3">
            <div class="md-form">
              <input type="text" name="phone" class="form-control">
              <label  class="">Phone</label>
            </div>
          </div>
          <div class="col-md-3">
            <div class="md-form">
              <input type="text" name="fax" class="form-control">
              <label  class="">Fax</label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <div class="md-form">
              <input type="text" name="studentnr" class="form-control">
              <label  class="">Students Numbers</label>
            </div>
          </div>
          <div class="col-md-3">
            <div class="md-form">
              <input type="text" name="faculyschoolnr" class="form-control">
              <label  class="">Faculty School Numbers</label>
            </div>
          </div>
          <div class="col-md-3">
            <div class="md-form">
              <input type="text" name="administrativestaffnr" class="form-control">
              <label  class="">Adminisrative Staff Numbers</label>
            </div>
          </div>
          <div class="col-md-3">
            <div class="md-form">
              <input type="text" name="teachingstaffnr" class="form-control">
              <label  class="">Teaching Staff Number</label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="file-field">
              <div class="btn btn-primary btn-sm">
                  <span>Choose logo</span>
                  <input type="file" name="logo" id="logo">
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="file-field">
              <div class="btn btn-primary btn-sm">
                  <span>Choose backgroung</span>
                  <input type="file" name="backimage" id="backimage">
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-md-3">
            <div class="md-form">
              <input type="text" name="facebook" class="form-control">
              <label  class="">Facebook</label>
            </div>
          </div>
          <div class="col-md-3">
            <div class="md-form">
              <input type="text" name="twitter" class="form-control">
              <label  class="">Twitter</label>
            </div>
          </div>
          <div class="col-md-3">
            <div class="md-form">
              <input type="text" name="linkedin" class="form-control">
              <label  class="">Linkedin</label>
            </div>
          </div>
          <div class="col-md-3">
            <div class="md-form">
              <input type="text" name="instagram" class="form-control">
              <label  class="">Instagram</label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <a href="#" class="btn btn-danger btn-block">Cancel</a>
          </div>
          <div class="col-md-6">
            <input type="submit" value="Insert" class="btn btn-primary btn-block">
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection
