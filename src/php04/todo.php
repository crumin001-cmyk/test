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
  <style>
  .delete-btn {
    background: none;
    border: none;
    color: red;
    font-size: 18px;
    cursor: pointer;
    margin-left: 8px;
  }

  .delete-btn:hover {
    opacity: 0.7;
  }
</style>

</head>
<body>

<h1>ToDoアプリ</h1>
<h4>完了したら×を押してください</h4>
<form method="post">
  <input type="text" name="todo" placeholder="やることを入力">
  <button type="submit">追加</button>
</form>
<ul>
   <?php foreach ($todos as $index => $todo): ?>
    <li>
      <?php echo htmlspecialchars($todo, ENT_QUOTES); ?>

      <form method="post" style="display:inline">
        <button type="submit" name="delete" value="<?php echo $index; ?>" class="delete-btn">
          ×
        </button>
      </form>
    </li>
  <?php endforeach; ?>
  </ul>
  

</body>
</html>
