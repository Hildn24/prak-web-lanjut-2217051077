<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <a href="{{ route('user.create') }}" class="btn btn-primary mb-3">Tambah Pengguna Baru</a>
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
        display: flex;
        justify-content: center;
        align-items: center;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th,
    td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: lightgreen;
        color: #333;
        font-weight: 600;
    }

    tr:hover {
        background-color: #f1f1f1;
    }

    .table-container {
        margin-top: 20px;
    }

    .btn {
        padding: 8px 16px;
        font-size: 14px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        text-decoration: none;
        font-weight: 600;
        color: white;
        margin-right: 10px;
        transition: background-color 0.3s ease;
    }

    .btn-primary {
        background-color: #007bff;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    .btn-warning {
        background-color: #ffc107;
    }

    .btn-warning:hover {
        background-color: #e0a800;
    }

    .btn-danger {
        background-color: #dc3545;
    }

    .btn-danger:hover {
        background-color: #c82333;
    }

    .add-user-button {
        margin-bottom: 20px;
    }

    button {
        font-size: 14px;
        font-weight: 600;
    }
    </style>
</head>

<body>
    <div class="profile-container">
        <a href="{{ route('user.create') }}" class="btn btn-primary add-user-button">Tambah Pengguna Baru</a>
        <h1>User List</h1>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>NPM</th>
                        <th>Kelas</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->nama }}</td>
                        <td>{{ $user->npm }}</td>
                        <td>{{ $user->kelas->nama_kelas ?? 'Kelas tidak ditemukan' }}</td>
                        <td>
                            @if($user->foto)
                            <img src="{{ asset($user->foto ?? 'uploads/img/default.jpg') }}" alt="Foto Pengguna"
                                width="100">
                            @else
                            <span>Foto tidak tersedia</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('users.show', $user->id) }}" class="btn btn-warning">Detail</a>
                            <a href="{{ route('user.edit', $user['id']) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST"
                                style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus pengguna ini?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
