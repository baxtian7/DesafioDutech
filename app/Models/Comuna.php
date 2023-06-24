<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comuna extends Model
{
    use HasFactory;

    protected $table = 'comunas';
    protected $fillable = ['name'];
    
    public function rubros()
    {
        return $this->belongsToMany(Rubro::class, 'documento_rubro_comuna', 'comuna_id', 'rubro_id');
    }
}
