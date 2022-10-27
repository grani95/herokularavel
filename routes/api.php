<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Department;
use App\Models\Spetialities;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\City;
use App\Models\Location;
use App\Mail\activateAccount;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::middleware(['cors'])
->get('/department/relatin/',function(){
  $patient= Patient::all();
    // Debugbar::Info($patient);


    return Patient::with(["location.city"])->get();
// return Location::with("city")->find(2);
// return City::with("locations")->find(5);

});
Route::middleware(['cors'])
->get('/activateUserAccount',"App\Http\Controllers\AccountController@activateAccount");

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

Route::middleware(['cors'])->post('/patient/open_file',"App\Http\Controllers\PatientController@store");



//// Nationality apiroute

Route::middleware(['cors'])->post('/nation/store/',"App\Http\Controllers\NationalityController@store");
Route::middleware(['cors'])->get('/nation/showAll/',"App\Http\Controllers\NationalityController@showAll");

Route::middleware(['cors'])->get('/mail',"App\Http\Controllers\AccountController@email"
);

////////////////////
