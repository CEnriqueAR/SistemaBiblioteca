@extends('layouts.app-master')

@section('content')


    




    <div class="page-wrapper">
        <div class="container-xl">
          <!-- Page title -->
          <div class="page-header d-print-none">
            <div class="row align-items-center">
              <div class="col">
                <h2 class="page-title">
                  Roles
                </h2>
                <a href="{{ route('roles.create') }}" class="btn btn-primary">Agregar Nuevo Rol</a>

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
                              <th>Name</th>
                          <th class="w-1"></th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($roles as $key => $role)
                        <tr>
                       
                        <th scope="row">{{ $role->id }}</th>
                <td>{{ $role->name }}</td>
<td>
                           <div class="dropdown">
                                <button  class="btn dropdown-toggle align-text-top" data-bs-toggle="dropdown">
                                  Actions
                                </button>
                                <div class="dropdown-menu dropdown-menu-end ">
                                  <a  href="{{ route('roles.show', $role->id) }}"  class="dropdown-item btn " >
                                    Ver
                                  </a>
                                  <a href="{{ route('roles.edit', $role->id) }}" class="dropdown-item btn " >
                                     Editar
                                  </a>
                                  <a  class="dropdown-item">
                                  {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
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
            {!! $roles->links() !!}
        </div>

    </div>
    </div>
@endsection
