<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{ public function index()
{
    $categoria = Categoria::paginate(10);

    return view('categoria.index', compact('categoria'));
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categoria.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Categoria::create(array_merge($request->only('nombre'),[
            'user_id' => auth()->id()
        ]));

        return redirect()->route('categoria.index')
            ->withSuccess(__('categoria created successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Categoria $categoria)
    {
        return view('categoria.show', [
            'categoria' => $categoria
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Categoria $categoria)
    {
        return view('categoria.edit', [
            'categoria' => $categoria
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categoria $categoria)
    {
        $categoria->update($request->only('nombre'));

        return redirect()->route('categoria.index')
            ->withSuccess(__('categoria updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categoria $categoria)
    {
        $categoria->delete();

        return redirect()->route('categoria.index')
            ->withSuccess(__('Categoria deleted successfully.'));
    }
}
