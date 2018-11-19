<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\denuncias;

class DenunciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    return view('denuncia');
    }

    public function cadDenuncia(){
        return view('cadDenuncia');
    }

    public function aprendizagem(){
        return view('aprendizagem');
    }

    public function listagem(){
        return view('listagemDenuncia');
    }

    public function pontos(){
        return view('pontos');
    }



    public function create(Request $request)
    {
       denuncias::create($request->all());
       $id = denuncias::max('id');
        $denuncia = denuncias::find($id);

        
        if ($request->hasFile('nm_imagem') && $request->file('nm_imagem')->isValid()) {
            
            $name = "denuncia_".$id;
            $extention = $request->nm_imagem->extension();
            $name_file = "{$name}.{$extention}";
            
            $request->nm_imagem->storeAs('denuncias', $name_file);
            $denuncia->nm_imagem = $name_file;
            $denuncia->save();
           // $request->session()->forget('denuncia');
           // $request->session()->push('denuncia', [
            //    'img' => $name_file
            //]);
            session()->flash('success','O denuncia '.$request->nome.' foi atualizado com sucesso!');
            
        }
            
       return redirect('/')->with('status','Denuncia Cadastrada com Sucesso');
    }

    
    public function store(Request $request)
    {
        //
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
        //
    }
}
