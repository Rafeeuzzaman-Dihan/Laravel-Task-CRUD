<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VFCA extends Model
{
    protected $fillable = ['name', 'level', 'bio'];

    /** @use HasFactory<\Database\Factories\VFCAFactory> */
    use HasFactory;
}
