<?php	
// уровень вложенности этого уровня, initialize, итемы левого сайдбара, header, begin_row() и begin_partrow() для каждой страницы в этой папке
	include_once('thislevel.php'); 
		
		begin_rowcard ();
		
		card ($title='HTML', $body='HTML - гипертекстовый язык разметки', $footer='', $href='html/');
		card ($title='CSS', $body='CSS - каскадные таблицы стилей', $footer='', $href='css/');
		
		end_rowcard ();
		
	/*	
		begin_rowcard ();
		
		card ($title='HTML', $body='HTML - гипертекстовый язык разметки.', $footer='', $href='html/');
		card ($title='CSS', $body='CSS - каскадные таблицы стилей.', $footer='', $href='css/');
		
		end_rowcard ();
	*/	
	end_part_ads_row();
	
	include(VIEW.'footer.html');
?>