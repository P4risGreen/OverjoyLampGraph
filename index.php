<!DOCTYPE html>
<html lang="ja">
<?php
$page_num = 0;
$db_handle = null;
$statement = null;
$res = null;
$page = 1;
?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Overjoy</title>
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
</head>
<body>
  <?php
  if(isset($_GET['playernotfound']) && $_GET['playernotfound'] == 1){
    echo '<div class="alert alert-danger" role="alert">指定したIDのプレイヤーが存在しません。</div>';
  }
  ?>
  <h1>Overjoy</h1>
  <form action="index.php" method="post">
  <input type="text" class="form-control" name="id" placeholder="LR2ID">
  <button class="btn btn-success" name="move" value="insane" onclick="location.href='#'">グラフをみる</button>
</form>
<?php
if(isset($_POST['move'])){
  header( "Location: ./overjoy.php?id=".$_POST['id']);
}

?>
</body>
</html>
