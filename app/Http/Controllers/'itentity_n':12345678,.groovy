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




App\Models\Spetialities::all()
