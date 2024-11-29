<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
                $validated = $request->validate([
            'nama' => 'required',
            'nim' => 'required|unique:mahasiswa',
            'jurusan' => 'required',
        ]);

        $mahasiswa = Mahasiswa::create($validated);
        return response()->json(['message' => 'Mahasiswa created', 'data' => $mahasiswa], 201);
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
            $mahasiswa = Mahasiswa::all();
        return response()->json($mahasiswa, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
     $mahasiswa = Mahasiswa::findOrFail($id);
        $validated = $request->validate([
            'nama' => 'sometimes|required',
            'nim' => 'sometimes|required|unique:mahasiswa,nim,' . $id,
            'jurusan' => 'sometimes|required',
        ]);

        $mahasiswa->update($validated);
        return response()->json(['message' => 'Mahasiswa updated', 'data' => $mahasiswa], 200);
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->delete();
        return response()->json(['message' => 'Mahasiswa deleted'], 200);
    }
}
