<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Medicine extends Model
{
    use HasFactory, HasUlids;

    protected $primaryKey = 'medicine_id';

    protected $fillable = [
        'medicine_code',
        'medicine_name',
        'medicine_description',
        'medicine_generic_name',
        'medicine_purchase_price',
        'medicine_retail_price',
        'medicine_quantity',
        'medicine_unit',
        'medicine_expired_date',
        'medicine_image',
        'category_id',
        'supplier_id'
    ];

    public function newUniqueId(): string
    {
        return strtolower(substr((string)Str::ulid(), 10, 5));
    }

    public function categories(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function suppliers(): BelongsTo
    {
        return $this->belongsTo(Supplier::class, 'supplier_id');
    }
}
