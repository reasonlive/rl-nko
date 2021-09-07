<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';
    public $timestamps = true;

    protected $casts = [
    	'child_sex' => 'boolean',
    	'parent_sex' => 'boolean'
    ];

    protected $fillable = [
    	'parent_name',
    	'parent_age',
    	'parent_sex',
    	'child_name',
    	'child_age',
    	'child_sex',
    	'issue',
    	'email',
    	'phone'
    ];

    protected $attributes = [
        /*'child_name' => '[неизвестно]',
        'child_age' => 0,
        'child_sex' => 0,
        'issue' => '[неизвестно]',
        'email' => '[неизвестно]',
        'phone' => '[неизвестно]'*/
    ];
}
