<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{

    public function index()
    {
        $users = User::paginate(5);
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:15',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);
        $user = User::create($request->only('name','email')
    +[
        'password'=> bcrypt($request->input('password')),
    ]);
        return redirect()->route('users.index')->with('success', 'Usuario creado correctamente');
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        //dd($users);
        return view('users.show', compact('user'));
    }

    public function edit(User $user)
    {
        
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $data= $request->only('name', 'email');
        if(trim($request->password)=='')
        {
            $data=$request->except('password');
        }
        else{
            $data=$request->all();
            $data['password']=bcrypt($request->password);
        }

        $user->update($data);
        return redirect()->route('users.index')->with('success', 'Usuario actualizado correctamente');

    }

    public function destroy(User $user)
    {
        $user->delete();
        return back()->with('succes', 'Usuario eliminado correctamente');
    }
}
