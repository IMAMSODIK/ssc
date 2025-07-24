<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use App\Http\Requests\StoreLayananRequest;
use App\Http\Requests\UpdateLayananRequest;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LayananController extends Controller
{
    public function index()
    {
        $data = [
            'pageTitle' => "Layanan",
            'layanans' => Layanan::all()
        ];
        return view('layanan.index', $data);
    }

    public function store(Request $r){
        $validatedData = $r->validate([
            'judul' => 'required|string',
            'keterangan' => 'required|string',
        ], [
            'judul.required' => 'Judul wajib diisi.',
            'keterangan.required' => 'Keterangan wajib diisi.',
        ]);
        
        try{
            $layanan = Layanan::create([
                'judul' => $r->judul,
                'keterangan' => $r->keterangan,
                'created_by' => Auth::id(),
                'updated_by' => Auth::id(),
            ]);

            if($layanan){
                return response()->json([
                    'status' => true,
                    'data' => $layanan
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
            $layanan = Layanan::where('id', $r->id)->first();

            if($layanan){
                return response()->json([
                    'status' => true,
                    'data' => $layanan
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
            'judul' => 'required|string',
            'keterangan' => 'required|string',
        ], [
            'judul.required' => 'Judul wajib diisi.',
            'keterangan.required' => 'Keterangan wajib diisi.',
        ]);
        
        try{
            $layanan = Layanan::where("id", $r->id)->first();

            if($layanan){
                $layanan->judul = $r->judul;
                $layanan->keterangan = $r->keterangan;

                $layanan->save();

                return response()->json([
                    'status' => true,
                    'data' => $layanan
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
            $layanan = Layanan::where('id', $r->id)->first();

            if($layanan){
                $layanan->delete();
                return response()->json([
                    'status' => true,
                    'data' => $layanan
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
