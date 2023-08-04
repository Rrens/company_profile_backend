<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brands extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'brands';
    protected $primaryKey = 'id';
    protected $guarded = [];

    protected $fillable = [
        'name',
        'description',
        'phone',
        'instagram',
        'address',
        'open_outlet_day',
        'close_outlet_day',
        'open_outlet_time',
        'close_outlet_time',
        'categories',
        'logo',
        'created_at',
        'updated_at',
    ];

    public function event()
    {
        return $this->belongsTo(Events::class);
    }

    public function happening()
    {
        return $this->belongsTo(Happening::class);
    }
}
