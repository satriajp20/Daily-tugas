<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', function () {
    $username = request('username');
    $password = request('password');

    $users = [
        'Alibaba@polnes.ac.id' => 'Ali123321',
        'Budigaga@polnes.ac.id' => 'Bud654321'
    ];

    //Cek jika sesi ada, inisialisasi ke 0 jika tidak
    $attempts = session('attempts', 0);

    if (array_key_exists($username, $users)) {
        if ($users[$username] == $password) {
            // reset kesempatan jika login sukses
            session(['attempts' => 0]);
            return 'LOGIN BERHASIL';
        } else {
            // increment, jika password salah
            $attempts++;
            session(['attempts' => $attempts]);

            if ($attempts >= 3) {
                // Hapus percobaan, kembalikan error jika percobaan >= 3
                session(['attempts' => 0]);
                return '3 Kali Password Salah !';
            } else {
                return 'Password Anda Salah';
            }
        }
    } else {
        // Periksa username jika tidak terdaftar
        session(['attempts' => 0]);
        return 'GAGAL, Username tak terdaftar';
    }
});
