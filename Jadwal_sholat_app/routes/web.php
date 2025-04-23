<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// routes/web.php

use App\Http\Controllers\JadwalSholatController;

Route::get('/jadwal_sholat', [JadwalSholatController::class, 'showJadwalSholat'])->name('jadwal-sholat');

