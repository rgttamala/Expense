<?php

namespace App;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];


    public function cargos(){
        return $this->hasMany('App\Cargo');
    }

    public function getFullNameAttribute()
    {
       return ucfirst($this->FirstName) . ' ' . ucfirst($this->MiddleName) . ' ' . ucfirst($this->LastName);
    }


}
