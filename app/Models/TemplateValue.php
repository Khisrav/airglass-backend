<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemplateValue extends Model
{
    use HasFactory;
    
    // Define the table associated with the model
    protected $table = 'template_values';

    // Define the fillable attributes
    protected $fillable = [
        'template_id',
        'catalog_item_id',
        'quantity',
    ];

    // Define the relationship with the Template model
    public function template()
    {
        return $this->belongsTo(Template::class, 'template_id');
    }

    // Define the relationship with the Catalog model
    public function catalogItem()
    {
        return $this->belongsTo(Catalog::class, 'catalog_item_id');
    }
}
