<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LawyerController extends Controller
{
    public function index()
    {
        $data = [
            'pageTitle' => "Lawyers",
            'lawyers' => User::with('profile')->where('role', 'Lawyer')->get()
        ];
        return view('lawyer.index', $data);
    }

    // public function store(Request $r){
    //     $validatedData = $r->validate([
    //         'nama' => 'required|string',
    //         'asal' => 'required|string',
    //         'testi' => 'required|string',
    //     ], [
    //         'nama.required' => 'Nama wajib diisi.',
    //         'asal.required' => 'Asal wajib diisi.',
    //         'testi.required' => 'Testimoni wajib diisi.',
    //     ]);
        
    //     try{
    //         $testi = Testimoni::create([
    //             'nama' => $r->nama,
    //             'asal' => $r->asal,
    //             'testi' => $r->testi,
    //             'created_by' => Auth::id(),
    //             'updated_by' => Auth::id(),
    //         ]);

    //         if($testi){
    //             return response()->json([
    //                 'status' => true,
    //                 'data' => $testi
    //             ]);    
    //         }

    //         return response()->json([
    //             'status' => false,
    //             'message' => "Terjadi kesalahan saat menyimpan data"
    //         ]);
    //     }catch(Exception $e){
    //         return response()->json([
    //             'status' => false,
    //             'message' => $e->getMessage()
    //         ]);
    //     }
    // }

    // public function edit(Request $r){
    //     $validatedData = $r->validate([
    //         'id' => 'required|string',
    //     ], [
    //         'id.required' => 'Data belum dipilih.',
    //         'id.string' => 'Data belum dipilih.',
    //     ]);

    //     try{
    //         $testi = Testimoni::where('id', $r->id)->first();

    //         if($testi){
    //             return response()->json([
    //                 'status' => true,
    //                 'data' => $testi
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

    // public function update(Request $r){
    //     $validatedData = $r->validate([
    //         'nama' => 'required|string',
    //         'asal' => 'required|string',
    //         'testi' => 'required|string',
    //     ], [
    //         'nama.required' => 'Nama wajib diisi.',
    //         'asal.required' => 'Asal wajib diisi.',
    //         'testi.required' => 'Testimoni wajib diisi.',
    //     ]);
        
    //     try{
    //         $testi = Testimoni::where("id", $r->id)->first();

    //         if($testi){
    //             $testi->nama = $r->nama;
    //             $testi->asal = $r->asal;
    //             $testi->testi = $r->testi;

    //             $testi->save();

    //             return response()->json([
    //                 'status' => true,
    //                 'data' => $testi
    //             ]);    
    //         }

    //         return response()->json([
    //             'status' => false,
    //             'message' => "Terjadi kesalahan saat menyimpan data"
    //         ]);
    //     }catch(Exception $e){
    //         return response()->json([
    //             'status' => false,
    //             'message' => $e->getMessage()
    //         ]);
    //     }
    // }

    // public function delete(Request $r){
    //     $validatedData = $r->validate([
    //         'id' => 'required|string',
    //     ], [
    //         'id.required' => 'Data belum dipilih.',
    //         'id.string' => 'Data belum dipilih.',
    //     ]);

    //     try{
    //         $testi = Testimoni::where('id', $r->id)->first();

    //         if($testi){
    //             $testi->delete();
    //             return response()->json([
    //                 'status' => true,
    //                 'data' => $testi
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
