<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Categoria;
class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();
        return view('categorias.index', compact('categorias'));
    }
    public function create()     
    {
        return view('categorias.create');   
    }
    public function store(Request $request)
    {
        $request->validate([
            'nome'=>'required|max:255',
            'descricao'=>'required|max:255'
        ]);

        Categoria::create($request->all());
        return redirect('categorias')->with('mensagem', 'Cadastro feito com sucesso!');

    }
    public function show($id)
    {

    }
    public function edit($id)
    {

    } 
    public function update(Request $request, $id)
    {
        
    }
    public function destroy($id)
    {
    
    }
}