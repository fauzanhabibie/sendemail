<!-- resources/views/ga/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Karyawan</title>
</head>
<body>
    <h1>Data Karyawan</h1>
    @if ($karyawan && count($karyawan) > 0)
    <table border="1">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <!-- Tambahkan kolom-kolom lain yang diperlukan -->
            </tr>
        </thead>
        <tbody>
            @foreach($karyawan as $key => $data)
            <tr>
                <td>{{ $data['nama'] }}</td>
                <td>{{ $data['alamat'] }}</td>
                <!-- Tambahkan kolom-kolom lain yang diperlukan -->
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>Tidak ada data karyawan.</p>
    @endif
</body>
</html>
