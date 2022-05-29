<?php

namespace App\Models\Integration;

use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Integration extends Model
{    
    use HasFactory;
    
    protected $fillable = [
        'marketplace',
        'username',
        'password'
    ];
}
