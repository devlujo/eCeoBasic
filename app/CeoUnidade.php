<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CeoUnidade extends Model
{
    protected $table = 'ceo_unidade';

    protected $fillable = [
        'id',
        'municipio_id',
        'tipo_id',
        'codigo_unidade',
        'descricao'
            ];

    public function tipo()
    {
        return $this->hasOne(TipoCeo::class, 'id', 'tipo_id' );
    }
    public function municipio()
    {
        return $this->hasOne(Municipio::class, 'id', 'municipio_id');
    }
}
