<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;

class EventosController extends Controller
{
    public function index()
    {
        $eventos = Evento::all();
        return view('eventos.index', ['eventos' => $eventos]);
    }

    public function create()
    {
        return view('eventos.create');
    }

    public function store(Request $request)
    {
        $evento = new Evento($request->all());
        $evento->save();
        return redirect('eventos.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
