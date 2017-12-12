@extends('layouts.main')

@section('content')
<div class="row">
    <h2 class="text-center">Course for Uni</h2>
</div>
<hr>
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Name</th>
                <th>Duration</th>
                <th>Language</th>
                <th>Fee</th>
                <th>Deadline</th>
                <th>Description</th>
                <th>University</th>
                <th>Discipline</th>
                <th>Degree</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Computer Science</td>
                <td>24</td>
                <td>Albanian</td>
                <td>80</td>
                <td>01.10.2017</td>
                <td>lkasjdlkasjd</td>
                <td>UBT</td>
                <td>CSE</td>
                <td>Bachelor</td>
                <td><a href="#" class="btn btn-sm btn-primary">Edit</a></td>
                <td><a href="#" class="btn btn-sm btn-danger">Delete</a></td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection