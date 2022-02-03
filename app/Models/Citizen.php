<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citizen extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'ward_id', 'gender', 'lga', 'state',
    ];
    public function ward()
    {
      return $this->belongsTo('App\Models\Ward');
    }
}
