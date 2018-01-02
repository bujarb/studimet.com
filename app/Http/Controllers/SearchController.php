<?php

namespace App\Http\Controllers;

use App\Course;
use App\Discipline;
use App\Degree;
use Illuminate\Http\Request;
use DB;
use App\University;
use Illuminate\Http\Response;
use Session;
use Torann\GeoIP\GeoIP;

class SearchController extends Controller
{
    public function filter(Request $request){
         //dd($request);
         $discipline = $request->input('discipline');
         $city = $request->input('city');
         $type = $request->input('type');

         $query = DB::table('courses')->select('courses.*','disciplines.name as discname','cities.name as cityname','institutions.name as inst_name','degrees.display_name as degree')
                                      ->join('disciplines','disciplines.id','=','courses.discipline_id')
                                      ->join('institutions','institutions.id','=','courses.inst_id')
                                      ->join('degrees','degrees.id','=','courses.degree_id')
                                      ->join('cities','cities.id','=','institutions.city');

                                      if ($request->has('discipline')) {
                                        $query->where('disciplines.name','LIKE', '%'.$discipline.'%');
                                      }

                                      if ($request->has('city')) {
                                        $query->where('cities.name','=',$city);
                                      }

                                      if ($request->has('type')) {
                                        $query->where('institutions.type','=',$type);
                                      }

                                      // Additonal filters
                                        if ($request->has('price')){
                                          switch ($request->get('price')){
                                              case 'lowhigh':
                                                  $query->sortByDesc('price');
                                                  break;
                                              case 'highlow':
                                                  $query->sortByAsc('price');
                                                  break;
                                          }
                                        }



                                      $courses = $query->get();

                                      $data = [
                                        'courses'=>$courses
                                      ];

                                      //dd($courses);



         return view('pages.results',$data);
     }




    public function autoCompleteDiscipline(Request $request){
        $term = $request->term;
        $discipline = Discipline::where('name','LIKE','%'.$term.'%')->get();
        //return $product;
        if(count($discipline) == 0){
            $searchResult[] = 'No product found';
        }else{
            foreach ($discipline as $value) {
                $searchResult[] = $value->name;
            }
        }

        return Response($searchResult);
    }
}
