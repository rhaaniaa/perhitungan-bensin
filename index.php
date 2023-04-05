<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perjalanan</title>
</head>
<body>
<h2>Perjalanan</h2>
    <form method="post" action="cara.php">

        <label for="jarak">Jarak :</label> 
        <input type="number" name="jarak" min="0" required><br><br>

        <label for="kecepatan">Kecepatan :</label> 
        <input type="number" name="kecepatan" min="0" required><br><br>
        
        <label for="beban">Beban :</label> 
        <input type="number" name="beban" min="0" required><br><br>
        <input type="submit" name="submit" value="Hitung Total">
    </form>
</body>
</html>