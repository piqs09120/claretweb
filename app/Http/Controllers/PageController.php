<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Post;
use App\Models\Program;
use App\Models\Setting;

class PageController extends Controller
{
    public function home()
    {
        $latestPosts = Post::published()->limit(3)->get();
        $programs = Program::active()->limit(6)->get();
        $activities = Activity::orderBy('sort_order')->limit(4)->get();

        return view('pages.home', compact('latestPosts', 'programs', 'activities'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function academics()
    {
        $programs = Program::active()->get();
        return view('pages.academics.index', compact('programs'));
    }

    public function undergraduate()
    {
        return view('pages.academics.undergraduate');
    }

    public function graduate()
    {
        return view('pages.academics.graduate');
    }

    public function curriculum()
    {
        return view('pages.academics.curriculum');
    }

    public function faculty()
    {
        return view('pages.academics.faculty');
    }

    public function calendars()
    {
        return view('pages.academics.calendars');
    }

    public function academicShow(string $slug)
    {
        $program = Program::where('slug', $slug)->where('is_active', true)->firstOrFail();
        return view('pages.academics.show', compact('program'));
    }

    public function admissions()
    {
        return view('pages.admissions');
    }

    public function activities()
    {
        $activities = Activity::orderBy('sort_order')->get();
        return view('pages.activities', compact('activities'));
    }

    public function accreditations()
    {
        return view('pages.accreditations');
    }
}
