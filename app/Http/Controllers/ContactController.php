<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Validasi form contact
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // (Kamu bisa tambahkan logika kirim email atau simpan ke database di sini)
        // contoh dummy dulu:
        return back()->with('success', 'Pesan kamu sudah terkirim!');
    }
}
