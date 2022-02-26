<div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Cadastro de Clientes</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

            <div class="card-body pt-4 p-3">

                      @if ($showSuccesNotification)
                          <div wire:model="showSuccesNotification"
                              class="mt-3 alert alert-secondary alert-dismissible fade show" role="alert">
                              <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
                              <span
                                  class="alert-text text-white">{{ __('Cliente cadastrado com sucesso. Foi automáticamente criado um requerimento do serviço de corretoria também. Obrigado!') }}</span>
                              <button wire:click="$set('showSuccesNotification', false)" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                              </button>
                          </div>
                      @endif

                      <form wire:submit.prevent="save" action="#" method="POST" role="form text-left">

                            <div class="row">
                              <div class="col-md-3">
                                  <div class="form-group">
                                      <label for="nome" class="form-control-label">{{ __('Nome Completo') }}</label>
                                      <div class="@error('nome')border border-danger rounded-3 @enderror">
                                          <input wire:model="nome" class="form-control" type="text" placeholder="Nome do Cliente"
                                              id="nome">
                                      </div>
                                      @error('nome') <div class="text-danger">{{ $message }}</div> @enderror
                                  </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <label for="sobrenome" class="form-control-label">{{ __('Sobrenome') }}</label>
                                  <div class="@error('sobrenome')border border-danger rounded-3 @enderror">
                                    <input wire:model="sobrenome" class="form-control" type="text"
                                    placeholder="sobrenome" id="sobrenome">
                                  </div>
                                  @error('sobrenome') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <label for="apelido" class="form-control-label">{{ __('Apelido') }}</label>
                                  <div class="@error('apelido')border border-danger rounded-3 @enderror">
                                    <input wire:model="apelido" class="form-control" type="text"
                                    placeholder="Apelido" id="apelido">
                                  </div>
                                  @error('apelido') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                              </div>
                              <div class="col-md-3">
                                  <div class="form-group">
                                      <label for="titulo_honorifico" class="form-control-label">{{ __('Titulo Honorifico') }}</label>
                                      <div class="@error('titulo_honorifico')border border-danger rounded-3 @enderror">
                                          <input wire:model="titulo_honorifico" class="form-control" type="text"
                                              placeholder="Titulo honorifico" id="titulo_honorifico">
                                      </div>
                                      @error('titulo_honorifico') <div class="text-danger">{{ $message }}</div> @enderror
                                  </div>
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-md-4">
                                  <div class="form-group">
                                      <label for="telefone" class="form-control-label">{{ __('Telefone') }}</label>
                                      <div class="@error('telefone')border border-danger rounded-3 @enderror">
                                          <input wire:model="telefone" class="form-control" type="tel" placeholder="000 999999999"
                                              id="telefone">
                                      </div>
                                      @error('telefone') <div class="text-danger">{{ $message }}</div> @enderror
                                  </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label for="telefone" class="form-control-label">{{ __('Telefone') }}</label>
                                  <div class="@error('telefone1')border border-danger rounded-3 @enderror">
                                    <input wire:model="telefone1" class="form-control" type="tel"
                                    placeholder="0000 999999999" id="telefone1">
                                  </div>
                                  @error('telefone1') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                              </div>
                              <div class="col-md-4">
                                  <div class="form-group">
                                      <label for="email" class="form-control-label">{{ __('E-mail') }}</label>
                                      <div class="@error('email')border border-danger rounded-3 @enderror">
                                          <input wire:model="email" class="form-control" type="email"
                                              placeholder="fulano@email.com" id="email">
                                      </div>
                                      @error('email') <div class="text-danger">{{ $message }}</div> @enderror
                                  </div>
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-md-3">
                                  <div class="form-group">
                                      <label for="provincia" class="form-control-label">{{ __('Provincia') }}</label>
                                      <div class="@error('provincia')border border-danger rounded-3 @enderror">
                                          <select wire:model="provincia" class="form-select" aria-label="Seleciona um Provincia">
                                            <option selected>Selecione uma Província</option>
                                            @foreach ($provincias->all() as $provincia)
                                            <option value="{{$provincia->id}}">{{$provincia->nome}}</option>
                                            @endforeach
                                          </select>
                                      </div>
                                      @error('provincia') <div class="text-danger">{{ $message }}</div> @enderror
                                  </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <label for="municipio" class="form-control-label">{{ __('Municipio') }}</label>
                                  <div class="@error('municipio')border border-danger rounded-3 @enderror">
                                    <select wire:model="municipio"class="form-select" aria-label="Seleciona um Municipio">
                                      <option selected>Selecione um Município</option>
                                      @foreach ($municipios->all() as $municipio)
                                      <option value="{{$municipio->id}}">{{$municipio->nome}}</option>
                                      @endforeach
                                    </select>
                                  </div>
                                  @error('municipio') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                              </div>
                              <div class="col-md-3">
                                  <div class="form-group">
                                      <label for="distrito" class="form-control-label">{{ __('Distrito') }}</label>
                                      <div class="@error('distrito')border border-danger rounded-3 @enderror">
                                          <input wire:model="distrito" class="form-control" type="text"
                                              placeholder="Exemplo: Zango" id="distrito">
                                      </div>
                                      @error('distrito') <div class="text-danger">{{ $message }}</div> @enderror
                                  </div>
                              </div>
                              <div class="col-md-3">
                                  <div class="form-group">
                                      <label for="endereco" class="form-control-label">{{ __('Endereco') }}</label>
                                      <div class="@error('endereco')border border-danger rounded-3 @enderror">
                                          <input wire:model="endereco" class="form-control" type="text"
                                              placeholder="Exemplo: rua B13, 86, Beco 2" id="endereco">
                                      </div>
                                      @error('endereco') <div class="text-danger">{{ $message }}</div> @enderror
                                  </div>
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-md-3">
                                <div class="form-group">
                                  <label for="identidade" class="form-control-label">{{ __('Identidade') }}</label>
                                  <div class="@error('identidade')border border-danger rounded-3 @enderror">
                                    <input wire:model="identidade" class="form-control" type="text"
                                    placeholder="Exemplo: 098765432A12" id="identidade">
                                  </div>
                                  @error('identidade') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                              </div>
                              <div class="col-md-3">
                                  <div class="form-group">
                                      <label for="nacionalidades" class="form-control-label">{{ __('Nacionalidade') }}</label>
                                      <div class="@error('nacionalidades')border border-danger rounded-3 @enderror">
                                          <input wire:model="nacionalidades" class="form-control" type="text"
                                              placeholder="Exemplo: Angolana" id="nacionalidade">
                                      </div>
                                      @error('nacionalidades') <div class="text-danger">{{ $message }}</div> @enderror
                                  </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                    <label for="estado_civil" class="form-control-label">{{ __('Estado Civil') }}</label>
                                    <div class="@error('estado_civil')border border-danger rounded-3 @enderror">
                                      <select wire:model="estado_civil" class="form-select" aria-label="Seleciona um Estado">
                                        <option selected>Escolha</option>
                                        <option value="Solteiro">Solteiro</option>
                                        <option value="Casado">Casado</option>
                                        <option value="Viuvo">Viuvo</option>
                                        <option value="Outro">Outro</option>
                                      </select>
                                    </div>
                                    @error('estado_civil') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                              </div>
                              <div class="col-md-4">
                                  <div class="form-group">
                                      <label for="sexo" class="form-control-label">{{ __('Sexo') }}</label>
                                      <div class="@error('sexo')border border-danger rounded-3 @enderror">
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" wire:model="sexo" id="inlineRadio1" value="1">
                                            <label class="form-check-label" for="inlineRadio1">Sexo Masculino</label>
                                          </div>
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" wire:model="sexo" id="inlineRadio2" value="0">
                                            <label class="form-check-label" for="inlineRadio2">Sexo Femenino</label>
                                          </div>
                                      </div>
                                      @error('sexo') <div class="text-danger">{{ $message }}</div> @enderror
                                  </div>
                              </div>
                            </div>

                          <div class="row">
                              <div class="col-md-2">
                                  <div class="form-group">
                                      <label for="grau_instrucao" class="form-control-label">{{ __('Grau de Instrucao') }}</label>
                                      <div class="@error('grau_instrucao')border border-danger rounded-3 @enderror">
                                        <select wire:model="grau_instrucao" class="form-select" aria-label="Seleciona um Estado">
                                          <option selected>Escolha o nivel de ensino</option>
                                          <option value="Primario">Primario</option>
                                          <option value="Secundario">Secundario</option>
                                          <option value="Universitario">Universitario</option>
                                          <option value="Licenciatura">Licenciatura</option>
                                          <option value="Curso Tecnico">Curso Tecnico</option>
                                          <option value="Outro">Outro</option>
                                        </select>
                                      </div>
                                      @error('grau_instrucao') <div class="text-danger">{{ $message }}</div> @enderror
                                  </div>
                              </div>
                              <div class="col-md-3">
                                  <div class="form-group">
                                      <label for="profissao" class="form-control-label">{{ __('Situacao Profissional') }}</label>
                                      <div class="@error('profissao')border border-danger rounded-3 @enderror">
                                          <input wire:model="profissao" class="form-control" type="text"
                                              placeholder="Qual sua profissao" id="profissao">
                                      </div>
                                      @error('profissao') <div class="text-danger">{{ $message }}</div> @enderror
                                  </div>
                              </div>
                              <div class="col-md-4">
                                  <div class="form-group">
                                      <label for="situacao" class="form-control-label">{{ __('Empregabilidade') }}</label>
                                      <div class="@error('situacao')border border-danger rounded-3 @enderror">
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" wire:model="situacao" id="inlineRadio3" value="1">
                                            <label class="form-check-label" for="inlineRadio1">(S) Empregado</label>
                                          </div>
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" wire:model="situacao" id="inlineRadio4" value="0">
                                            <label class="form-check-label" for="inlineRadio2">(N) Desempregado</label>
                                          </div>
                                      </div>
                                      @error('situacao') <div class="text-danger">{{ $message }}</div> @enderror
                                  </div>
                              </div>
                              <div class="col-md-3">
                                  <div class="form-group">
                                      <label for="empresa" class="form-control-label">{{ __('Empresa') }}</label>
                                      <div class="@error('empresa') border border-danger rounded-3 @enderror">
                                          <input wire:model="empresa" class="form-control" type="text"
                                              placeholder="empresa" id="empresa">
                                      </div>
                                      @error('empresa') <div class="text-danger">{{ $message }}</div> @enderror
                                  </div>
                              </div>

                          </div>

                          <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="telefone_empresa" class="form-control-label">{{ __('Telefone Empresa') }}</label>
                                    <div class="@error('telefone_empresa')border border-danger rounded-3 @enderror">
                                        <input wire:model="telefone_empresa" class="form-control" type="tel" placeholder="000 999999999"
                                            id="telefone_empresa">
                                    </div>
                                    @error('telefone_empresa') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                  <label for="email_empresa" class="form-control-label">{{ __('Email Empresa') }}</label>
                                  <div class="@error('email_empresa')border border-danger rounded-3 @enderror">
                                      <input wire:model="email_empresa" class="form-control" type="email"
                                          placeholder="fulano@email.com" id="email">
                                  </div>
                                  @error('email_empresa') <div class="text-danger">{{ $message }}</div> @enderror
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="endereco_empresa" class="form-control-label">{{ __('Endereco Empresa') }}</label>
                                <div class="@error('endereco_empresa')border border-danger rounded-3 @enderror">
                                  <input wire:model="endereco_empresa" class="form-control" type="text"
                                  placeholder="Endereco da empresa" id="endereco_empresa">
                                </div>
                                @error('endereco_empresa') <div class="text-danger">{{ $message }}</div> @enderror
                              </div>
                            </div>
                          </div>

                          <div class="form-group">
                              <label for="perfil">{{ 'Sobre o Cliente/Perfil Geral' }}</label>
                              <div class="@error('perfil')border border-danger rounded-3 @enderror">
                                  <textarea wire:model="perfil" class="form-control" id="perfil" rows="3"
                                      placeholder="Perfil geral do cliente"></textarea>
                              </div>
                              @error('perfil') <div class="text-danger">{{ $message }}</div> @enderror
                          </div>
                          <div class="d-flex justify-content-end">
                              <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Submeter Cadastro' }}</button>
                          </div>
                      </form>

            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
</div>
