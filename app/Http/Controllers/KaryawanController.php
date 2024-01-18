<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Http\Requests\KaryawanRequest;
use Exception;
use PDOException;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try{
            $data = Karyawan::get();
            return response()->json(['status' => true, 'massage' => 'success', 'data' => $data]);
        }catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'massage' => 'gagal menampilkan data']);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(KaryawanRequest $request)
    {
        try{
            // $data = Jenis::create($request->all());
            $validate = $request->validated();
            $data = Karyawan::create($validate);
            // dd($data);
            return response()->json(['status' => true, 'massage' => 'success', 'data' => $data]);
        }catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'massage' => 'gagal menambah data', $e]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Karyawan $karyawan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Karyawan $karyawan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(KaryawanRequest $request, Karyawan $karyawan)
    {
        try{
            $validate = $request->validated();
            $data = $karyawan -> update($validate);
            return response()->json(['status' => true, 'massage' => 'berhasil update', 'data' => $data]);
        }catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'massage' => 'gagal menambah data', $e]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Karyawan $karyawan)
    {
        try{
            $data = $karyawan -> delete();
            return response()->json(['status' => true, 'massage' => 'data berhasil dihapus', 'data' => $data]);
        }catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'massage' => 'gagal menampilkan data', $e]);
        }
    }
}
