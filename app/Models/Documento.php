<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    use HasFactory;

    protected $table = 'documentos';
    protected $fillable = ['name'];

    public function rubros()
    {
        return $this->belongsToMany(Rubro::class, 'documento_rubro_comuna', 'documento_id', 'rubro_id');
    }
}
