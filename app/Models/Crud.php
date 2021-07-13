<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    use HasFactory;
     protected $table = 'tbl_crud';
    protected $fillable = [
        'name',
        'email',
        'phone',
    ];
}
