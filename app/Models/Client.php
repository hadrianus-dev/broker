<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Requerimento;
use App\Models\User;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
      'nome',
      'sobrenome',
      'apelido',
      'titulo_honorifico',
      'sexo',
      'email',
      'telefone',
      'telefone1',
      'distrito',
      'municipio',
      'provincia',
      'endereco',
      'identidade',
      'nacionalidades',
      'estado_civil',
      'perfil',
      'grau_instrucao',
      'situacao',
      'profissao',
      'empresa',
      'endereco_empresa',
      'telefone_empresa',
      'email_empresa',
    ];

    public function requerimentos() {
      return $this->hasMany(Requerimento::class);
    }
    public function users() {
      return $this->belongsTo(User::class);
    }
}
