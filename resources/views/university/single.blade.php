@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col-md-8 uniwrapper">
        <div class="row">
            <div class="col-md-9"> <h1>University Name</h1></div>
            <div class="col-md-3 pull-right" style="margin-top: 15px;">
                <a href="#myModal" class="btn btn-warning" data-toggle="modal" data-target="#myModal">Edit this university <i class="fa fa-pencil" aria-hidden="true"></i></a>
            </div>
        </div>
        <hr>
        <img src="https://www.oxforduniversityimages.com/images/rotate/Image_Spring_17_8.gif" alt="" class="img-responsive center-block img-thumbnail img-rounded">
        <hr>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="col-md-2">
                    <button type="button" class="btn btn-info" id="btn1">Show / Hide Info <i class="glyphicon glyphicon-plus-sign"></i></button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1" id="infoTable1" style="display: none;">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Type</th>
                            <th>Established Year</th>
                            <th>Country</th>
                            <th>City</th>
                            <th>Location</th>
                            <th>Email</th>
                            <th>Phone</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Private</td>
                            <td>2013</td>
                            <td>Kosovo</td>
                            <td>Ferizaj</td>
                            <td>Rr. Deshmoret e Kombit</td>
                            <td>ubt@uni.net</td>
                            <td>+123456789</td>
                        </tr>
                    </tbody>
                </table>
                <hr>
            </div>
        </div>
        <hr>
    </div>
    <div class="col-md-4 uniwrapper">
        <div class="row">
            <div class="col-md-6"><h1>View Courses</h1></div>
            <div class="col-md-3 pull-right" style="margin-top: 15px;">
                <a href="#" class="btn btn-success pull-right" id="addNewCourse">Add a new course <i class="fa fa-plus-circle" aria-hidden="true"></i></a>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <a href="#" class="btn btn-default btn-block" id="courseInfo">Course1 <i class="glyphicon glyphicon-circle-arrow-right pull-right"></i></a>
                <a href="#" class="btn btn-default btn-block" id="courseInfo">Course1 <i class="glyphicon glyphicon-circle-arrow-right pull-right"></i></a>
                <a href="#" class="btn btn-default btn-block" id="courseInfo">Course1 <i class="glyphicon glyphicon-circle-arrow-right pull-right"></i></a>
                <a href="#" class="btn btn-default btn-block" id="courseInfo">Course1 <i class="glyphicon glyphicon-circle-arrow-right pull-right"></i></a>
                <a href="#" class="btn btn-default btn-block" id="courseInfo">Course1 <i class="glyphicon glyphicon-circle-arrow-right pull-right"></i></a>
                <a href="#" class="btn btn-default btn-block" id="courseInfo">Course1 <i class="glyphicon glyphicon-circle-arrow-right pull-right"></i></a>
                <a href="#" class="btn btn-default btn-block" id="courseInfo">Course1 <i class="glyphicon glyphicon-circle-arrow-right pull-right"></i></a>
                <a href="#" class="btn btn-default btn-block" id="courseInfo">Course1 <i class="glyphicon glyphicon-circle-arrow-right pull-right"></i></a>
                <a href="#" class="btn btn-default btn-block" id="courseInfo">Course1 <i class="glyphicon glyphicon-circle-arrow-right pull-right"></i></a>
                <a href="#" class="btn btn-default btn-block" id="courseInfo">Course1 <i class="glyphicon glyphicon-circle-arrow-right pull-right"></i></a>
                <a href="#" class="btn btn-default btn-block" id="courseInfo">Course1 <i class="glyphicon glyphicon-circle-arrow-right pull-right"></i></a>
                <a href="#" class="btn btn-default btn-block" id="courseInfo">Course1 <i class="glyphicon glyphicon-circle-arrow-right pull-right"></i></a>
                <a href="#" class="btn btn-default btn-block" id="courseInfo">Course1 <i class="glyphicon glyphicon-circle-arrow-right pull-right"></i></a>
                <a href="#" class="btn btn-default btn-block" id="courseInfo">Course1 <i class="glyphicon glyphicon-circle-arrow-right pull-right"></i></a>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Edit this university</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <form action="#" method="post">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" placeholder="Name" id="name" name="name">
                            </div>
                            <div class="form-group">
                                <label for="name">Type</label>
                                <select name="type" id="type" class="form-control">
                                    <option value="public">Public</option>
                                    <option value="private">Private</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="name">Established Year</label>
                                <input type="text" name="year" id="year" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="country">Country</label>
                                <select name="country" id="country" class="form-control">

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="country">City</label>
                                <select name="city" id="city" class="form-control">

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="country">Address</label>
                                <input type="text" name="address" id="address" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="country">Email</label>
                                <input type="text" name="email" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="country">Phone</label>
                                <input type="text" name="phone" id="phone" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="country">Fax</label>
                                <input type="text" name="fax" id="fax" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="country">Students number</label>
                                <input type="text" name="studentnr" id="studentnr" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Faculty School Number</label>
                                <input type="text" id="faculyschoolnr" name="faculyschoolnr" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="name">Administrative Staff Number</label>
                                <input type="text" id="administrativestaffnr" name="administrativestaffnr" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="name">Teaching Staff Number</label>
                                <input type="text" id="teachingstaffnr" name="teachingstaffnr" class="form-control">
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
                                <input type="text" id="facebook" name="facebook" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="name">Twitter Page</label>
                                <input type="text" id="twitter" name="twitter" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="name">LinkedIn Page</label>
                                <input type="text" id="linkedin" name="linkedin" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="name">Instagram Page</label>
                                <input type="text" id="instagram" name="instagram" class="form-control">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success btn-block btn-lg">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    <script>
        $(function(){
            originalText=$('#courseInfo').html();
            $('#btn1').on('click',function () {
                $("#infoTable1").fadeToggle();
            });

            $('#courseInfo').on('mouseover',function () {
                $('#courseInfo').html("View or edit this course");
            });

            $('#courseInfo').on('mouseout',function () {
                $('#courseInfo').html(originalText);
            });
        });
    </script>
@endsection