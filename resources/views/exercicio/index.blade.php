@extends('layouts.app')
    @section('content')


        <div class="container">
        <h2>Exercícios</h2>
        <hr>
        <a href="{{ route('exercicios.create') }}" class="btn btn-success">Novo Exercício</a>
        <br/><br/>

        <table class="table">
        <thead class="thead-dark">
        <tr>

        <th scope="col">Id</th>
        <th scope="col">Nome</th>
        <th scope="col">Período</th>
        <th scope="col">KmAtual</th>
        <th scope="col">KmTotal</th>
        <th scope="col">Tempo</th>
        <th scope="col">Opções</th>

        </tr>

        </thead>
        @foreach($exercicio as $exercicios)
        <tbody>
        <tr>
        <th>{{ $exercicios->id }}</th>
        <th>{{ $exercicios->user->name }}</th>
        <td>{{ $exercicios->periodo }}</td>
        <td>{{ $exercicios->kmatual }}</td>
        <td>{{ $exercicios->kmtotal }}</td>
        <td>{{ $exercicios->tempo }}</td>

        <td>
        <a href="{{ route('exercicios.edit', $exercicios->id)}}" class="btn btn-primary btn-sm">Editar</a>
        <a href="{{ route('exercicios.delete', $exercicios->id)}}" class="btn btn-danger btn-sm">Remover</a>
        </td>
        </tr>
        </td>
        </tbody>
        @endforeach
        </table>
        </div>
    @endsection
