<?php
// уровень вложенности этого уровня, initialize, итемы левого сайдбара, header, begin_row и begin_partrow для каждой страницы в этой папке

// в файлах, лежащих на этом же уровне, будет включена эта переменная
$level = '';

require_once($level.'includes/initialize.php');

// итемы левого сайдбара в этой папке
		$sidebar = array(CONTENT.'html/' => 'HTML',
				CONTENT.'css/' => 'CSS',
				'#/' => 'Javascript',
				'##/' => 'Jquery',
				CONTENT.'w3css/' => 'W3.CSS',
				CONTENT.'bootstrap4/' => 'Bootstrap 4',
				CONTENT.'php-proc/' => 'PHP Procedural',
				CONTENT.'php-oop/' => 'PHP OOP',
				'####/' => 'SQL',
				CONTENT.'howto/' => 'Как сделать',
				'#####/' => 'Ещё' );
		
		include(VIEW.'header.php');
		begin_row();
		begin_partrow();
?>