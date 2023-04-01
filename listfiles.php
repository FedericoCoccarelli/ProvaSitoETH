<?php
$dir = '/usr/local/www/apache24/data';
$files = scandir($dir);

print_r($files);
?>