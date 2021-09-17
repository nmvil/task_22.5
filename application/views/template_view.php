<!DOCTYPE html>
<html style="font-family: Helvetica" lang="ru">
<head>
	<meta charset="utf-8">
	<title>Главная. Наумов Илья</title>
	<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</head>
<body>
	<!-- шапка сайта: заданы цвет фона, закруглённые границы, отступ текста от границы, цвет текста -->
	<header style="background-color: #0080BC; border-radius: 10px; padding: 5px; color: white">
		<h1>Личный сайт</h1>
		<h2>Главная страница</h2>
		<table style="width: 50%; text-align: center;">
			<tr>
				<td><a href="#">Главная</a></td>
				<td><a href="pages/about.html">Обо мне</a></td>
				<td><a href="pages/contacts.html">Контакты</a></td>
			</tr>
		</table>
	</header>


<?php include $content_view; ?>

	<footer style="background-color: #0080BC; border-radius: 10px; padding: 5px; color: white; clear: both">
		&copy; Naumov Ilya, 2020 <br>
		<a href="http://www.instagram.com/naumovilya99" style="padding: 10px"><img src="images/instagram.svg" width="30" alt="Instagram"></a>
		<a href="https://t.me/naumovilya" style="padding: 10px"><img src="images/telegram.svg" width="30" alt="Telegram"></a>
		<a href="http://www.vk.com/naumovilya99" style="padding: 10px"><img src="images/vk.svg" width="30" alt="VK"></a> 
		<a href="tel:+79163600631" style="padding: 10px"><img src="images/phone.svg" width="30" alt="+79163600631"></a> 
		<a href="mailto:naumovilya99@mail.ru" style="padding: 10px"><img src="images/email.svg" width="30" alt="naumovilya99@mail.ru"></a> 
	</footer>
</body>
</html>