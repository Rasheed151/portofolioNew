<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\projects;

class projectsController extends Controller
{
    public function index()
    {
        $data = projects::all();
        return view('projects-list', compact('data'));
    }

    public function detail($id)
    {
        $data = projects::findOrFail($id); // ambil sesuai id, kalau ga ketemu error 404
        $sidebar = projects::where('id', '!=', $id)
            ->inRandomOrder()
            ->limit(2)
            ->get();
        return view('project-detail', compact('data', 'sidebar'));
    }
}
