<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title',
        'body',
        'published_at'
    ];

    /**
     * Com essa funçao abaixo voce pode determinar modificaçoes no que foi enviado,
     * antes mesmo que ele seja armazenado no Banco de Dados
     * setAtributeNameAttribute => setTitleAttribute
     * @param $date
     */
    public function setTitleAttribute($date)
    {
        $this->attributes['title'] = 'Titulo do Pedro sem importar ('.$date.')';
    }

    public function setPublishedAtAttribute($date){
        $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d H:i:s', $date);
    }
}
