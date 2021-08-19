@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table table-striped">
        <thead>
            <th>Id</th>
            <th>Titulo</th>
            <th>Nombre</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach ($resumes as $resume)
            <tr>
                <td>{{ $resume->id }}</td>
                <td>
                    <a href="{{ route('resumes.show', $resume->id) }}">
                        {{ $resume->title }}
                    </a>
                </td>
                <td>{{ $resume->name }}</td>
                <td>
                    <div class="d-flex justify-content-end">
                        <div>
                            <a href="{{ route('resumes.edit', $resume->id) }}" class="btn btn-primary"> Editar </a>
                        </div>
                        <div class="ml-2">
                            <a href="{{ route('resumes.destroy', $resume->id) }}" class="btn btn-danger"> Borrar </a>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
