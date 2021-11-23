@extends('layouts.app')
    @section('content')


        <div class="container">
        <h2>Lista de Usuários</h2>
        <hr>
        <a href="{{ route('exercicio.create') }}" class="btn btn-success">Novo Exercício</a>
        <br/><br/>

        <table class="table">
        <thead class="thead-dark">
        <tr>

        <th scope="col">Id</th>
        <th scope="col">Nome</th>
        <th scope="col">CPF</th>
        <th scope="col">Km Acumulado</th>
        <th scope="col">Duração de Tempo</th>
        <th scope="col">Opções</th>

        </tr>

        </thead>
        @foreach($users as $u)
        <tbody>
        <tr>
        <th>{{ $u->id }}</th>
        <td>{{ $u->name }}</td>
        <td>{{ $u->cpf }}</td>
        <td>{{ $u->tempo }}</td>
        <td>
        
        </td>
        </tr>
        </td>
        </tbody>
        @endforeach
        </table>
        </div>
    @endsection

