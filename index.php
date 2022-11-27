<!DOCTYPE html>
<html>
<head>

    <title>Pendaftaran Santri Baru | Ma'had 'Aly Mufid</title>
</head>

<body>
    <header>
        <h3>Pendaftaran Santri Baru</h3>
        <h1>Ma'had 'Aly Mufid</h1>
    </header>
    <h4>Menu</h4>
    <nav>
    
        <div class="text-end">
        <button type="button" class="btn btn-outline-light me-2"><a href="form-daftar.php">Daftar Baru</a></button>
        <button type="button" class="btn btn-outline-light me-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><a href="list-siswa.php">Pendaftar</a></font></font></button>
</div>
        <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
<?php endif; ?>
    </nav>

    </body>
</html>
