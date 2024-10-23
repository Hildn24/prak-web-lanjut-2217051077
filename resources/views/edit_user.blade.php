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
        background-color: #a7c957;
        /* Mengubah background halaman menjadi hijau */
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

    input,
    select {
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
        <form action="{{ route('user.update', $user['id']) }}}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama" value="{{ old('nama', $user->nama) }}">
            </div>

            <div class="mb-3">
                <label for="npm" class="form-label">NPM</label>
                <input type="text" class="form-control" name="npm" id="npm" value="{{ old('nama', $user->npm) }}">
            </div>

            <div class="form-group">
                <label for="kelas_id">Kelas</label>
                <select class="form-select" name="kelas_id" id="kelas_id" required>
                    @foreach ($kelas as $kelasItem)
                    <option value="{{ $kelasItem->id }}" {{ $kelasItem->id == $user->kelas_id ? 'selected' : '' }}>
                        {{ $kelasItem->nama_kelas }}
                    </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="foto">Foto</label>
                <input type="file" name="foto" class="form-control">
                @if($user->foto)
                <img src="{{ asset($user->foto) }}" alt="User Photo" width="100" class="mt-2">
                @endif
            </div>
            <br>

            <button type="submit">Submit</button>
        </form>
    </div>
    @endsection
</body>

</html>