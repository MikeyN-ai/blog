<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PostController extends Controller
{
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
        return redirect()->route('posts.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        return redirect()->route('posts.index');
        /*if (is_numeric($id)) {
            return view('posts.edit', compact('id'));
        } else {
            return view('posts.index');
        }*/
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
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

        /*$post = new Post();
        $post->titulo = "Titulo " . rand(100, 100000);
        $post->text = "Contenido " . rand(100000, 100000000);
        $post->save();
        */
        echo "ñalsdfj";

        //return redirect()->route('posts.index');
    }

    public function editarPrueba (string $id) {
        $postModificar = Post::findOrFail($id);
        $postModificar->titulo = "Titulo " . rand(100, 100000);
        $postModificar->text = "Contenido " . rand(100000, 100000000);
        $postModificar->save();
        return redirect()->route('posts.index');
    }
}
