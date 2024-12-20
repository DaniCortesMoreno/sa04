<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartitsController extends Controller
{

    protected $partits = [
        ['local' => 'Barça Femení', 'visitant' => 'Atlètic de Madrid', 'date' => '2024-11-30', 'resultat' => null],
        ['local' => 'Real Madrid Femení', 'visitant' => 'Barça Femení', 'date' => '2024-12-15', 'resultat' => '0-3'],
    ];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partits = $this->partits;
        return view('partits.index', compact('partits'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('partits.crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newPartit = [
            'local' => $request->input('local'),
            'visitant' => $request->input('visitant'),
            'date' => $request->input('date'),
            'resultat' => $request->input('resultat')
        ];
        $this->partits[] = $newPartit;

        $partits = $this->partits;

        return view('partits.index', compact('partits'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $partit = $this->partits[$id];
        return view('partits.show', compact('partit'));
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
