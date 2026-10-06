<?php
require_once 'koneksi.php';

if (isset($_POST['tambah'])) {

  $username = $_POST['username'];
  $pass = $_POST['password'];
  $role = $_POST['role'];

  $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
  $jk = isset($_POST['jenis_kelamin']) ? $_POST['jenis_kelamin'] : '';

  $hasil = false;

  // INSERT KE USERS
  $sql_user = "INSERT INTO users (id, username, password, role, created_at)
               VALUES (null, '$username','$pass','$role', now())";

  $query_user = mysqli_query($koneksi, $sql_user) or die(mysqli_error($koneksi));

  if ($query_user) {

    $last_insert_id = mysqli_insert_id($koneksi);

    // ================= SISWA =================
    if ($role == 'siswa') {

      $nis = $_POST['nis'];
      $kelas = $_POST['kelas'];

      $sql = "INSERT INTO siswa (id, nis, nama, kelas, jenis_kelamin, user_id)
              VALUES (null, '$nis','$nama','$kelas','$jk','$last_insert_id')";

      $hasil = mysqli_query($koneksi, $sql);

    }

    // ================= GURU =================
    else if ($role == 'guru') {

      $nip = $_POST['nip'];

      $sql = "INSERT INTO guru (id, nip, nama, jenis_kelamin, user_id)
              VALUES (null, '$nip','$nama','$jk','$last_insert_id')";

      $hasil = mysqli_query($koneksi, $sql);

    }

    // ================= ADMIN =================
    else {
      $hasil = true;
    }
  }

  if ($hasil) {
    echo "<script>alert('Data berhasil ditambahkan');window.location='form2.php';</script>";
  } else {
    echo "<script>alert('Gagal menambahkan data');window.location='form2.php';</script>";
  }

} else {
  echo "<script>alert('Akses tidak diizinkan');window.location='form2.php';</script>";
}