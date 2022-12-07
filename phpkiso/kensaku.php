<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<?php
$code = $_POST['code'];

$dsn = 'mysql:dbname=phpkiso;host=localhost';
$spl = 'SELECT*FROM anketo WHERE code=?';
$stmt = $dbh->prepare($spl);
$data[]=$code;
$stmt->execute($date);

?>

<form method="post" action="kensaku.php">
  ご意見コードを入力してください。</br>
<input name="code"type="text"style="width:100px"></br>
</br>
<input type="submit"value="送信">

</form>
</br>
<a href="menu.html">メニューに戻る</a>
  
</body>
</html>