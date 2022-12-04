<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Mandala Projects"
    ]);
});

Route::get('/layanan', function () {
    return view('layanan', [
        "title" => "Ruang Lingkup Layanan"
    ]);
});

Route::get('/portofolio', function () {
    
$portofolio = [
    [
        "title" => "Kegiatan Penataan Lahan Kritis",
        "client" => "PT.Rumpun Sari Kemuning",
        "location" => "Desa Ngargoyoso, Kecamatan Ngargoyoso, Kabupaten Karanganyar, Jawa Tengah"
    ],

    [
        "title" => "Pembangunan Ella Skin Care Cabang Magelang",
        "client" => "CV. Anugrah Dwimitra Sunjaya",
        "location" => "Jl. Kolonel Sugiyono No.7, Kemirirejo, Kecamatan Magelang Tengah, Kota Magelang, Jawa Tengah"
    ]
];
    return view('portofolio', [
        "title" => "Portofolio",
        "contents" => $portofolio
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "siapa" => "Siapa Kami?",
        "content" => "CV. Mandala Projects adalah sebuah perusahaan konsultan lingkungan yang sudah berdiri sejak 29 April 20015. CV Mandala Projects sendiri memiliki ruang lingkup pelayanan yang sesuai dengan Sertifikat Badan Usaha (SBU), di antaranya adalah Jasa Nasehat dan Konsultasi Rekayasa Teknik, Jasa Desain Rekayasa untuk Pekerjaan Teknik Sipil Transportasi, Jasa Nasehat dan Konsultasi Jasa Rekayasa Konstruksi, Jasa Desain Rekayasa Lainnya, Jasa Perencanaan dan Perancangan Perkotaan, Jasa Konsultasi Lingkungan.",
        "images" => "Who We Are.jpg"
    ]);
});
