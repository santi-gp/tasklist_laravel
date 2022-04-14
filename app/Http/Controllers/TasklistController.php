<?php

namespace App\Http\Controllers;

use App\Models\Tasklist;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;

class TasklistController extends Controller
{
    public function index()
    {
        $tasks = Tasklist::all();
        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        return view('tasks.create');
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
        //
        return view('tasks.details')->with('tasklist', $tasklist );
    }

    public function edit(Tasklist $tasklist)
    {
        // return $tasklist; Te muestra el array completo 
        
        // return view('tasks.edit')->with('tasks'. $tasklist);
        // otra forma más óptima 
        return view('tasks.edit', compact('tasklist'));
        
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

