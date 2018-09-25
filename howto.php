<?php	
// уровень вложенности этого уровня, initialize, итемы левого сайдбара, header, begin_row() и begin_partrow() для каждой страницы в этой папке
	include_once('thislevel.php'); 
		
		begin_rowcard ();
		
		card ($title='Как сделать', $body='Примеры вёрстки и программирования', $footer='', $href='howto/');
		
		
		end_rowcard ();
	
	end_part_ads_row();
	
	include(VIEW.'footer.html');
?>