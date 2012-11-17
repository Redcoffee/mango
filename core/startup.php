<?php
## 기본 상수
define('DIR_ROOT', realpath(__DIR__.'/..'));
define('DIR_CORE', DIR_ROOT.'/core');
define('DIR_CONFIG', DIR_ROOT.'/config');
define('DIR_LIB', DIR_ROOT.'/lib');
##


## autoload
require DIR_CORE.'/autoload.php';
##


## 기본 설정
if ( file_exists(DIR_CONFIG.'/const_dev.php') ) {
    require DIR_CONFIG.'/const_dev.php';
}
require DIR_CONFIG.'/const.php';
require DIR_CONFIG.'/init.php';
if ( file_exists(DIR_CONFIG.'/init_dev.php') ) {
    require DIR_CONFIG.'/init_dev.php';
}
##


## 최상위부터 하위까지 디렉토리 변경하며 설정파일 로드
$cwd_list = explode('/', substr(getcwd(), strlen(DIR_ROOT) + 1));
chdir(DIR_ROOT);
foreach ( $cwd_list as $cwd ) {
    chdir("./{$cwd}");
    if ( file_exists('./init.php') ) {
        require './init.php';
    }
    if ( file_exists('./init_dev.php') ) {
        require './init_dev.php';
    }
}
##
?>