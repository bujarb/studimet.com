<?php

namespace App\Http\Controllers;

use App\Degree;
use App\Discipline;
use App\Institution;
use Illuminate\Http\Request;
use Auth;
use DB;
use App\Permission;
use App\Country;
use PHPUnit\Framework\Constraint\Count;
use App\Course;
use Image;
use App\City;
use Illuminate\Support\Facades\Input;
use Charts;
use MercurySeries\Flashy\Flashy;
use Carbon\Carbon;

class AdminController extends Controller
{

    /*
     * Here are the routes for the super_admin
     * I separated those routes in a different controller because of secutiry
     * */

     public function __construct(){
       $this->middleware('auth:admin');
     }

    public function getAdminDashboard(){
      $institution = Charts::database(Institution::all(), 'bar', 'highcharts')
                    ->elementLabel("Total")
                    ->dimensions(1000, 500)
                    ->responsive(true)
                    ->groupByDay();

      $today = Carbon::now();
      //dd($today);


      $data = [
        'institution'=>$institution,
        'todayuniverities'=>null
      ];
      return view('admin.index',$data);
    }
    // Institution methods
    public function getAdminUniversitiesIndex(){
        $institutions = Institution::paginate(10);
        //dd($institutions);
        return view('admin.universities.index',['universities'=>$institutions]);
    }

    public function getAdminInstitutionCreate(){
        $countries = Country::all();
        $cities = City::all();
        //dd($cities);
        return view('admin.universities.create',['countries'=>$countries,'cities'=>$cities]);
    }

    public function adminInsertInstitution(Request $request){
        //dd($request);

        $institution = new Institution();
        $institution->name = $request->input('name');
        $institution->type = $request->input('type');
        $institution->establishment_year = $request->input('year');
        $institution->country = $request->input('country');
        $institution->city = $request->input('city');
        $institution->address = $request->input('address');
        $institution->email = $request->input('email');
        $institution->phone_number = $request->input('phone');
        $institution->fax = $request->input('fax');
        $institution->students_numbers = $request->input('studentnr');
        $institution->faculty_school_numbers = $request->input('studentnr');
        $institution->students_numbers = $request->input('faculyschoolnr');
        $institution->administrative_staff_number = $request->input('administrativestaffnr');
        $institution->teaching_staff_number = $request->input('teachingstaffnr');
        $institution->facebook_page = $request->input('facebook');
        $institution->twitter_page = $request->input('twitter');
        $institution->linkedin_page = $request->input('linkedin');
        $institution->instagram_page = $request->input('instagram');

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

        Flashy::success('Institution was successfully added!');
        return redirect()->route('course-after-uni',$institution->name);
    }

    public function adminUpdateInstitution(Request $request,$name){
      $institution = Institution::where('name','=',$name)->first();

      $institution->name = $request->input('name');
      $institution->type = $request->input('type');
      $institution->establishment_year = $request->input('year');
      $institution->country = $request->input('country');
      $institution->city = $request->input('city');
      $institution->address = $request->input('address');
      $institution->email = $request->input('email');
      $institution->phone_number = $request->input('phone');
      $institution->fax = $request->input('fax');
      $institution->students_numbers = $request->input('studentnr');
      $institution->faculty_school_numbers = $request->input('studentnr');
      $institution->students_numbers = $request->input('faculyschoolnr');
      $institution->administrative_staff_number = $request->input('administrativestaffnr');
      $institution->teaching_staff_number = $request->input('teachingstaffnr');
      $institution->facebook_page = $request->input('facebook');
      $institution->twitter_page = $request->input('twitter');
      $institution->linkedin_page = $request->input('linkedin');
      $institution->instagram_page = $request->input('instagram');

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

      Flashy::success('Institution was successfully updated!');
      return redirect()->route('admin-Institution-index');

    }

    public function adminDeleteInstitution($name){
      $institution = Institution::where('name','=',$name)->first();
      $institution->delete();
      Flashy::error('Institution was successfully deleted!');
      return redirect()->route('admin-my-Institution-index');
    }

