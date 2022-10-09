<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use App\Http\Resources\CitiesList;
use App\Http\Resources\LocationsList;

class CitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $city=City::create($request->all());
        return Response()->json(["res_code"=>200,"city"=>$city]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\City  $City
     * @return \Illuminate\Http\Response
     */

public function showCityLoct(City $city){

    return city::with("locations")->find($city);
}



public function listCities(){
// dd(city::all());
    return CitiesList::collection(city::all());
}
public function listCityLocations($cityId){
//return city::with("locations")->find($cityId);
        return LocationsList::collection(city::find($cityId)->locations);
    }

public function show(city $city)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\City  $City
     * @return \Illuminate\Http\Response
     */
    public function edit(City $City)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\City  $City
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, City $City)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\City  $City
     * @return \Illuminate\Http\Response
     */
    public function destroy(City $City)
    {
        //
    }
}
