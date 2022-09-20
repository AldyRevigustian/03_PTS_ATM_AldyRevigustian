<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moneys extends Model
{
    use HasFactory;

    protected $fillable = [
        'rekening',
        'money'
    ];
}
