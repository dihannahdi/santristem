<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function about()
    {
        return view('profile.about');
    }

    public function team()
    {
        // Team members data
        $team = [
            [
                'name' => 'Dr. Danang Mursita',
                'role' => 'Founder & Project Lead',
                'institution' => 'Departemen Matematika FMIPA UGM',
                'bio' => 'Dosen Matematika UGM yang menginisiasi santriSTEM untuk menjembatani pendidikan STEM dan pesantren.',
                'image' => null
            ],
            [
                'name' => 'Devi',
                'role' => 'Koordinator Program',
                'institution' => 'Mahasiswa Matematika UGM',
                'bio' => 'Relawan aktif yang mengkoordinir pelaksanaan program pelatihan guru.',
                'image' => null
            ],
            [
                'name' => 'Nahdi',
                'role' => 'Fasilitator',
                'institution' => 'Mahasiswa Matematika UGM',
                'bio' => 'Membantu memfasilitasi kegiatan dan workshop untuk santri.',
                'image' => null
            ],
            [
                'name' => 'Pelangi',
                'role' => 'Content Creator',
                'institution' => 'Mahasiswa Matematika UGM',
                'bio' => 'Mengelola konten dan dokumentasi kegiatan santriSTEM.',
                'image' => null
            ],
            [
                'name' => 'Ale',
                'role' => 'Technical Support',
                'institution' => 'Mahasiswa Matematika UGM',
                'bio' => 'Memberikan dukungan teknis untuk program dan kegiatan.',
                'image' => null
            ],
            [
                'name' => 'Faiz',
                'role' => 'Community Manager',
                'institution' => 'Mahasiswa Matematika UGM',
                'bio' => 'Mengelola komunitas relawan dan alumni pesantren.',
                'image' => null
            ],
        ];

        return view('profile.team', compact('team'));
    }
}
