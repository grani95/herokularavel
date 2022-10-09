<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
public $primaryKey="cityId";
protected $fillable=["cityId","cityName","userId","status"];
// protected $granted=["userId"];
public function locations(){

    return $this->hasMany(Location::class,"cityId","cityId");
}

}
