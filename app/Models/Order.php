<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Mail;

use App\Mail\OrderCreated;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'customer_name',
        'whatsapp_number',
        'address',
        'status',
        'payment_method',
        'total_price',
    ];

    public static function boot()
    {
        parent::boot();

        self::creating(function ($model) {
            $model->total_price_html = Product::toRupiah($model->total_price);
        });

        self::created(function ($model) {
            Mail::to('sometime.use.this@gmail.com')->send(new OrderCreated($model));
        });
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
