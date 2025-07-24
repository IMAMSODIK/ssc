<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Http\Requests\StoreBannerRequest;
use App\Http\Requests\UpdateBannerRequest;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function index()
    {
        $data = [
            'pageTitle' => "Banner",
            'banners' => Banner::all()
        ];
        return view('banners.index', $data);
    }

    public function store(Request $r){
        $validatedData = $r->validate([
            'gambar' => 'required|image|mimes:jpg,jpeg,png,webp|max:5000',
            'heading_1' => 'required|string',
            'heading_2' => 'required|string',
            'text_tombol' => 'required|string',
            'link_tombol' => 'required|string'
        ], [
            'gambar.image' => 'File logo harus berupa gambar.',
            'gambar.mimes' => 'Logo hanya boleh jpg, jpeg, png, atau webp.',
            'gambar.max' => 'Ukuran logo maksimal 4MB.',
            'heading_1.required' => 'Heading 1 wajib diisi.',
            'heading_2.required' => 'Heading 2 wajib diisi.',
            'text_tombol.required' => 'Text Tombol wajib diisi.',
            'link_tombol.required' => 'Link Tombol wajib diisi.'
        ]);
        
        try{
            if ($r->hasFile('gambar')) {
                $file = $r->file('gambar');
                $path = $file->store('banner', 'public');
            }
            $banner = Banner::create([
                'gambar' => $path,
                'heading_1' => $r->heading_1,
                'heading_2' => $r->heading_2,
                'text_tombol' => $r->text_tombol,
                'link_tombol' => $r->link_tombol,
                'created_by' => Auth::id(),
                'updated_by' => Auth::id(),
            ]);

            if($banner){
                return response()->json([
                    'status' => true,
                    'data' => $banner
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
            $banner = Banner::where('id', $r->id)->first();

            if($banner){
                return response()->json([
                    'status' => true,
                    'data' => $banner
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
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:10000',
            'heading_1' => 'required|string',
            'heading_2' => 'required|string',
            'text_tombol' => 'required|string',
            'link_tombol' => 'required|string'
        ], [
            'gambar.image' => 'File logo harus berupa gambar.',
            'gambar.mimes' => 'Logo hanya boleh jpg, jpeg, png, atau webp.',
            'gambar.max' => 'Ukuran logo maksimal 9MB.',
            'heading_1.required' => 'Heading 1 wajib diisi.',
            'heading_2.required' => 'Heading 2 wajib diisi.',
            'text_tombol.required' => 'Text Tombol wajib diisi.',
            'link_tombol.required' => 'Link Tombol wajib diisi.'
        ]);
        
        try{
            $banner = Banner::where("id", $r->id)->first();

            if($banner){
                $banner->heading_1 = $r->heading_1;
                $banner->heading_2 = $r->heading_2;
                $banner->text_tombol = $r->text_tombol;
                $banner->link_tombol = $r->link_tombol;

                if ($r->hasFile('gambar')) {
                    if ($banner->gambar && Storage::exists('public/' . $banner->gambar)) {
                        Storage::delete('public/' . $banner->gambar);
                    }

                    $file = $r->file('gambar');
                    $path = $file->store('banner', 'public');
                    $banner->gambar = $path;
                }
                $banner->save();

                return response()->json([
                    'status' => true,
                    'data' => $banner
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
            $banner = Banner::where('id', $r->id)
                            ->first();

            if($banner){
                if ($banner->gambar && Storage::exists('public/' . $banner->gambar)) {
                    Storage::delete('public/' . $banner->gambar);
                }

                $banner->delete();
                return response()->json([
                    'status' => true,
                    'data' => $banner
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
