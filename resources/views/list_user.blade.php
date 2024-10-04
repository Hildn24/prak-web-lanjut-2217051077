<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
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

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
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

        button {
            background-color: #333;
            color: #fff;
            padding: 8px 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            font-weight: 600;
            margin-right: 10px;
        }

        button:hover {
            background-color: #555;
        }
    </style>
</head>

<body>
    <div class="profile-container">
        <h1>User List</h1>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>NPM</th>
                        <th>Kelas</th>
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
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
