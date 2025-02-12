<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Professional;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function index()
    {
      return $education = Education::with('professional')->get();
        return view('education.index', compact('education'));
    }

    public function create()
    {
        $professional = Professional::first();
        return view('education.create', compact('professional'));
    }

    public function store(Request $request)
    {
       // return $request->all();
        // $validated = $request->validate([
        //     'professional_id' => 'required|exists:professionals,id',
        //     'institution' => 'required',
        //     'degree' => 'required',
        //     'field_of_study' => 'required',
        //     'start_date' => 'required|date',
        //     'end_date' => 'nullable|date',
        //     // Add other fields as needed
        // ]);
        // return $validated;
      $validated=$request->all();
        Education::create($validated);
        return redirect()->route('education.index')->with('success', 'Education created successfully');
    }

    public function show(Education $education)
    {
        return view('education.show', compact('education'));
    }

    public function edit(Education $education)
    {
        return view('education.edit', compact('education'));
    }

    public function update(Request $request, Education $education)
    {
        $validated = $request->validate([
            'professional_id' => 'required|exists:professionals,id',
            'institution' => 'required',
            'degree' => 'required',
            'field_of_study' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date',
            // Add other fields as needed
        ]);

        $education->update($validated);
        return redirect()->route('education.index')->with('success', 'Education updated successfully');
    }

    public function destroy(Education $education)
    {
        $education->delete();
        return redirect()->route('education.index')->with('success', 'Education deleted successfully');
    }
}
