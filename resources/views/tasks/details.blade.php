@extends('layout.template')
@section('title', 'Detalles')
    
@section('content')
<h2>Detalle de tarea</h2>
<div class="grid ai-center">
    <div class="card jc-center">
        <h3 class="card-title bgc-3">{{$tasklist->name}}</h3>
        <p class="card-content py-2">{{$tasklist->description}}</p>
    </div>
    <div class="flex-row jc-around">
        <a class="bgc-yellow pyx-05-1 color-3 border-r" href="{{ route('tasks.edit', $tasklist->id) }}">Editar</a>
        <a class="bgc-red pyx-05-1 color-white border-r" href="{{ route('tasks.destroy', $tasklist->id) }}">Borrar</a>
    </div>
</div>
    
@endsection