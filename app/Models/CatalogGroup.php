<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatalogGroup extends Model
{
    use HasFactory;
    
    // Define the table associated with the model
    protected $table = 'catalog_groups';

    // Define the fillable attributes
    protected $fillable = [
        'name',
    ];

    // Define the relationship with the Catalog model
    public function catalogs()
    {
        return $this->hasMany(Catalog::class, 'catalog_group_id');
    }
}
