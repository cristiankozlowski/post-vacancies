<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Vacancy;
use Illuminate\Http\Request;

class AppController extends Controller
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

        return Inertia::render('Home', ['vacancies' => $vacancies]);
    }
}
