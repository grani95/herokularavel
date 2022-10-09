<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    public $primaryKey="loctId";
protected $fillable=["loctId","loctName","cityId","userId","status"];
// protected $granted=["userId"];
public function city(){

    return $this->belongsTo(City::class,"cityId");
}


}
