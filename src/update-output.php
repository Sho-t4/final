<?php require 'db-connect.php';?>
<?php
    $pdo = new PDO($connect, USER, PASS);
    $sql = $pdo->prepare('UPDATE product SET name=?, `Author name`=? WHERE id=?');
    
    if (empty($_POST['name'])) {
        echo '書籍名を入力してください';
    } else if (empty($_POST['author_name'])) {
        echo '著者名を入力してください';
    } else {
        $name = htmlspecialchars($_POST['name']);
        $author_name = $_POST['author_name'];
        $id = $_POST['id'];

        if ($sql->execute([$name, $author_name, $id])) {
            echo '更新に成功しました。';
        } else {
            echo '更新に失敗しました';
        }
    }
?>
