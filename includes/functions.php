<?php

/*  Функции разметки макета*/

// Если в будущем не надо будет ничего передавать этой и подобными функциями, пиши просто function endrow_w_adsRH($level='') { }
function end_part_ads_row() {
	include(VIEW.'sectionendpart.html');
	include(BASE_URI.'ads/adsRH.html');
	include(VIEW.'sectionend.html');
}

function end_part_row() {
	include(VIEW.'sectionendpart.html');
	include(VIEW.'sectionend.html');
}

function end_row() {	
	include(VIEW.'sectionend.html');
}

function begin_row() {
	include(VIEW.'sectionhead.html');
}

function begin_partrow() {
	include(VIEW.'sectionbeginpart.html');
}

function begin_rowcard () {
	include(VIEW.'cardrowbegin.html');
}

function end_rowcard () {
	include(VIEW.'cardrowend.html');
}

function card ($title='', $body='', $footer='', $href='#') { // пример $href='html/'
		
	
	include(VIEW.'cardheader.html');	
	echo "<h2>$title</h2>";
	include(VIEW.'cardcenter.html');
	
	
	$output = "<a href=".CONTENT."$href>";
	$output.= "<br>";
	
	$output.= "<p>";	
	$output.= "$body";
	$output.= "</p>";
	
	$output.= "<br>";
	$output.= "</a>";
	
	echo $output;
	
	include(VIEW.'cardfooter.html');
}



?>