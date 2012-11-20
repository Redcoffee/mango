<?php
    error_reporting(E_ALL ^ E_NOTICE);
    ini_set('display_errors', '1');

    //$name = $_GET['name'];
    $name = $g->db->escape($_POST['name']);
    $query = "select tel from redcoffee.test where name = '".$name."'";
    $result = $g->db->fetch_row($query);

    echo json_encode($result);
?>