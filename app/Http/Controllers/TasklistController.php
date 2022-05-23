<?php

namespace App\Http\Controllers;

use App\Models\Tasklist;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;

class TasklistController extends Controller
{
    public function index()
    {
        $viewTask = [];
        $viewTask['title'] = 'Tareas';
        $viewTask['subtitle'] = 'Lista de Tareas';
        $viewTask['task'] = Tasklist::all();
        return view('tasks.index', compact('viewTask'));
    }

    public function create()
    {
        $createTask = [];
        $createTask['title'] = 'Añadir Tarea';
        $createTask['subtitle'] = 'Añadir Tarea';
        return view('tasks.create', compact('createTask'));
    }

    public function store(Request $request)
    {
        $task = new Tasklist();
        $task->name = $request->name;
        $task->description = $request->description;
        $task->save();
        return redirect()->route('tasks.index');
    }

    public function show(Tasklist $tasklist)
    {   
        $showTask=[];
        $showTask['title']='Detalles';
        $showTask['subtitle']='Detalle de tarea';
        $showTask['tasks']= $tasklist;
        //return $showTask;
        return view('tasks.details')->with('showTask', $showTask);
        
    }

    public function edit(Tasklist $tasklist)
    {
        //return $tasklist; 
        //Te muestra el array completo 

        // return view('tasks.edit')->with('tasks'. $tasklist);
        // otra forma más óptima 
        //return view('tasks.edit', compact('tasklist'));

        //forma más óptima
        $editTask = [];
        $editTask['title'] = 'Editar';
        $editTask['subtitle'] = 'Editar tarea';
        $editTask['task'] = $tasklist;
        //return $editTask;
        return view('tasks.edit', compact('editTask'));
    }

    public function update(Request $request, Tasklist $tasklist)
    {
        // return $tasklist; Te muestra el array editado completo 
        // Request $request  | Rescatamos los valores ingresado en form

        $tasklist->name = $request['name'];
        $tasklist->description = $request['description'];
        $tasklist->save();

        Session::flash('mensaje', 'Registro editado');
        return redirect()->route('tasks.index');
    }

    public function destroy(Tasklist $tasklist)
    {
        $tasklist->delete();
        return redirect()->route('tasks.index');
    }
}
