<?php require 'db-connect.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                echo '<form action="update-output.php" method="post">';
                echo '<input type="hidden" name="id" value="' , $row['id'] , '">';
                echo '<td>' , $row['id'] , '</td>';
                echo '<td><input type="text" name="name" value="' , $row['name'] , '"></td>';
                echo '<td><input type="text" name="author_name" value="' , $row['Author name'] , '"></td>';
                echo '<td><input type="submit" value="更新"></td>';
                echo '</form>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</body>
</html>
