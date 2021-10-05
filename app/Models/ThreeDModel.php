<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThreeDModel extends Model
{
    use HasFactory;
    protected $table = '3d_model';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'three_d_model_code',
        'three_d_model_name',
    ];
}
