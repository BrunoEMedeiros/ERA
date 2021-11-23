<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Exercicio extends Model
{
    use HasFactory;
    protected $table = 'exercicios';
    protected $fillable = ['periodo', 'kmatual', 'kmtotal', 'tempo', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
