<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    use HasFactory;

    // Define the table associated with the model
    protected $table = 'catalog';

    // Define the fillable attributes
    protected $fillable = [
        'name',
        'purchase_price',
        'retail_price',
        'unit',
        'vendor_code',
        'catalog_group_id',
    ];

    // Define the relationship with the CatalogGroup model
    public function catalogGroup()
    {
        return $this->belongsTo(CatalogGroup::class, 'catalog_group_id');
    }
}
