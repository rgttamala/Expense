<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
   
    protected $table = 'cargos';
    protected $guarded = ['id'];

    public function helper() {
        return $this->belongsTo('App\Employee', 'employeeHelper_id', 'id');
    }

    public function driver() {
        return $this->belongsTo('App\Employee', 'employeeDriver_id', 'id');
    }

    
}
