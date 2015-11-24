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

    protected $dates = ['published_at'];

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
        $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);
    }

    /**
     * Cria nosso primeiro scopo de classe.
     * Funciona assim, agora pode ser usado em toda a aplicaçao.
     * @param $query recebe a query e insere o que quiser
     *
     */
    public function scopePublished($query){
        $query->where('published_at', '<=', Carbon::now());
    }

    public function scopeUnPublished($query){
        $query->where('published_at', '>=', Carbon::now());
    }
}