    public function getAdminEditInstitution($name){
      $institution = DB::table('universities')->where('name','=',$name)->first();
      $countries = Country::all();
      $cities = City::all();
      return view('admin.universities.edit',['Institution'=>$institution,'cities'=>$cities,'countries'=>$countries]);
    }

    public function adminViewInstitution($name){
      $institution = DB::table('universities')
                        ->select('universities.*','cities.name as cityname','countries.name as countryname')
                        ->join('countries','countries.id','=','universities.country')
                        ->join('cities','cities.id','=','universities.city')
                        ->where('universities.name','=',$name)
                        ->first();
      //dd($institution);
      return view('admin.universities.view',['Institution'=>$institution]);
    }

    public function getAdminMyUniversities(){
      $user = Auth::user();
      $institutions = DB::table('universities')
                        ->select('universities.*','cities.name as cityname','countries.name as countryname','users.name as username')
                        ->join('countries','countries.id','=','universities.country')
                        ->join('cities','cities.id','=','universities.city')
                        ->join('users','users.id','=','universities.user_id')
                        ->where('universities.user_id','=',$user->id)
                        ->paginate(5);
      //dd($institutions);
      return view('admin.universities.my',['universities'=>$institutions]);
    }

    public function adminDeleteRequestForUser($id){
      $request = UserInstitutionAuthorization::where('user_id','=',$id)->first();
      $request->delete();

      Flashy::info('Request for the user was successfully deleted');
      return redirect()->route('admin-Institution-pending');
    }

    // Course methods
    public function getAdminCoursesIndex(){
        $courses = DB::table('courses')
                      ->select('courses.*','universities.name as uniname','degrees.name as degreename','disciplines.name as disciplinename')
                      ->join('universities','universities.id','=','courses.uni_id')
                      ->join('disciplines','disciplines.id','=','courses.discipline_id')
                      ->join('degrees','degrees.id','=','courses.degree_id')
                      ->get();
        //dd($courses);
        return view('admin.courses.index',['courses'=>$courses]);
    }

    public function adminViewCourse($name){
      $course = DB::table('courses')
                    ->select('courses.*','universities.name as uniname','degrees.name as degreename','disciplines.name as disciplinename')
                    ->join('universities','universities.id','=','courses.uni_id')
                    ->join('disciplines','disciplines.id','=','courses.discipline_id')
                    ->join('degrees','degrees.id','=','courses.degree_id')
                    ->where('courses.name','=',$name)
                    ->first();
      return view('admin.courses.view',['course'=>$course]);
    }

    public function getMyAdminCourses(){
      $courses = DB::table('courses')
                    ->select('courses.*','universities.name as uniname','degrees.name as degreename','disciplines.name as disciplinename')
                    ->join('universities','universities.id','=','courses.uni_id')
                    ->join('disciplines','disciplines.id','=','courses.discipline_id')
                    ->join('degrees','degrees.id','=','courses.degree_id')
                    ->where('user_id','=',Auth::user()->id)
                    ->get();

      return view('admin.courses.my',['courses'=>$courses]);
    }
    public function getAdminCourseCreate($name=null){
        $institution = Institution::where('name','=',$name)->first();
        $institutions = Institution::all();
        $degrees = Degree::all();
        $disciplines = Discipline::all();
        return view('admin.courses.create',['Institution'=>$institution,'universities'=>$institutions,'degrees'=>$degrees,'disciplines'=>$disciplines]);
    }

    public function adminInsertCourse(Request $request){
        //dd($request);

        $course = new Course();
        $course->name = $request->input('name');
        $course->duration = $request->input('duration');
        $course->language = $request->input('language');
        $course->fee = $request->input('fee');
        $course->deadline = $request->input('deadline');
        $course->program_website_link = $request->input('websitelink');
        $course->admission_inquiry_link = $request->input('admissionlink');
        $course->overview = $request->input('overview');
        $course->programme_outline = $request->input('outline');
        $course->key_facts = $request->input('facts');
        $course->addmission_requirments = $request->input('admission');
        $course->students_service = $request->input('students_service');
        $course->fee_funding = $request->input('funding');
        $course->uni_id = $request->input('uni');
        $course->degree_id = $request->input('degree');
        $course->discipline_id = $request->input('discipline');

        $course->save();

        Flashy::success('Course was successfully inserted!');
        return redirect()->route('admin-course-index');
    }

