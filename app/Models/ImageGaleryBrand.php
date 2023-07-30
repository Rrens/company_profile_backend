<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ImageGaleryBrand extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'image_galery_brand';
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
