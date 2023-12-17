<?php

namespace App\Http\Controllers;

use App\Models\Jenis;
use App\Http\Requests\JenisRequest;
use Exception;
use PDOException;

class JenisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try{
            $data = Jenis::get();
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
    public function store(JenisRequest $request)
    {
        try{
            // $data = Jenis::create($request->all());
            $validate = $request->validated();
            $data = Jenis::create($validate);
            // dd($data);
            return response()->json(['status' => true, 'massage' => 'success', 'data' => $data]);
        }catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'massage' => 'gagal menambah data', $e]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Jenis $jeni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jenis $jeni)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(JenisRequest $request, Jenis $jeni)
    {
        try{
            $validate = $request->validated();
            $data = $jeni -> update($validate);
            return response()->json(['status' => true, 'massage' => 'berhasil update', 'data' => $data]);
        }catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'massage' => 'gagal menambah data', $e]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jenis $jeni)
    {
        try{
            $data = $jeni -> delete();
            return response()->json(['status' => true, 'massage' => 'data berhasil dihapus', 'data' => $data]);
        }catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'massage' => 'gagal menampilkan data', $e]);
        }
    }
}
