<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data = [
            'pageTitle' => "User",
            'users' => User::select('name', 'username', 'created_at', 'updated_at')->get()
        ];
        return view('users.index', $data);
    }

    public function store(Request $r){
        $validatedData = $r->validate([
            'name' => 'required|string',
            'username' => 'required|string|unique:users,username',
            'password' => 'required|string',
        ], [
            'name.required' => 'Nama wajib diisi.',
            'name.string' => 'Nama harus berupa text.',
            'username.required' => 'Username wajib diisi.',
            'username.string' => 'Username harus berupa text.',
            'username.unique' => 'Username sudah digunakan.',
            'password.required' => 'Username wajib diisi.',
            'password.string' => 'Username harus berupa text.',
        ]);
        
        try{
            $user = User::create([
                'name' => $r->name,
                'username' => $r->username,
                'password' => $r->password,
                'role' => "lawyer"
            ]);

            if($user){
                return response()->json([
                    'status' => true,
                    'data' => $user
                ]);    
            }

            return response()->json([
                'status' => false,
                'message' => "Terjadi kesalahan saat menyimpan data"
            ]);
        }catch(Exception $e){
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ]);
        }
    }

    public function edit(Request $r){
        $validatedData = $r->validate([
            'id' => 'required|string',
        ], [
            'id.required' => 'Data belum dipilih.',
            'id.string' => 'Data belum dipilih.',
        ]);

        try{
            $users = User::select('id', 'name', 'username')
                            ->where('id', $r->id)
                            ->first();

            if($users){
                return response()->json([
                    'status' => true,
                    'data' => $users
                ]);    
            }

            return response()->json([
                'status' => false,
                'message' => "Data tidak ditemukan"
            ]);
        }catch(Exception $e){
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ]);
        }
    }

    public function update(Request $r){
        $validatedData = $r->validate([
            'id' => 'required|string',
            'name' => 'required|string',
            'username' => 'required|string',
            // 'username' => 'required|string|unique:users,username,' . $r->user_uniqid,
        ], [
            'id.required' => 'Data belum dipilih.',
            'id.string' => 'Data belum dipilih.',
            'name.required' => 'Nama wajib diisi.',
            'name.string' => 'Nama harus berupa text.',
            'username.required' => 'Username wajib diisi.',
            'username.string' => 'Username harus berupa text.',
            // 'username.unique' => 'Username sudah digunakan.',
        ]);
        
        try{
            $user = User::where("user_uniqid", $r->id)->first();

            if($user){
                $user->name = $r->name;
                $user->username = $r->username;
                $user->save();

                return response()->json([
                    'status' => true,
                    'data' => $user
                ]);    
            }

            return response()->json([
                'status' => false,
                'message' => "Terjadi kesalahan saat menyimpan data"
            ]);
        }catch(Exception $e){
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ]);
        }
    }

    public function delete(Request $r){
        $validatedData = $r->validate([
            'id' => 'required|string',
        ], [
            'id.required' => 'Data belum dipilih.',
            'id.string' => 'Data belum dipilih.',
        ]);

        try{
            $user = User::where('user_uniqid', $r->id)
                            ->first();

            if($user){
                $user->delete();
                return response()->json([
                    'status' => true,
                    'data' => $user
                ]);    
            }

            return response()->json([
                'status' => false,
                'message' => "Data tidak ditemukan"
            ]);
        }catch(Exception $e){
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ]);
        }
    }

    public function profile(){
        $data = [
            'pageTitle' => "Profile"
        ];
        return view('users.profile', $data);
    }
}
