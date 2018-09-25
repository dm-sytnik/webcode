<?php	
// уровень вложенности этого уровня, initialize, итемы левого сайдбара, header, begin_row() и begin_partrow() для каждой страницы в этой папке
	include_once('thislevel.php'); 
		
		begin_rowcard ();
		
		card ($title='W3.CSS', $body='W3.CSS - легковесный css-фрэймворк от команды W3Schools.com', $footer='', $href='w3css/');
		card ($title='Bootstrap 4', $body='Bootstrap 4 - современный фрэймворк на основе css, html и javascript от разработчиков Twitter', $footer='', $href='bootstrap4/');
		
		end_rowcard ();		
	
	end_part_ads_row();
	
	include(VIEW.'footer.html');
?>