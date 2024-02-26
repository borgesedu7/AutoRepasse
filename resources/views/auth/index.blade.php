<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<body>
    <h1>Bem vindo, {{Auth::user()->name}}</h1>   

    <a href="{{url('/veiculo/create')}}">Cadastrar Veículo</a>

    <a href="{{url('/pessoa/create')}}">Cadastrar Pessoa</a>

    <a href="{{url('/veiculo/dashboard')}}">Veículos Cadastrados</a>

    <form action="{{url('/logout')}}" method="post">
        @csrf
        <button>Sair</button>
    </form>
</body>
</html>