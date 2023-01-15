<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Succurcales extends Model
{
    use HasFactory;
    protected $table ='siccurcales';
    protected $primaryKey='id';
    protected $fillable=['date','time','status','id_resp','id_client'];
}
