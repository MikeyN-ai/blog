<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;

use App\Models\Post;
use App\Models\Usuario;

class PostController extends Controller
{

    public function construct()
    {
        $this->middleware('auth',
        ['only' => ['create', 'store', 'edit', 'update', 'destroy']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'asc')->paginate(5);
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $usuarios = Usuario::get();
        return view('posts.create', compact('usuarios'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {
        $datos = $request->validated();
        $post = new Post();
        $post->titulo = $request->get('titulo');
        $post->text = $request->get('text');
        $post->usuario()->associate(Usuario::findOrFail(1));
        $post->save();
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        if (is_numeric($id)) {
            $posts = Post::find($id);
            return view('posts.show', compact('posts'));
        } else {
            return redirect()->route('posts.index');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if (is_numeric($id)) {
            $post = Post::find($id);
            return view('posts.edit', compact('post'));
        } else {
            return redirect()->route('posts.index');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostRequest $request, string $id)
    {
        $datos = $request->validated();

        $post = Post::findOrFail($id);
        $post->titulo = $request->get('titulo');
        $post->text = $request->get('text');
        $post->usuario()->associate(Usuario::findOrFail(1));
        $post->save();
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Post::findOrFail($id)->delete();
        return redirect()->route('posts.index');
    }


    public function nuevoPrueba () {
        $usuario = Usuario::findOrFail(rand(1, 3));
        echo $usuario;
        $post = new Post();
        $post->titulo = "Titulo " . rand(100, 100000);
        $post->text = "Contenido " . rand(100000, 100000000);
        $post->usuario()->associate($usuario);
        $post->save();
        return redirect()->route('posts.index');
    }

    public function editarPrueba (string $id) {
        $postModificar = Post::findOrFail($id);
        $postModificar->titulo = "Titulo " . rand(100, 100000);
        $postModificar->text = "Contenido " . rand(100000, 100000000);
        $postModificar->save();
        return redirect()->route('posts.index');
    }
}
