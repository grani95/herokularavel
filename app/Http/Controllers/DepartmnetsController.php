<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmnetsController extends Controller
{
    public function store(Request $request)
    {

           $dep=Department::create($request->all());
return Response()->json(["res_code"=>200,"dep"=>$dep]);


    }
    public function showAll()
    {

        $dep =Department::all();
      return  Response()->json(["res_code"=>200,"dep"=>$dep]);

    }
    public function show($depId)
    {

        $dep =Department::find($depId)->first();
       return Response()->json(["res_code"=>200,"dep"=>$dep]);
    }
    public function update($depId)
    {
            $dep = Department::find($depId)->first();
            $dep->update(request()->all());
            return Response()->json(["res_code"=>200,"dep"=>$dep]);

   }
    public function soft_delete($id)
    {

    }
    public function destroy($depId)
    {
        $dep = Department::find($depId)->first();
        $dep->delete();
    }
}
