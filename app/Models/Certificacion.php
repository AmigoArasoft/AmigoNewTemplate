<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Certificacion extends Model{
    protected $table = 'certificaciones';
    public $timestamps = false;
	protected $fillable = ['nombre', 'fecha_certificacion', 'operador_id', 'archivo', 'user_create_id', 'activo'];

	protected static function boot(){
        parent::boot();
        static::creating(function ($tabla) {
            $tabla->user_create_id = (Auth::check()) ? Auth::id() : 1;
        });
    }

}