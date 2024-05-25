<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::get();
        return view('user.index', compact('users'));
    }
    
    public function create()
    {
        return view('user.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255|string',
            'email' => 'required|max:255|string',
            'password' => 'required|max:255|string',
        ]);
        
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);
        
        return redirect('users/create')->with('status','Usuario Creado');
    }
    
    public function edit(int $id)
    {
        $user = User::findOrFail($id);
        /* return $user; */
        return view('user.edit', compact('user'));
    }
    
    public function update(Request $request, int $id)
    {
        $request->validate([
            'name' => 'required|max:255|string',
            'email' => 'required|max:255|string',
            'password' => 'required|max:255|string',
        ]);
        
        User::findOrFail($id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);
        
        return redirect()->back()->with('status','Usuario Actualizado');
    }
    
    public function destroy(int $id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        
        return redirect()->back()->with('status','Usuario Eliminado');
    }
}





