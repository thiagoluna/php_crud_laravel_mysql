<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Atleta;

class AtletaController extends Controller
{
    public function index(){
        $atletas = Atleta::paginate(2);
        $total = Atleta::all()->count();
        return view('index', compact('atletas', 'total'));
    }

    public function busca(Request $request){
        $criterio = $request->criterio;
        $total = Atleta::all()->count();
        $atletas = Atleta::where('name', 'LIKE', '%' . $criterio . '%')->paginate(2);
        return view('index', compact('atletas', 'total', 'criterio'));
    }

    public function show($id){
        $atleta = Atleta::findOrFail($id);
        return view('list-item', compact('atleta'));
    }

    public function edit($id){
        $atleta = Atleta::findOrFail($id);
        return view('edita', compact('atleta'));
    }   

    public function store(Request $request){
        $atleta = new Atleta;
        $atleta->name = $request->name;
        $atleta->email = $request->email;
        $atleta->senha = $request->senha;
        $atleta->endereco = $request->endereco;
        $atleta->bairro = $request->bairro;
        $atleta->cidade = $request->cidade;
        $atleta->cep = $request->cep;
        $atleta->save();
        return redirect()->route('atleta.index')->with('message', 'Atleta cadastrado com sucesso!');
    }

    public function update(Request $request, $id){
        $atleta = Atleta::findOrFail($id);
        $atleta->name = $request->name;
        $atleta->email = $request->email;
        $atleta->senha = $request->senha;
        $atleta->endereco = $request->endereco;
        $atleta->bairro = $request->bairro;
        $atleta->cidade = $request->cidade;
        $atleta->cep = $request->cep;
        $atleta->save();
        return redirect()->route('atleta.index')->with('message', 'Atleta atualizado com sucesso!');
    }
    
    public function destroy($id){
        $atleta = Atleta::findOrFail($id);
        $atleta->delete();
        return redirect()->route('atleta.index')->with('message', 'Atleta excluído com sucesso!');
    }

}
