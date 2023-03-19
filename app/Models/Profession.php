<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profession extends Model
{
    use HasFactory;

    protected $table = 'professions';
    protected $guarded = [];

    protected $hidden = [
        'updated_at',
        'created_at',
    ];

    public function universities()
    {
        return $this->hasMany(University::class);
    }
}
