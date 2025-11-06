<?php

namespace App\Http\Controllers;

use App\Models\Vacancy;
use Illuminate\Http\Request;

class VacancyController extends Controller
{
    public function create()
    {
        return inertia('Vacancy/Create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'mode' => 'required|string|in:remote,hybrid,on-site',
            'type' => 'required|string|in:full-time,part-time,contract,internship',
            'salary' => 'nullable|numeric',
            'location' => 'required|string|max:255',
            'description' => 'required|string|min:20',
        ]);

        $vacancy = Vacancy::create($validated);

        return to_route('vacancies.show', ['vacancy' => $vacancy->id])->with('success', 'Vacancy created successfully!');
    }

    public function show(Vacancy $vacancy)
    {
        return inertia('Vacancy/Show', ['vacancy' => $vacancy]);
    }
}
