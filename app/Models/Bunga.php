<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bunga extends Model
{
    use HasFactory;
    protected $fillable = [
        'NamaBunga',
        'Descriptions',
        'Price',
    ];
}
