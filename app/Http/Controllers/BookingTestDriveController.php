<?php

namespace App\Http\Controllers;

use App\Models\BookingTestDrive;
use Illuminate\Http\Request;

class BookingTestDriveController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'hp' => 'required|string|max:30',
            'kendaraan' => 'required|string|max:255',
            'tanggal' => 'required|date|after_or_equal:today',
            'waktu' => 'required',
        ]);

        $booking = BookingTestDrive::create([
            'nama' => $request->nama,
            'hp' => $request->hp,
            'kendaraan' => $request->kendaraan,
            'tanggal' => $request->tanggal,
            'waktu' => $request->waktu,
            'status' => 'pending',
        ]);

        $pesan = "Halo Kak Muhammad Daffa Syaddad, saya ingin melakukan booking test drive Hyundai.\n\n"
            ."Nama: {$booking->nama}\n"
            ."Nomor WhatsApp: {$booking->hp}\n"
            ."Kendaraan: {$booking->kendaraan}\n"
            ."Tanggal: {$booking->tanggal}\n"
            ."Waktu: {$booking->waktu}\n\n"
            ."Mohon konfirmasi ketersediaan jadwal test drive saya. Terima kasih.";

        $nomorSales = '6285771922632';

        return redirect()->away(
            'https://wa.me/'.$nomorSales.'?text='.urlencode($pesan)
        );
    }
}