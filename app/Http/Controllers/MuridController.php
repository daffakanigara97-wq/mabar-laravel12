<?php

namespace App\Http\Controllers;

use App\Models\Murid;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Request\murids;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class MuridController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $murids = Murid::latest()->paginate(5);
        return view('murids.index', compact ('murids'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('murid.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        Murid::create($request->validated());
        return redirect()->route('murid.index')
        ->with('success', 'Data Murid Created Succesfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Murid $murid): View
    {
        return view('murids.show', compact('murid'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Murid $murid): View
    {
        return view('murids.edit', compact('murid'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Murid $murid)
    {
        $murid->update($request->validated());

        return redirect()->route('murid.index')
        ->with('success', 'Data Murid Created Succesfully'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Murid $murid): RedirectResponse
    {
        $murid->delete();
        return redirect()->route('murid.index')
        ->with('success', 'Data Murid Created Succesfully'); 
    }
}
