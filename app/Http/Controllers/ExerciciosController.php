<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Exercicio;
use App\Models\User;

use App\Http\Requests\ExercicioRequest;

class ExerciciosController extends Controller
{

    public function index()
    {

        $exercicio = Exercicio::all();

        return view('exercicio.index', compact('exercicio'));
    }

    public function create()
    {
        $usuarios = User::all();

        return view('exercicio.create', compact('usuarios'));

    }

    public function store(ExercicioRequest $request)
    {
        $exercicio = new Exercicio();

        $exercicio->periodo =   $request->input('periodo');
        $exercicio->kmatual =   $request->input('kmatual');
        $exercicio->kmtotal =   $request->input('kmatual'); //ta passando kmatual aki pq é um novo exercicio então oq ele fez ja é atualmente o total
        $exercicio->user_id =   $request->input('usuario');
        $exercicio->tempo   =   $request->input('tempo');
        $exercicio->save();
        $exercicio = Exercicio::with('user')->get();
        return redirect()->route('exercicios', compact('exercicio'));
    }

    public function show($id)
    {

    }


    public function edit($id)
    {
        $exercicio = Exercicio::find($id);
        if(isset($exercicio)){
            return view('exercicio.edit', compact('exercicio'));
        }
        return view('exercicio.index');
    }

    public function update(ExercicioRequest $request, $id)
    {
        $exercicio = Exercicio::find($id);
        if(isset($exercicio)){
        $exercicio->periodo =   $request->input('periodo');
        $exercicio->kmatual =   $request->input('kmatual');
        $exercicio->kmtotal =   ($exercicio->kmtotal + $request->input('kmatual'));
        $exercicio->tempo   =   $request->input('tempo');

        $exercicio->save();

        }
        return redirect()->route('exercicios', compact('exercicio'));
    }


    public function destroy($id)
    {
        $exercicio = Exercicio::find($id);
        if(isset($exercicio))
    {
        $exercicio->delete();
    }
        return redirect()->route('exercicio.index');
    }
}
