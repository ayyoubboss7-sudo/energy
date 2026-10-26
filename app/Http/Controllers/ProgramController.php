<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index(Request $request)
    {
        $query = Program::query();

        if ($request->filled('province')) {
            $query->where('province', $request->input('province'));
        }

        if ($request->filled('renovation_type')) {
            $query->where(
                'renovation_type',
                $request->input('renovation_type')
            );
        }

        $programs = $query->latest()
            ->paginate(9)
            ->withQueryString();

        return view('programmes', compact('programs'));
    }
}
