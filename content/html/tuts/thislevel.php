<?php

// в файлах, лежащих на этом же уровне, будет включена эта переменная
$level = '../../../'; // ../ == папка, уровень выше на 1


require_once($level.'includes/all.php');

// итемы левого сайдбара в этой папке
$sidebar = array(                            								
	'index.php'    => 'Tuts-index',
    'procss.php'   => 'CSS-Procss',					 
	'procss2.php'  => 'Pro-CSS-2',
    '#'            => 'Готовится-1',
    '##'           => 'Готовится-2',
);

// работает для пагинации
$numeric_sidebar = array(                            								
	'index.php',
    'procss.php',					 
	'procss2.php',
);

