<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Supplier extends Model
{
    use HasFactory, HasUlids;

    protected $primaryKey = 'supplier_id';

    protected $fillable = [
        'supplier_name',
        'supplier_phone',
        'supplier_email',
        'supplier_address',
    ];

    public function newUniqueId(): string
    {
        return strtolower(substr((string)Str::ulid(), 10, 5));
    }

    public function medicine(): HasMany
    {
        return $this->hasMany(Medicine::class, 'medicine_id');
    }
}
