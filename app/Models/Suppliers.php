<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suppliers extends Model
{
    use HasFactory;
    protected $primaryKey = 'код_поставщика';
    protected $table = 'поставщики';
    public $timestamps = false;
    protected $fillable = [
        'название_пост',
        'адрес_пост',
        'телефон',
    ];
}
