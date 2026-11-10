<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login', ['hideNav' => true]);
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'username' => 'required|min:3',
        ]);


        return redirect()->route('dashboard', ['username' => $request->username]);
    }

    public function dashboard(Request $request)
    {
        if (!$request->username) {
            return redirect()->route('login');
        }

        $stats = [
            ['label' => 'Total Tim', 'value' => 8],
            ['label' => 'Total Match', 'value' => 5],
            ['label' => 'Total Peserta', 'value' => 40],
            ['label' => 'Total Hadiah', 'value' => 'Rp 5.000.000'],
        ];


        $upcoming = array_slice($this->getMatches(), 0, 3);

        return view('dashboard', [
            'username' => $request->username,
            'stats' => $stats,
            'upcoming' => $upcoming,
        ]);
    }

    public function pengelolaan(Request $request)
    {
        if (!$request->username) {
            return redirect()->route('login');
        }

        $teams = [
            ['nama' => 'Garuda Nusantara', 'game' => 'Mobile Legends', 'kapten' => 'Raka', 'status' => 'Terverifikasi'],
            ['nama' => 'Naga Timur', 'game' => 'Mobile Legends', 'kapten' => 'Dimas', 'status' => 'Terverifikasi'],
            ['nama' => 'Elang Hitam', 'game' => 'Valorant', 'kapten' => 'Fajar', 'status' => 'Menunggu'],
            ['nama' => 'Macan Kumbang', 'game' => 'Valorant', 'kapten' => 'Bagas', 'status' => 'Terverifikasi'],
            ['nama' => 'Srigala Malam', 'game' => 'Free Fire', 'kapten' => 'Yoga', 'status' => 'Menunggu'],
            ['nama' => 'Badai Tropis', 'game' => 'Free Fire', 'kapten' => 'Nadia', 'status' => 'Terverifikasi'],
            ['nama' => 'Kilat Biru', 'game' => 'eFootball', 'kapten' => 'Rizky', 'status' => 'Terverifikasi'],
            ['nama' => 'Api Biru', 'game' => 'eFootball', 'kapten' => 'Salsa', 'status' => 'Ditolak'],
        ];

        return view('pengelolaan', [
            'username' => $request->username,
            'teams' => $teams,
            'matches' => $this->getMatches(),
        ]);
    }

    public function profile(Request $request)
    {
        if (!$request->username) {
            return redirect()->route('login');
        }

        $info = [
            'Nama Turnamen' => 'Arena Clash Season 1',
            'Penyelenggara' => 'Komunitas Esports Kampus',
            'Role' => 'Admin Turnamen',
            'Periode' => '10 - 24 November 2026',
            'Lokasi' => 'Aula Fakultas',
        ];

        return view('profile', [
            'username' => $request->username,
            'info' => $info,
        ]);
    }


    private function getMatches()
    {
        return [
            ['tim_a' => 'Garuda Nusantara', 'tim_b' => 'Naga Timur', 'game' => 'Mobile Legends', 'tanggal' => '10 Nov 2026', 'jam' => '09.00', 'status' => 'Dijadwalkan'],
            ['tim_a' => 'Elang Hitam', 'tim_b' => 'Macan Kumbang', 'game' => 'Valorant', 'tanggal' => '10 Nov 2026', 'jam' => '13.00', 'status' => 'Dijadwalkan'],
            ['tim_a' => 'Srigala Malam', 'tim_b' => 'Badai Tropis', 'game' => 'Free Fire', 'tanggal' => '11 Nov 2026', 'jam' => '10.00', 'status' => 'Dijadwalkan'],
            ['tim_a' => 'Kilat Biru', 'tim_b' => 'Api Biru', 'game' => 'eFootball', 'tanggal' => '11 Nov 2026', 'jam' => '15.00', 'status' => 'Ditunda'],
            ['tim_a' => 'Garuda Nusantara', 'tim_b' => 'Macan Kumbang', 'game' => 'Mobile Legends', 'tanggal' => '12 Nov 2026', 'jam' => '09.00', 'status' => 'Selesai'],
        ];
    }
}
