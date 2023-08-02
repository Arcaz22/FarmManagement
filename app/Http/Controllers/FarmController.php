<?php

namespace App\Http\Controllers;

use App\Models\farm;
use Illuminate\Http\Request;

class FarmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $farm = farm::all();
        return view('farm.index', compact('farm'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('farm.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_kandang' => 'required|max:255',
            'kepala_kandang' => 'required|max:255',
            'status_kandang' => 'required|max:255',
        ]);
    
        farm::create($data);
    
        return redirect()->route('farm.index')->with('success', 'farm created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('farm.show', compact('farm'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('farm.edit', compact('farm'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, farm $farm)
    {
        $data = $request->validate([
            'nama_kandang' => 'required|max:255',
            'kepala_kandang' => 'required|max:255',
            'status_kandang' => 'required|max:255',
        ]);
    
        $farm->update($data);
    
        return redirect()->route('farm.index')->with('success', 'farm updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(farm $farm)
    {
        $farm->delete();

        return redirect()->route('farm.index')->with('success', 'Kandang deleted successfully.');
    }
}
