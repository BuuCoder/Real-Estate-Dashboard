<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function index()
    {
        try {
            $users = User::with('role')->get();
            return view('users.index', compact('users'));
        } catch (\Exception $e) {
            Log::error('UserController@index error: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Đã xảy ra lỗi khi tải danh sách user.');
        }
    }

    public function create()
    {
        try {
            $roles = Role::all();
            return view('users.create', compact('roles'));
        } catch (\Exception $e) {
            Log::error('UserController@create error: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Đã xảy ra lỗi khi tải trang tạo user.');
        }
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'full_name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6',
                'role_id' => 'required|exists:roles,id',
            ]);
            User::create([
                'full_name' => $request->full_name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role_id' => (int)$request->role_id,
            ]);
            return redirect()->route('users.index')->with('success', 'Tạo user thành công!');
        } catch (\Exception $e) {
            Log::error('UserController@store error: ' . $e->getMessage());
            return redirect()->back()->withInput()->with('error', 'Đã xảy ra lỗi khi tạo user.');
        }
    }

    public function edit($id)
    {
        try {
            $user = User::findOrFail($id);
            $roles = Role::all();
            return view('users.edit', compact('user', 'roles'));
        } catch (\Exception $e) {
            Log::error('UserController@edit error: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Đã xảy ra lỗi khi tải trang chỉnh sửa user.');
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $user = User::findOrFail($id);
            $request->validate([
                'full_name' => 'required',
                'email' => 'required|email|unique:users,email,'.$id,
                'role_id' => 'required|exists:roles,id',
            ]);
            $user->full_name = $request->full_name;
            $user->email = $request->email;
            $user->role_id = $request->role_id;
            if ($request->filled('password')) {
                $user->password = Hash::make($request->password);
            }
            $user->save();
            return redirect()->route('users.index')->with('success', 'Cập nhật user thành công!');
        } catch (\Exception $e) {
            Log::error('UserController@update error: ' . $e->getMessage());
            return redirect()->back()->withInput()->with('error', 'Đã xảy ra lỗi khi cập nhật user.');
        }
    }

    public function destroy($id)
    {
        try {
            $user = User::findOrFail($id);
            $user->delete();
            return redirect()->route('users.index')->with('success', 'Xóa user thành công!');
        } catch (\Exception $e) {
            Log::error('UserController@destroy error: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Đã xảy ra lỗi khi xóa user.');
        }
    }
}
