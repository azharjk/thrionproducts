<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'price',
        'thumbnail',
        'thumbnail_alt'
    ];

    public static function toRupiah(float $number)
    {
        return 'Rp' . number_format($number, 2, ',', '.');
    }

    public static function boot()
    {
        parent::boot();

        self::creating(function ($model) {
            $model->price_html = self::toRupiah($model->price);
        });
    }
}
