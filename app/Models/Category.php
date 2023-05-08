<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory, HasUlids;

    protected $primaryKey = 'category_id';

    protected $fillable = [
        'category_name',
        'category_description'
    ];

    public function newUniqueId(): string
    {
        return strtolower(substr((string) Str::ulid(), 10, 5));
    }

    public function medicine(): HasMany
    {
        return $this->hasMany(Medicine::class, 'medicine_id');
    }
}
