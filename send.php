<?php
			if (isset($_POST["email"])){
			if (isset($_POST["name"])) {$name = $_POST["name"];}
			if (isset($_POST["email"])) {$email = $_POST["email"];}
			if (isset($_POST["body"])) {$body = $_POST["body"];}

			if($name=="" or $email=="" or $body==""){ // Проверяем на заполненность всех полей.
				echo "Заполните все поля";
			}else{
				$ip=$_SERVER["REMOTE_ADDR"]; // Вычисляем ip пользователя
				$brose=$_SERVER["HTTP_USER_AGENT"]; // Вычисляем браузер пользователя
			$to = "brodoshmot@yandex.ru"; // Ваш email адрес
			$subject = "Сообщение c сайта"; // тема письма 
			$headers .= "Content-Type: text/html; charset=UTF-8";
			$headers .= "From: Создание сайтов Trust Code"; // Отправитель письма
			$message = "
			Имя: $name<br>
			E-mail: $email<br>
			Текст: $body<br><br>

			--------------------------------------------------------<br>
			---------------IP отправителя: $ip<br>
			---------------Браузер отправителя: $brose<br>
			"; 
			$send = mail($to, $subject, $message, $headers);


			 if ($send == "true")
			 {
			 echo "Ваше сообщение отправлено. Мы ответим вам в ближайшее время.";
			 }
			 else
			 {
			 echo "Не удалось отправить, попробуйте снова!";
			 }
			}
			}
			?> 