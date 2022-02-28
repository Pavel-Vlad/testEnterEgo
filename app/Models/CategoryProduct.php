<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;

class CategoryProduct extends Pivot
{
    use HasFactory;

    public $timestamps = false;

    public function categories(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function products(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

}
