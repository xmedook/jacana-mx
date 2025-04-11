<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomCode extends Model
{
    use HasFactory;

    protected $table = 'custom_code';
    
    protected $fillable = [
        'css_head',
        'js_head',
        'css_body',
        'js_body'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
