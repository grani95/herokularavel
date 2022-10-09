<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $primaryKey = "doctId";
    protected $fillable = [
        'doctId',
        'name',
        'father_name',
        'grand_name',
        'sure_name',
        'nation_id',
        'birth_date',
        'location',
        'tel',
        'tel2',
        'email',
        'status',
        'gender',
        'salay_type',
        'salary_amount',
        'date',
        'note',
        'userId'

    ];
    protected $guarded=['file_id','userId'];


    public function spetialities(){

        return $this->belongsToMany(Spetialities::class,"doctors_spetialities","doctId","spId");

        }

}
