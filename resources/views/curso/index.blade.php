@extends('layouts.app-master')

@section('content')


    <div class="bg-light p-4 rounded">
        <h2>Curso</h2>
        <div class="lead">
            Manage your Curso here.
            <a href="{{ route('curso.create') }}" class="btn btn-primary btn-sm float-right">Add curso</a>
        </div>

        <div class="mt-2">
            @include('layouts.partials.messages')
        </div>

        <table class="table table-bordered">
            <tr>
                <th width="1%">No</th>
                <th>Name</th>
                <th width="3%" colspan="3">Action</th>
            </tr>
            @foreach ($curso as $key => $cursos)
                <tr>
                    <td>{{ $cursos->id }}</td>
                    <td>{{ $cursos->nombre }}</td>
                    <td>
                        <a class="btn btn-info btn-sm" href="{{ route('curso.show', $cursos->id) }}">Show</a>
                    </td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="{{ route('curso.edit', $cursos->id) }}">Edit</a>
                    </td>
                    <td>
                        {!! Form::open(['method' => 'DELETE','route' => ['curso.destroy', $cursos->id],'style'=>'display:inline']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </table>

        <div class="d-flex">
            {!! $curso->links() !!}
        </div>

    </div>
@endsection
