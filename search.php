<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pencarian</title>
</head>
<body>
    <h1>Hasil Pencarian</h1>
    <p>
        <?php
            if (isset($_GET['query'])) {
                $query = $_GET['query'];
                echo "Hasil untuk: " . $query;
            }
        ?>
    </p>
    <a href="index.html">Kembali ke pencarian</a>
</body>
</html>
