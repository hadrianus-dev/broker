<div class="main-content">
  <div class="alert alert-secondary mx-4" role="alert">
      <span class="text-white"><strong>Add, Edit, Delete features are not functional!</strong> This is a
          <strong>PRO</strong> feature!
          Click <strong><a href="https://demos.creative-tim.com/soft-ui-dashboard-laravel-pro/dashboard-default" target="_blank"
                  class="text-white">here</a></strong>
          to see the PRO
          product!</span>
  </div>

  <div class="row">
      <div class="col-12">
          <div class="card mb-4 mx-4">
              <div class="card-header pb-0">
                  <div class="d-flex flex-row justify-content-between">
                      <div>
                          <h5 class="mb-0">Todos os Clientes</h5>
                      </div>
                      <a href="#" class="btn bg-gradient-secondary btn-sm mb-0" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">+&nbsp; Novo Cliente</a>
                  </div>
              </div>

              <div class="card-body px-0 pt-0 pb-2">
                  <div class="table-responsive p-0">
                      <table class="table align-items-center mb-0">
                          <thead>
                              <tr>
                                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                      ID
                                  </th>
                                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                      Foto
                                  </th>
                                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                      Nome & Apelido
                                  </th>
                                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                      Email
                                  </th>

                                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                      Data de Criação
                                  </th>
                                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                      Ações
                                  </th>
                              </tr>
                          </thead>
                          <tbody>
                            @foreach ($allClients->all() as $cliente)
                            <tr>
                                <td class="ps-4">
                                    <p class="text-xs font-weight-bold mb-0">{{$cliente->id}}</p>
                                </td>
                                <td>
                                    <div>
                                        <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3">
                                    </div>
                                </td>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">{{$cliente->nome}} {{$cliente->apelido}}</p>
                                </td>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">{{$cliente->email}}</p>
                                </td>

                                <td class="text-center">
                                    <span class="text-secondary text-xs font-weight-bold">{{$cliente->created_at->diffForHumans()}}</span>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="mx-3" data-bs-toggle="tooltip"
                                        data-bs-original-title="Edit user">
                                        <i class="fas fa-user-edit text-secondary"></i>
                                    </a>
                                    <span>
                                        <i class="cursor-pointer fas fa-trash text-secondary"></i>
                                    </span>
                                </td>
                            </tr>
                            @endforeach
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>
  </div>

</div>

{{-- @livewire('client.create-form-component') --}}
<livewire:pages.client.create-form-component />
