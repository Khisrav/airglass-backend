<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemplateGroup extends Model
{
    use HasFactory;
    
    // Define the table associated with the model
    protected $table = 'template_groups';

    // Define the fillable attributes
    protected $fillable = [
        'name',
    ];

    // Define the relationship with the Template model
    public function templates()
    {
        return $this->hasMany(Template::class, 'template_group_id');
    }
}
