<?php

// уровень вложенности этого уровня, initialize, итемы левого сайдбара, header и begin_row для каждой страницы в этой папке

// в файлах, лежащих на этом же уровне, будет включена эта переменная
$level = '../../';

require_once($level.'includes/initialize.php');

// итемы левого сайдбара в этой папке
		$sidebar = array('index.php' => 'PHP ООП',
				'##' => 'PHP Введение',
				'###' => 'PHP Основы',
				 );
		
		include(VIEW.'header.php');
		begin_row();
		begin_partrow();

?>