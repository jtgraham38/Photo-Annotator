<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotoRecord extends Model
{
    use HasFactory;

    //set fillable
    protected $fillable = ['name', 'path', 'mime_type', 'size', 'disk', 'approved'];

}
