<?php

 echo date('d')."<br>"; // apresenta o dia;
 echo date('D')."<br>"; // dia no formato textual em 3 digitos;
 echo date('l')."<br>"; // apresenta o dia em texto completo;
 echo date('m')."<br>"; // apresenta o mes;
 echo date('M')."<br>"; // mes no formato textual em 3 digitos;
 echo date('y')."<br>"; // apresenta o ano com 2 digitos;
 echo date('Y')."<br><br>"; // apresenta o ano com 4 digitos;
 
 echo date('h'); // hora em 12h;
 echo date('H'); // hora em 24h;
 echo date('d/m/y h:m:s A'); // dia,mes,ano_hora,minuto_e_segundo PM;
 
 echo "<hr>";
 echo "<br>";

 //Datas
 date_default_timezone_set('America/Sao_Paulo');
 echo date('d/m/Y H:i:s');

 echo "<hr>";

 $date = date('Y-m-d'); //Para tipo de dados do tipo Date;
 $datetime = date('Y-m-d H:i:s'); //Para tipo de dados Datetime;

 echo "<hr>";

 //Time
 $time = time();
 echo date('d/m/Y', $time);

 //MKTIME
 $data_pagamento = mktime(15, 30, 00, 02, 15, 2023);
 echo date('d/m - h:i', $data_pagamento);

 //STRTOTIME
 $data = '2010-06-24 13:50:00';
 $data = strtotime($data);
 echo date('d/m/Y', $data);
 

 ?>