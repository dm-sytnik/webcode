<?php

$level = '../'; 

require_once($level.'includes/all.php');

// итемы левого сайдбара в этой папке
$sidebar = array(                            								
	'index.php'        => 'Content-Главная',
    'content_1.php'   => 'Content-1',					 
    'accord.php'   => 'Accord',
    '##'   => 'Content-3', // видимо, нельзя использовать одинаковые #, т.к. это id-ключи
				 );

// работает для пагинации
$numeric_sidebar = array(                            								
	'index.php',
    'content_1.php',
	'accord.php',
);

