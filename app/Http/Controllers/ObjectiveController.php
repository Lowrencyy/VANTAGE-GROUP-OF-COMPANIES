<?php

namespace App\Http\Controllers;

use App\Models\Objective;
use Illuminate\Http\Request;

class ObjectiveController extends Controller
{
    public function index()
    {
        return view('main.index', [
            'heading'    => 'Latest Objectives',
            'objectives' => $this->filteredObjectives(request()->only('search'))
        ]);
    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('search');

        $objectives = Objective::latest()
            ->filter(['search' => $searchTerm])
            ->get();

        return view('main.objectives-all', [
            'heading'    => 'Latest Objectives',
            'objectives' => $objectives,
            'searchTerm' => $searchTerm,
        ]);
    }

    public function show(Objective $objective)
    {
        return view('main.objective', [
            'objective' => $objective,
        ]);
    }

    private function filteredObjectives(array $filters = [])
    {
        return Objective::latest()
                        ->filter($filters)
                        ->get();
    }
}
