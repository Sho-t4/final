<?php require 'db-connect.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
        $pdo=new PDO($connect,USER,PASS);
        $sql=$pdo->prepare('insert into product values(null,?,?)');
        $sql->execute([$_POST['name'],$_POST['Authorname']]);
        echo '情報を登録しました';
        echo '<hr>';
    ?>
</body>
</html>