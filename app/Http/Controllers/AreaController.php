<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{ /**
 * Display a listing of the resource.
 *
 * @return \Illuminate\Http\Response
 */
    public function index()
    {
        $area = Area::paginate(10);

        return view('area.index', compact('area'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('area.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Area::create(array_merge($request->only('nombre', 'description'),[
            'user_id' => auth()->id()
        ]));

        return redirect()->route('area.index')
            ->withSuccess(__('Area created successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Area $area)
    {
        return view('area.show', [
            'area' => $area
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Area $area)
    {
        return view('area.edit', [
            'area' => $area
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Area $area)
    {
        $area->update($request->only('nombre', 'description'));

        return redirect()->route('area.index')
            ->withSuccess(__('Area updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Area $area)
    {
        $area->delete();

        return redirect()->route('area.index')
            ->withSuccess(__('Area deleted successfully.'));
    }
}
