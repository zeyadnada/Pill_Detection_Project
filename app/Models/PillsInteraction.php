<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PillsInteraction extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'pills_interactions';

    public function pill1()
    {
        return $this->belongsTo(Pill::class, 'pill_1_id');
    }

    public function pill2()
    {
        return $this->belongsTo(Pill::class, 'pill_2_id');
    }
}