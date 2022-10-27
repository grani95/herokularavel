<?php

namespace App\Http\Controllers;

use App\Models\Nationality;
use Illuminate\Http\Request;
use App\Http\Resources\nationList;

class NationalityController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     return Response()->json(["res_code"=>200,"nation"=>Nationality::create($request->all())]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nationality  $nationality
     * @return \Illuminate\Http\Response
     */
    public function show(Nationality $nationality)
    {
        //
    }

    public function showAll()
    {
        //
return nationList::collection(Nationality::where("status",1)->get());

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nationality  $nationality
     * @return \Illuminate\Http\Response
     */
    public function edit(Nationality $nationality)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nationality  $nationality
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nationality $nationality)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nationality  $nationality
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nationality $nationality)
    {
        //
    }
}
