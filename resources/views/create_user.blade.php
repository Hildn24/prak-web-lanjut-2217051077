<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
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
        .container {
            text-align: center;
            background-color: #f4d35e;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 500px;
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        label {
            font-weight: 600;
            margin-bottom: 5px;
            color: #333;
            font-size: 14px;
        }
        input, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 2px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
        }
        select option[disabled] {
            color: #999;
        }
        button {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            font-weight: 600;
        }
        button:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
@extends('layouts.app')

@section('content')
<div class="container">
<h1>Create User</h1>
    <form action="/user/store" method="POST">
        @csrf
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>

        <label for="npm">NPM:</label>
        <input type="text" id="npm" name="npm" required>

        <label for="kelas_id">Kelas:</label>
        <select id="kelas_id" name="kelas_id" required>
            <!-- Menambahkan opsi default untuk tidak memilih kelas A -->
            <option value="" disabled selected>Pilih Kelas</option>
            @foreach($kelas as $kelasItem)
                <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
            @endforeach
        </select>

        <button type="submit">Submit</button>
    </form>
</div>
@endsection
</body>
</html>
