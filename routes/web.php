<?php

use Illuminate\Support\Facades\Route;
use App\Models\Patient;
use App\Models\Location;
use App\Models\City;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    // $city=App\Models\City::withCount("patients")->get();
$patientInfo=Patient::join("locations","locations.loctId","patients.loctId")
->join("cities","cities.cityId","locations.cityId")
->get(["patients.name","patients.father_name","patients.sure_name","locations.loctName","cities.cityName"]);
// return $city;
//return $patientInfo;
    return view('welcome',["patientInfo"=>$patientInfo]);
});
