<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailForm extends Model
{
    use HasFactory;
    protected $fillable = [ 'name', 'email', 'phone' ,'text', 'market_budget', 'website', ];

}
