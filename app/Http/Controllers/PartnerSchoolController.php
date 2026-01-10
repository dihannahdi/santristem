<?php

namespace App\Http\Controllers;

use App\Models\PartnerSchool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PartnerSchoolController extends Controller
{
    public function index()
    {
        return view('partner.index');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string',
            'contact_person' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'school_type' => 'required|in:MA,MTs,Pondok Pesantren,Other',
            'student_count' => 'nullable|integer|min:0',
            'teacher_count' => 'nullable|integer|min:0',
            'programs_interest' => 'required|string',
            'message' => 'nullable|string',
        ], [
            'name.required' => 'Nama sekolah wajib diisi',
            'address.required' => 'Alamat wajib diisi',
            'contact_person.required' => 'Nama kontak person wajib diisi',
            'phone.required' => 'Nomor telepon wajib diisi',
            'email.required' => 'Email wajib diisi',
            'school_type.required' => 'Jenis sekolah wajib dipilih',
            'programs_interest.required' => 'Program yang diminati wajib diisi',
        ]);

        // Check if already registered
        $exists = PartnerSchool::where('email', $validated['email'])->first();
        if ($exists) {
            return redirect()->back()->with('error', 'Sekolah dengan email ini sudah terdaftar sebagai mitra.');
        }

        // Create partner school record
        $partner = PartnerSchool::create(array_merge($validated, [
            'is_active' => false, // Will be activated by admin
        ]));

        // Send confirmation email (optional)
        try {
            // Mail::to($validated['email'])->send(new PartnerSchoolConfirmation($partner));
        } catch (\Exception $e) {
            \Log::warning('Failed to send partner school confirmation email: ' . $e->getMessage());
        }

        return redirect()->back()->with('success', 'Terima kasih atas minat Anda! Tim kami akan segera menghubungi sekolah Anda.');
    }
}
