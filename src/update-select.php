<?php require 'db-connect.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $pdo=new PDO($connect,USER,PASS);
    $sql=$pdo->query('select * from product');
    foreach ($sql as $row) {
        $id=$row['id'];
        echo '<tr>';
        echo '<input type="radio" name="koushin">';
        echo '<form action="update-input.php" method="post">';
        echo '<td>',$id,'</td>';
        echo '<td>',$row['name'],'</td>';
        echo '<td>',$row['Author name'],'</td>';
        echo '</tr>';
        echo '<input type="button" value="更新">';
        echo '</form>';
    }
    ?>
</body>
</html>