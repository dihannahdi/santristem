<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index()
    {
        $programs = Program::where('is_active', true)
            ->with(['events' => function($query) {
                $query->orderBy('event_date', 'desc');
            }])
            ->orderBy('order')
            ->get();

        return view('programs.index', compact('programs'));
    }

    public function show($slug)
    {
        $program = Program::where('slug', $slug)
            ->with(['events' => function($query) {
                $query->orderBy('event_date', 'desc');
            }])
            ->firstOrFail();

        return view('programs.show', compact('program'));
    }
}
