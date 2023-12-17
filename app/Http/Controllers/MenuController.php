<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Http\Requests\MenuRequest;
use Exception;
use PDOException;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try{
            $data = Menu::get();
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
    public function store(MenuRequest $request)
    {
        try{
            $validate = $request->validated();
            $data = Menu::create($validate);
            return response()->json(['status' => true, 'massage' => 'success', 'data' => $data]);
        }catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'massage' => 'gagal menambah data', $e]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MenuRequest $request, Menu $menu)
    {
        try{
            $validate = $request->validated();
            $data = $menu -> update($validate);
            return response()->json(['status' => true, 'massage' => 'berhasil update', 'data' => $data]);
        }catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'massage' => 'gagal menambah data', $e]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        try{
            $data = $menu -> delete();
            return response()->json(['status' => true, 'massage' => 'data berhasil dihapus', 'data' => $data]);
        }catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'massage' => 'gagal menampilkan data', $e]);
        }
    }
}
