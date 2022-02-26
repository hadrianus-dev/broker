<?php

namespace App\Http\Livewire\Pages\Client;

use App\Models\Client as Cliente;
use App\Models\Municipio;
use App\Models\Provincia;
use App\Models\Requerimento as ModelsRequerimento;
use App\Models\User;
use Carbon\Carbon;
use Livewire\Component;

class CreateFormComponent extends Component
{
  public User $user;
  public Provincia $provincias;
  public Municipio $municipios;
  public Cliente $allClients;
  public ModelsRequerimento $requerimento;
  public $showSuccesNotification  = false;
  public $formCreateModalCliente = false;
  public $formEditModalCliente = false;

  public $showDemoNotification = false;

  private $Data = [];
  public string $nome = '';
  public string $sobrenome = '';
  public string $apelido = '';
  public string $titulo_honorifico = '';
  public string $sexo = '';
  public string $email = '';
  public string $telefone = '';
  public string $telefone1 = '';
  public string $distrito = '';
  public string $municipio = '';
  public string $provincia = '';
  public string $endereco = '';
  public string $identidade = '';
  public string $nacionalidades = '';
  public string $estado_civil = '';
  public string $perfil = '';
  public string $grau_instrucao = '';
  public string $situacao = '';
  public string $profissao = '';
  public string $empresa = '';
  public string $endereco_empresa = '';
  public string $telefone_empresa = '';
  public string $email_empresa = '';


  protected $rules = [
      'nome' => 'required|max:100|min:3',
      'sobrenome' => 'max:100|min:3',
      'apelido' => 'required|max:50|min:3',
      'titulo_honorifico' => 'required|max:50|min:3',
      'sexo' => 'required|max:1',
      'email' => 'required|email',
      'telefone' => 'required|min:9|max:14',
      'telefone1' => 'min:9|max:14',
      'distrito' => 'required|max:50|min:3',
      'municipio' => 'required|max:50|min:3',
      'provincia' => 'required|max:50|min:3',
      'endereco' => 'required|min:3',
      'identidade' => 'required|min:3|max:50',
      'nacionalidades' => 'required|min:3|max:100',
      'estado_civil' => 'required|min:3|max:50',
      'perfil' => 'min:10',
      'grau_instrucao' => 'min:10',
      'situacao' => 'required',
      'profissao' => 'min:3|max:50',
      'empresa' => 'min:3|max:50',
      'endereco_empresa' => 'min:3|max:100',
      'telefone_empresa' => 'min:9|max:14',
      'email_empresa' => 'min:3|max:50',
  ];

  public function mount(Provincia $province, Municipio $municipe, Cliente $clientes){
    $this->user = auth()->user();
    $this->provincias = $province;
    $this->municipios = $municipe;
    $this->allClients = $clientes;
  }

  public function save() {
    if($this->validate()){
      $this->Data = [
        'nome' => $this->nome,
        'sobrenome' => $this->sobrenome,
        'apelido' => $this->apelido,
        'titulo_honorifico' => $this->titulo_honorifico,
        'sexo' => $this->sexo,
        'email' => $this->email,
        'telefone' => $this->telefone,
        'telefone1' => $this->telefone1,
        'distrito' => $this->distrito,
        'municipio' => $this->municipio,
        'provincia' => $this->provincia,
        'endereco' => $this->endereco,
        'identidade' => $this->identidade,
        'nacionalidades' => $this->nacionalidades,
        'estado_civil' => $this->estado_civil,
        'perfil' => $this->perfil,
        'grau_instrucao' => $this->grau_instrucao,
        'situacao' => $this->situacao,
        'profissao' => $this->profissao,
        'empresa' => $this->empresa,
        'endereco_empresa' => $this->endereco_empresa,
        'telefone_empresa' => $this->telefone_empresa,
        'email_empresa' => $this->email_empresa,
      ];
      #dd($this->Data);
      #dd($this->validate());
      $store = $this->user->clientes()->create($this->Data);
      if($store){
        $ccr = 'AHPP'.'-'.$store->id.'-'.str_replace('/','', date('d/m/Y', strtotime('+'. 2 .'year'. 6 . 'months')));
        $getClient = Cliente::query()->find($store->id);
        #dd($getClient);
        $ccrData['ccr'] = $ccr;
        $requerimentoStore = $getClient->requerimentos()->create($ccrData);
        #dd($requerimentoStore);
        $dataStored = ['Cliente' => $store, 'Requerimento' => $requerimentoStore];
        $this->showSuccesNotification = true;
        return response()->json($dataStored, 200);
      }else {
        return response()->json('Algo deu errado, tente denovo', 500);
      }

    }
  }

    public function render()
    {
        return view('livewire.pages.client.create-form-component');
    }
}
