<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While Looping</title>
</head>
<body>
    <h1>While Looping</h1>
    <h3>While looping digunakan untuk mengulang suatu perintah selama kondisi bernilai true</h3>
    <p>Contoh:</p>
    <code style="background: #f2f2f2;">
        $i = 0;<br>
        while ($i < 10) {<br>
            echo "Hasil Perulangan ke $i <br>";<br>
            $i++;<br>
        }
    </code>
    <p>Penjelasan:</p>
    <p>variabel i diinisialisasi dengan nilai 0, kemudian dicek apakah nilai i lebih kecil dari 10, jika true, maka perulangan akan berlanjut, jika false, maka perulangan akan berhenti, kemudian variabel i akan ditambah 1 setiap perulangan</p>
    <p>Hasil:</p>
    <?php
    $i = 0;
    while ($i < 10) {
        echo "Hasil Perulangan ke $i <br>";
        $i++;
    }
    ?>
    <p>Contoh:</p>
    <code style="background: #f2f2f2;">
        $i = 0;<br>
        while ($i < 10) {<br>
            echo "Hasil Perulangan ke $i <br>";<br>
            if ($i == 5) {<br>
                echo "Perulangan berhenti di angka 5 <br>";<br>
                break;<br>
            }<br>
            $i++;<br>
        }
    </code>
    <p>Penjelasan:</p>
    <p>variabel i diinisialisasi dengan nilai 0, kemudian dicek apakah nilai i lebih kecil dari 10, jika true, maka perulangan akan berlanjut, jika false, maka perulangan akan berhenti, kemudian variabel i akan ditambah 1 setiap perulangan dan akan berhenti pada index ke 5</p>
    <p>Hasil:</p>
    <?php
    $i = 0;
    while ($i < 10) {
        echo "Hasil Perulangan ke <b>$i</b> <br>";
        if ($i == 5) {
            echo "Perulangan berhenti di angka 5 <br>";
            break;
        }
        $i++;
    }
    ?>
    <p>Looping bisa digunakan untuk menampilkan banyak data dari database dengan syntax yang tidak terlalu panjang</p>

</body>
</html>