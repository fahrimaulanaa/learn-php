<?php
//ini adalah komentar
/*ini juga komentar*/

//variabel untuk menyimpan data
$nama = "Fahri Maulana";
$umur = 18;
$tinggi = 175;


//variable untuk menyimpan data aritmatika
$angka1 = 10;
$angka2 = 5;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h2>H2 ini ditulis dengan <?php echo "Bahasa PHP";?></h2>
    <p>Paragraf ini ditulis dengan <?= "Bahasa PHP";?></p>

    <!-- penggabungan 2 variable -->
    <p>Nama saya adalah <b><?=$nama;?></b> Umur saya <b><?=$umur?></b> tahun dan tinggi saya <b><?=$tinggi?> cm</b></p>
    <p>Umur saya 5 tahun lagi adalah <b><?=$umur + 5?></b> tahun</p>
    <?php
    echo "================================================";
    ?>

    <!-- operasi aritmatika -->
    <h2>angka1 = <?=$angka1?> dan angka2 = <?=$angka2?></h2>
    <p>Hasil dari <?=$angka1?> + <?=$angka2?> adalah <b><?=$angka1 + $angka2?></b></p>
    <p>Hasil dari <?=$angka1?> - <?=$angka2?> adalah <b><?=$angka1 - $angka2?></b></p>
    <p>Hasil dari <?=$angka1?> * <?=$angka2?> adalah <b><?=$angka1 * $angka2?></b></p>
    <p>Hasil dari <?=$angka1?> / <?=$angka2?> adalah <b><?=$angka1 / $angka2?></b></p>
    <p>Hasil dari <?=$angka1?> % <?=$angka2?> adalah <b><?=$angka1 % $angka2?></b></p>
    <?php
    echo "================================================";
    ?>

    <!-- logika -->
    <?php
    $nilai = 80;
    $absen = 80;
    $nilai_akhir = ($nilai + $absen) / 2;
    $grade = "";

    if ($nilai_akhir >= 90) {
        $grade = "A";
    } elseif ($nilai_akhir >= 80) {
        $grade = "B";
    } elseif ($nilai_akhir >= 70) {
        $grade = "C";
    } elseif ($nilai_akhir >= 60) {
        $grade = "D";
    } else {
        $grade = "E";
    }
    ?>

    <h2>Nilai akhir saya adalah <?=$nilai_akhir?> dan grade saya adalah <?=$grade?></h2>    
</body>
</html>