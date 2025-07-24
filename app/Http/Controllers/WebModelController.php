<?php

namespace App\Http\Controllers;

use App\Models\WebModel;
use App\Http\Requests\StoreWebModelRequest;
use App\Http\Requests\UpdateWebModelRequest;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WebModelController extends Controller
{
    public function index()
    {
        $data = [
            'pageTitle' => "Web Profile",
            'web_profile' => WebModel::first()
        ];
        return view('web_profile.index', $data);
    }

    public function getData(Request $r)
    {
        try {
            $profile = WebModel::first();

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

    public function update(Request $r)
    {
        $validatedData = $r->validate([
            'nama' => 'required|string',
            'jargon' => 'nullable|string',
            'alamat' => 'nullable|string',
            'whatsapp' => 'nullable|string',
            'instagram' => 'nullable|string',
            'email' => 'nullable|email',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5000',
        ], [
            'nama.required' => 'Nama perusahaan wajib diisi.',
            'logo.image' => 'File logo harus berupa gambar.',
            'logo.mimes' => 'Logo hanya boleh jpg, jpeg, png, atau webp.',
            'logo.max' => 'Ukuran logo maksimal 2MB.',
        ]);

        try {
            $profile = WebModel::first();

            if (!$profile) {
                return response()->json([
                    'status' => false,
                    'message' => 'Data profil tidak ditemukan.'
                ]);
            }

            if ($r->hasFile('logo')) {
                if ($profile->logo && Storage::exists('public/' . $profile->logo)) {
                    Storage::delete('public/' . $profile->logo);
                }

                $file = $r->file('logo');
                $path = $file->store('web_profile', 'public');
                $profile->logo = $path;
            }

            $profile->nama_perusahaan = $r->nama;
            $profile->jargon_perusahaan = $r->jargon;
            $profile->alamat = $r->alamat;
            $profile->whatsapp = $r->whatsapp;
            $profile->instagram = $r->instagram;
            $profile->email = $r->email;
            $profile->save();

            return response()->json([
                'status' => true,
                'message' => 'Profil berhasil diperbarui.',
                'data' => $profile
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Terjadi kesalahan: ' . $e->getMessage()
            ]);
        }
    }
}
