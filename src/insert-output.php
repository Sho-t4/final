
<?php require 'db-connect.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>情報登録完了</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            text-align: center;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #3498db;
        }

        p {
            margin: 20px 0;
            color: #555;
        }

        hr {
            margin: 20px 0;
            border: 1px solid #ddd;
        }

        a {
            text-decoration: none;
            color: #3498db;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        $pdo = new PDO($connect, USER, PASS);
        $sql = $pdo->prepare('INSERT INTO product VALUES (null, ?, ?)');

        if ($sql->execute([$_POST['name'], $_POST['Authorname']])) {
            echo '<h2>登録成功</h2>';
            echo '<p>情報を登録しました。</p>';
        } else {
            echo '<h2>エラー</h2>';
            echo '<p>登録に失敗しました。</p>';
        }
        ?>
        <hr>
        <a href="index.html">戻る</a>
    </div>
</body>
</html>
