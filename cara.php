<!DOCTYPE html>
<html>
<head>
	<title>Hasil Perhitungan</title>
</head>
<body>
	<?php
		$jarak = $_POST['jarak'];
		$kecepatan = $_POST['kecepatan'];
        $beban = $_POST['beban'];

		$waktu_tempuh = ($jarak / $kecepatan) * 60; 
		$konsumsi_bensin = ($jarak * ($beban / 1000));
		$harga_bensin = ($konsumsi_bensin * 10000);
	
            echo "<h2>"; 
            echo "<h2>Hasil Perhitungan</h2>";
            echo "<br>";
            echo "Kecepatan :", round ($kecepatan), "km/jam", "<br>";
            echo "Jarak yang ditempuh :", round ($jarak), "km", "<br>";
            echo "Beban Kendaraan :", round ($beban), "kg", "<br>";
            echo "Waktu yang ditempuh :", round ($waktu_tempuh), "menit", "<br>";
            echo "Konsumsi BBM :", round ($konsumsi_bensin), "liter", "<br>";
            echo "Harga Bensin :","Rp.", round ($harga_bensin),  "<br>";
    ?>        
</body>
</html>