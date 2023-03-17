@extends('layouts.app-master')

@section('content')
<div class="page-wrapper">
        <div class="container-xl">
          <!-- Page title -->
          <div class="page-header d-print-none">
            <div class="row align-items-center">
              <div class="col">
              <h1>{{ ucfirst($role->name) }} Role</h1>

              <h3> Permisos Asignados</h3>
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
                    <th scope="col" width="20%">Name</th>
                    <th scope="col" width="1%">Guard</th> 
                </thead>
                <tbody>

                @foreach($rolePermissions as $permission)
                    <tr>
                        <td>{{ $permission->name }}</td>
                        <td>{{ $permission->guard_name }}</td>
                    </tr>
                @endforeach
                </tbody>
                    </table>
                  </div>
                </div>
                </div>

                      <div class="mt-4">
        <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-info">Edit</a>
        <a href="{{ route('roles.index') }}" class="btn btn-default">Back</a>
 

</div>


   
@endsection