    public function getAdminCourseEdit($name){
      $course = DB::table('courses')->select('courses.*','universities.name as uniname','degrees.name as degreename','disciplines.name as disciplinename')
                                    ->join('universities','universities.id','=','courses.uni_id')
                                    ->join('degrees','degrees.id','=','courses.degree_id')
                                    ->join('disciplines','disciplines.id','=','courses.discipline_id')
                                    ->where('courses.name','=',$name)
                                    ->first();
      $institutions = Institution::all();
      $cities = City::all();
      $countries = Country::all();
      $degrees = Degree::all();
      $disciplines = Discipline::all();
        $data = [
          'course'=>$course,
          'universities'=>$institutions,
          'cities'=>$cities,
          'countries'=>$countries,
          'degrees'=>$degrees,
          'disciplines'=>$disciplines
        ];
      return view('admin.courses.edit',$data);
    }

    public function adminUpdateCourse(Request $request,$id){
        //dd($request);

        $course = Course::where('id','=',$id)->first();
        $course->name = $request->input('name');
        $course->duration = $request->input('duration');
        $course->language = $request->input('language');
        $course->fee = $request->input('fee');
        $course->deadline = $request->input('deadline');
        $course->program_website_link = $request->input('websitelink');
        $course->admission_inquiry_link = $request->input('admissionlink');
        $course->overview = $request->input('overview');
        $course->programme_outline = $request->input('outline');
        $course->key_facts = $request->input('facts');
        $course->addmission_requirments = $request->input('admission');
        $course->students_service = $request->input('students_service');
        $course->fee_funding = $request->input('funding');
        $course->uni_id = $request->input('uni');
        $course->degree_id = $request->input('degree');
        $course->discipline_id = $request->input('discipline');

        $course->save();

        Flashy::success('Course was successfully updated!');
        return redirect()->route('admin-course-index');
    }

    public function adminDeleteCourse($name){
      $course = Course::where('name','=',$name)->first();
      $course->delete();

      Flashy::success('Couse was successfully deleted');
      return redirect()->route('admin-course-index');
    }

    public function getAdminCountryIndex(){
        $countries = Country::all();

        if(Input::has('id')){
          $country = Country::find(Input::get('id'));

          return view('admin.countries.index',['countries'=>$countries,'country'=>$country]);
        }else{
          return view('admin.countries.index',['countries'=>$countries]);
        }
    }

    public function getAdminCountryCreate(){
        return view('admin.countries.create');
    }

    public function adminCountryInsert(Request $request){
        //dd($request);
        $country = new Country();
        $country->name = $request->input('name');
        $country->population = $request->input('population');
        $country->students = $request->input('students');
        $country->ranked_universities = $request->input('ranked_universities');
        $country->academic_year = $request->input('academic_year');
        $country->country_website_link = $request->input('country_website_link');
        $country->admission_inquiry_link = $request->input('admission_inquiry_link');
        // save image
        if ($request->has('image')){
            $image = $request->file('image');
            $input['imagename'] = time().'.'.$image->getClientOriginalExtension();

            $destination_path = public_path('/images/countries');
            $img = Image::make($image->getRealPath());
            $image->move($destination_path,$input['imagename']);
            $path = 'images/countries/'.$input['imagename'];
            $country->	background_image_path = $path;
        }

        if ($request->has('flag')){

            $file = $request->file('flag');
            $input['imagename'] = time().'.'.$file->getClientOriginalExtension();
            $image = Image::make($file);
            $path = public_path().'/images/countries/flags/';
            $pathdb = 'images/countries/flags/';
            $image->save($path.$input['imagename']);
            $image->resize(316,150);
            $image->save($path.'flag_'.$input['imagename']);

            $country->flag_path = 'flag_'.$input['imagename'];
        }
        $country->overview = $request->input('overview');
        $country->student_visa = $request->input('student_visa');
        $country->living = $request->input('living');
        $country->institutes = $request->input('institutes');
        $country->funding_grants = $request->input('funding_grants');

        $country->save();

        Flashy::success('Country was successfully inserted!');
        return redirect()->route('admin-country-index');
    }

