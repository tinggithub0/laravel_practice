<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $member = User::all();
        return view('member.index', ['members' => $member]);
    }

    public function create()
    {
        return view('member.create');
    }

    public function store()
    {
        request()->validate([
           'name' => 'required',
           'email' => 'required',
           'password' => 'required', # 依 input name 改變，不是 id
        ]);
        User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => request('password'), # 依 input name 改變，不是 id
        ]);
        return redirect('/member');
    }

    public function edit(User $member)
    {
        return view('member.edit', ['member' => $member]);
    }

    public function update(User $member)
    {
        request()->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        $member->update([
            'name' => request('name'),
            'email' => request('email'),
            'password' => request('password'), # 依 input name 改變，不是 id
        ]);
        return redirect('/member');
    }

    public function delete(User $member)
    {
        $member->delete();
        return redirect('/member');
    }
}
