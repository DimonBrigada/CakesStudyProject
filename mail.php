<?php

	$login = $_POST['Name'];
	$mail = $_POST['E-mail'];
	$phone = $_POST['Phone'];

	$login = htmlspecialchars($login);
	$mail = htmlspecialchars($mail);
	$phone = htmlspecialchars($phone);

	$login = urldecode($login);
	$mail = urldecode($mail);
	$phone = urldecode($phone);

	$login = trim($login);
	$mail = trim($mail);
	$phone = trim($phone);

	if (mail("shatalov.mitia2017@yandex.ru",
	"Письмо",
	"Логин:" .$login."\n".
	"майл:".$mail."\n".
	"тлф:".$phone,
	"From: no-reply@mydomain.ru \r\n")
	)
	else{
		echo('Ошиька');
	}
?>