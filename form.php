<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zuandrew RicHi J Form</title>
    <style type="text/css">
        body {
            background-color: sandybrown;
        }

        table {
            border: 0;
            max-width: 500px;
            margin: 0 auto;
        }

        button {
            background-color: greenyellow;
            border-radius: 8px;
        }

        button:hover {
            background-color: red;
            color: white;
        }

        h1 {
            text-align: center;
        }

        h2 {
            color: red;
            text-decoration: underline;
        }

        textarea {
            display: block;
        }

        input,
        select,
        textarea {
            background-color: papayawhip;
        }
    </style>
</head>

<body>

    <form action="output_form.php" method="post">
        <table cellspacing="15">
            <tr>
                <td>
                    <h2>DATA DIRI</h2>
                </td>
            </tr>
            <tr>
                <td>NAMA LENGKAP</td>
                <td>:</td>
                <td colspan="3"><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>TEMPAT LAHIR</td>
                <td>:</td>
                <td colspan="3"><input type="text" name="tmptlhr"></td>
            </tr>
            <tr>
                <td>TANGGAL LAHIR</td>
                <td>:</td>
                <td colspan="3"><input type="date" name="tgllhr"></td>
            </tr>
            <tr>
                <td>JENIS KELAMIN</td>
                <td>:</td>
                <td colspan="3"><input type="radio" name="jk" value="LAKI - LAKI"> LAKI - LAKI <br>
                    <input type="radio" name="jk" value="PEREMPUAN"> PEREMPUAN
                </td>
            </tr>

            <tr>
                <td>HOBI</td>
                <td>:</td>
                <td colspan="3"><select name="hobi">
                        <option value="MEMBACA">MEMBACA</option>
                        <option value="OLAHRAGA">OLAHRAGA</option>
                        <option value="GAMING">GAMING</option>
                        <option value="TRAVELING">TRAVELING</option>
                        <option value="NONTON">NONTON</option>
                        <option value="LAINNYA">LAINNYA</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>NOMOR TELEPHONE</td>
                <td>:</td>
                <td colspan="3"><input type="number" name="telp"></td>
            </tr>
            <tr>
                <td>ALAMAT LENGKAP</td>
                <td>:</td>
                <td colspan="3"><textarea name="alamat" id="" cols="20" rows="6"></textarea></td>
            </tr>
            <tr>
                <td><button type="submit" name="input">DAFTAR</button>
                    <button type="reset" name="reset">RESET</button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>