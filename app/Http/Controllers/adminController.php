<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\projects;

class adminController extends Controller
{
    /**
     * Show form & list project
     */
    public function index()
    {
        $projects = projects::all();
        return view('admin', compact('projects'));
    }

    /**
     * Store project ke database
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'cover' => 'required|string|max:255',
            'language' => 'required|string|max:255',
            'framework' => 'required|string|max:255',
            'content' => 'required',
        ]);

        projects::create($request->all());

        return redirect()->route('projects.index')->with('success', 'Project berhasil dibuat!');
    }

    /**
     * Update project
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'cover' => 'required|string|max:255',
            'language' => 'required|string|max:255',
            'framework' => 'required|string|max:255',
            'content' => 'required',
        ]);

        $project = projects::findOrFail($id);
        $project->update($request->all());

        return redirect()->route('projects.index')->with('success', 'Project berhasil diupdate!');
    }

    /**
     * Delete project
     */
    public function destroy($id)
    {
        $project = projects::findOrFail($id);
        $project->delete();

        return redirect()->route('projects.index')->with('success', 'Project berhasil dihapus!');
    }
}
