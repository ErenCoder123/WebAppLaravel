<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function listar()
{
    $pokemons = Pokemon::all();
    return view('pokemons.listar', compact('pokemons'));
}

public function criar()
{
    return view('pokemons.criar');
}

public function salvar(Request $request)
{
    Pokemon::create($request->all());
    return redirect('pokemons')->with('success', 'Pokemon criado com sucesso.');
}

public function editar($id)
{
    $pokemons = Pokemon::findOrFail($id);
    return view('pokemons.editar', compact('pokemons'));
}

public function update(Request $request, $id)
{
    $pokemons = Pokemon::findOrFail($id);
    $pokemons->update($request->all());
    return redirect('pokemons')->with('success', 'Pokemon editado com sucesso');
}

public function deletar($id)
{
    $pokemons = Pokemon::findOrFail($id);
    $pokemons->delete();
    return redirect('pokemons')->with('success', 'Pokemon deletado com sucesso.');
}
}
