<?php

namespace App\Http\Livewire\Pages;

use App\Models\Client;
use App\Models\Requerimento as ModelsRequerimento;

use Livewire\Component;

class Requerimento extends Component
{
    public Client $client;
    public ModelsRequerimento $requerimento;
    public $showSuccesNotification  = false;

    public $showDemoNotification = false;

    protected $rules = [
        'nome' => 'max:50|min:3',
        'sobrenome' => 'max:50|min:3',
        'apelido' => 'max:50|min:3',
        'titulo_honorifico' => 'max:50|min:3',
        'sexo' => 'max:1',
        'email' => 'email',
        'telefone' => 'min:9|max:14',
        'telefone1' => 'min:9|max:14',
        'distrito' => 'max:50|min:3',
        'municipio' => 'max:50|min:3',
        'provincia' => 'max:50|min:3',
        'endereco' => 'min:3',
        'identidade' => 'min:3|max:50',
        'nacionalidades' => 'min:3|max:100',
        'estado_civil' => 'min:3|max:50',
        'grau_instrucao' => 'min:3|max:70',
        'situacao' => 'min:3|max:50',
        'profissao' => 'min:3|max:50',
        'empresa' => 'min:3|max:50',
        'endereco_empresa' => 'min:3|max:100',
        'telefone_empresa' => 'min:9|max:14',
        'email_empresa' => 'min:3|max:50',
    ];

    public function save() {
        dd($this->client);
        /* if(env('IS_DEMO')) {
           $this->showDemoNotification = true;
        } else {
            $this->validate();
            $this->client->save();
            $this->showSuccesNotification = true;
        } */
    }

    public function render()
    {
        return view('livewire.pages.requerimento');
    }
}
