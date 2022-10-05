<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\Foto;
use Illuminate\Http\Request;

class ControladorFoto extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Foto::all();
        return view('home-admin', compact('posts'));
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
        $path = $request->file('arquivo')->store('imagens', 'public');
        $post = new Foto();
        $post->nomeObra = $request->input('nomeObra');
        $post->data = $request->input('data');
        $post->duracao = $request->input('duracao');
        $post->sinopse = $request->input('sinopse');
        $post->elenco = $request->input('elenco');
        $post->producao = $request->input('producao');
        $post->arquivo = $path;
        $post->save();
        return redirect('/admin');
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
        $post = Foto::find($id);
        if(isset($post)){
            $arquivo = $post->arquivo;
            Storage::disk('public')->delete($arquivo);
            $post->delete();
        }
        return redirect('/admin');
    }

    public function download($id)
    {
        $post = Foto::find($id);
        if(isset($post)){
            $path = Storage::disk('public')->getDriver()->getAdapter()->apllyPathPrefix($post->arquivo);
            return response()->download($path);
        }else{
            return redirect('/admin');
        }
    }
}