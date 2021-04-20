<?php
//a script to remove whitespace
$nstr = php_strip_whitespace('nash.php');
//editing file
$nkay = fopen("nash2.php", "a+");
fwrite($nkay, $nstr);
fclose($nkay);

echo 'done ';
?>