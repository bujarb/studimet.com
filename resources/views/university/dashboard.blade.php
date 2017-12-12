@extends('layouts.account')

@section('content')
<div class="row">
  <div class="col-md-8 offset-md-2 mt-5">
    <h1 class="text-center">Your university dashboard page</h1>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Type</th>
          <th>Website</th>
          <th>Country</th>
          <th>City</th>
          <th>Phone Number</th>
          <th>Fax</th>
          <th>Completed</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>{{$institution->name}}</td>
          <td>{{$institution->email}}</td>
          <td>{{$institution->type}}</td>
          <td>{{$institution->wesbite}}</td>
          <td>{{$institution->country}}</td>
          <td>{{$institution->city}}</td>
          <td>{{$institution->phone_number}}</td>
          <td>{{$institution->fax}}</td>
          <td>{{$institution->completed == 1 ? 'Completed' : 'Not Completed'}}</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<div class="row">
  <div class="col-md-8 offset-md-2 mt-5">
    <h1 class="text-center">Your university courses</h1>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Name</th>
          <th>Duration</th>
          <th>Language</th>
          <th>Fee</th>
          <th>Deadline</th>
          <th>Discipline</th>
          <th>Degree</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($courses as $course)
          <tr>
            <td>{{$course->name}}</td>
            <td>{{$course->duration}}</td>
            <td>{{$course->language}}</td>
            <td>{{$course->fee}}</td>
            <td>{{$course->deadline}}</td>
            <td>{{$course->discipline_id}}</td>
            <td>{{$course->degree_id}}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
