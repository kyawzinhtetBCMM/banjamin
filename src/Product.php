<?php

namespace Bcmm073\SappModels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=[
        "name",
        "created_at",
        "updated_at"
    ];
}
