<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Hentai Premium</title>
<div class="dropdown">
<button class="dropbtn">Меню</button>
<div class="dropdown-content">
 
<a href="index.html">Галерея</a>
<a href="video.html">Видео</a>
<a href="support.html">Служба Поддержки</a>
 
</div>
</div>
</head>
<body>
<?php
if (isset($_POST['name'])) {$name = $_POST['name'];}
if (isset($_POST['email'])) {$email = $_POST['email'];}
if (isset($_POST['mess'])) {$mess = $_POST['mess'];}

$to = "hentaipremcom@gmail.com"; /*Укажите ваш адрес электоронной почты*/
$headers = "Content-type: text/plain; charset = windows-1251";
$subject = "Сообщение с вашего сайта";
$message = "Имя пославшего: $name \nЭлектронный адрес: $email \nСообщение: $mess";
$send = mail ($to, $subject, $message, $headers);
if ($send == 'true')
{
echo "<b>Спасибо за отправку вашего сообщения!<p>";
echo "<a href=index.html>Нажмите,</a> чтобы вернуться на главную страницу";
}
else 
{
echo "<p><b>Ошибка. Сообщение не отправлено!";
}
?>
</body>
</html>