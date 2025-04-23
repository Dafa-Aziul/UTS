<?php

// app/Http/Controllers/JadwalSholatController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;

class JadwalSholatController extends Controller
{
    public function showJadwalSholat()
    {
        $tanggal = Carbon::now()->format('d-m-Y');
        $kota = 'Padang';
        $country = 'Indonesia';
        $method = 11;
    
        // Ambil jadwal sholat
        $resJadwal = Http::get("http://api.aladhan.com/v1/timingsByCity/{$tanggal}?city={$kota}&country={$country}&method={$method}");

        // Ambil ayat secara acak dari Al-Qur'an API
        $resAyat = Http::get("https://api.alquran.cloud/v1/ayah/random");

        $surahNumber = $resAyat['data']['surah']['number'];
        $ayatInSurah = $resAyat['data']['numberInSurah'];

        $resTerjemahan = Http::get("http://api.alquran.cloud/v1/ayah/{$surahNumber}:{$ayatInSurah}/en.asad");


        // dd([  // Untuk memeriksa apakah data yang diambil sudah benar
        //     'jadwal' => $resJadwal->json(),
        //     'ayat' => $resAyat->json(),
        // ]);
        // dd([
        //     'jadwal' => $resJadwal->json(),
        //     'ayat' => $resAyat->json(),
        //     'terjemahan' => $resTerjemahan->json(),
        // ]);

        if ($resJadwal->successful() && $resAyat->successful()) {
            $jadwal = $resJadwal['data']['timings'];
            $tanggalHijriah = $resJadwal['data']['date'];
    
            // Ambil ayat secara acak
            $ayat = $resAyat->json('data');

            // Ambil terjemahan ayat
            $terjemahan = $resTerjemahan->json('data');
    
            return view('jadwal', [
                'tanggal' => $tanggal,
                'kota' => $kota,
                'jadwal' => $jadwal,
                'tanggalHijriah' => $tanggalHijriah,
                'ayat' => $ayat,
                'terjemahan' => $terjemahan,
            ]);
        } else {
            return view('jadwal')->with('error', 'Gagal mengambil data dari API.');
        }
    }
}
