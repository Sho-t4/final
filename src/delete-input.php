<?php require 'db-connect.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>書籍削除</title>
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

        td a {
            display: inline-block;
            padding: 8px 15px;
            background-color: #e74c3c;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        td a:hover {
            background-color: #c0392b;
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
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $pdo = new PDO($connect, USER, PASS);
            $sql = $pdo->query('SELECT * FROM product');
            foreach ($sql as $row) {
                echo '<tr>';
                echo '<td>', $row['id'], '</td>';
                echo '<td>', $row['name'], '</td>';
                echo '<td>', $row['Author name'], '</td>';
                echo '<td><a href="delete-output.php?id=', $row['id'], '">削除</a></td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</body>
</html>
