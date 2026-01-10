<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventRegistration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EventRegistrationConfirmation;

class EventController extends Controller
{
    public function index()
    {
        $upcomingEvents = Event::where('status', 'upcoming')
            ->where('event_date', '>', now())
            ->orderBy('event_date', 'asc')
            ->get();

        $pastEvents = Event::where('status', 'completed')
            ->orWhere('event_date', '<=', now())
            ->orderBy('event_date', 'desc')
            ->get();

        return view('events.index', compact('upcomingEvents', 'pastEvents'));
    }

    public function show($slug)
    {
        $event = Event::where('slug', $slug)->firstOrFail();
        
        // Check if registration is still open
        $canRegister = $event->status === 'upcoming' 
            && $event->event_date > now()
            && ($event->registration_deadline ? $event->registration_deadline > now() : true);

        // Count current registrations
        $registrationCount = $event->registrations()->where('status', 'confirmed')->count();
        $spotsLeft = $event->max_participants ? $event->max_participants - $registrationCount : null;

        return view('events.show', compact('event', 'canRegister', 'spotsLeft'));
    }

    public function register(Request $request, $slug)
    {
        $event = Event::where('slug', $slug)->firstOrFail();

        // Validate registration is still open
        if ($event->status !== 'upcoming' || $event->event_date <= now()) {
            return back()->with('error', 'Pendaftaran untuk acara ini telah ditutup.');
        }

        if ($event->registration_deadline && $event->registration_deadline <= now()) {
            return back()->with('error', 'Batas waktu pendaftaran telah berakhir.');
        }

        // Check capacity
        $registrationCount = $event->registrations()->where('status', 'confirmed')->count();
        if ($event->max_participants && $registrationCount >= $event->max_participants) {
            return back()->with('error', 'Maaf, kuota peserta sudah penuh.');
        }

        // Validate request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'institution' => 'required|string|max:255',
            'role' => 'required|in:teacher,student,volunteer',
            'notes' => 'nullable|string|max:1000',
        ], [
            'name.required' => 'Nama wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format email tidak valid',
            'phone.required' => 'Nomor telepon wajib diisi',
            'institution.required' => 'Nama institusi wajib diisi',
            'role.required' => 'Peran wajib dipilih',
        ]);

        // Check for duplicate registration
        $existingRegistration = EventRegistration::where('event_id', $event->id)
            ->where('email', $validated['email'])
            ->first();

        if ($existingRegistration) {
            return back()->with('error', 'Email Anda sudah terdaftar untuk acara ini.');
        }

        // Create registration
        $registration = EventRegistration::create([
            'event_id' => $event->id,
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'institution' => $validated['institution'],
            'role' => $validated['role'],
            'notes' => $validated['notes'] ?? null,
            'status' => 'confirmed',
        ]);

        // Send confirmation email (optional, configure mail later)
        try {
            Mail::to($validated['email'])->send(new EventRegistrationConfirmation($registration, $event));
        } catch (\Exception $e) {
            // Log error but don't fail registration
            \Log::warning('Failed to send event registration email: ' . $e->getMessage());
        }

        return back()->with('success', 'Pendaftaran berhasil! Kami telah mengirim konfirmasi ke email Anda.');
    }
}
