{
        "depName":"راحة",
        "location":1,
        "tel":11111,
        "email":"xx@gmail.com",
        "status":1,
        "userId":1
}





{
           "name":"هناء",
            "father_name":"محمد",
            "grand_name":"خليفة",
            "sure_name":"الشعافي",
            "nation_id":1,
            "birth_date":"1981-09-22",
            "location":1,
            "tel":234567,
            "tel2":123456,
            "email":"hash@gmail.com",
            "status":1,
            "gender":0,
            "salary_type":1,
            "salary_amount":1,
            "note":""
            }


App\Models\Department::find(3)->Spetialities()
App\Models\Spetialities::paginate(5)->toArray()
App\Models\Spetialities::simplePaginate(5)->toArray()

App\Models\Spetialities::cursorPaginate(2)->toArray()


Route::middleware(['cors'])
->post('/department/relatin/',function(){
    // return Hash::make("123");
//     return Patient::with(["location","city"])->find(1);
// return Patient::find(1);
    // Department::create([
// "depName"=>"أسنان",
// "tel"=>11111,
// "email"=>"teeth@gmail.com",
// "location"=>123,
// "userId"=>1
// ]);
// Doctor::create([
//     "name"=>"هبة",
//      "father_name"=>"عبد الرحمن",
//      "grand_name"=>"محمد",
//      "sure_name"=>"الماقوري",
//      "nation_id"=>1,
//      "birth_date"=>"1981-09-22",
//      "location"=>1,
//      "tel"=>927565716,
//      "tel2"=>123456,
//      "email"=>"hb@gmail.com",
//      "status"=>1,
//      "gender"=>0,
//      "salary_type"=>1,
//      "salary_amount"=>1,
//      "note"=>"fff",
//      "userId"=>1

// ]);
return City::all();

// $doct =Doctor::find(1);
//$doct->with("spetialities")->get();
  //$doct->spetialities()->attach([3]);

return response()->json(Doctor::with("spetialities")->find(1));

 // $sp=Spetialities::with("doctors")->get();
 //dd($sp);
 // dd($sp->doctors()->attach($doct));


    //$sp= Department::find(10)->with("speceiolities")->get();

// $dep =Spetialities::find(2)->department;
// dd($dep->depName);
});
INSERT INTO `locations` (`loctId`, `loctName`, `cityId`, `status`, `userId`, `created_at`, `updated_at`) 
VALUES (NULL, 'بن عاشور', '1', '1', '1', NULL, NULL); 

INSERT INTO `locations` (`loctId`, `loctName`, `cityId`, `status`, `userId`, `created_at`, `updated_at`) 
VALUES (NULL, 'شارع بغداد', '1', '1', '1', NULL, NULL); 
INSERT INTO `locations` (`loctId`, `loctName`, `cityId`, `status`, `userId`, `created_at`, `updated_at`) 
VALUES (NULL, 'شعافي', '2', '1', '1', NULL, NULL); 
INSERT INTO `locations` (`loctId`, `loctName`, `cityId`, `status`, `userId`, `created_at`, `updated_at`) 
VALUES (NULL, 'زعترة', '2', '1', '1', NULL, NULL); 
INSERT INTO `locations` (`loctId`, `loctName`, `cityId`, `status`, `userId`, `created_at`, `updated_at`) 
VALUES (NULL, 'ماقوري', '3', '1', '1', NULL, NULL);
INSERT INTO `locations` (`loctId`, `loctName`, `cityId`, `status`, `userId`, `created_at`, `updated_at`) 
VALUES (NULL, 'بركي', '3', '1', '1', NULL, NULL);  
INSERT INTO `locations` (`loctId`, `loctName`, `cityId`, `status`, `userId`, `created_at`, `updated_at`) 
VALUES (NULL, 'غريب', '3', '1', '1', NULL, NULL); 
INSERT INTO `locations` (`loctId`, `loctName`, `cityId`, `status`, `userId`, `created_at`, `updated_at`) 
VALUES (NULL, 'باب المدينة', '1', '1', '1', NULL, NULL); 
App\Models\Spetialities::all()
