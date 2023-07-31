<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;
    protected $table = 'events';
    protected $primaryKey = 'id';
    protected $guarded = [];

    protected $fillable = [
        'id_brand',
        'name',
        'date',
        'open_time',
        'close_time',
        'category',
        'image',
        'created_at',
        'updated_at',
    ];

    public function brand()
    {
        return $this->hasMany(Brands::class, 'id', 'id_brand');
    }
}
