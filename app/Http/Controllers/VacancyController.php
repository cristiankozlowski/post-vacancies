<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Vacancy;
use Illuminate\Http\Request;

class VacancyController extends Controller
{
    public function index()
    {
        $vacancies = Vacancy::paginate(10);

        $vacancies->transform(function ($vacancy) {
            return [
                'id' => $vacancy->id,
                'title' => $vacancy->title,
                'mode' => $vacancy->mode,
                'type' => $vacancy->type,
                'salary' => $vacancy->salary,
                'location' => $vacancy->location,
                'description' => $vacancy->description,
                'created_at' => $vacancy->created_at->format('F j, Y'),
            ];
        });

        return Inertia::render('Vacancy/Index', ['vacancies' => $vacancies]);
    }

    public function create()
    {
        return Inertia::render('Vacancy/Create');
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

        $vacancy = Vacancy::create([
            'user_id' => $request->user()->id,
            'title' => $request->title,
            'mode' => $request->mode,
            'type' => $request->type,
            'salary' => $request->salary,
            'location' => $request->location,
            'description' => $request->description,
        ]);

        return to_route('vacancies.show', ['vacancy' => $vacancy->id])->with('success', 'Vacancy created successfully!');
    }

    public function show(Vacancy $vacancy)
    {
        $vacancy->load('user');

        $vacancy->created_at_formatted = $vacancy->created_at->format('F j, Y');

        return Inertia::render('Vacancy/Show', ['vacancy' => $vacancy]);
    }
}
