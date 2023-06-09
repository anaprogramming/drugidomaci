<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Startup extends Model
{
    use HasFactory;
    protected $fillable = [

        'naziv',
        'projektant',
        'godina',
    ];

    public function investicijes()
    {
        return $this->hasMany(Investicije::class);
    }

  
}
