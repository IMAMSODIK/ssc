<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index()
    {
        $data = [
            'pageTitle' => "User",
            'users' => User::select('id', 'name', 'username', 'role', 'created_at', 'updated_at')->get()
        ];
        return view('users.index', $data);
    }

    public function store(Request $r){
        $validatedData = $r->validate([
            'name' => 'required|string',
            'username' => 'required|string|unique:users,username',
            'role' => 'required|string',
        ], [
            'name.required' => 'Nama wajib diisi.',
            'name.string' => 'Nama harus berupa text.',
            'username.required' => 'Username wajib diisi.',
            'username.string' => 'Username harus berupa text.',
            'username.unique' => 'Username sudah digunakan.',
            'role.required' => 'Username wajib diisi.',
            'role.string' => 'Username harus berupa text.',
        ]);
        
        try{
            $user = User::create([
                'name' => $r->name,
                'username' => $r->username,
                'role' => $r->role,
                'password' => bcrypt($r->username),
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
            $users = User::select('id', 'name', 'username', 'role')
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
            'role' => 'required|string',
        ], [
            'id.required' => 'Data belum dipilih.',
            'id.string' => 'Data belum dipilih.',
            'name.required' => 'Nama wajib diisi.',
            'name.string' => 'Nama harus berupa text.',
            'username.required' => 'Username wajib diisi.',
            'username.string' => 'Username harus berupa text.',
            'role.required' => 'Role wajib diisi.',
            'role.string' => 'Role harus berupa text.',
        ]);
        
        try{
            $user = User::where("id", $r->id)->first();

            if($user){
                $user->name = $r->name;
                $user->username = $r->username;
                $user->role = $r->role;
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
            $user = User::where('id', $r->id)
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
            'pageTitle' => "Profile",
            'profile' => User::with('profile')->where('id', Auth::id())->first()
        ];
        return view('users.profile', $data);
    }

    public function editLawyer(){
        try {
            $profile = User::with('profile')->where('id', Auth::id())->first();

            if ($profile) {
                return response()->json([
                    'status' => true,
                    'data' => $profile
                ]);
            }

            return response()->json([
                'status' => false,
                'message' => "Data tidak ditemukan"
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ]);
        }
    }

    public function detailLawyer(Request $r){
        try {
            $profile = User::with('profile')->where('name', $r->lawyer)->first();
            $data = [
                'pageTitle' => "Detai Lawyer",
                'profile' => $profile
            ];

            if ($profile) {
                return view('lawyer.detail', $data);
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }

    public function updateLawyer(Request $r){
        $validatedData = $r->validate([
            'nama' => 'required|string',
            'detail' => 'nullable|string',
            'facebook' => 'nullable|string',
            'whatsapp' => 'nullable|string',
            'instagram' => 'nullable|string',
            'email' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5000',
        ], [
            'nama.required' => 'Nama wajib diisi.',
            'gambar.image' => 'File harus berupa gambar.',
            'gambar.mimes' => 'Gambar hanya boleh jpg, jpeg, png, atau webp.',
            'gambar.max' => 'Ukuran Gambar maksimal 4MB.',
        ]);

        try {
            $user = User::where('id', Auth::id())->first();
            $profile = Profile::where('user_id', $user->id)->first();

            if (!$user) {
                return response()->json([
                    'status' => false,
                    'message' => 'Data profil tidak ditemukan.'
                ]);
            }

            if ($r->hasFile('gambar')) {
                if ($profile->gambar && Storage::exists('public/' . $profile->gambar)) {
                    Storage::delete('public/' . $profile->gambar);
                }

                $file = $r->file('gambar');
                $path = $file->store('lawyer', 'public');
                $profile->gambar = $path;
            }

            $user->name = $r->nama;
            $profile->detail = $r->detail;
            $profile->facebook = $r->facebook;
            $profile->whatsapp = $r->whatsapp;
            $profile->instagram = $r->instagram;
            $profile->email = $r->email;
            $profile->save();
            $user->save();

            return response()->json([
                'status' => true,
                'message' => 'Profil berhasil diperbarui.',
                'data' => $user
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Terjadi kesalahan: ' . $e->getMessage()
            ]);
        }
    }
}
