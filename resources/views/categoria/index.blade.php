@extends('layouts.app-master')

@section('content')
<div class="page-wrapper">
        <div class="container-xl">
          <!-- Page title -->
          <div class="page-header d-print-none">
            <div class="row align-items-center">
              <div class="col">
                <h2 class="page-title">
                categoria
                </h2>
                <a href="{{ route('categoria.create') }}" class="btn btn-primary">Agregar Nueva categoria</a>

              </div>
            </div>
          </div>
        

        <div class="mt-2">
            @include('layouts.partials.messages')
        </div>
<div class="col-12">
                <div class="card">
                  <div class="table-responsive">
                    <table class="table table-vcenter card-table table-striped">
                      <thead>
                        <tr>
                        <th scope="col" width="1%">#</th>
                              <th>Nobre</th>
                          <th class="w-1"></th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($categoria as $key => $categorias)
                        <tr>
                       
                        <th scope="row">{{ $categorias->id }}</th>
                <td>{{ $categorias->nombre }}</td>
<td>
                           <div class="dropdown">
                                <button  class="btn dropdown-toggle align-text-top" data-bs-toggle="dropdown">
                                  Actions
                                </button>
                                <div class="dropdown-menu dropdown-menu-end ">
                                  <a  href="{{ route('categoria.show', $categorias->id) }}"  class="dropdown-item btn " >
                                    Ver
                                  </a>
                                  <a href="{{ route('categoria.edit', $categorias->id) }}" class="dropdown-item btn " >
                                     Editar
                                  </a>
                                  <a  class="dropdown-item">
                                  {!! Form::open(['method' => 'DELETE','route' => ['categoria.destroy', $categorias->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Borrar', ['class' => 'dropdown-item btn']) !!}
                    {!! Form::close() !!}
                                  </a>
                                </div>
                              </div>
</td>
                        
                 
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
</div>
              
              

        <div class="d-flex">
            {!! $categoria->links() !!}
        </div>

    </div>
    </div>


@endsection
