<?php

echo 'tutorials'.'<br>';

if (isset($_GET['query'])){
    $a = $_GET['query'];
    echo $a;
}
echo '<br>';
if (isset($_POST['query'])){
    $a = $_POST['query'];
    echo $a;
}
echo '<br>';
//var_dump($_POST);