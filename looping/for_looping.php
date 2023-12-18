<?php

for ($i = 0; $i < 10; $i++) {
    echo "Hello World! <br>";
}
echo "================================================ <br>";
$x = 10;
for ($i = 0; $i < $x; $i++) {
    echo "Ini perulangan ke-$i <br>";
}
echo "[i] adalah variabel yang menyimpan nilai perulangan <br>";
echo "================================================ <br>";
$y = 10;
for ($i = 0; $i < $y; $i++) {
    echo "Ini perulangan ke-$i <br>";
    if ($i == 5) {
        echo "Perulangan berhenti di angka 5 <br>";
        break;
    }
}
echo "================================================ <br>";
echo "<h1>Penjelasan Singkat:</h1>";
echo "<p>Perulangan for digunakan untuk mengulang suatu perintah sebanyak jumlah yang ditentukan</p>";
echo "<p>Perulangan for memiliki 3 bagian, yaitu:</p>";
echo "<ol>";
echo "<li>Bagian pertama adalah inisialisasi variabel yang akan digunakan sebagai variabel perulangan</li>";
echo "<li>Bagian kedua adalah kondisi perulangan, jika kondisi bernilai true, maka perulangan akan berlanjut, jika false, maka perulangan akan berhenti</li>";
echo "<li>Bagian ketiga adalah increment atau decrement variabel perulangan</li>";
echo "</ol>";
echo "<p>Contoh:</p>";
echo "<p>for ($i = 0; $i < 10; $i++) {</p>";
echo "<p>echo 'Hello World! <br>';</p>";
echo "<p>}</p>";
echo "<p>Penjelasan:</p>";
echo "<p>variabel i diinisialisasi dengan nilai 0, kemudian dicek apakah nilai i lebih kecil dari 10, jika true, maka perulangan akan berlanjut, jika false, maka perulangan akan berhenti, kemudian variabel i akan ditambah 1 setiap perulangan</p>";
echo "<p>Hasil:</p>";
for ($i = 0; $i < 10; $i++) {
    echo "Hello World! index ke $i <br>";
}

?>