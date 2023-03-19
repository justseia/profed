<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Test extends Model
{
    use HasFactory;

    protected $table = 'tests';
    protected $guarded = [];

    protected $hidden = [
        'updated_at',
        'created_at',
    ];
}
