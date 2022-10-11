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
        $foto = Foto::all();
        return view('home-admin', compact('foto'));
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
            $foto = new Foto();
            
            $foto->nomeObra = $request->get('nomeObra');
            $foto->data = $request->get('data');
            $foto->duracao = $request->get('duracao');
            $foto->sinopse = $request->get('sinopse');
            $foto->elenco = $request->get('elenco');
            $foto->producao = $request->get('producao');
            $name = $request->file('arquivo')->getClientOriginalName();
            $path = $request->file('arquivo')->storeAs("public/img", $name);
            $foto->arquivo = $path;

            $foto->save();
            return redirect('/filmes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Foto $foto)
    {
        return view('/obra', compact('foto'));
    }
        
     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function uhum()
    {
        $foto = new Foto();
        return view('/mostrarmais', compact('foto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Foto $foto)
    {
        return view('edit', compact('foto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Foto $foto)
    {
        $validated = $request->validate([
            'nomeObra' => 'required|max:255',
            'data' => 'required|max:255',
            'duracao' => 'required|max:255',
            'sinopse' => 'required|max:255',
            'elenco' => 'required|max:255',
            'producao' => 'required|max:255',
            'arquivo' => 'image'
        ]);
        if ($validated) {
            $foto->nomeObra = $request->get('nomeObra');
            $foto->data = $request->get('data');
            $foto->duracao = $request->get('duracao');
            $foto->sinopse = $request->get('sinopse');
            $foto->elenco = $request->get('elenco');
            $foto->producao = $request->get('producao');
            $name = $request->file('arquivo')->getClientOriginalName();
            $path = $request->file('arquivo')->storeAs("public/img", $name);
            $foto->arquivo = $path;


            $foto->save();
            return redirect('/filmes');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Foto $foto)
    {

        $foto->delete();
        return redirect("/filmes");
    }
}
