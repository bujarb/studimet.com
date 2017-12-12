<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Discipline;
use App\Degree;
use Illuminate\Support\Facades\Input;
use MercurySeries\Flashy\Flashy;
use Carbon\Carbon;

class DisciplineDegreeController extends Controller
{
    public function index(){
      $disciplines = Discipline::paginate(7);
      $degrees = Degree::all();
      $data = ['disciplines'=>$disciplines,'degrees'=>$degrees,'discipline'=>null,'degree'=>null];
      if(Input::has('disciplineid')){
        $id = Input::get('disciplineid');
        $discipline = Discipline::where('id','=',$id)->first();
        $data['discipline'] = $discipline;
      }

      if(Input::has('degreeid')){
        $id = Input::get('degreeid');
        $degree = Degree::where('id','=',$id)->first();
        $data['degree'] = $degree;
      }
      return view('admin.disciplines.index',$data);
    }

    public function storeDiscipline(){
        $discipline = new Discipline();
        $discipline->name = $request->input('name');
        $discipline->description = $request->input('description');
        $discipline->save();

        Flashy::success('Discipline was successfully added');
        return redirect()->back();
    }

    public function storeDegree(){
        $degree = new Degree();
        $degree->name = $request->input('name');
        $degree->display_name = $request->input('display_name');
        $degree->save();

        Flashy::success('Degree was successfully added');
        return redirect()->back();
    }

    public function updateDiscipline(Request $request,$id){
        $discipline = Discipline::findOrFail($id);
        $discipline->name = $request->input('name');
        $discipline->description = $request->input('description');
        $discipline->save();

        Flashy::success('Discipline was successfully updated');
        return redirect()->back();
    }

    public function updateDegree(Request $request,$id){
        $degree = Degree::findOrFail($id);
        $degree->name = $request->input('name');
        $degree->display_name = $request->input('display_name');
        $degree->save();

        Flashy::success('Degree was successfully updated');
        return redirect()->back();
    }

    public function destroyDiscipline($id){
        $discipline = Discipline::findOrFail($id);
        $discipline->delete();

        Flashy::success('Discipline was successfully deleted');
        return redirect()->back();
    }

    public function destroyDegree($id){
        $degree = Degree::findOrFail($id);
        $degree->delete();

        Flashy::success('Degree was successfully deleted');
        return redirect()->route('admin-disciplines-index');
    }
}
