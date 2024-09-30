<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\UserModel;

class UserController extends Controller
{
    public function create()
    {
        // Mengirim data kelas ke view create_user
        return view('create_user', [
            'kelas' => Kelas::all(),
        ]);
    }

    public function store(Request $request)
    {
        // Validasi data input menggunakan validate()
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'npm' => 'required|string|max:255',
            'kelas_id' => 'required|exists:kelas,id',
        ]);
        $data = [
            'nama' => $request->input('nama'),
            'kelas' => $request->input('kelas'),
            'npm' => $request->input('npm'),
        ];
    
        // Simpan data user ke database
        $user = UserModel::create($validatedData);
    
        // Muat relasi kelas untuk user
        $user->load('kelas');
    
        // Kirim data ke view profile
        return view('profile', [
            'nama' => $user->nama,
            'npm' => $user->npm,
            'nama_kelas' => $user->kelas->nama_kelas ?? 'Kelas tidak ditemukan',
        ]);
    }
    public function uploadProfilePicture(Request $request)
    {
        // Validasi file gambar
        $request->validate([
            'profile_picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Maksimal 2MB
        ]);

        // Ambil file dari form
        $file = $request->file('profile_picture');

        // Tentukan nama file yang unik untuk disimpan di public/assets/img
        $fileName = time().'_'.$file->getClientOriginalName();

        // Pindahkan file ke folder public/assets/img
        $file->move(public_path('assets/img'), $fileName);

        // Buat path file yang akan digunakan di view
        $profile_picture_path = 'assets/img/' . $fileName;

        // Redirect ke halaman profil dengan path gambar yang baru dan data user
        return back()->with([
            'profile_picture' => $profile_picture_path,
            'nama' => $request->input('nama'),
            'npm' => $request->input('npm'),
            'nama_kelas' => $request->input('kelas_id') // Sesuaikan dengan data yang sudah disimpan
        ]);
    }

    public function showProfile($id)
    {
        // Ambil data user dari database
        $user = User::findOrFail($id);

        return view('profile', [
            'nama' => $user->nama,
            'npm' => $user->npm,
            'nama_kelas' => $user->kelas->nama_kelas ?? 'Kelas tidak ditemukan', // Ambil nama kelas dari relasi
            'profile_picture' => session('profile_picture', 'public/assets/img/gladiia.png'), // Ambil profile picture dari session
        ]);
    }
}