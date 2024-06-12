<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publishers extends Model
{
    use HasFactory;
    protected $fillable = [
        'название',
    ];
    public $timestamps = false;
    protected $table = "издательства";
    protected $primaryKey = "код_издательства";
}
