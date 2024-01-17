<?php require 'db-connect.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>一覧</title>
</head>
<body>
    <?php
    $pdo=new PDO($connect,USER,PASS);
    $sql=$pdo->query('select * from product');
    foreach ($sql as $row) {
        echo '<tr>';
        echo '<td>',$row['id'],'</td>';
        echo '<td>',$row['name'], '</td>';
        echo '<td>',$row['Author name'],'</td>';
        echo '</tr>';
    }
    ?>
</body>
</html>
