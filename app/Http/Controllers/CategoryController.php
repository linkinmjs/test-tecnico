<?php

namespace TaskApp\Http\Controllers;

use TaskApp\Entities\Category;
use TaskApp\Entities\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::all();
        return view('category.index')->with('categories', $category);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slug = Str::slug($request->name);

        if (count(Category::where('slug', '=', $slug)->get()) >= 1 ) {
            Session::flash('alert-warning', 'El registro que desea ingresar ya existe');
            return redirect()->route('category_index_path');
        }
        $category = new Category;
        $category->name        = $request->name;
        $category->description = $request->description;
        $category->color       = $request->color;
        $category->is_active   = $request->is_active ? 1: 0;
        $category->slug        = $slug;
        $category->save();
        return redirect()->route('category_index_path');
    }

    /**
     * Display the specified resource.
     *
     * @param  \TaskApp\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \TaskApp\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('category.edit')->with('category', $category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \TaskApp\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //Validate
        $request->validate([
            'name'        => 'required|min:3',
            'description' => 'required',
            'color'       => 'required',
        ]);
        $category = category::find($request->id);
        $category->name        = $request->name;
        $category->description = $request->description;
        $category->is_active   = $request->is_active ? 1 : 0;
        $category->color       = $request->color;

        $category->save();
        Session::flash('alert-success', 'Se ha Actualizado la Categorías con éxito!');
        return redirect()->route('category_index_path');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \TaskApp\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($category)
    {
        if (count(Task::where('category_id', '=', $category)->get()) >= 1 ) {
            Session::flash('alert-warning', 'No se puede eliminar la categoria por mantener relación con tareas creadas.');
            return redirect()->route('category_index_path');    
        }

        Category::destroy($category);
        Session::flash('alert-success', 'Se ha Eliminado la categoria con éxito');
        return redirect()->route('category_index_path');
    }

    public function search(Request $request)
    {
        $search     = $request->input("search");
        $categories = Category::where('name', 'like', '%'.$search.'%')->orderBy('id', 'DESC')->get();
        return view('category.index')->with('categories', $categories);        
    }

    public function updateStatus($id)
    {
        $category = Category::find($id);
        if ($category->is_active) {
            $category->is_active = 0;
            Session::flash('alert-info', 'La categoria se ha desactivado con éxito');
        }else{
            $category->is_active = 1;
            Session::flash('alert-success', 'Se ha activado la categoria con éxito');
        }
        $category->save();

        return redirect()->route('category_index_path');
    }
}
