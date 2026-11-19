
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('pages.beranda');
});

Route::get('/about', function () {
    return view('pages.about', [
        'nama' => 'Jihan Ibnaty Salsabila',
        'kelas' => 'D4SM4802',
        'nim' => '707082400074',
    ]);
});

Route::view('/contact', 'pages.contact');

// satu controller bisa memiliki beberapa method (perintah)
// untuk menampilkan data dari database
Route::get('/product', [ProductController::class, 'index']);

// menampilkan halaman form insert data (wajib di atas /product/{id})
Route::get('/product/addProduct', [ProductController::class, 'addProduct']);

// memasukan data dari form yang diisikan ke dalam database
Route::post('/product', [ProductController::class, 'store']);

// menampilkan detail data produk berdasarkan id tertentu
Route::get('/product/{id}', [ProductController::class, 'show']);

// menampilkan halaman form untuk merubah data
Route::get('/product/{id}/edit', [ProductController::class, 'edit']);

// menyimpan data yang sudah dirubah pada form edit data
Route::put('/product/{id}', [ProductController::class, 'update']);

// menghapus data berdasarkan id yang kita pilih
Route::delete('/product/{id}', [ProductController::class, 'destroy']);

// membuat routing menggunakan resource controller untuk kategori produk
// (dibuat pada B.3)
Route::resource('/category', CategoryController::class);


Route::get('/category', [CategoryController::class, 'index']);



// // Menampilkan data produk
// Route::get('/product', [ProductController::class, 'index']);

// // Menampilkan halaman tambah produk
// Route::get('/product/addProduct', [ProductController::class, 'addProduct']);

// Route::get('/product', function () {
//     $produk = [
//         ['id' => 1, 'nama' => 'Iphone 18 Pro Max', 'stok' => 5, 'harga' => 60000000],
//         ['id' => 2, 'nama' => 'Iphone 17 Pro Max', 'stok' => 10, 'harga' => 40000000],
//         ['id' => 3, 'nama' => 'Iphone 16 Pro Max', 'stok' => 15, 'harga' => 25000000],
//         ['id' => 4, 'nama' => 'Iphone 13 Pro Max', 'stok' => 20, 'harga' => 20000000],
//         ['id' => 5, 'nama' => 'Iphone 12 Pro Max', 'stok' => 20, 'harga' => 10000000],
//     ];

//     return view('pages.product', ['produk' => $produk]);
// });


// Route::get('/latihan', function () {
//     $matakuliah = ['Pemrograman Web', 'Basis Data', 'UI/UX'];
//     return view('pages.latihan', ['matakuliah' => $matakuliah]);
// });


// Route::get('/sapa', [\App\Http\Controllers\SapaController::class, 'index']);


// // Route::get('/product', [\App\Http\Controllers\ProductController::class, 'getProduct']);

// // Route::get('/product', [\App\Http\Controllers\ProductController::class, 'index']);


// use App\Http\Controllers\MahasiswaController;

// Route::get('/mahasiswa', [MahasiswaController::class, 'index']);