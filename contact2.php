<?php
        $name2 = $_POST["name2"];
        $tel2 = $_POST["tel2"];
		
		$from = 'info@loftco.ru';
        $to = 'info@loftco.ru';
        $sub = "Форма обратной связи";
        $message = "Имя: $name2\nТелефон: $tel2";
        mail ($to,$sub,$message,"Content-type:text/plain; charset = UTF-8\r\nFrom:$from");			            
?>