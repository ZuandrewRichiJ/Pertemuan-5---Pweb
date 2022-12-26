<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="form.php">Back</a>
    <?php
    echo "<h2>Ouput Data Diri</h2>";
    if (isset($_POST['input'])) {
        $namap = $_POST['nama'];
        echo "<p>Nama Anda : <b>$namap</b>";
    }
    if (isset($_POST['input'])) {
        $tmptlahir = $_POST['tmptlhr'];
        echo "<p>Tempat Lahir Anda : <b>$tmptlahir</b>";
    }
    if (isset($_POST['input'])) {
        $tgllahir = $_POST['tgllhr'];
        echo "<p>Tanggal Anda : <b>$tgllahir</b>";
    }
    if (isset($_POST['input'])) {
        $kelamin = $_POST['jk'];
        echo "<p>Jenis Kelamin : <b>$kelamin</b>";
    }

    if (isset($_POST['input'])) {
        $hobi = $_POST['hobi'];
        echo "<p>Agama Anda : <b>$hobi</b>";
    }
    if (isset($_POST['input'])) {
        $nohp = $_POST['telp'];
        echo "<p>Nomor Telephone Anda : <b>$nohp</b>";
    }
    if (isset($_POST['input'])) {
        $almt = $_POST['alamat'];
        echo "<p>Alamat Anda : <b>$almt</b>";
    }
    ?>
</body>

</html>