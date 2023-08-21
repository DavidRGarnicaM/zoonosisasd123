<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable 
{
    use HasFactory;
    use HasRoles;
    use Notifiable;
   
    protected $fillable = [
        'nombre_completo',
        'nombre_usuario',
        'password',
        'ci',
        'exp',
        'foto',
        'estado'
    ];
}
