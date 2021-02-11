<?php
        $name = $_POST["name"];
        $tel = $_POST["tel"];
		$email = $_POST["email"];
		$textarea = $_POST["textarea"];
		
		$from = 'info@loftco.ru';
        $to = 'info@loftco.ru';
        $sub = "Форма обратной связи Контакты";
        $message = "Имя: $name\nТелефон: $tel\nEmail: $email\nСообщение: $textarea";
        mail ($to,$sub,$message,"Content-type:text/plain; charset = UTF-8\r\nFrom:$from");			            
?>