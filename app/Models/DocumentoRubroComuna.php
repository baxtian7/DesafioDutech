<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentoRubroComuna extends Model
{
    use HasFactory;
    protected $table = 'documento_rubro_comunas';

    public function documento()
    {
        return $this->belongsTo(Documento::class);
    }

    public function rubro()
    {
        return $this->belongsTo(Rubro::class);
    }

    public function comuna()
    {
        return $this->belongsTo(Comuna::class);
    }

}
