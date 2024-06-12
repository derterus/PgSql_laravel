<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $primaryKey = 'код_заказа';
    public $timestamps = false;
    protected $table = 'заказы';
    protected $fillable = [
        'код_покупателя',
        'код_книги',
        'кол-во_заказов',
        'дата_заказа',
        'сумма',
    ];
    public function getКолВоЗаказовAttribute()
    {
        return $this->attributes['кол-во_заказов'];
    }
    public function books()
    {
        return $this->belongsTo(Books::class, 'код_книги');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }
}