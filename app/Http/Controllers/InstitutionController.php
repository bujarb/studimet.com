<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Institution;
use App\Course;
use App\City;
use Flashy;
use Image;


class InstitutionController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      $institutions = Institution::paginate(10);
      //dd($institutions);
      return view('admin.institutions.index',['institutions'=>$institutions]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      $cities = City::all();
      return view('admin.institutions.create',['cities'=>$cities]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
      $institution = new Institution();
      $institution->name = $request->input('name');
      $institution->control_type = $request->input('control_type');
      $institution->type = $request->input('type');
      $institution->year = $request->input('year');
      $institution->city = $request->input('city');
      $institution->address = $request->input('address');
      $institution->email = $request->input('email');
      $institution->phone_number = $request->input('phone');
      $institution->students_number = $request->input('studentnr');
      $institution->teaching_staff_number = $request->input('teachingstaffnr');
      $institution->facebook = $request->input('facebook');
      $institution->twitter = $request->input('twitter');
      $institution->linkedin = $request->input('linkedin');
      $institution->instagram = $request->input('instagram');

      // save image
      if ($request->has('logo')){
          $image = $request->file('logo');
          $input['imagename'] = time().'.'.$image->getClientOriginalExtension();

          $destination_path = public_path('/images/uni_logo');
          $img = Image::make($image->getRealPath());
          $image->move($destination_path,$input['imagename']);
          $path = 'images/uni_logo/'.$input['imagename'];
          $institution->logo_path = $path;
      }

      // save image
      if ($request->has('backimage')){
          $image = $request->file('backimage');
          $input['imagename'] = time().'.'.$image->getClientOriginalExtension();

          $destination_path = public_path('images/backimage');
          $img = Image::make($image->getRealPath());
          $image->move($destination_path,$input['imagename']);
          $path = 'images/backimage/'.$input['imagename'];
          $institution->background_image_path = $path;
      }

      $institution->save();

      Flashy::success('University was successfully added!');
      return redirect()->route('institution.show',$institution->id);
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
      $institution = Institution::findOrFail($id);

      return view('admin.institutions.view',['institution'=>$institution]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
      //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
      //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      $institution = Institution::findOrFail($id);
      $institution->delete();

      return redirect()->route('institution.index');
  }
}
