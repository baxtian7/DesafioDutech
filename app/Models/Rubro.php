<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rubro extends Model
{
    use HasFactory;

    protected $table = 'rubros';
    protected $fillable = ['name'];

    public function comunas()
    {
        return $this->belongsToMany(Comuna::class, 'documento_rubro_comuna', 'rubro_id', 'comuna_id');
    }

    public function documentos()
    {
        return $this->belongsToMany(Documento::class, 'documento_rubro_comuna', 'rubro_id', 'documento_id');
    }
}
