@extends('layout.template')
@section('title', 'Editar Tarea')
    
@section('content')
<h2>Editar Tareas</h2>
<form action="{{ route('tasks.update', $tasklist->id) }}" method="POST">
    @csrf
        @method('put')
        <input type="text" value="{{ old('name') ?? @$tasklist->name }}" name="name" placeholder="Añadir tarea" />
        <textarea name="description" cols="10" rows="10" placeholder="Descripción">{{ old('description') ?? @$tasklist->description }}</textarea>
        <button>Actualizar</button>
    </form>
@endsection