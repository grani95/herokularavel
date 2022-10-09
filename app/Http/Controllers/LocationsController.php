<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationsController extends Controller
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

        $loct=Location::create($request->all());
        return Response()->json(["res_code"=>200,"pateint"=>$loct]);
    }


    public function showLoctCity($loctId){
// return Location::find($loct)
        return Location::with("city")->find($loctId);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Location  $locations
     * @return \Illuminate\Http\Response
     */
    public function show(Location $location)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\locations  $locations
     * @return \Illuminate\Http\Response
     */
    public function edit(locations $locations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\locations  $locations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, locations $locations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\locations  $locations
     * @return \Illuminate\Http\Response
     */
    public function destroy(locations $locations)
    {
        //
    }
}
