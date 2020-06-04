<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class ProfilesController extends Controller
{
    public function index(User $user)
    {
        return view('profiles.index', [
            'users' => $user->all()
        ]);
    }

    public function show(User $user)
    {
        return view('profiles.show', [
            'user' => $user
        ]);
    }

    public function create()
    {
        return view('profiles.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'username' => [
                'string',
                'required',
                'max:255',
                'alpha_dash',
                Rule::unique('users')
            ],
            'name' => ['string', 'required', 'max:255'],
            'avatar' => ['file'],
            'email' => [
                'string',
                'required',
                'email',
                'max:255',
                Rule::unique('users')
            ],
            'password' => ['string', 'required', 'min:8', 'max:255', 'confirmed']
        ]);

        if(request('avatar'))
        {
            $attributes['avatar'] = request('avatar')->store('avatars', 'public');
        }

        User::create($attributes);

        return redirect(route('profiles'));

    }

    public function edit(User $user)
    {
        return view('profiles.edit', [
            'user' => $user
        ]);
    }

    public function update(User $user)
    {
        $attributes = request()->validate([
            'username' => [
                'string',
                'required',
                'max:255',
                'alpha_dash',
                Rule::unique('users')->ignore($user)
            ],
            'name' => ['string', 'required', 'max:255'],
            'avatar' => ['file'],
            'email' => [
                'string',
                'required',
                'email',
                'max:255',
                Rule::unique('users')->ignore($user)],
            'password' => ['string', 'required', 'min:8', 'max:255', 'confirmed']
        ]);

        if(request('avatar'))
        {
            $attributes['avatar'] = request('avatar')->store('avatars', 'public');
        }

        $user->update($attributes);

        return redirect($user->path());
    }

    public function destroy(User $user)
    {
        $user->destroy($user->id);

        return redirect(route('profiles'));
    }
}
