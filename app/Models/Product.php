<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'id',
        'name',
        'description',
        'store_id',
        'stock'
    ];

    public function store()
    {
        return $this->belongsTo(Store::class);
    }
}
