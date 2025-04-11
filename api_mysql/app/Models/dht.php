<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class dht extends Model
{
    use HasFactory;
    
    protected $table = 'data_dht';

    protected $fillable = [
        'temperature',
        'humidite',
        // 'AQI_indice',
    ];
}
