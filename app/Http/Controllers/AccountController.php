<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Hash;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use Validator;
class AccountController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

public function register(Request $request){
    // $validatior = Validator::make($request->all(),[
    //     'name'=>'required',
    //     'email'=>'required|email',
    //     'password'=>'required',
    //     'c_password'=>'required|same:password'
    // ]);
    // if($validatior->fails()){
    //     return response()->json("invalid input !!");
    //         }
$input=$request->all();
//dd($input);
$input['password']=bcrypt($input['password']);
$user=User::create($input);
$json_obj['token']=$user->createToken('Hospital_app_token')->plainTextToken;
$json_obj['usr_id']=$user->id;
$json_obj['name']=$user->name;
$json_obj['permetion']=['opfile'=>$user->opfile,'doct'=>$user->doct
,'doct_d'=>$user->doct_d,'rsv'=>$user->rsv];
return response()->json($json_obj);
}

    public function login(Request $request){
    $validatior = Validator(request()->all(),[
        'name'=>'required',
        'password'=>'required',
    ]);
    if($validatior->fails()){
        return response()->json("invalid input !!");
    }


if(auth()->attempt(['name'=>request("name"),'password'=>request("password")])){
    //$user = User::where('name',request('name'))->first();

   //if(Hash::check(request('password'), $user->getAuthPassword())){

    $user=auth()->user();
    $json_obj['token']=$user->createToken('Hospital_app_token')->plainTextToken;
    $json_obj['usr_id']=$user->id;
    $json_obj['name']=$user->name;
    $json_obj['permetion']=["opfile"=>$user->opfile,"doct"=>$user->doct
    ,"doct_d"=>$user->doct_d,"rsv"=>$user->rsv];
    return response()->json(["resp"=>200,"data"=>$json_obj]);
   }
   return Response()->json(["resp_code"=>314]);


    }
}
