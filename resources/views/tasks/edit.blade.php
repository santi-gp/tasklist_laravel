@extends('layout.template')
@section('title',  $editTask['title'])
@section('subtitle',  $editTask['subtitle'])    
@section('content')
<form action="{{ route('tasks.update', $editTask['task']->id) }}" method="POST">
    @csrf
        @method('put')
        <input type="text" value="{{ old('name') ?? @ $editTask['task']->name }}" name="name" placeholder="Añadir tarea" />
        <textarea name="description" cols="10" rows="10" placeholder="Descripción">{{ old('description') ?? @$editTask['task']->description }}</textarea>
        <button class="fit-content bgc-2 pyx-1-2 color-1 border-r2-5">Actualizar</button>
    </form>
@endsection