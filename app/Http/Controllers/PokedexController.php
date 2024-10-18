<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokemon;


class PokedexController extends Controller
{
    public function index()
    {
        $pokemon = Pokemon::all();
        return view('pokemon.index', compact('pokemon'));
    }

    public function create()
    {
        return view('pokemon.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'species' => 'required|string|max:255',
            'primary_type' => 'required|string',
            'weight' => 'required|numeric',
            'height' => 'required|numeric',
            'hp' => 'required|integer',
            'attack' => 'required|integer',
            'defense' => 'required|integer',
            'is_legendary' => 'nullable|boolean',
            'photo' => 'required|image|mimes:jpg,png,jpeg',

        ]);

        Pokemon::create($request->all());
        return redirect()->route('pokemon.index');
    }

    public function show(Pokemon $pokemon)
    {
        return view('pokemon.show', compact('pokemon'));
    }

    public function edit(Pokemon $pokemon)
    {
        return view('pokemon.edit', compact('pokemon'));
    }

    public function update(Request $request, Pokemon $pokemon)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'species' => 'required|string|max:255',
            'primary_type' => 'required|string',
            'weight' => 'required|numeric',
            'height' => 'required|numeric',
            'hp' => 'required|integer',
            'attack' => 'required|integer',
            'defense' => 'required|integer',
            'is_legendary' => 'nullable|boolean',
            'photo' => 'nullable|image|mimes:jpg,png,jpeg',

        ]);

        $pokemon->update($request->all());
        return redirect()->route('pokemon.index');
    }

    public function destroy(Pokemon $pokemon)
    {
        $pokemon->delete();
        return redirect()->route('pokemon.index');
    }
}
