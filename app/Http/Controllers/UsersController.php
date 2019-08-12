<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

class UsersController extends Controller
{
    public function __construct()
    {

    }

    //用户个人信息显示
    public function show(User $user)
    {
        return view('users.show',compact('user'));
    }

    //编辑页面
    public function edit(User $user)
    {
        return view('users.edit',compact('user'));
    }

    //编辑提交
    public function update(Request $request, User $user)
    {
        $user->update($request->all());
        return redirect()->route('users.show',$user->id)->with('success','个人资料更新成功');
    }
}
