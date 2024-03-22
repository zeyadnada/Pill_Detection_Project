<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pill extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function sideEffects() {
        return $this->hasMany(sideEffects::class);
    }
    public function contraindications() {
        return $this->hasMany(Contraindications::class);
    }
    public function dosages() {
        return $this->hasMany(Dosage::class);
    }
    
}