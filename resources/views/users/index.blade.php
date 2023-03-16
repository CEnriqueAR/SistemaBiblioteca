@extends('layouts.app-master')

@section('content')
<div class="page-wrapper">
        <div class="container-xl">
          <!-- Page title -->
          <div class="page-header d-print-none">
            <div class="row align-items-center">
              <div class="col">
                <h2 class="page-title">
                  Tables
                </h2>
                <a href="{{ route('users.create') }}" class="btn btn-primary">Agregar Muevo Usuario</a>

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
                          <th>NOmbre</th>
                          <th>Nombre Usuario</th>
                          <th>Correo</th>
                          <th>Rol</th>
                          <th class="w-1"></th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($users as $user)
                        <tr>
                       
                        <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>                  
                            <td class="text-muted" >
                            {{ $user->username }}

                          </td>
                          <td class="text-muted" ><a href="#" class="text-reset">{{ $user->email }}</a></td>
                          <td class="text-muted" >
                          @foreach($user->roles as $role)
                                {{ $role->name }}
                            @endforeach
                          </td>
<td>
                           <div class="dropdown">
                                <button  class="btn dropdown-toggle align-text-top" data-bs-toggle="dropdown">
                                  Actions
                                </button>
                                <div class="dropdown-menu dropdown-menu-end ">
                                  <a  href="{{ route('users.show', $user->id) }}"  class="dropdown-item btn " >
                                    Ver
                                  </a>
                                  <a href="{{ route('users.edit', $user->id) }}" class="dropdown-item btn " >
                                     Editar
                                  </a>
                                  <a  class="dropdown-item">
                                  {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
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
            {!! $users->links() !!}
        </div>

    </div>
    </div>

@endsection
