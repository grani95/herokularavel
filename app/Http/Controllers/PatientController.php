<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Resources\PatientResource;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //if(auth()->user()->opfile){
       // if(Gate::allows("view",Patient::class)){
         //  $permetion = $request->all()['permetion'];
             //$patient=$request->all();
        //    $patient=Patient::create($request->all()['patient']);
//  dd($request->all());
        $patient=Patient::create($request->all()['patient']);
                    return Response()->json(["res_code"=>200,"pateint"=>$patient]);

      //  }
        return Response()->json(["res_code"=>304,"mesg"=>"unauthorized"]);



    }


    public function showResource()
    {

       // $patients =Patient::all();
        //dd($patients);
        $patients=Patient::with(["location","city"])->find(1);

        $patientsResource= PatientResource::collection($patients);
        return $patientsResource;
    }



    public function showAll()
    {
/////////////////////////////
// return Response()->json(Patient::with("location")->get());

$patients =Patient::paginate(5)->toArray();

return PatientResource::collection(Patient::with(["location.city"])->paginate(5));


// dd(PatientResource::collection(Patient::paginate(5)));
        //  return  Response()->json(["res_code"=>200,"patients"=>$patients]);


        $patients =Patient::paginate(5)->toArray();
       return  Response()->json(
            ["patients"=>PatientResource::collection(Patient::paginate(5)),
            "pagination"=>[
            "current_page"=>$patients["current_page"],
            "from"=>$patients["from"],
            "to"=>$patients["to"],
            "last_page"=>$patients["last_page"],
            "total"=>$patients["total"],
            "linkes"=>$patients["links"],
]
        ]);
///////////////////////////////////////
        $patients =Patient::paginate(5)->toArray();

        return  Response()->json(
            ["patients"=>$patients["data"],
            "pagination"=>[
            "current_page"=>$patients["current_page"],
            "from"=>$patients["from"],
            "to"=>$patients["to"],
            "last_page"=>$patients["last_page"],
            "total"=>$patients["total"],
            "linkes"=>$patients["links"],
]
        ]);



    }

//show all with autorization

    // public function showAll()
    // {
    //     if(Gate::allows("view",Patient::class)){

    //     $patients =Patient::all();
    //   return  Response()->json(["res_code"=>200,"patients"=>$patients]);
    //     }
    //     return  Response()->json(["res_code"=>314,"message"=>"unauthorize!"]);

    // }
    public function show($file_id)
    {
        if(Gate::allows("view",Patient::class)){

        $patient =Patient::find($file_id)->first();
       return Response()->json(["res_code"=>200,"patient"=>$patient]);
        }
        return  Response()->json(["res_code"=>314,"message"=>"unauthorize!"]);
    }
    public function update($file_id)
    {
            $patient = Patient::find($file_id)->first();
            $patient->update(request()->all());
            return Response()->json(["res_code"=>200,"patient"=>$patient]);

   }
    public function soft_delete($id)
    {

    }
    public function destroy($file_id)
    {
        $patient = Patient::find($file_id)->first();
        $patient->delete();
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


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    // public function destroy(Patient $patient)
    // {
    //     //
    // }
}
