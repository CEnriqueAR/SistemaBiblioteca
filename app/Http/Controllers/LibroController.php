<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Libro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $libros=DB::table("libros")
            ->leftJoin("categorias","libros.id_categoria","=","categorias.id")
            ->select("libros.id","categorias.nombre AS nombre_categorias",
                "libros.id_categoria",
                "libros.tema",
                "libros.foto",
                "libros.autor",
                "libros.isvn"
                ,"libros.editorial"
                ,"libros.pdf"
                ,"libros.name")  ->paginate(10);
        $categoria= Categoria::all();
        return view("libro.index")

            ->withLibros($libros)
            ->withCategoria($categoria);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('libro.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'foto'=>'required',
            'pdf'=>'required',
        ],$messages=[
            'foto.required'=>'La Foto es Requerida',

        ]);

        $path = public_path() . '/images/PDFLibro';//Carpeta publica de las imagenes

        //-------------VALIDAR SI LA CARPETA EXISTE---------------------

        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        $nombre = $request->input("name");
        if ($request->pdf) {
            $imagen1 = $_FILES["pdf"]["name"];
            $ruta1 = $_FILES["pdf"]["tmp_name"];
            $destino1 = "images/PDFLibro/".$nombre. $imagen1;
            copy($ruta1, $destino1);
        }
        $path = public_path() . '/images/FotoLibro';//Carpeta publica de las imagenes

        //-------------VALIDAR SI LA CARPETA EXISTE---------------------

        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        if ($request->foto) {
            $imagen = $_FILES["foto"]["name"];
            $ruta = $_FILES["foto"]["tmp_name"];
            $destino = "images/FotoLibro/".$nombre. $imagen;
            copy($ruta, $destino);
        }
        $usuario = new Libro();

        $usuario->name = $request->input("name");
        $usuario->id_categoria = $request->input("id_categoria");
        $usuario->autor = $request->input("autor");
        $usuario->tema = $request->input("tema");
        $usuario->editorial = $request->input("editorial");
        $usuario->isvn = $request->input("isvn");
        $usuario->pdf = $nombre.$imagen1;
        $usuario->foto = $nombre.$imagen;
        $usuario->user_id = auth()->id();
        $usuario->save();


        return redirect()->route('libro.index')
            ->withSuccess(__('User created successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function show(Libro $libro)
    {
        
        $libros=DB::table("libros")
            ->leftJoin("categorias","libros.id_categoria","=","categorias.id")
            ->select("libros.id","categorias.nombre AS nombre_categorias",
                "libros.id_categoria",
                "libros.tema",
                "libros.foto",
                "libros.autor",
                "libros.id",
                "libros.total",
                "libros.isvn"
                ,"libros.editorial"
                ,"libros.pdf"
                ,"libros.name")  ->paginate(10);
        $categoria= Categoria::all();
        
        return view("libro.show")
            ->withLibros($libros)
            ->withCategoria($categoria);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function edit(Libro $libro)
    {

     
        $libros=DB::table("libros")
            ->leftJoin("categorias","libros.id_categoria","=","categorias.id")
            ->select("libros.id","categorias.nombre AS nombre_categorias",
                "libros.id_categoria",
                "libros.tema",
                "libros.foto",
                "libros.id",
                "libros.autor",
                "libros.total",
                "libros.isvn"
                ,"libros.editorial"
                ,"libros.pdf"
                ,"libros.name")->get();
        $categoria= Categoria::all();
        
        return view("libro.edit")
            ->withLibros($libros)
            ->withCategoria($categoria);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Libro $libro)
    {
       
        $usuario =Libro::findOrFail();
        $nombre = $request->input("name");
        $usuario->name = $request->input("name");
        $usuario->autor = $request->input("autor");
        $usuario->tema = $request->input("tema");
        $usuario->editorial = $request->input("editorial");
        $usuario->isvn = $request->input("isvn");

        $path = public_path() . '\images\FotoLibro';//Carpeta publica de las imagenes
        if ($request->foto) {
            /***Si la imagen es enviada por el usuario se debe eliminar la anterior **/
            $img_anterior=public_path()."/images/FotoLibro/".$usuario->foto;
            if (File::exists($img_anterior)){
                File::delete($img_anterior);
            }
            /**-------------------------------------------*/
            $imagenEditada = $_FILES["foto"]["name"];
            $ruta = $_FILES["foto"]["tmp_name"];
            //-------------VALIDAR SI LA CARPETA EXISTE---------------------
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            //-------------------------------------------------------------
            $destino = "images/FotoLibro/" .$nombre. $imagenEditada;
            copy($ruta, $destino);
            $usuario->foto = $nombre.$imagenEditada;
        }

        $usuario->save();


        return redirect()->route('libro.index')
            ->withSuccess(__('User updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Libro $libro)
    {$producto = $libro->input('id');
        $borrar = Libro::findOrFail($producto);
        $image_ruta= public_path()."/images/FotoLibro/".$borrar->foto;
        if(File::exists($image_ruta)){
            File::delete($image_ruta);
        }
        $image_ruta1 = public_path()."/images/PDFLibro/".$borrar->pdf;
        if(File::exists($image_ruta1)){
            File::delete($image_ruta1);
        }
        $borrar->delete();
    }

    public function dowload(Request $request, $foto)
    {
        return response()->download(public_path('/images/PDFLibro/'.$foto))-redirect()->route('libro.index');
    }
}
