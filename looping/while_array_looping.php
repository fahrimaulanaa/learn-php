<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Looping</title>
</head>
<body>
    <h1>While Looping Data Dari Array</h1>
    
    <h3>Contoh code sederhana:</h3>
    <code
        style="background: #f2f2f2;">
        $data = array("Andi", "Budi", "Caca", "Deni", "Euis");<br>
        $i = 0;<br>
        while ($i < count($data)) {<br>
            echo "Nama: $data adalah index ke <b>$i</b> <br>";<br>
            $i++;<br>
        }
    </code>
    <p>Hasil:</p>
    <?php
    $data = array("Andi", "Budi", "Caca", "Deni", "Euis");
    $i = 0;
    while ($i < count($data)) {
        echo "Nama: $data[$i] adalah index ke <b>$i</b> <br>";
        $i++;
    }
    ?>
    <h3>Penjelasan Code diatas: <br></h3>
    <p>variabel data diisi dengan array yang berisi nama-nama</p>
    <p>variabel i diinisialisasi dengan nilai 0, kemudian dicek apakah nilai i lebih kecil dari jumlah data pada array data, jika true, maka perulangan akan berlanjut, jika false, maka perulangan akan berhenti, kemudian variabel i akan ditambah 1 setiap perulangan</p>
</body>
</html>