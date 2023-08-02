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
        'kapasitas_kandang' => 'required|integer',
        'lokasi_kandang' => 'required|max:255',
    ]);

    Farm::create($data);

    return redirect()->route('farm.index')->with('success', 'Farm created successfully.');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $farm = farm::find($id);
        return view('farm.show', compact('farm'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $farm = farm::find($id);
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
            'kapasitas_kandang' => 'required|integer',
            'lokasi_kandang' => 'required|max:255',
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

    public function search(Request $request)
    {
        $searchTerm = $request->input('search');

        $farm = Farm::where(function ($query) use ($searchTerm) {
            $query->where('nama_kandang', 'LIKE', "%{$searchTerm}%")
                ->orWhere('kepala_kandang', 'LIKE', "%{$searchTerm}%")
                ->orWhere('status_kandang', 'LIKE', "%{$searchTerm}%");
        })->get();

        return view('farm.index', compact('farm'));
    }

    public function filter(Request $request)
    {
        $status = $request->input('status_kandang');
        $kepala_kandang = $request->input('kepala_kandang');

        $query = Farm::query();

        if ($status) {
            $query->where('status_kandang', $status);
        }

        if ($kepala_kandang) {
            $query->where('kepala_kandang', $kepala_kandang);
        }

        $farm = $query->get();
        return view('farm.index', compact('farm'));
    }
}
