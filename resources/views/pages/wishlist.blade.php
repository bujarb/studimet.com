@extends('layouts.main')

@section('content')
<div class="row mt-5">
  <div class="col-md-6 offset-md-3 wishlistrow">
    <h1 class="text-center">Wish List</h1>
    <hr>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Course</th>
          <th>University</th>
          <th>Remove</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($wishlist as $wish)
          <tr>
            <td><a href="{{route('view-course',$wish->name)}}">{{$wish->name}}</a></td>
            <td><a href="{{route('view-university',$wish->university_name)}}">{{$wish->university_name}}</a></td>
            <th>
              <form class="" action="{{route('remove-from-wishlist',$wish->id)}}" method="post">
                {{csrf_field()}}
                <input type="submit" value="Remove" class="btn btn-danger btn-sm">
              </form>
            </th>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