    public function adminCountryUpdate(Request $request,$name){
        //dd($request);
        $country = Country::where('name','=',$name)->first();
        $country->name = $request->input('name');
        $country->population = $request->input('population');
        $country->students = $request->input('students');
        $country->ranked_universities = $request->input('ranked_universities');
        $country->academic_year = $request->input('academic_year');
        $country->country_website_link = $request->input('country_website_link');
        $country->admission_inquiry_link = $request->input('admission_inquiry_link');
        // save image
        if ($request->has('image')){
            $image = $request->file('image');
            $input['imagename'] = time().'.'.$image->getClientOriginalExtension();

            $destination_path = public_path('/images/countries');
            $img = Image::make($image->getRealPath());
            $image->move($destination_path,$input['imagename']);
            $path = 'images/countries/'.$input['imagename'];
            $country->	background_image_path = $path;
        }
        $country->overview = $request->input('overview');
        $country->student_visa = $request->input('student_visa');
        $country->living = $request->input('living');
        $country->institutes = $request->input('institutes');
        $country->funding_grants = $request->input('funding_grants');

        $country->save();

        Flashy::success('Country was successfully updated!');
        return redirect()->route('admin-country-index');
    }

    public function adminCountryDelete($name){
      $country = Country::where('name','=',$name)->first();
      $country->delete();

      Flashy::success('Country was delete successfully');
      return redirect()->route('admin-country-index');
    }

    public function adminViewCountry($name){
      $country = Country::find($name);
      return view('admin.countries.view',['country'=>$country]);
    }

    public function getAdminCitiesIndex(){
      $data = Input::all();
      $countries = Country::all();
      $cities = DB::table('cities')->select('cities.*','countries.name as countryname')
                                    ->join('countries','countries.id','=','cities.country')
                                    ->get();
      if(Input::has('id')){
        $city = City::find(Input::get('id'));

        return view('admin.cities.index',['cities'=>$cities,'city'=>$city,'countries'=>$countries]);
      }else{
        return view('admin.cities.index',['cities'=>$cities,'countries'=>$countries]);
      }
    }

    public function adminCityDelete($name){
      $city = City::where('name','=',$name)->first();
      $city->country()->dissociate();
      $city->delete();

      Flashy::error('City was succesfully deleted!');
      return redirect()->back();
    }

    public function adminUpdateCity(Request $request,$id){
      //dd($request);
      $city = City::find($id);
      $city->name = $request->input('city');
      $city->country = $request->input('country');
      $city->save();


      Flashy::info('City was succesfully updated!');
      return redirect()->route('admin-city-index');
    }

    public function getAdminCitiesCreate(){
      $countries = Country::all();
      return view('admin.cities.create',['countries'=>$countries]);
    }

    public function adminInsertCity(Request $request){
      $city = new City();
      $city->name = $request->name;
      $city->country = $request->country;
      $city->save();

      Flashy::success('City was succesfully inserted!');
      return redirect()->route('admin-city-index');
    }

    public function getAdminUsersIndex(){
      $users = User::where('id','!=',Auth::user()->id)->paginate(10);
      $moderators = User::with(array('roles' => function($query) {
            $query->where('name', 'moderator');
        }))->paginate(10);
      $data = [
        'users'=>$users,
        'moderators'=>$moderators
      ];
      return view('admin.users.index',$data);
    }

    public function searchUser(Request $request){
        if ($request->ajax()){
            $users = DB::table('users')->where('name','LIKE','%'.$request->search.'%')->get();
            $output = "";

            if ($users) {
                foreach ($users as $value) {
                    $output .= '<tr>';
                    $output .= '<td>' . $value->name . '</td>';
                    $output .= '<td>' . $value->email . '</td>';
                    $output .= '<td>' . $value->phone_number . '</td>';
                    $output .= '<td>Moderator</td>';
                    $output .= '</tr>';
                }

                return Response($output);
            }else{

            }
        }
    }

    public function getAdminDisciplinesPage(){
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

}
