<?php

namespace App\Http\Controllers;

use App\Models\Aktifitas;
use App\Http\Requests\StoreAktifitasRequest;
use App\Http\Requests\UpdateAktifitasRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AktifitasController extends Controller
{
    public function index()
    {
        $data = [
            'pageTitle' => "Aktifitas",
            'aktifitas' => Aktifitas::all()
        ];
        return view('aktifitas.index', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'kategori' => 'required|string',
            'judul' => 'required|string',
            'deksripsi' => 'required|string',
            'thumbnail' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ], [
            'kategori.required' => 'Kategori wajib dipilih.',
            'judul.required' => 'Judul wajib diisi.',
            'deksripsi.required' => 'Deskripsi wajib diisi.',
            'thumbnail.image' => 'Thumbnail harus berupa gambar.',
            'thumbnail.mimes' => 'Format gambar harus jpg, jpeg, png, atau webp.',
            'thumbnail.max' => 'Ukuran maksimal gambar 2MB.',
        ]);

        try {
            $path = null;
            if ($request->hasFile('thumbnail')) {
                $path = $request->file('thumbnail')->store('aktifitas_thumbnail', 'public');
            }

            $aktifitas = \App\Models\Aktifitas::create([
                'kategori' => $request->kategori,
                'judul' => $request->judul,
                'thumbnail' => $path,
                'deksripsi' => $request->deksripsi,
                'visited' => 0,
                'created_by' => auth()->id(),
                'updated_by' => auth()->id(),
            ]);

            return response()->json([
                'status' => true,
                'data' => $aktifitas
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ]);
        }
    }


    public function edit(Request $request)
    {
        $aktifitas = Aktifitas::find($request->id);

        if (!$aktifitas) {
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan.'
            ]);
        }

        return response()->json([
            'status' => true,
            'data' => $aktifitas
        ]);
    }

    public function detail(Request $request)
    {
        $aktifitas = Aktifitas::where('judul', $request->judul)->first();
        
        $data = [
            'pageTitle' => 'Detail Aktifitas',
            'aktifitas' => $aktifitas,
            'aktifitases' => Aktifitas::where('judul', '!=', $request->judul)
                    ->orderBy('created_at', 'desc')
                    ->take(5)
                    ->get()
        ];


        if ($aktifitas) {
            return view('aktifitas.detail', $data);
        }

        return redirect()->back();
    }


    public function update(Request $request)
    {
        try {
            $request->validate([
                'id' => 'required|exists:aktifitas,id',
                'judul' => 'required|string|max:255',
                'kategori' => 'required|string',
                'deskripsi' => 'required|string',
                'thumbnail' => 'nullable|image|max:2048',
            ]);

            $aktifitas = Aktifitas::findOrFail($request->id);

            $aktifitas->judul = $request->judul;
            $aktifitas->kategori = $request->kategori;
            $aktifitas->deksripsi = $request->deskripsi;
            $aktifitas->updated_by = auth()->id();

            if ($request->hasFile('thumbnail')) {
                if ($aktifitas->thumbnail && Storage::exists('public/' . $aktifitas->thumbnail)) {
                    Storage::delete('public/' . $aktifitas->thumbnail);
                }

                $file = $request->file('thumbnail');
                $path = $file->store('aktifitas_thumbnail', 'public');
                $aktifitas->thumbnail = $path;
            }

            $aktifitas->save();

            return response()->json([
                'status' => true,
                'message' => 'Aktifitas berhasil diperbarui.'
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'status' => false,
                'message' => 'Validasi gagal.',
                'errors' => $e->errors()
            ], 422);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Terjadi kesalahan saat memperbarui data.',
                'error' => $e->getMessage()
            ], 500);
        }
    }


    // public function delete(Request $r){
    //     $validatedData = $r->validate([
    //         'id' => 'required|string',
    //     ], [
    //         'id.required' => 'Data belum dipilih.',
    //         'id.string' => 'Data belum dipilih.',
    //     ]);

    //     try{
    //         $banner = Banner::where('id', $r->id)
    //                         ->first();

    //         if($banner){
    //             if ($banner->gambar && Storage::exists('public/' . $banner->gambar)) {
    //                 Storage::delete('public/' . $banner->gambar);
    //             }

    //             $banner->delete();
    //             return response()->json([
    //                 'status' => true,
    //                 'data' => $banner
    //             ]);    
    //         }

    //         return response()->json([
    //             'status' => false,
    //             'message' => "Data tidak ditemukan"
    //         ]);
    //     }catch(Exception $e){
    //         return response()->json([
    //             'status' => false,
    //             'message' => $e->getMessage()
    //         ]);
    //     }
    // }
}
