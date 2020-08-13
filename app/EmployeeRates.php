<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeRates extends Model
{
    protected $table = 'employeerates';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];


    public function employeerates() {
        return $this->belongsTo('App\Employee', 'JobRates_id', 'id');
    }
}
