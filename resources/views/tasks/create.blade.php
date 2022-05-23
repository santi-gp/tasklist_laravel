@extends('layout.template')
@section('title', $createTask['title'])
@section('subtitle', $createTask['subtitle'])
@section('content')
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <input type="text" value="{{ old('name') ?? @$tasklist->name }}" name="name" placeholder="Añadir tarea" />
        <textarea name="description" cols="20" rows="5" placeholder="Descripción" ></textarea>
        <button class="bgc-2 color-1 pyx-1-2 border-r2-5 fit-content">Guardar</button>
    </form>
@endsection