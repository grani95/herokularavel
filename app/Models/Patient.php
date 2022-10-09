<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $primaryKey = "file_id";
    protected $fillable = [
        'file_id',
        'identity_n',
        'name',
        'father_name',
        'grand_name',
        'sure_name',
        'nation_id',
        'birth_date',
        'loctId',
        'tel',
        'tel2',
        'exam_type',
        'email',
        'status',
        'gender',
        'social_status',
        'blood_cat',
        'user_id',
        'history',
        'paid'

    ];
    protected $guarded=['file_id','user_id'];
    public function location(){

        return $this->belongsTo(Location::class,"file_id","loctId");
    }
    // public function city(){

    //     return $this->hasOneThrough(City::class,Location::class);
    // }
}
