<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'eventos';
    protected $fillable = 
    [
        'ticket_numero',
        'descripcion',
    ];
    use HasFactory;
    public function clientes ()
    {
        return $this -> belongsTo (cliente::class);
    }
}
