<?php

require_once 'koneksi.php';

  if ($_GET['aksi'] === 'editadmin') {
  

    //menangkap atau mengambil data dari inputan user dari form edit user
    $id = $_POST['id'];
    $username = $_POST['username'];
    $pass = $_POST['password'];
    $role = $_POST['role'];

    //cek apakah user mau mengganti passwordnya atau tidak
    if ($pass !== "") {
        //kode apabila user akan mengganti password
        $password_hash = password_hash($pass, PASSWORD_DEFAULT);

        //query untuk update tabel user, dimana user mau mengganti password nya
        $sql = "UPDATE users SET username='$username', password='$password_hash', role='$role' WHERE id = '$id'";
        $result = mysqli_query($koneksi, $sql);
    } else {
        //query untuk update tabel user, dimana user tidak mau mengganti password nya
        $sql = "UPDATE users SET username='$username', role='$role' WHERE id = '$id'";
        $result = mysqli_query($koneksi, $sql);
    }

    if ($result) {
        echo "<script>alert('Data Berhasil Diubah'); window.location.href='daftar_user.php';</script>";
    } else {
        echo "<script>alert('Data Tidak Berhasil Diubah'); window.location.href='daftar_user.php';</script>";
    }
    
  } elseif ($_GET['aksi'] === 'editguru') {
  

    //menangkap atau mengambil data dari inputan user dari form edit user
    $id = $_POST['id'];
    $user_id = $_POST['user_id'];
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $jk = $_POST['jenis_kelamin'];
    $username = $_POST['username'];
    $pass = $_POST['password'];
    $role = $_POST['role'];

    //cek apakah user mau mengganti passwordnya atau tidak
    if ($pass !== "") {
        //kode apabila user akan mengganti password
        $password_hash = password_hash($pass, PASSWORD_DEFAULT);

        //query untuk update tabel user, dimana user mau mengganti password nya
        $sql = "UPDATE users SET username='$username', password='$password_hash', role='$role' WHERE id = '$user_id'";
        $result = mysqli_query($koneksi, $sql);
    } else {
        //query untuk update tabel user, dimana user tidak mau mengganti password nya
        $sql = "UPDATE users SET username='$username', role='$role' WHERE id = '$user_id'";
        $result = mysqli_query($koneksi, $sql);
    }

    //query untuk mengupdate tabel siswa
    $sql = "UPDATE guru SET nip='$nip', nama='$nama', jenis_kelamin='$jk' WHERE id='$id'";

    $hasil = mysqli_query($koneksi, $sql);

    if ($result && $hasil) {
        echo "<script>alert('Data Berhasil Diubah'); window.location.href='daftar_user.php';</script>";
    } else {
        echo "<script>alert('Data Tidak Berhasil Diubah'); window.location.href='daftar_user.php';</script>";
    }
  } elseif ($_GET['aksi'] === 'editsiswa') {


   //menangkap atau mengambil data dari inputan user dari form edit user
    $id = $_POST['id'];
    $user_id = $_POST['user_id'];
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jk = $_POST['jenis_kelamin'];
    $username = $_POST['username'];
    $pass = $_POST['password'];
    $role = $_POST['role'];

    //cek apakah user mau mengganti passwordnya atau tidak
    if ($pass !== "") {
        //kode apabila user akan mengganti password
        $password_hash = password_hash($pass, PASSWORD_DEFAULT);

        //query untuk update tabel user, dimana user mau mengganti password nya
        $sql = "UPDATE users SET username='$username', password='$password_hash', role='$role' WHERE id = '$user_id'";
        $result = mysqli_query($koneksi, $sql);
    } else {
        //query untuk update tabel user, dimana user tidak mau mengganti password nya
        $sql = "UPDATE users SET username='$username', role='$role' WHERE id = '$user_id'";
        $result = mysqli_query($koneksi, $sql);
    }

    //query untuk mengupdate tabel siswa
    $sql = "UPDATE siswa SET nis='$nis', nama='$nama', kelas='$kelas', jenis_kelamin='$jk' WHERE id='$id'";

    $hasil = mysqli_query($koneksi, $sql);

    if ($result && $hasil) {
        echo "<script>alert('Data Berhasil Diubah'); window.location.href='daftar_user.php';</script>";
    } else {
        echo "<script>alert('Data Tidak Berhasil Diubah'); window.location.href='daftar_user.php';</script>";
    }
}