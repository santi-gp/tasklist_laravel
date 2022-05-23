@extends('layout.template')
@section('title', $showTask['title'])
@section('subtitle', $showTask['subtitle'])
@section('content')
<div class="grid ai-center">
    <div class="card jc-center">
        <h3 class="card-title bgc-3">{{$showTask['tasks']->name}}</h3>
        <p class="card-content py-2">{{$showTask['tasks']->description}}</p>
    </div>
    <div class="flex-row jc-around">
        <a class="bgc-yellow pyx-05-1 color-3 border-r2-5" href="{{ route('tasks.edit', $showTask['tasks']->id) }}">Editar</a>
        <a class="bgc-red pyx-05-1 color-white border-r2-5" href="{{ route('tasks.destroy', $showTask['tasks']->id) }}">Borrar</a>
    </div>
</div>

@endsection