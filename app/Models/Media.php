<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;
    protected $table = 'media';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'media_name',
        'media_desc',
        'media_file',
        'thumbnail',
        'category_id',
    ];
}
