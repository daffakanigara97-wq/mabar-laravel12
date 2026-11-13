<?php

namespace App\Http\Controllers;

use App\Http\Requests\MuridStoreRequest;
use App\Models\Murid;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MuridController extends Controller
{
    public function index(): View
    {
        $murids = Murid::latest()->paginate(5);

        return view('murids.index', compact('murids'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create(): View
    {
        return view('murids.create');
    }

    public function store(MuridStoreRequest $request): RedirectResponse
    {
        Murid::create($request->validated());

        return redirect()->route('murids.index')
            ->with('success', 'Data Murid Created Successfully');
    }

    public function show(Murid $murid): View
    {
        return view('murids.show', compact('murid'));
    }

    public function edit(Murid $murid): View
    {
        return view('murids.edit', compact('murid'));
    }

    public function update(Request $request, Murid $murid): RedirectResponse
    {
        $murid->update($request->validate([
            'nis'           => 'required',
            'nama'          => 'required',
            'rombel'        => 'required',
            'rayon'         => 'required',
            'alamat'        => 'required',
            'no_telp'       => 'required',
            'jenis_kelamin' => 'required',
        ]));

        return redirect()->route('murids.index')
            ->with('success', 'Data Murid berhasil diupdate');
    }

    public function destroy(Murid $murid): RedirectResponse
    {
        $murid->delete();

        return redirect()->route('murids.index')
            ->with('success', 'Data Murid berhasil dihapus');
    }
}