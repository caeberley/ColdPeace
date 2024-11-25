<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'usuario';

    protected $primaryKey = 'username';

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'username',
        'contraseña',
        'apeP',
        'apeM',
        'nombre',
        'fechaNam',
        'edad',
        'correo',
    ];

    protected $hidden = [
        'contraseña',
    ];

    protected function casts(): array
    {
        return [
            'fechaNam' => 'date',
            'edad' => 'integer',
        ];
    }

      // Mutator para encriptar la contraseña al guardar
      public function setPasswordAttribute($value)
      {
          $this->attributes['contraseña'] = bcrypt($value);
      }
  
      // Sobreescribir para usar 'contraseña' en lugar de 'password'
      public function getAuthPassword()
      {
          return $this->contraseña;
      }
}
