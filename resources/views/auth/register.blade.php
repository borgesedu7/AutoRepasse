<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>
    <form action="{{url('/register')}}" method="POST">
        @csrf
        <label for="name">Nome</label>
        <input type="text" name="name">
        <label for="cpf">CPF</label>
        <input type="text" name="cpf">
        <label for="contato">Contato</label>
        <input type="text" name="contato">
        <label for="password">Senha</label>
        <input type="password" name="password" id="password">
        <button>Enviar</button>
    </form>
    </form>
</body>
</html>