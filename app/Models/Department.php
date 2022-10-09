<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $primaryKey = "depId";
    protected $fillable = [
        'depId',
        'depName',
        'location',
        'tel',
        'email',
        'status',
        'userId',
        'date'

    ];
    protected $guarded=['depId','userId','date'];
public function speceiolities(){
    return $this->hasMany(Spetialities::class,"depId","depId");
}
}
