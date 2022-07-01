<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::latest()->paginate(20);

        return view('internal.user-manager.index', compact('users'));
    }

    public function create()
    {
        return view('internal.user-manager.new');
    }


    public function store(UserRequest $request)
    {
        $body = $request->merge([
            'password' => bcrypt($request->password)
        ]);

        User::create($body->all());

        return redirect()->route('user.index')->with('flash', 'Berhasil menambahkan entry baru');
    }

    public function edit(User $user)
    {
        return view('internal.user-manager.edit', compact('user'));
    }

    public function update(UserRequest $request, User $user)
    {
        $request->validated();

        $body = $request->all();

        if ($request->filled('password')) {
            $body['password'] = bcrypt($request->password);
        }

        $user->update($body);

        return redirect()->route('user.index')->with('flash', 'Berhasil mengubah entry data');
    }
}
