<?php

namespace App\Http\Controllers;

use App\Models\Volunteer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class VolunteerController extends Controller
{
    public function index()
    {
        return view('volunteer.index');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:volunteers,email',
            'phone' => 'required|string|max:20',
            'university' => 'required|string|max:255',
            'major' => 'required|string|max:255',
            'semester' => 'required|integer|min:1|max:14',
            'pesantren_background' => 'required|in:yes,no',
            'pesantren_name' => 'nullable|required_if:pesantren_background,yes|string|max:255',
            'skills' => 'required|string',
            'motivation' => 'required|string',
            'availability' => 'required|string',
        ], [
            'name.required' => 'Nama lengkap wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.unique' => 'Email sudah terdaftar',
            'phone.required' => 'Nomor telepon wajib diisi',
            'university.required' => 'Universitas wajib diisi',
            'major.required' => 'Jurusan wajib diisi',
            'semester.required' => 'Semester wajib diisi',
            'pesantren_background.required' => 'Latar belakang pesantren wajib dipilih',
            'skills.required' => 'Keahlian wajib diisi',
            'motivation.required' => 'Motivasi wajib diisi',
            'availability.required' => 'Ketersediaan wajib diisi',
        ]);

        // Create volunteer record
        $volunteer = Volunteer::create($validated);

        // Send confirmation email (optional)
        try {
            // Mail::to($validated['email'])->send(new VolunteerConfirmation($volunteer));
        } catch (\Exception $e) {
            \Log::warning('Failed to send volunteer confirmation email: ' . $e->getMessage());
        }

        return redirect()->back()->with('success', 'Terima kasih telah mendaftar sebagai relawan! Kami akan menghubungi Anda segera.');
    }
}
