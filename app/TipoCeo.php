<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoCeo extends Model
{
    protected $table = 'ceo_tipo';

    protected $filable = [
        'id',
        'tipo',
        'periodontia',
        'endodontia',
        'basico',
        'cirurgia'
    ];

    public function unidades()
    {
        return $this->belongsTo(CeoUnidade::class, 'tipo_id', 'id');
    }
}
