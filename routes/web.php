<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\LaboratoryController;
use App\Http\Controllers\QbiController;
use App\Http\Controllers\DigitalController;
use App\Http\Controllers\EidController;
use App\Http\Controllers\EmController;
use App\Http\Controllers\LsceController;
use App\Http\Controllers\MansysController;
use App\Http\Controllers\SeController;

// Halaman utama (dashboard)
Route::get('/', [AboutController::class, 'index'])->name('about');

$localRedirect = function (string $path) {
    return fn () => redirect(url($path));
};

// Halaman course lama masih berisi template statis yang tidak lengkap.
Route::get('/course', $localRedirect('/about'))->name('course');

// Halaman about
Route::get('/about', [AboutController::class, 'index'])->name('about');

// Legacy profile link diarahkan ke halaman utama profil riset.
Route::get('/profile', $localRedirect('/about'))->name('profile');

// Halaman dosen
Route::get('/dosens', [DosenController::class, 'index'])->name('dosen');

// Halaman laboratorium
Route::get('/laboratory', [LaboratoryController::class, 'index'])->name('laboratory');

// Halaman laboratorium Qbi
Route::get('/qbi', [QbiController::class, 'index'])->name('qbi');

// Halaman laboratorium Mansys
Route::get('/mansys', [MansysController::class, 'index'])->name('mansys');

// Halaman laboratorium Lsce
Route::get('/lsce', [LsceController::class, 'index'])->name('lsce');

// Halaman laboratorium Eid
Route::get('/eid', [EidController::class, 'index'])->name('eid');

// Halaman laboratorium Se
Route::get('/se', [SeController::class, 'index'])->name('se');

// Halaman laboratorium Em
Route::get('/em', [EmController::class, 'index'])->name('em');

// Halaman laboratorium Digital
Route::get('/digital', [DigitalController::class, 'index'])->name('digital');

// Legacy links from the static template should not send visitors to 404 pages.
Route::get('/index.html', $localRedirect('/'));
Route::get('/about.html', $localRedirect('/about'));
Route::get('/course.html', $localRedirect('/course'));
Route::get('/faculty.html', $localRedirect('/dosens'));
Route::get('/student.html', $localRedirect('/about'));
Route::get('/admission.html', $localRedirect('/about'));
Route::get('/contact.html', fn () => redirect(url('/laboratory').'#start-B'));
Route::get('/f', $localRedirect('/course'));

Route::get('/download/{file}', function (string $file) {
    $safeFile = e(basename($file));

    return response(
        '<!doctype html><html lang="id"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">'.
        '<title>File Belum Tersedia</title><style>body{font-family:Arial,sans-serif;margin:0;min-height:100vh;display:grid;place-items:center;background:#f6f8fc;color:#17213a}.card{max-width:560px;background:#fff;border:1px solid #dfe6f4;border-radius:20px;padding:32px;box-shadow:0 24px 60px rgba(23,33,58,.12)}a{color:#1f49e0;font-weight:700;text-decoration:none}</style></head>'.
        '<body><main class="card"><h1>File belum tersedia</h1><p>Dokumen <strong>'.$safeFile.'</strong> belum tersedia di portal ini.</p><p><a href="'.url('/about').'">Kembali ke halaman utama</a></p></main></body></html>'
    )->header('Content-Type', 'text/html; charset=UTF-8');
})->where('file', '.*')->name('legacy.download-unavailable');
