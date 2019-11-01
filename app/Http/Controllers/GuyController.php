<?php

namespace TaskApp\Http\Controllers;
use TaskApp\Entities\Guy;
use TaskApp\Entities\Task;
use TaskApp\Entities\Category;
use Illuminate\Http\Request;
use Session;

class GuyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guys = Guy::orderBy('id', 'DESC')->get();
        $tasks = Task::all();
        //dd($guys);
        return view('guy.index')->with(['guys'=> $guys, 'tasks' => $tasks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tasks = Task::all();
        //dd($request);

        // DB::table('guys')->insert([
        //     'name'=> $request->input('name'),
        //     'position'=> $request->input('position')
        // ])

        Guy::create($request->all());
        Session::flash('alert-success', 'Registro agregado con éxito');
        return redirect()->route('guy_index_path');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($guy)
    {
        Guy::destroy($guy);
        Session::flash('alert-success', 'Se ha borrado el registro con éxito');
        return redirect()->route('guy_index_path');
    }

    public function search(Request $request)
    {

    }
}
