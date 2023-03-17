@extends('layouts.app-master')

@section('content')


<div class="page-wrapper">
        <div class="container-xl">
          <!-- Page title -->
          <div class="page-header d-print-none">
            <div class="row align-items-center">
              <div class="col">
                <h2 class="page-title">
                Curso
                </h2>
                <a href="{{ route('curso.create') }}" class="btn btn-primary">Agregar Nuevo Curso</a>

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
                              <th>Nombre</th>
                          <th class="w-1"></th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($curso as $key => $cursos)
                        <tr>
                       
                        <th scope="row">{{ $cursos->id }}</th>
                <td>{{ $cursos->nombre }}</td>
<td>
                           <div class="dropdown">
                                <button  class="btn dropdown-toggle align-text-top" data-bs-toggle="dropdown">
                                  Actions
                                </button>
                                <div class="dropdown-menu dropdown-menu-end ">
                                  <a  href="{{ route('curso.show', $cursos->id) }}"  class="dropdown-item btn " >
                                    Ver
                                  </a>
                                  <a href="{{ route('curso.edit', $cursos->id) }}" class="dropdown-item btn " >
                                     Editar
                                  </a>
                                  <a  class="dropdown-item">
                                  {!! Form::open(['method' => 'DELETE','route' => ['curso.destroy', $cursos->id],'style'=>'display:inline']) !!}
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
            {!! $curso->links() !!}
        </div>

    </div>
    </div>


@endsection
