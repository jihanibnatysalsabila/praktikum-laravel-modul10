
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Produk</title>
</head>
<body>
    <h1>Tambah Produk</h1>

    <form>
        <label>Nama Produk:</label>
        <input type="text" name="nama">
        
        <br><br>

        <label>Harga:</label>
        <input type="number" name="harga">

        <br><br>

        <button type="button">Simpan</button>
    </form>

    <br>

    <a href="{{ url('/produk') }}">Kembali</a>
</body>
</html>
