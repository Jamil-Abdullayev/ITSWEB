<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('roles')->get();

        return view('modules.users.list', compact('users'));
    }

    public function create()
    {
        $roles = Role::all();
        return view('modules.users.add', compact('roles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:250',
            'email' => 'required|email|max:250|unique:users',
            'password' => 'required|min:8'
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->assignRole($request->role);
        $user->save();
        return redirect()->route('users.index');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $user = User::with('roles')->find($id);
        $roles = Role::all();
        return view('modules.users.edit',compact('user','roles'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:250',
            'email' => [
                'required',
                'email',
                'max:250',
                Rule::unique('users')->ignore($id),
            ],
            'password' => 'nullable|min:8'
        ]);
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        if($request->password){
            $user->password = Hash::make($request->password);
        }
        $user->syncRoles($request->role);
        $user->save();
        return redirect()->route('users.index');
    }

    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('users.index');
    }
}
