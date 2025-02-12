<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Professional;

class ProfessionalController extends Controller
{
    public function index()
    {
        $professionals = Professional::all();
        return view('professionals.index', compact('professionals'));
    }

    public function create()
    {
        return view('professionals.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:professionals',
            'phone' => 'required',
            // Add other fields as needed
        ]);

        Professional::create($validated);
        return redirect()->route('professionals.index')->with('success', 'Professional created successfully');
    }

    public function show(Professional $professional)
    {
        return view('professionals.show', compact('professional'));
    }

    public function edit(Professional $professional)
    {
        return view('professionals.edit', compact('professional'));
    }

    public function update(Request $request, Professional $professional)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:professionals,email,' . $professional->id,
            'phone' => 'required',
            // Add other fields as needed
        ]);

        $professional->update($validated);
        return redirect()->route('professionals.index')->with('success', 'Professional updated successfully');
    }

    public function destroy(Professional $professional)
    {
        $professional->delete();
        return redirect()->route('professionals.index')->with('success', 'Professional deleted successfully');
    }
}
