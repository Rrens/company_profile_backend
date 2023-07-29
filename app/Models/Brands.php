<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    use HasFactory;

    protected $table = 'brands';
    protected $primaryKey = 'id';
    protected $guarded = [];

    protected $fillable = [
        'name',
        'description',
        'phone',
        'instagram',
        'open_outlet_day',
        'close_outlet_day',
        'open_outlet_time',
        'close_outlet_time',
        'categories',
        'created_at',
        'updated_at',
    ];
}
