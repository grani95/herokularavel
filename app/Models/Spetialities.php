<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spetialities extends Model
{
    use HasFactory;

    protected $primaryKey = "spId";
    protected $fillable = [
        'spId',
        'spName',
        'depId',
        'status',
        'userId',
        'date'

    ];

    protected $guarded=['spId','userId','date'];
        public function department()
        {
            return $this->belongsTo(Department::class, 'depId', 'depId');
        }

public function doctors(){

return $this->belongsToMany(Doctor::class,"doctors_spetialities","spId","doctId");

}


    }
