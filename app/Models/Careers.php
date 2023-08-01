<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Careers extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'careers';
    protected $primaryKey = 'id';
    protected $guarded = [];

    protected $fillable = [
        'position',
        'description',
        'status',
        'created_at',
        'updated_at',
    ];
}
