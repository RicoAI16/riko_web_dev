<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8" />
    <meta name="データを表示する" content="web開発7回目" />
</head>
<body>
    <?php
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
        echo "<p>お名前は: $name</p>";
    } else {
        echo "<p>お名前が入力されていません。</p>";
    }
    ?>
</body>
</html>
