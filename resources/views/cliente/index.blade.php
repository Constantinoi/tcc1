
@extends('layouts.base')

@section('conteudo')    
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Clientes<small>Lista de Clientes</small></h2>
                    <div class="box-tools pull-right" > 
                        <a class="btn btn-success" href="{{ route('cliente.create') }}">
                            <i class="fa fa-plus"></i>
                            Novo
                        </a>                    
                    </div>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap"  cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>Nome</th>
                          <th>Data Nascimento</th>
                          <th>Telefone</th>
                          <th>Celular</th>
                          <th>Observação</th>
                          <th>Cep</th>
                          <th>Logradouro</th>
                          <th>Número</th>
                          <th>Bairro</th>
                          <th>Complemento</th>
                          <th>Ações</th>

                        </tr>
                      </thead>

                      <tbody>
                          @foreach ($clientes as $cliente)
                        <tr>
                            <td>{{$cliente->nome}}</td>
                            <td>{{$cliente->data_nascimento}}</td>
                            <td>{{$cliente->telefone_1}}</td>                                                                 
                            <td>{{$cliente->telefone_2}}</td>
                            <td>{{$cliente->observacao}}</td>
                            <td>{{$cliente->endereco->cep}}</td>
                            <td>{{$cliente->endereco->logradouro}}</td>
                            <td>{{$cliente->endereco->num}}</td>
                            <td>{{$cliente->endereco->bairro}}</td>
                            <td>{{$cliente->endereco->complemento}}</td>
                           
                            <td>
                              <a href="{{route('cliente.edit', $cliente->id)}}"><i class="fa fa-edit"></i></a>
                              <a href="" data-toggle="modal" data-target="#removeCliente"> <i class="fa fa-trash-o"></i></a>
                              <a href="" data-toggle="modal" data-target="#showCliente"><i class="fa fa-eye"></i></a></td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    <!-- <a href="{{route('cliente.create')}}"> <button class="btn btn-primary">Adicionar Cliente</button></a> -->
                  </div>
                </div>
              </div>




@include('cliente._modal')

@endsection