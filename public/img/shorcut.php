<?php
$target = '../laravel/storage/app/public'; 
$shortcut = 'storage'; 
symlink($target, $shortcut); 
echo readlink($shortcut);
?>