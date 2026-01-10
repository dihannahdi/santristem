<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\Event;
use App\Models\Testimonial;
use App\Models\PartnerSchool;
use App\Models\Gallery;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $programs = Program::where('is_active', true)
            ->orderBy('order')
            ->limit(4)
            ->get();

        $upcomingEvent = Event::where('status', 'upcoming')
            ->where('event_date', '>', now())
            ->orderBy('event_date')
            ->first();

        $testimonials = Testimonial::where('is_featured', true)
            ->orderBy('order')
            ->limit(3)
            ->get();

        $partnerSchools = PartnerSchool::where('is_active', true)
            ->limit(4)
            ->get();

        $featuredPhotos = Gallery::where('is_featured', true)
            ->latest()
            ->limit(6)
            ->get();

        return view('home', compact('programs', 'upcomingEvent', 'testimonials', 'partnerSchools', 'featuredPhotos'));
    }
}
