<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Department;
use App\Models\Spetialities;
use App\Models\Doctor;
use App\Models\Patient;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['cors'])
->post('/department/relatin/',function(){
    // return Hash::make("123");
    return Patient::with(["location","city"])->find(1);
return Patient::find(1);
    // Department::create([
// "depName"=>"أسنان",
// "tel"=>11111,
// "email"=>"teeth@gmail.com",
// "location"=>123,
// "userId"=>1
// ]);
// Doctor::create([
//     "name"=>"هبة",
//      "father_name"=>"عبد الرحمن",
//      "grand_name"=>"محمد",
//      "sure_name"=>"الماقوري",
//      "nation_id"=>1,
//      "birth_date"=>"1981-09-22",
//      "location"=>1,
//      "tel"=>927565716,
//      "tel2"=>123456,
//      "email"=>"hb@gmail.com",
//      "status"=>1,
//      "gender"=>0,
//      "salary_type"=>1,
//      "salary_amount"=>1,
//      "note"=>"fff",
//      "userId"=>1

// ]);

// $doct =Doctor::find(1);
//$doct->with("spetialities")->get();
  //$doct->spetialities()->attach([3]);

return response()->json(Doctor::with("spetialities")->find(1));

 // $sp=Spetialities::with("doctors")->get();
 //dd($sp);
 // dd($sp->doctors()->attach($doct));


    //$sp= Department::find(10)->with("speceiolities")->get();

// $dep =Spetialities::find(2)->department;
// dd($dep->depName);
});

Route::middleware(['cors'])->get('/patient/showAll',"App\Http\Controllers\PatientController@showAll");

Route::middleware(['cors'])->get('/patient/showResource',"App\Http\Controllers\PatientController@showResource");



///////////////test
//////////////////////////////////////
Route::post('/login',"App\Http\Controllers\AccountController@login");
Route::middleware(['cors'])->post('/register',"App\Http\Controllers\AccountController@register");
Route::middleware('auth:sanctum')->group(function(){

Route::get('/dashboard', function (Request $request) {
    return "dashbord";
});

Route::middleware(['cors'])->post('/patient/open_file',"App\Http\Controllers\PatientController@store");
//Route::middleware(['cors'])->get('/patient/showAll',"App\Http\Controllers\PatientController@showAll");
Route::middleware(['cors'])->get('/patient/show/{file_id}',"App\Http\Controllers\PatientController@show");
Route::middleware(['cors'])->post('/patient/update/{file_id}',"App\Http\Controllers\PatientController@update");
Route::middleware(['cors'])->post('/patient/delete/{file_id}',"App\Http\Controllers\PatientController@destroy");

//     doctor api route
Route::middleware(['cors'])->post('/doctor/store',"App\Http\Controllers\DoctorController@store");
Route::middleware(['cors'])->get('/doctor/showAll',"App\Http\Controllers\DoctorController@showAll");
Route::middleware(['cors'])->get('/doctor/show/{doct_id}',"App\Http\Controllers\DoctorController@show");
Route::middleware(['cors'])->post('/doctor/update/{doct_id}',"App\Http\Controllers\DoctorController@update");
Route::middleware(['cors'])->post('/doctor/delete/{doct_id}',"App\Http\Controllers\DoctorController@destroy");

//      department api route

Route::middleware(['cors'])->post('/department/store',"App\Http\Controllers\DepartmnetsController@store");
Route::middleware(['cors'])->get('/department/showAll',"App\Http\Controllers\DepartmnetsController@showAll");
Route::middleware(['cors'])->get('/department/show/{depId}',"App\Http\Controllers\DepartmnetsController@show");
Route::middleware(['cors'])->post('/department/update/{depId}',"App\Http\Controllers\DepartmnetsController@update");
Route::middleware(['cors'])->post('/department/delete/{depId}',"App\Http\Controllers\DepartmnetsController@destroy");


// specialities api route

Route::middleware(['cors'])->post('/speciality/store',"App\Http\Controllers\SpetialitiesController@store");
Route::middleware(['cors'])->get('/speciality/showAll',"App\Http\Controllers\SpetialitiesController@showAll");
Route::middleware(['cors'])->get('/speciality/show/{spId}',"App\Http\Controllers\SpetialitiesController@show");
Route::middleware(['cors'])->post('/speciality/update/{spId}',"App\Http\Controllers\SpetialitiesController@update");
Route::middleware(['cors'])->post('/speciality/delete/{spId}',"App\Http\Controllers\SpetialitiesController@destroy");
//    cities api route


});
Route::middleware(['cors'])->post('/city/store',"App\Http\Controllers\CitiesController@store");
Route::middleware(['cors'])->get('/city/showCityLoct/{cityId}',"App\Http\Controllers\CitiesController@showCityLoct");
Route::middleware(['cors'])->get('/city/listCities',"App\Http\Controllers\CitiesController@listCities");
Route::middleware(['cors'])->get('/city/listCityLocations/{cityId}',"App\Http\Controllers\CitiesController@listCityLocations");





Route::middleware(['cors'])->post('/location/store',"App\Http\Controllers\LocationsController@store");
Route::middleware(['cors'])->get('/location/ShowLoctCity/{loctId}',"App\Http\Controllers\LocationsController@showLoctCity");
