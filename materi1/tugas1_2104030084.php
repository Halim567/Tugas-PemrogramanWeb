<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1</title>
</head>
<body>
    <?php 
        $nama = "Halim Anja Kalasha";
        $nim = 2104030084;
        $i = 1;
        $j = 1;

        echo "<h1>Tugas 1 pertemuan 7</h1>";
        echo "<h1>Tugas 1</h1>";

        echo "<h2>Nama      : ",$nama,"</h2>";
        echo "<h2>NIM       : ",$nim,"</h2>";
        echo "<table border = 1 cellpadding = 10>";
        while($i <= 3){
            echo "<tr>";
            while($j <= 3){
                echo "<td> baris ke-",$i," kolom ke-",$j,"</td>";
                $j++;
            }
            echo "</tr>";
            $j = 1;
            $i++;
        }
        echo "</table>";

        $tipe = 1;
        echo "<h1>Tugas 2</h2>";
        while($tipe <= 3){
            if($tipe == 1){
                echo "Kamu mendapatkan mobil Avanza seharga Rp.120.000.000 </br>";
            }
            elseif($tipe == 2){
                echo "Kamu mendapatkan mobil Nissan Xtrail seharga Rp.99.000.000 </br>";
            }
            elseif($tipe == 3){
                echo "Kamu mendapatkan mobil Pajero Sport seharga Rp.450.000.000 </br>";
            }
            $tipe++;
        }
    ?>
</body>
</html>