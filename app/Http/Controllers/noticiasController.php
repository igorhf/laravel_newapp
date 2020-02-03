<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\noticias;

class noticiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dados = noticias::all();
        return view('index',compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('noticia_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $noticia = new noticias;
        $noticia->titulo = $request->titulo;
        $noticia->texto = $request->texto;
        $noticia->autor = $request->autor;
        if (isset($request->visivel)) {
            $noticia->visivel = 1;
        } else {
            $noticia->visivel = 0;
        }        
        $noticia->save();

        return redirect('/');
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
        $noticia =  noticias::find($id);
        return view('noticia_edit',compact('noticia'));
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
        $noticia =  noticias::find($id);
        $noticia->titulo = $request->titulo;
        $noticia->texto = $request->texto;
        $noticia->autor = $request->autor;
        if (isset($request->visivel)) {
            $noticia->visivel = 1;
        } else {
            $noticia->visivel = 0;
        }        
        $noticia->save();
        return redirect('noticia_gestao');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        noticias::destroy($id);
        return redirect('noticia_gestao');
    }

    public function apresentarTabelaGestao()
    {
        $noticia = new noticias;
        $dados = $noticia::all();
        
        return view('noticia_gestao', compact('dados'));
        
    }

    public function colocarVisivel($id)
    {
        $noticia =  noticias::find($id);
        $noticia->visivel = 1;
        $noticia->save();
        return redirect('noticia_gestao');

    }

    public function colocarInvisivel($id)
    {
        $noticia =  noticias::find($id);
        $noticia->visivel = 0;
        $noticia->save();
        return redirect('noticia_gestao');
    }
}
