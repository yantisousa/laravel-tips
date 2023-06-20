<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listagem de Usuários</title>
</head>
<body>
    <a href="{{route('usuarios.formAddUser')}}"><button>Cadastrar</button></a>
    <table>
        <tr>
            <td>ID</td>
            <td>Nome:</td>
            <td>E-mail:</td>
            <td>Ações</td>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                    <a href="{{route('usuarios.list', $user->id)}}">Ver usuário</a>
                    <form action="{{route('usuarios.destroy', $user->id)}}" method="post">
                        @method('delete')
                        @csrf
                        <input type="hidden" name="user">
                        <input type="submit" value="Remover">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>