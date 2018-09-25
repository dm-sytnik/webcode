<?php	
// уровень вложенности этого уровня, initialize, итемы левого сайдбара, header, begin_row() и begin_partrow() для каждой страницы в этой папке
	include_once('thislevel.php'); 
		
		begin_rowcard ();
		
		card ($title='PHP. Процедурный код.', $body='PHP - серверный язык программирования. Процедурный код', $footer='', $href='php-proc/');
		card ($title='PHP. ООП', $body='PHP - серверный язык программирования. Объектно-ориентированное программирование', $footer='', $href='php-oop/');
		
		end_rowcard ();		
	
	end_part_ads_row();
	
	include(VIEW.'footer.html');
?>