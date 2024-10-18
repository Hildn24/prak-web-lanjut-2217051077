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
            background-color: #a7c957; 
        }
        .profile-container {
            text-align: center;
            background-color: #f4d35e; 
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 1000px;
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
        <img src="{{ asset($user->foto ?? 'assets/img/default-foto.jpg') }}" alt="Profile Picture" class="profile-pic" width="150" height="150">
        <div class="info-item">Nama: {{ $user->nama }}</div>
        <div class="info-item">NPM: {{ $user->npm }}</div>
        <div class="info-item-inline">
            <span>Kelas:</span>
            <span>{{ $user->kelas->nama_kelas ?? 'Kelas tidak ditemukan' }}</span>
        </div>
    </div>
</div>
</body>
</html>