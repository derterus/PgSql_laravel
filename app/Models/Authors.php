<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Authors extends Model
{
    use HasFactory;
    protected $fillable = [
        'фамилия',
        'имя',
        'отчество',
        'дата_рождения'
    ];
    public $timestamps = false;
    protected $table = 'авторы';
    protected $primaryKey = 'код_автора';
}
