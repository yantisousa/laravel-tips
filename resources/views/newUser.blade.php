<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Usuário</title>
</head>
<body>
    <form action="{{route('usuarios.store')}}" method="post">
        @csrf
        <label for="">Nome do Usuário</label>
        <input type="text" name="name">
        
        <label for="">Email do Usuário</label>
        <input type="email" name="email">

        <label for="">Senha do Usuário</label>
        <input type="password" name="password">

        <input type="submit" value="Cadastrar Usuário">
    </form>
</body>
</html>