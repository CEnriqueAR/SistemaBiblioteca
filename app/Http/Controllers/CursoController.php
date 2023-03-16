<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{ public function index()
{
    $curso = Curso::paginate(10);

    return view('curso.index', compact('curso'));
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('curso.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Curso::create(array_merge($request->only('nombre'),[
            'user_id' => auth()->id()
        ]));

        return redirect()->route('curso.index')
            ->withSuccess(__('categoria created successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Curso $curso)
    {
        return view('curso.show', [
            'curso' => $curso
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Curso $curso)
    {
        return view('curso.edit', [
            'curso' => $curso
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Curso $curso)
    {
        $curso->update($request->only('nombre'));

        return redirect()->route('curso.index')
            ->withSuccess(__('curso updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Curso $curso)
    {
        $curso->delete();

        return redirect()->route('curso.index')
            ->withSuccess(__('curso deleted successfully.'));
    }
}
