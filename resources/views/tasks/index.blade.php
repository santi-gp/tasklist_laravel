@extends('layout.template')
@section('title', 'Lista de Tareas')
    
@section('content')
    <h2>Lista de Tareas</h2>
    @if (Session::has('mensaje'))
    <div>
        {{Session::get('mensaje')}}
    </div>
@endif
    <div class="flex-row bgc-2 jc-between ai-center color-white p-1">
        <h4>Tarea</h4>
        <a class="bgc-1 color-white pyx-05-1 border-r" href="{{route('tasks.create')}}">Añadir</a>
    </div>
    <div>
        <ul class="grid">
            @foreach ($tasks as $item)
                <li class="flex-row pyx-05-1">
                    <a class="color-3" href="{{route('tasks.show',$item->id)}}">
                        {{$item->name}}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection