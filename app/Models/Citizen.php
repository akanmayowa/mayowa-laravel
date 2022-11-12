<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citizen extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name','gender', 'address','phone','ward_id', 'state_id', 'lga_id'
    ];

    public function state()
    {
        return $this->belongsTo(State::class,  'state_id', 'id');
    }

    public function lga()
    {
        return $this->belongsTo(LGAs::class,  'lga_id', 'id');
    }


    public function ward()
    {
        return $this->belongsTo(Wards::class, 'ward_id', 'id');
    }
}
