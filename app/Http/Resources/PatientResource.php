<?php
namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\LocationCity;
class PatientResource extends JsonResource
{

    public function toArray($request)
    {

        return  [
            'file_id'=>$this->file_id,
            'identity_n'=>$this->file_id,
            'name'=>$this->name." ".$this->father_name." ".$this->grand_name." ".
            $this->sure_name,
            'nation_id'=>$this->nation_id,
            'age'=>date_diff(date_create($this->birth_date), date_create(date("Y-m-d")))
            ->format('%y'),
             'location'=>LocationCity::collection($this->loctId),
            // 'location_name'=>$this->location->loctName,
            // 'city_id'=>$this->city->cityId,
            // 'city_name'=>$this->city->cityName,
            'email'=>$this->email,
            'blood_cat'=>$this->blood_cat,
            'gender'=>$this->gender,
            'tel'=>$this->tel,
            'tel2'=>$this->tel2,
            'paid'=>$this->paid
             ];

        // return  [
        //     'file_id'=>$this->file_id,
        //     'identity_n'=>$this->file_id,
        //     'name'=>$this->name." ".$this->father_name." ".$this->grand_name." ".
        //     $this->sure_name,
        //     'nation_id'=>$this->nation_id,
        //     'age'=>getAge($this->birth_date),
        //     'location'=>$this->location,
        //     // 'location_name'=>$this->location_name,
        //     // 'city_id'=>$this->city_id,
        //     // 'city_name'=>$this->city_name,
        //     'tel'=>$this->tel,
        //     'tel2'=>$this->tel2,
        //     'exam_type'=>$this->exam_type,
        //     'email'=>$this->email,
        //     'gender'=>$this->gender,
        //     'social_status'=>$this->social_status,
        //     'blood_cat'=>$this->blood_cat,
        //     'paid'=>$this->paid
        //      ];
    }
}
