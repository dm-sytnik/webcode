<?php
// уровень вложенности этого уровня, initialize, итемы левого сайдбара, header, pagination, begin_row() и begin_partrow() для каждой страницы в этой папке

// в файлах, лежащих на этом же уровне, будет включена эта переменная
$level = '../../';

require_once($level.'includes/initialize.php');

// итемы левого сайдбара в этой папке
		$sidebar = array('index.php' => 'HTML Главная',
				'1_intro.php' => 'HTML Введение',
				'2_editors.php' => 'HTML Редакторы',
				'basics.php' => 'HTML Основы',
				 );
		
		include(VIEW.'header.php');		
		 
		include(VIEW.'pagination.php');
		
		begin_row();
		begin_partrow();
?>