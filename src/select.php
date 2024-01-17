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

        tr:hover {
            background-color: #f5f5f5;
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
            </tr>
        </thead>
        <tbody>
            <?php
            $pdo = new PDO($connect, USER, PASS);
            $sql = $pdo->query('SELECT * FROM product');
            
            foreach ($sql as $row) {
                echo '<tr>';
                echo '<td>', htmlspecialchars($row['id']), '</td>';
                echo '<td>', htmlspecialchars($row['name']), '</td>';
                echo '<td>', htmlspecialchars($row['Author name']), '</td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</body>
</html>
