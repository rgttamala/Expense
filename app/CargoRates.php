<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CargoRates extends Model
{
    protected $table = 'cargo_rates';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];

    
    public function cargo() {
        return $this->belongsTo('App\Cargo', 'cargorate_id', 'id');
    }

    public function getFullNameAttribute()
    {
       return ucfirst($this->origin) . '→' . ucfirst($this->destination) . ' | ' . ucfirst($this->route) . ' | ' . ucfirst($this->trucktype) . ' | ' . ucfirst($this->cargoname) . ' || PHP ' . ucfirst($this->rate);
    }
    
}
