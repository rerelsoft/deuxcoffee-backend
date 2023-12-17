<?php

namespace App\Http\Controllers;

use App\Models\Meja;
use App\Http\Requests\MejaRequest;
use Exception;
use PDOException;

class MejaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try{
            $data = Meja::get();
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
    public function store(MejaRequest $request)
    {
        try{
            $validate = $request->validated();
            $data = Meja::create($validate);
            return response()->json(['status' => true, 'massage' => 'success', 'data' => $data]);
        }catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'massage' => 'gagal menambah data', $e]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Meja $meja)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Meja $meja)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MejaRequest $request, Meja $meja)
    {
        try{
            $validate = $request->validated();
            $data = $meja -> update($validate);
            return response()->json(['status' => true, 'massage' => 'berhasil update', 'data' => $data]);
        }catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'massage' => 'gagal menambah data', $e]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Meja $meja)
    {
        try{
            $data = $meja -> delete();
            return response()->json(['status' => true, 'massage' => 'data berhasil dihapus', 'data' => $data]);
        }catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'massage' => 'gagal menampilkan data', $e]);
        }
    }
}
