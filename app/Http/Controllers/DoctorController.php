<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
class DoctorController extends Controller
{
    public function store(Request $request)
    {
        // if(Gate::allows("view",Patient::class)){
          // $permetion = $request->all()['permetion'];
           $doctor=Doctor::create($request->all());
return Response()->json(["res_code"=>200,"pateint"=>$doctor]);

        // }
        // return Response()->json(["res_code"=>304,"mesg"=>"unauthorized"]);


    }
    public function showAll()
    {

        $doctor =Doctor::all();
      return  Response()->json(["res_code"=>200,"doctor"=>$doctor]);

    }
    public function show($doct_id)
    {

        $doctor =Doctor::find($doct_id)->first();
       return Response()->json(["res_code"=>200,"doctor"=>$doctor]);
    }
    public function update($doct_id)
    {
            $doctor = Doctor::find($doct_id)->first();
            $doctor->update(request()->all());
            return Response()->json(["res_code"=>200,"doctor"=>$doctor]);

   }
    public function soft_delete($id)
    {

    }
    public function destroy($doct_id)
    {
        $doctor = Doctor::find($doct_id)->first();
        $doctor->delete();
    }




}
