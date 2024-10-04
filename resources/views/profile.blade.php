<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile User</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #a7c957; /* Mengubah background halaman menjadi hijau */
        }
        .profile-container {
            text-align: center;
            background-color: #f4d35e; /* Mengubah background menjadi kuning */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 1000px; /* Mengubah lebar kotak kontainer */
        }
        .profile-info {
            width: 300px;
            margin: 0 auto;
        }
        .info-item {
            background-color: lightgreen;
            margin: 10px 0;
            padding: 10px;
            border-radius: 10px;
            font-weight: 600;
            text-align: center;
            color: #333;
            font-size: 16px;
        }
        h1 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }
        .profile-pic {
            margin-bottom: 20px;
            border-radius: 50%;
            border: 4px solid #333;
        }
        .form-upload {
            margin-top: 20px;
        }
        .info-item-inline {
            background-color: lightgreen;
            padding: 10px;
            border-radius: 10px;
            font-weight: 600;
            text-align: center;
            color: #333;
            font-size: 16px;
            display: flex; /* Membuat elemen dalam baris */
            justify-content: center; /* Meletakkan label dan nilai secara berjauhan */
            align-items: center; /* Menyejajarkan vertikal label dan nilai */
        }
    </style>
</head>
<body>
<div class="profile-container">
    <h1>Profile User</h1>
    <div class="profile-info">
        <!-- Tampilkan gambar profil dari public/assets/img -->
        <img src="{{ asset('assets/img/gladiia.jpg') }}" alt="Profile Picture" class="profile-pic" width="150" height="150">
        <!-- Info user -->
        <div class="info-item">Nama: {{ $nama }}</div>
        <div class="info-item">NPM: {{ $npm }}</div>
        <!-- Info user dengan kelas inline -->
        <div class="info-item-inline">
            <span>Kelas:</span>
            <span>{{ $nama_kelas ?? 'Kelas tidak ditemukan' }}</span>
        </div>
    </div>
</div>
</body>
</html>
