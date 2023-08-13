<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sabor extends Model
{
    use HasFactory;

    protected $table = "sabores";
    protected $fillable = ['nome'];

}
