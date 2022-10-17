<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'available',
    ];

    protected $casts = [
        'price' => 'integer',
        'available' => 'boolean'
    ];

    public function getProducts(string $search = '')
    {
        $products = $this->where(function ($query) use ($search){
            if ($search) {
                $query->where('name', 'LIKE', "%{$search}%");
            }
        })->get();

        return $products;
    }
}
