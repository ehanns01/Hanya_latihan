<?php
require_once 'navbar.php';
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
          <h3>Login</h3>
          </div>
        <div class="card-body">
            <!-- awal form -->
             <form>
               <div class="mb-3">
                <label for="username" class="form-label">Username:</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Username Akun | Contoh: ujang123" required>
            </div>
            
            <div class="mb-3">
                <label for="password" class="form-label">Password Akun:</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password Akun | Contoh: password123" required>
            </div>
            
            <!-- Tombol Aksi -->
            <a href="dahsbord.php" class="btn btn-warning btn-sm">Login</a>
               
         <br>belum punya akun? <a href="" class="btn btn-danger btn-sm">Register</a>
            
            
             </form>
          
            <!-- akhir form -->
       </div>
      <!-- akhir card -->
      
    </div>
    <div class="col-2">
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