<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TestController extends Controller
{
    public function listaAllUser()
    {
        $users = User::all();
        return view('listAllUsers', [
            'users' => $users
        ]);
    }
    public function listUser(User $user)
    {

        return view('listUser', [
            'user' => $user
        ]);
    }

    public function create()
    {
        return view('newUser');
    }
    
    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return to_route('usuarios');
    }
    public function edit(User $user)
    {
        return view('editUser', ['user' => $user]);
    }

    public function update(Request $request, User $user)
    {
        $user->name = $request->name;
        if(filter_var($request->email, FILTER_VALIDATE_EMAIL));{
            $user->email = $request->email;
        }
        if(!empty($request->password)) {
            $user->password = Hash::make($request->password);

        }
        $user->update();
        return to_route('usuarios');
    }
    public function destroy(User $user)
    {
        $user->delete();
        return to_route('usuarios');
    }
}
