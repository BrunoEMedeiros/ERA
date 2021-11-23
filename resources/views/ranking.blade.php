@extends('layouts.app')
    @section('content')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/ranking.css"/>
</head>
    <nav id="menu" >
        <img id="logo" src="img/logo academia.png"  alt="logo" width="200" height="50">
        <ul>
            <li>
                <a href="sobre">Sobre</a>
            </li>
            <li>
                <a href="premiacao">Premiação</a>
            </li>
            <li>
                <a href="ranking">Ranking</a>
            </li>
            <li>
                <a href="contato">Contato</a>
            </li>
            
            <li>
                <a href="/home">Deslogar</a>
            </li>
        </ul>
    </nav>
      
        <div class="container">

        <table class="table">
        <thead class="thead-dark">
        <tr>

        <th scope="col">Id</th>
        <th scope="col">Nome</th>
        <th scope="col">Km Acumulado</th>
        </tr>

        </thead>
        @foreach($users as $u)
        <tbody>
        <tr>
        <th>{{ $u->id }}</th>
        <td>{{ $u->name }}</td>
        <td>
        
        </td>
        </tr>
        </td>
        </tbody>
        @endforeach
        </table>
        </div>
    @endsection
