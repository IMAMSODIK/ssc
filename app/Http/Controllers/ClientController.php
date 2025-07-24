<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public function index()
    {
        $data = [
            'pageTitle' => "Client",
            'clients' => Client::all()
        ];
        return view('client.index', $data);
    }

    public function store(Request $r)
    {
        try {
            $r->validate([
                'logo' => 'required|image|mimes:jpg,jpeg,png,webp|max:10000'
            ], [
                'logo.required' => 'File gambar wajib diisi.',
                'logo.image' => 'File harus berupa logo.',
                'logo.mimes' => 'Gambar hanya boleh JPG, JPEG, PNG, atau WEBP.',
                'logo.max' => 'Ukuran maksimal gambar 9MB.'
            ]);

            if ($r->hasFile('logo')) {
                $file = $r->file('logo');
                $path = $file->store('client', 'public');

                Client::create([
                    'logo' => $path,
                    'created_by' => Auth::id(),
                    'updated_by' => Auth::id(),
                ]);

                return response()->json([
                    'status' => true,
                    'message' => 'Berhasil mengunggah Galeri.',
                ]);
            }

            return response()->json([
                'status' => false,
                'message' => 'Tidak ada file galeri yang dikirim.'
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Terjadi kesalahan: ' . $e->getMessage()
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
            $client = Client::where('id', $r->id)->first();

            if($client){
                $client->delete();
                return response()->json([
                    'status' => true,
                    'data' => $client
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
}
