@extends('layouts.app')

@section('content')
<div class="container">

    @if (session('alert'))
    <div class="alert alert-{{ session('alert')['type'] }} alert-dismissible fade show" role="alert">
        {{ session('alert')['message'] }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
    </div>
    @endif



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
                            <form method="POST" action="{{ route('resumes.destroy', $resume->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
