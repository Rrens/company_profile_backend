<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageHeaderBrand extends Model
{
    use HasFactory;

    protected $table = 'image_header_brand';
    protected $primaryKey = 'id';
    protected $guarded = [];

    protected $fillable = [
        'id_brand',
        'image',
        'created_at',
        'updated_at',
    ];

    public function brands()
    {
        return $this->hasMany(Brands::class, 'id', 'id_brand');
    }
}
