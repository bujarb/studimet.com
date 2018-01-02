<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Institution;
use App\City;
use App\Degree;
use App\Discipline;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
      $courses = Course::where('inst_id',$id)->get();
      $inst_name = Institution::where('id',$id)->pluck('name')->first();

      $data = [
        'courses'=>$courses,
        'inst_name'=>$inst_name
      ];

      return view('admin.courses.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $institutions = Institution::all();
        $degrees = Degree::all();
        $disciplines = Discipline::all();

        $data = [
                'institutions'=>$institutions,
                'degrees'=>$degrees,
                'disciplines'=>$disciplines
              ];
        return view('admin.courses.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $course = new Course();
        $course->name = $request->input('name');
        $course->discipline_id = $request->input('discipline');
        $course->degree_id = $request->input('degree');
        $course->duration = $request->input('duration');
        $course->fee = $request->input('fee');
        $course->deadline = $request->input('deadline');
        $course->program_website_link = $request->input('websitelink');
        $course->admission_inquiry_link = $request->input('admissionlink');
        $course->overview = $request->input('overview');
        $course->programme_outline = $request->input('outline');
        $course->key_facts = $request->input('facts');
        $course->addmission_requirments = $request->input('admission');
        $course->students_service = $request->input('students');
        $course->fee_funding = $request->input('funding');
        $course->inst_id = $request->input('inst');


        $course->save();

        return redirect()->route('course.show',$course->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $course = Course::where('id',$id);
        $course->delete();

        return redirect()->back();
    }
}
