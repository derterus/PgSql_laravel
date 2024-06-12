<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;
    protected $table = 'книги';
    protected $fillable = [
        'название',
        'код_раздел',
        'код_автора',
        'код_поставщика',
        'код_издательства',
        'год_издания',
        'кол-во',
        'цена',
        'дата_поставки',
    ];
    protected $primaryKey = 'Код_книги';
    public $timestamps = false;
   public function getКолВоAttribute()
{
    return $this->attributes['кол-во'];
}

    public function page()
    {
        return $this->belongsTo(Pages::class, 'код_раздел');
    }

    public function author()
    {
        return $this->belongsTo(Authors::class, 'код_автора');
    }

    public function supplier()
    {
        return $this->belongsTo(Suppliers::class, 'код_поставщика');
    }

    public function publisher()
    {
        return $this->belongsTo(Publishers::class, 'код_издательства');
    }
}
