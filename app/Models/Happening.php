<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Happening extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'happening';
    protected $primaryKey = 'id';
    protected $guarded = [];

    protected $fillable = [
        'id_brand',
        'image',
        'created_at',
        'updated_at',
    ];

    public function brand()
    {
        return $this->hasMany(Brands::class, 'id', 'id_brand');
    }
}
