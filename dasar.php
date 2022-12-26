<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <label for="">Nama</label>
        <input type="text" name="ininama" id="">
        <input type="submit" value="Submitt" name="inputni">
    </form>
    <?php
    if (isset($_POST['inputni'])) {
        $nama = $_POST['ininama'];
        echo "<p>Nama Anda : <b>$nama</b>";
    }
    ?>
</body>

</html>