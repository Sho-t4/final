<?php require 'db-connect.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>書籍一覧</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            text-align: center;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #3498db;
            color: #fff;
        }

        form {
            display: inline-block;
            margin: 0;
        }

        input[type="text"], input[type="submit"] {
            padding: 10px;
            margin: 5px;
        }

        input[type="submit"] {
            background-color: #3498db;
            color: #fff;
            cursor: pointer;
            border: none;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
        }
    </style>
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
            $sql = $pdo->query('SELECT * FROM product');
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
