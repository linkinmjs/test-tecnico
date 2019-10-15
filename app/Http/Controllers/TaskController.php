<?php

namespace TaskApp\Http\Controllers;

use TaskApp\Entities\Task;
use TaskApp\Entities\Category;
use Illuminate\Http\Request;
use Illuminate\Database\Query;
use Session;
use DB;

class TaskController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks      = Task::orderBy('id', 'DESC')->get();
        $categories = Category::where('is_active', '=', '1')->get();
        return view('task.index')->with( ['tasks' => $tasks, 'categories' => $categories] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('task.create')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required'
        ]);
        Task::create($request-all());
        Session::flash('alert-success', 'Registro Agregado con éxito');
        return redirect()->route('task_index_path');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task = Task::find($id);
        
        return view('task.show')->with('task', $task);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \TaskApp\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task = Task::find($id);
        $categories = Category::all();
        return view('task.edit')->with(['task' => $task, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \TaskApp\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        //Validate
        $request->validate([
            'title'       => 'required|min:3',
            'description' => 'required',
        ]);
        $task = Task::find($request->id);
        $task->title       = $request->title;
        $task->description = $request->description;
        $task->category_id = $request->category_id;
        $task->is_compleated = $request->is_compleated;

        $task->save();
        Session::flash('alert-success', 'Se ha Actualizado la tarea con éxito!');
        return redirect()->route('task_index_path');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \TaskApp\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy($task)
    {
        Task::destroy($task);
        Session::flash('alert-success', 'Se ha Eliminado la tarea con éxito');
        return redirect()->route('task_index_path');
    }

    public function search(Request $request)
    {
        $search     = $request->input("search");
        $tasks      = Task::where('title', 'like', '%'.$search.'%')->orderBy('id', 'DESC')->get();
        $categories = Category::where('is_active', '=', '1')->get();
        return view('task.index')->with( ['tasks' => $tasks, 'categories' => $categories] );        
    }

    public function updateStatus($id)
    {
        $task = Task::find($id);
        if ($task->is_compleated) {
            $task->is_compleated = 0;
            Session::flash('alert-info', 'La tarea a pasado a estado incompleto');
        }else{
            $task->is_compleated = 1;
            Session::flash('alert-success', 'Felicidades has completado la tarea con éxito');
        }
        $task->save();

        return redirect()->route('task_index_path');
    }

}
