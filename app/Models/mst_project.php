<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mst_project extends Model
{
    use HasFactory;
    protected $table = 'mst_project';
    protected $guarded = ['id'];
}
