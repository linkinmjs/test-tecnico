<?php

namespace TaskApp\Http\Controllers;
use TaskApp\Entities\Guy;
use TaskApp\Entities\Task;
use TaskApp\Entities\Category;
use Illuminate\Http\Request;

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
        //dd($guys);
        return view('guy.index')->with(['guys'=> $guys]);
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
        //
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
    public function destroy($id)
    {
        //
    }

    public function search(Request $request)
    {
        dd(Request);
        $search     = $request->input("search");
        $tasks      = Task::where('title', 'like', '%'.$search.'%')->orderBy('id', 'DESC')->get();
        $categories = Category::where('is_active', '=', '1')->get();
        return view('task.index')->with( ['tasks' => $tasks, 'categories' => $categories] );        
    }
}
