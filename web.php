Route::get('/mahasiswa', function () {
    
    $arrMahasiswa = [
        "Iwato Suzume",
        "Munakata Sōta",
        "Iwato Tamaki",
        "Serizawa Tomoya"
        ];

return view('universitas.mahasiswa', ['mahasiswa' => $arrMahasiswa]);
});
