<!doctype html>
        <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Bootstrap demo</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        </head>
        <body>

        <!-- start navbar -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
               <!-- <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="Tabel.php">Tabel</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="Form.php">Form</a>
                </li>
              <li class="nav-item">
                <a class="nav-link" href="Form2.php">Form2</a>
                </li> -->
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    latihan
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="Tabel.php">Tabel</a></li>
                    <li><a class="dropdown-item" href="Form.php">Form</a></li>
                    <li><a class="dropdown-item" href="Form2.php">Form 2</a></li>
                    <li><a class="dropdown-item" href="Form3.php">Form 3</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here </a></li>
                </ul>
                </li>
                <li><a class="dropdown-item" href="daftar_user.php">daftar user</a></li>
                <li><a class="dropdown-item" href="daftar_siswa.php">daftar siswa</a></li>
                <li><a class="dropdown-item" href="daftar_guru.php">daftar guru</a></li>
                <li><a class="dropdown-item" href="formall.php">formall</a></li>
                <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </div>
        </div>
        </nav>
        <!-- end navbar -->