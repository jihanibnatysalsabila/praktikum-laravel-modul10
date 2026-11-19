
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Produk</title>
</head>
<body>
    <h1>Daftar Produk</h1>

    <a href="{{ url('/produk/create') }}">
        Tambah Data
    </a>

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Nama Produk</th>
            <th>Harga</th>
        </tr>

        @foreach ($produk as $item)
        <tr>
            <td>{{ $item['id'] }}</td>
            <td>{{ $item['nama'] }}</td>
            <td>Rp {{ number_format($item['harga'], 0, ',', '.') }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
