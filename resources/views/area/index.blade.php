@extends('layouts.app-master')

@section('content')

<div class="page-wrapper">
        <div class="container-xl">
          <!-- Page title -->
          <div class="page-header d-print-none">
            <div class="row align-items-center">
              <div class="col">
                <h2 class="page-title">
                  Area
                </h2>
                <a href="{{ route('area.create') }}" class="btn btn-primary">Agregar Nueva Area</a>

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
                      @foreach ($area as $key => $areas)
                        <tr>
                       
                        <th scope="row">{{ $areas->id }}</th>
                <td>{{ $areas->nombre }}</td>
<td>
                           <div class="dropdown">
                                <button  class="btn dropdown-toggle align-text-top" data-bs-toggle="dropdown">
                                  Actions
                                </button>
                                <div class="dropdown-menu dropdown-menu-end ">
                                  <a  href="{{ route('area.show', $areas->id) }}"  class="dropdown-item btn " >
                                    Ver
                                  </a>
                                  <a href="{{ route('area.edit', $areas->id) }}" class="dropdown-item btn " >
                                     Editar
                                  </a>
                                  <a  class="dropdown-item">
                                  {!! Form::open(['method' => 'DELETE','route' => ['area.destroy', $areas->id],'style'=>'display:inline']) !!}
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
            {!! $area->links() !!}
        </div>

    </div>
    </div>


    
@endsection
