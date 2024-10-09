<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="Widht=device-width, initial-scale=1.0">
    <title>Latihan</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Kalkulator Sederhana</title>
</head>
<body>
    <h2>Kalkulator Sederhana</h2>
    <form method="post">
        <label>Angka 1:</label>
        <input type="number" name="num1" step="any" required>
        <br><br>
        <label>Angka 2:</label>
        <input type="number" name="num2" step="any" required>
        <br><br>
        <label>Operasi:</label><br>
        <input type="submit" name="operation" value="+" required> 
        <br>
        <input type="submit" name="operation" value="-"> 
        <br>
        <input type="submit" name="operation" value="x"> 
        <br>
        <input type="submit" name="operation" value= "/">
        <br><br>
        <input type="submit" name="operational" value="=">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        $result = 0;

        switch ($operation) {
            case 'tambah':
                $result = $num1 + $num2;
                break;
            case 'kurang':
                $result = $num1 - $num2;
                break;
            case 'kali':
                $result = $num1 * $num2;
                break;
            case 'bagi':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = "Tidak dapat membagi dengan nol!";
                }
                break;
        }

        echo "<h3>Hasil: $result</h3>";
    }
    ?>
</body>
</html>