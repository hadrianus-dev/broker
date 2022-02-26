<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;

class Requerimento extends Model
{
    use HasFactory;

    protected $fillable = ['cliente_id', 'ccr'];

    public function clientes(){
      return $this->belongsTo(Client::class);
    }
}
