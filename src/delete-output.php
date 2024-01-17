<?php require 'db-connect.php';?>
<?php
    $pdo = new PDO($connect, USER, PASS);
    $sql=$pdo->prepare('delete from product where id=?');
    if ($sql->execute([$_GET['id']])){
        echo '削除に成功しました';
    } else {
        echo '削除に失敗しました';
    }
?>