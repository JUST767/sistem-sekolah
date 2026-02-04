<?php
namespace App\Controllers;
 
class StudentController
{
 
    public function index()
{
        echo '<h1>Daftar siswa</h1>';
        echo '<p>Menampilkan daftar siswa</p>';
}
 
    public function create()
{
        echo '<h1>Tambah siswa</h1>';
        echo '<p>Menampilkan form tambah siswa</p>';
}
 
public function show(string $id)
{
    echo 'Detail Siswa';
    echo "<p>Menampilkan detail siswa ID: {$id}</p>";
}
 
}