@extends('layouts.adminmain')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"><i class="fa fa-university" aria-hidden="true"></i> Edit {{$institution->name}}</h1>
    </div>
</div>
<div class="row">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Create a new university</h3>
      </div>
      <div class="panel-body">
        <div class="col-md-6">
            <form action="{{route('admin-update-insert',$institution->name)}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" placeholder="Name" id="name" name="name" value="{{$institution->name}}">
                </div>
                <div class="form-group">
                    <label for="name">Type</label>
                    <select name="type" id="type" class="form-control" value="{{$institution->type}}">
                        <option value="public">Public</option>
                        <option value="private">Private</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="name">Established Year</label>
                    <input type="text" name="year" id="year" class="form-control" value="{{$institution->establishment_year}}">
                </div>
                <div class="form-group">
                    <label for="country">Country</label>
                    <select name="country" id="country" class="form-control">
                        @foreach($countries as $country)
                            <option value="{{$country->id}}">{{$country->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="country">City</label>
                    <select name="city" id="city" class="form-control">
                        @foreach($cities as $city)
                            <option value="{{$city->id}}">{{$city->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="country">Address</label>
                    <input type="text" name="address" id="address" class="form-control" value="{{$institution->address}}">
                </div>
                <div class="form-group">
                    <label for="country">Email</label>
                    <input type="text" name="email" id="email" class="form-control" value="{{$institution->email}}">
                </div>
                <div class="form-group">
                    <label for="country">Phone</label>
                    <input type="text" name="phone" id="phone" class="form-control" value="{{$institution->phone_number}}">
                </div>
                <div class="form-group">
                    <label for="country">Fax</label>
                    <input type="text" name="fax" id="fax" class="form-control" value="{{$institution->fax}}">
                </div>
                <div class="form-group">
                    <label for="country">Students number</label>
                    <input type="text" name="studentnr" id="studentnr" class="form-control" value="{{$institution->students_numbers}}">
                </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="name">Faculty School Number</label>
                <input type="text" id="faculyschoolnr" name="faculyschoolnr" class="form-control" value="{{$institution->faculty_school_numbers}}">
            </div>
            <div class="form-group">
                <label for="name">Administrative Staff Number</label>
                <input type="text" id="administrativestaffnr" name="administrativestaffnr" class="form-control" value="{{$institution->administrative_staff_number}}">
            </div>
            <div class="form-group">
                <label for="name">Teaching Staff Number</label>
                <input type="text" id="teachingstaffnr" name="teachingstaffnr" class="form-control" value="{{$institution->teaching_staff_number}}">
            </div>
            <div class="form-group">
                <label for="name">Logo</label>
                <input type="file" id="logo" name="logo" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">Back Image</label>
                <input type="file" id="backimage" name="backimage" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Facebook Page</label>
                <input type="text" id="facebook" name="facebook" class="form-control" value="{{$institution->facebook_page}}">
            </div>
            <div class="form-group">
                <label for="name">Twitter Page</label>
                <input type="text" id="twitter" name="twitter" class="form-control" value="{{$institution->twitter_page}}">
            </div>
            <div class="form-group">
                <label for="name">LinkedIn Page</label>
                <input type="text" id="linkedin" name="linkedin" class="form-control" value="{{$institution->linkedin_page}}">
            </div>
            <div class="form-group">
                <label for="name">Instagram Page</label>
                <input type="text" id="instagram" name="instagram" class="form-control" value="{{$institution->instagram_page}}">
            </div>
            <input type="submit" value="Insert" class="btn btn-primary btn-block">
            </form>
        </div>
      </div>
      <div class="panel-footer">

      </div>
    </div>
</div>
@endsection
