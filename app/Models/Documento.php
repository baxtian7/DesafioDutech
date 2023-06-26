<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Rubro;
use App\Models\Comuna;

class Documento extends Model
{
    use HasFactory;

    protected $table = 'documentos';
    protected $fillable = ['name'];

    public function rubros()
    {
        return $this->belongsToMany(Rubro::class, 'documento_rubro_comunas');
    }

    public function comunas()
    {
        return $this->belongsToMany(Comuna::class, 'documento_rubro_comunas');
    }
}
