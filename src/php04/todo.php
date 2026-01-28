<?php
session_start();

// 初期化
if (!isset($_SESSION['todos'])) {
  $_SESSION['todos'] = [];
}

// 追加処理
if (!empty($_POST['todo']) && count($_SESSION['todos']) < 10) {
  $_SESSION['todos'][] = $_POST['todo'];
}

// 削除処理
if (isset($_POST['delete'])) {
  $delete_index = $_POST['delete'];
  unset($_SESSION['todos'][$delete_index]);
  $_SESSION['todos'] = array_values($_SESSION['todos']); // index詰め直し
}

$todos = $_SESSION['todos'];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ToDoアプリ</title>
</head>
<body>

<h1>ToDoアプリ</h1>

<form method="post">
  <input type="text" name="todo" placeholder="やることを入力">
  <button type="submit">追加</button>
</form>
<ul>
  <?php foreach ($todos as $todo): ?>
    <li><?php echo htmlspecialchars($todo, ENT_QUOTES); ?></li>
  <?php endforeach; ?>
  </ul>
  

</body>
</html>
