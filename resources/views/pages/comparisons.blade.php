@extends('layouts.main')

@section('styles')

@endsection

@section('content')
<div class="row mt-5 ml-5 comparerow">
  <div class="col-md-2">
    <table class="table columns">
      <thead>
        <tr>
          <th style="height:55px;"></th>
        </tr>
      </thead>
      <tbody>
        <tr class="text-center"><td class="thdatap">University</td></tr>
        <tr class="text-center"><td class="thdatap">Discipline</td></tr>
        <tr class="text-center"><td class="thdatap">Degree</td></tr>
        <tr class="text-center"><td class="thdatap">Duration</td></tr>
        <tr class="text-center"><td class="thdatap">Language</td></tr>
        <tr class="text-center"><td class="thdatap">Fee</td></tr>
        <tr class="text-center"><td class="thdatap">Deadline</td></tr>
        <tr class="text-center"><td class="thdatap">Program Website Link</td></tr>
        <tr class="text-center"><td class="thdatap">Admission Inquiry Link</td></tr>
        <tr class="text-center"><td class="thdatap">Add to wish list</td></tr>
        <tr class="text-center"><td class="thdatap">Remove from comparison</td></tr>
      </tbody>
    </table>
  </div>
  @foreach ($courses as $course)
    <div class="col-md-3">
      <table class="table">
        <thead>
          <tr>
            <th class="text-center coursename"><a href="{{route('view-course',$course->name)}}">{{$course->name}}</a></th>
          </tr>
        </thead>
        <tbody>
          <tr class="text-center"><td>{{$course->university_name}}</td></tr>
          <tr class="text-center"><td>{{$course->disciplines_name}}</td></tr>
          <tr class="text-center"><td>{{$course->degree_name}}</td></tr>
          <tr class="text-center"><td>{{$course->duration}} / Years</td></tr>
          <tr class="text-center"><td>{{$course->language}} </td></tr>
          <tr class="text-center"><td>{{$course->fee}} </td></tr>
          <tr class="text-center"><td>{{$course->deadline}} </td></tr>
          <tr class="text-center"><td>{{$course->program_website_link}}</td></tr>
          <tr class="text-center"><td>{{$course->admission_inquiry_link}} </td></tr>
          <tr class="text-center">
            <td>
              @if (!(App\Helpers\WishListHelper::courseExitInWishList($course->id)))
                <a href="{{route('add-to-wishlist',$course->name)}}"><i class="fa fa-heart-o"></i></a>
              @else
                <form class="" action="{{route('remove-from-wishlist',$course->name)}}" method="post">
                  {{csrf_field()}}
                  <input type="submit" value="Remove" class="btn btn-danger btn-sm">
                </form>
              @endif
            </td>
          </tr>
          <tr class="text-center">
            <td>
              <form class="" action="{{route('remove-from-comparison',$course->id)}}" method="post">
                {{csrf_field()}}
                <input type="submit" value="Remove" class="btn btn-sm btn-danger">
              </form>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  @endforeach
</div>
@endsection
