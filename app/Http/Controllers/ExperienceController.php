<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function index()
    {
        $experiences = Experience::with('professional')->get();
        return view('experiences.index', compact('experiences'));
    }

    public function create()
    {
        return view('experiences.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'professional_id' => 'required|exists:professionals,id',
            'company' => 'required',
            'position' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date',
            'description' => 'nullable',
            // Add other fields as needed
        ]);

        Experience::create($validated);
        return redirect()->route('experiences.index')->with('success', 'Experience created successfully');
    }

    public function show(Experience $experience)
    {
        return view('experiences.show', compact('experience'));
    }

    public function edit(Experience $experience)
    {
        return view('experiences.edit', compact('experience'));
    }

    public function update(Request $request, Experience $experience)
    {
        $validated = $request->validate([
            'professional_id' => 'required|exists:professionals,id',
            'company' => 'required',
            'position' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date',
            'description' => 'nullable',
            // Add other fields as needed
        ]);

        $experience->update($validated);
        return redirect()->route('experiences.index')->with('success', 'Experience updated successfully');
    }

    public function destroy(Experience $experience)
    {
        $experience->delete();
        return redirect()->route('experiences.index')->with('success', 'Experience deleted successfully');
    }
}
