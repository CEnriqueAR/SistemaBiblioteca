@extends('layouts.app-master')

@section('content')

<div class="page-wrapper">
        <div class="container-xl">
          <!-- Page title -->
          <div class="page-header d-print-none">
            <div class="row align-items-center">
              <div class="col">
                <h2 class="page-title">
                  Permisos
                </h2>
                <a href="{{ route('permissions.create') }}" class="btn btn-primary">Agregar Nuevo Permisos</a>

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
                              <th>Nombre</th>
                              <th scope="col">Guard</th>

                          <th class="w-1"></th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($permissions as $key => $permission)
                        <tr>
                       
                        <td>{{ $permission->name }}</td>
                    <td>{{ $permission->guard_name }}</td>
<td>
                           <div class="dropdown">
                                <button  class="btn dropdown-toggle align-text-top" data-bs-toggle="dropdown">
                                  Actions
                                </button>
                                <div class="dropdown-menu dropdown-menu-end ">
                            
                                  <a href="{{ route('permissions.edit', $permission->id) }}" class="dropdown-item btn " >
                                     Editar
                                  </a>
                                  <a  class="dropdown-item">
                                  {!! Form::open(['method' => 'DELETE','route' => ['permissions.destroy', $permission->id],'style'=>'display:inline']) !!}
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
              
              

    
    </div>
    </div>




@endsection
