<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rendv extends Model
{
    use HasFactory;
    protected $table = 'Rendv';
    protected $fillable = [
        'username',
        'event_start',
        'event_end',
        'telephone',
        'email',
        'ville'
    ];
}
