<?php
$current_dir = getcwd();

$target_path = realpath($current_dir.$_SERVER['PATH_INFO']);
if ( strpos($target_path, $current_dir) !== 0 ) exit;
chdir(dirname($target_path));

require $current_dir.'/../core/startup.php';
require $target_path;
?>