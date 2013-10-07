<?php
$MessagesFile = 'messages.txt';
$handle = fopen($MessagesFile, 'r') or die('Cannot open file:  ' . $MessagesFile);
$message = fread($handle, filesize($MessagesFile));
$message = $message . $_GET['value'] . "\n";
fclose($handle);
$handle2 = fopen($MessagesFile, 'w') or die('Cannot open file:  ' . $MessagesFile);
fwrite($handle2, $message);
fclose($handle2);
?>