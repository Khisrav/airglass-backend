<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    use HasFactory;
    
    // Define the table associated with the model
    protected $table = 'templates';

    // Define the fillable attributes
    protected $fillable = [
        'name',
        'template_group_id',
        'user_id',
    ];

    // Define the relationship with the TemplateGroup model
    public function templateGroup()
    {
        return $this->belongsTo(TemplateGroup::class, 'template_group_id');
    }

    // Define the relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
