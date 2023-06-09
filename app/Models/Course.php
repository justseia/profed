<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory;

    protected $table = 'courses';
    protected $guarded = [];

    protected $hidden = [
        'update_at',
        'created_at',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
