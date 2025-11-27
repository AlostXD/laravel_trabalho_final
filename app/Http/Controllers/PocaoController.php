<?php

namespace App\Http\Controllers;

use App\Models\Pocao;
use Illuminate\Http\Request;

class PocaoController extends Controller
{
    // Lista todas as poções
    public function index()
    {
        // sessão exemplo — salvar última listagem acessada
        session(['ultima_pagina' => 'lista_de_pocoes']);

        $pocoes = Pocao::all();
        return view('pocoes.index', compact('pocoes'));
    }

    // Formulário de criação
    public function create()
    {
        return view('pocoes.create');
    }

    // Salvar nova poção
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'nivel' => 'required|integer|min:1|max:10',
            'preco' => 'required|numeric',
            'imagem' => 'nullable|image|mimes:png,jpg,jpeg'
        ]);

        $pocao = new Pocao();
        $pocao->nome = $request->nome;
        $pocao->descricao = $request->descricao;
        $pocao->nivel = $request->nivel;
        $pocao->preco = $request->preco;

        if ($request->hasFile('imagem')) {
            $pocao->imagem = $request->file('imagem')->store('pocoes', 'public');
        }

        $pocao->save();

        // cookie exemplo — armazena a última poção criada
        cookie()->queue('ultima_pocao_criada', $pocao->nome, 60);

        return redirect()->route('pocoes.index')->with('sucesso', 'Poção criada com sucesso!');
    }

    // Formulário de edição
    public function edit($id)
    {
        $pocao = Pocao::findOrFail($id);
        return view('pocoes.edit', compact('pocao'));
    }

    // Atualizar poção
    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required',
            'nivel' => 'required|integer|min:1|max:10',
            'preco' => 'required|numeric',
            'imagem' => 'nullable|image|mimes:png,jpg,jpeg'
        ]);

        $pocao = Pocao::findOrFail($id);
        $pocao->nome = $request->nome;
        $pocao->descricao = $request->descricao;
        $pocao->nivel = $request->nivel;
        $pocao->preco = $request->preco;

        if ($request->hasFile('imagem')) {
            $pocao->imagem = $request->file('imagem')->store('pocoes', 'public');
        }

        $pocao->save();

        return redirect()->route('pocoes.index')->with('sucesso', 'Poção atualizada com sucesso!');
    }

    // Deletar poção
    public function destroy($id)
    {
        $pocao = Pocao::findOrFail($id);
        $pocao->delete();

        return redirect()->route('pocoes.index')->with('sucesso', 'Poção excluída!');
    }
}

