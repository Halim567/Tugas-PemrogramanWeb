<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2</title>
</head>
<body>
    <?php 
        echo "<h2>Nama  : Halim Anja Kalasha</h2>";
        echo "<h2>NIM   : 2104030084</h2>";
        echo "<table border = 1 cellpadding = 10>";
        $k = 0;
        $penjualan_ikan = [
            "No", "Gambar","Nama ikan", "Tipe air", "Ukuran", "Harga",
            "1.", "<img src = http://1.bp.blogspot.com/-sc__dH6dTcU/VaCI9YZBZqI/AAAAAAAABKo/DGVHLfDeank/s1600/ikan-Koi.jpg width = 50 height = 50>","Ikan koi", "Tawar", "30 cm", "100.000",
            "2.", "<img src = https://1.bp.blogspot.com/-nX636ofOW54/XmUMqsxDfJI/AAAAAAAAJ_Q/mLpuPEumA_k171vA-9qlSLvdA-AGtyNKACLcBGAsYHQ/s1600/ikan-patin-hias-albino.jpeg width = 50 height = 50>","Ikan Patin", "Tawar", "45 cm", "30.000",
            "3.", "<img src = https://tse3.mm.bing.net/th?id=OIP.HaFagnckNOdCMV3TSNTxAwHaHa&pid=Api&P=0&h=180 width = 50 height = 50>","Ikan Badut", "Asin", "5 cm", "75.000",
            "4.", "<img src = https://tse1.mm.bing.net/th?id=OIP.gLXxD9C_DjY0W2NpaLEwoAHaFn&pid=Api&P=0&h=180 width = 50 height =50>","Ikan Gabus", "Tawar", "50 cm", "50.000",
            "5.", "<img src = https://1.bp.blogspot.com/-xPUJXr_q218/WV7vU91lfpI/AAAAAAAAAKI/fQgio1hh9F0N_SiE1KIKURVPYKJcHA6BQCLcBGAs/s1600/ikan-pari.jpg width = 50 height = 50>","Ikan Pari", "Asin", "40 cm", "100.000"];
            for($i = 0;$i < 6;$i++){
                echo "<tr>";
                for($j = 0;$j < 6;$j++){
                        echo "<td>",$penjualan_ikan[$k],"</td>";
                        $k++;
                }
                echo "</tr>";
            }
        echo "</table>";
    ?>
</body>
</html>