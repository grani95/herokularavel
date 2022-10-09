<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Spetialities;
class SpetialitiesController extends Controller
{
    public function store(Request $request)
    {

           $sp=Spetialities::create($request->all());
return Response()->json(["res_code"=>200,"sp"=>$sp]);


    }
    public function showAll()
    {

    //     $sp =Spetialities::all();
    //   return  Response()->json(["res_code"=>200,"sp"=>$sp]);

//     pagination


$sp=Spetialities::paginate(5);
$sp->withPath('/api/speciality/showAll');
return $sp;

    }
    public function show($spId)
    {

        $sp =Spetialities::find($spId);
       return Response()->json(["res_code"=>200,"sp"=>$sp]);
    }
    public function update($spId)
    {
            $sp = Spetialities::find($spId);
            $sp->update(request()->all());
            return Response()->json(["res_code"=>200,"sp"=>$sp]);

   }
    public function soft_delete($id)
    {

    }
    public function destroy($spId)
    {
        $sp = Spetialities::find($spId);
        $sp->delete();
    }

}
