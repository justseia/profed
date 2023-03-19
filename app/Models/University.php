<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    use HasFactory;

    protected $table = 'universities';
    protected $guarded = [];

    protected $hidden = [
        'updated_at',
        'created_at',
    ];
}
