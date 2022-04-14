@extends('layout.template')
@section('title', 'Añadir Tarea')
    
@section('content')
<h2>Añadir Tarea</h2>
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <input type="text" value="{{ old('name') ?? @$tasklist->name }}" name="name" placeholder="Añadir tarea" />
        <textarea name="description" cols="20" rows="5" placeholder="Descripción" ></textarea>
        <button>Guardar</button>
    </form>
@endsection