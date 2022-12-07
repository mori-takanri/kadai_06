<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP基礎</title>
</head>
<body>
  <?php
  $nickname = $_POST['nickname'];
  $email = $_POST['email'];
  $goiken = $_POST['goiken'];

  $nickname = htmlspecialchars($nickname);
  $email = htmlspecialchars($email);
  $goiken = htmlspecialchars($goiken);
  
  if($nickname=='')
  {
    print 'ニックネームが入力されていません。';
    
  }
  else
  {
    print'ようこそ';
    print $nickname;
    print '様';
    print '<br>';
  }

  if($email=='')
  {
    print 'メールアドレスが入力されていません。';
  }
  else{
    print'メールアドレス:';
    print $email;
    print '<br>';
  }

  if($goiken=='')
  {
    print 'ご意見が入力されていません。';
  }
  else
  {
    print'ご意見【';
    print $goiken;
    print '】<br>';
  }

  if($nickname==''||$email==''||$goiken=='')
  {
    print'<form>';
    print'<input type = "button" onclick="history.back()" value="戻る">';
    print'</form>';

  }

  else
  {

    print '<form method="post" action="thanks.php">';
    print '<input name="nickname"type="hidden"value="'.$nickname.'">';
    print '<input name="email"type="hidden"value="'.$email.'">';
    print '<input name="goiken"type="hidden"value="'.$goiken.'">';
    print '<input tipe="button" onclick="history.back()" value= "戻る" style= "width: 30px";>';
    print '<input type="submit"value="OK"style= "width: 40px";>';
    print'</form>';
  }
  ?>
  

</body>
</html>