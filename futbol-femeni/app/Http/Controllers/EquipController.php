<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equip;

class EquipController extends Controller
{
    //Para no repetirlo en todos los métodos el array

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $equips = Equip::all();
        return view('equips.index', compact('equips'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {
        $equip = $this->equips[$id];
        return view('equips.show', compact('equip'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
