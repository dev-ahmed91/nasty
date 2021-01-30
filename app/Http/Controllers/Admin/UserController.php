<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.users.index');
    }

    public function edit(User $user)
    {
        return view('admin.users.edit',['form' => $user]);
    }

    public function update(User $user, Request $request) {
        $criteria = [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$user->id,
        ];

        $request->validate($criteria);

        if(!$request->get('password')) {
            $request->request->remove('password');
        }

        if(!$request->get('active')) {
            $request->request->set('active', false);
        }

        $user->fill($request->all());
        $user->save();

        return redirect()->route('admin.users.index')->with(['success' => 'Updated Successfully']);
    }
}

