<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
        protected $fillable = ['name', 'sobrenome', 'telefone', 'cpf', 'email', 'email_verified_at', 'password'];
}
