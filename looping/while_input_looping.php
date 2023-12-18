<?php
$jumlah = 0;
$nama = "";
$jumlah_loop = 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While Looping Dengan Input</title>
</head>

<body>
    <h1>While Looping Dengan Data Dari User</h1>
    <form action="" method="post">
        <label for="jumlah">Masukkan jumlah perulangan:</label>
        <input type="number" name="jumlah" id="jumlah">
        <button type="submit" name="submit">Submit</button>
    </form>
    <?php
    echo "<br>";
    if (isset($_POST['submit'])) {
        $jumlah = $_POST['jumlah'];
        $i = 0;
        while ($i < $jumlah) {
            echo "Hasil Perulangan ke <b>$i</b> <br>";
            $i++;
        }
    }
    echo "<br>";
    echo "Jumlah perulangan: <b>$jumlah</b> <br>";
    echo "================================================";
    echo "<br>";
    echo "<h1>Contoh Lain:</h1>";
    ?>

    <form action="" method="post" style="display: flex; flex-direction: column; width: 300px;">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama">
        <label for="jumlah_loop">Jumlah Perulangan:</label>
        <input type="number" name="jumlah_loop" id="jumlah_loop">
        <button type="submit" name="submit2">Submit</button>
    </form>
    <?php
    echo "<br>";
    if (isset($_POST['submit2'])) {
        $nama = $_POST['nama'];
        $jumlah_loop = $_POST['jumlah_loop'];
        $i = 0;
        while ($i < $jumlah_loop) {
            echo "Nama: <b>$nama</b> adalah index ke <b>$i</b> <br>";
            $i++;
        }
    }
    echo "<br>";
    echo "Nama: <b>$nama</b> <br>";
    echo "Jumlah perulangan: <b>$jumlah_loop</b> <br>";
    echo "================================================";
    echo "<br>";
    ?>
    <h4>Source Code:</h4>
    <code>
    if (isset($_POST['submit2'])) {
        $nama = $_POST['nama'];
        $jumlah_loop = $_POST['jumlah_loop'];
        $i = 0;
        while ($i < $jumlah_loop) {
            echo "Nama: <b>$nama</b> adalah index ke <b>$i</b> <br>";
            $i++;
        }
    }
    </code>


</body>

</html>