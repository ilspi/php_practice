<?php
$date = date("d.m.Y");
$xml = simplexml_load_file('http://www.cbr.ru/scripts/XML_daily.asp');
$usd = (string)$xml->Valute[10]->Value;
$eur = (string)$xml->Valute[11]->Value;
?>

<?php
$a = 'Мои знания увеличились на';
$b = 100;
$c = '%'; 
?>

<?php
  $price = 30;

  if($price >= 15 && $price <= 20)
      $d = 'Это число находится между 15 и 20';
  else $d = 'Это число не находится между 15 и 20';
?>

