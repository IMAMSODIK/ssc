<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Http\Requests\StoreGaleriRequest;
use App\Http\Requests\UpdateGaleriRequest;
use App\Models\Banner;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GaleriController extends Controller
{
    public function index()
    {
        $data = [
            'pageTitle' => "Galeri",
            'galeris' => Galeri::all()
        ];
        return view('galeri.index', $data);
    }

    public function getData()
    {
        $data = [
            'pageTitle' => "Galeri",
            'galeris' => Galeri::all(),
            'banners' => Banner::all(),
        ];
        return view('galeri.index_user', $data);
    }

    public function store(Request $r)
    {
        try {
            $r->validate([
                'gambar.*' => 'required|image|mimes:jpg,jpeg,png,webp|max:10000'
            ], [
                'gambar.*.required' => 'File gambar wajib diisi.',
                'gambar.*.image' => 'File harus berupa gambar.',
                'gambar.*.mimes' => 'Gambar hanya boleh JPG, JPEG, PNG, atau WEBP.',
                'gambar.*.max' => 'Ukuran maksimal gambar 9MB.'
            ]);

            $uploaded = [];

            if ($r->hasFile('gambar')) {
                foreach ($r->file('gambar') as $file) {
                    $path = $file->store('galeri', 'public');

                    Galeri::create([
                        'gambar' => $path,
                        'keterangan' => $r->keterangan,
                        'created_by' => Auth::id(),
                        'updated_by' => Auth::id(),
                    ]);
                }

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
            $galeri = Galeri::where('id', $r->id)->first();

            if($galeri){
                $galeri->delete();
                return response()->json([
                    'status' => true,
                    'data' => $galeri
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
