<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investitor extends Model
{
    use HasFactory;
    protected $table = 'investitors';

    protected $fillable = [
        'firma',
        'godOsnivanja',
        'website',
    ];

    public function investicijes()
    {
        return $this->hasMany(Investicije::class);
    }
}
