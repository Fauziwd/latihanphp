<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran Santri Baru | Ma'had 'Aly Mufid</title>
</head>

<body>
    <header>
        <h3>Formulir Pendaftaran Santri Baru</h3>
    </header>

    <form action="proses-pendaftaran.php" method="POST">

        <fieldset>

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="kamu nenye?" />
        </p>
        <p>
            <label for="ttl">TTL: </label>
            <input type="text" name="ttl" placeholder="kamu nenye?" />
        </p>
        
        <p>
            <label for="asal"> Asal: </label>
            <input type="text" name="asal" placeholder="kamu nenye?" />
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>

        </fieldset>

    </form>

    </body>
</html>