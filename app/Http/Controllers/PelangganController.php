<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Http\Requests\PelangganRequest;
use Exception;
use PDOException;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try{
            $data = Pelanggan::get();
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
    public function store(PelangganRequest $request)
    {
        try{
            $validate = $request->validated();
            $data = Pelanggan::create($validate);
            return response()->json(['status' => true, 'massage' => 'success', 'data' => $data]);
        }catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'massage' => 'gagal menambah data', $e]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Pelanggan $pelanggan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pelanggan $pelanggan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PelangganRequest $request, Pelanggan $pelanggan)
    {
        try{
            $validate = $request->validated();
            $data = $pelanggan -> update($validate);
            return response()->json(['status' => true, 'massage' => 'berhasil update', 'data' => $data]);
        }catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'massage' => 'gagal menambah data', $e]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pelanggan $pelanggan)
    {
        try{
            $data = $pelanggan -> delete();
            return response()->json(['status' => true, 'massage' => 'data berhasil dihapus', 'data' => $data]);
        }catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'massage' => 'gagal menampilkan data', $e]);
        }
    }
}
