<?php
spl_autoload_register(function ($class) {
    $dir_list = array(
        '',
        'common/',
    );

    // 네임스페이스로 분리
    $tmp_list = explode('\\', $class);
    // 배열 마지막은 파일명
    list($file_name) = array_slice($tmp_list, -1, 1);
    if ( count($tmp_list) > 1 ) {
        // 마지막을 제외한 앞부분은 네임스페이스 경로
        $tmp_list = array_slice($tmp_list, 0, -1);
        $ns_dir = implode('/', $tmp_list).'/';
    } else {
        $ns_dir = '';
    }

    foreach ( $dir_list as $dir ) {
        $file_path1 = DIR_LIB."/{$dir}{$ns_dir}{$file_name}.php";
        $file_path2 = DIR_LIB."/{$dir}{$file_name}.php";

        if ( is_file($file_path1) ) {
            require $file_path1;
            return;
        } else if ( is_file($file_path2) ) {
            require $file_path2;
            return;
        }
    }
});
?>