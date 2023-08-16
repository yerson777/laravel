<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFaxtory;
    protected $primaryKey = 'id';
    protected $table = 'clientes';
    protected $fillable = 
    [
        'nombre',
        'apellido',
    ];

    use HasFactory;
    public function eventos ()
    {
        return $this -> HasMany (Evento::class);
    }
}
