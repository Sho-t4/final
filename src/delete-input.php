<?php require 'db-connect.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>削除</title>
</head>
<body>
<table>
        <thead>
            <tr>
                <th>ID</th>
                <th>書籍名</th>
                <th>著者名</th>
                <th>更新</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $pdo = new PDO($connect, USER, PASS);
            $sql = $pdo->query('select * from product');
            foreach ($sql as $row) {
                echo '<tr>';
                echo '<td>',$row['id'],'</td>';
                echo '<td>',$row['name'], '</td>';
                echo '<td>',$row['Author name'],'</td>';
                echo '<td><a href="delete-output.php?id=',$row['id'],'">削除</a></td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</body>
</html>