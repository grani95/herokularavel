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
use Auth;
use App\Mail\activateAccount;
use Illuminate\Support\Facades\Mail;

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
// return $request->photo->move("uploads");
    $input=$request->all();

// dd($input);
$photo = $request->photo;
$newName=time().$photo->getClientOriginalName();
$request->photo->move("uploads",$newName);
$password=bcrypt($input['password']);
 $user=User::create([
    'name'=>$request->name,
    'email'=>$request->email,
    'password'=>$password,
    'imgPath'=>$newName,
    'usr'=>$request->usr,
    'opfile'=>$request->opfile,
    'doct'=>$request->doct,
    'doct_d'=>$request->doct_d,
    'user_id'=>$request->user_id,
    'rsv'=>$request->rsv,
    'usr'=>$request->usr
]);
$to= $request->email;
Mail::send(new activateAccount($to));

// $json_obj['token']=$user->createToken('Hospital_app_token')->plainTextToken;
// $json_obj['usr_id']=$user->id;
// $json_obj['name']=$user->name;
// $json_obj['imgPath']=$user->imgPath;
// $json_obj['permetion']=['opfile'=>$user->opfile,'doct'=>$user->doct
// ,'doct_d'=>$user->doct_d,'rsv'=>$user->rsv];
// return response()->json($json_obj);
 return "ok";
}

    public function login(Request $request){
    $validatior = Validator(request()->all(),[
        'name'=>'required',
        'password'=>'required',
    ]);
    if($validatior->fails()){
        return response()->json("invalid input !!");
    }
// return Hash::make($request->password);

if(auth()->attempt(['name'=>request("name"),'password'=>request("password"),'status'=>1])){
    //$user = User::where('name',request('name'))->first();

   //if(Hash::check(request('password'), $user->getAuthPassword())){

    $user=auth()->user();
    $json_obj['token']=$user->createToken('Hospital_app_token')->plainTextToken;
    $json_obj['usr_id']=$user->id;
    $json_obj['name']=$user->name;
    $json_obj['imgPath']="http://localhost:8000/uploads/".$user->imgPath;
    $json_obj['permetion']=["opfile"=>$user->opfile,"doct"=>$user->doct
    ,"doct_d"=>$user->doct_d,"rsv"=>$user->rsv];
    return response()->json(["resp"=>200,"data"=>$json_obj]);
   }
   return Response()->json(["resp_code"=>314]);


    }


public function email(){
Mail::send(new activateAccount());
return "ok";
}

public function setEmail(){

    Mail::send(new activateAccount());
    return Response()->json(["code"=>200]);
}

    //  Account Activation
    public function activateAccount($email){
       //return "ok";
        return ["ok",$email];
$user= User::where(["email"=>$email])->first();
// return $user;

$user->status=1;
$status= $user->save();
if($status){
    return "ok";
}else{
return "Error";
}
}
}
