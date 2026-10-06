<?php
include 'koneksi.php';
include 'navbar.php';

$sql = "SELECT users.*, siswa.nama, siswa.kelas
        FROM users 
        INNER JOIN siswa ON users.id = siswa.user_id 
        WHERE users.role = 'siswa'
        ORDER BY users.id DESC"
  ;
$hasil = mysqli_query($koneksi, $sql);

if (mysqli_num_rows($hasil) >0) {
  while ($baris = mysqli_fetch_assoc($hasil)) {
    $data[] = $baris;
  }
}else {
  echo "tidak ada data";
}
?>

<!-- awal content -->
<div class="container">
<!-- awal kolom -->
<div class="container">
  <div class="row align-items-start">
    <div class="col-2">
      <!--One of three columns  1 -->
    </div>
    <div class="col-12">
       <br>
      <!-- awal card -->
       <div class="card">
         <div class="card-header">
          <h3>Tabel</h3>
          </div>
        <div class="card-body">
            <!-- awal Tabel -->
             <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Username</th>
      <th scope="col">Role</th>
      <th scope="col">Nama</th>
      <th scope="col">kelas</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $no = 1;
   for($i = 0; $i < count($data); $i++){
    ?>
    <tr>
      <th scope="row"><?php echo $no++ ?></th>
      <td><?= $data [$i]['username'] ?></td>
      <td><?= $data [$i]['role'] ?></td>
      <td><?= $data [$i]['nama'] ?></td>
      <td><?= $data [$i]['kelas'] ?></td>
      <td>
        <a href="form_edit_user.php?id=<?= $data[$i]['id'] ?>&role=<?= $data[$i]['role'] ?>" class="btn btn-warning btn-sm">Edit</a>
        <a href="aksi_hapus.php?id=<?= $data[$i]['id'] ?>&role=<?= $data[$i]['role'] ?>" onclick="return confirm ('Apakah Anda yakin ingin menghapus user ini?')" class="btn btn-danger btn-sm">Hapus</a>
      </td>
    </tr>
      
    <?php } ?>
  </tbody>
             </table>
            <!-- akhir tabel -->
         </div>
       </div>
      <!-- akhir card -->
      
    </div>
    <div class="col-3">
      <!--One of three columns 3 -->
    </div>
  </div>
</div>
  <!-- akhir kolom -->
  
</div>
<!-- akhir content -->

<?php
require_once 'footer.php';
?>