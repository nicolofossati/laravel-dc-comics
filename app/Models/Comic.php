<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;

    protected $fillable = [
        //Qua nmetto i campi che voglio che passino, è una white-list
        'thumb',
        'title',
        'type',
        'price',
        'sale_date',
        'series'
    ];
}