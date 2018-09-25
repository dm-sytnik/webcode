<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Webcode - Справочник веб-кода, Примеры кода, перевод W3Schools</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="Keywords" content="HTML,CSS,JavaScript,SQL,PHP,jQuery,Bootstrap,W3CSS,Веб разработка,учебники,программирование,обучение,уроки,рецепты кода,примеры кода,исходный код,цвета,демо,советы. Перевод W3Schools.">
  <meta name="Description" content="Легкие учебники по веб-строительству с большим количеством примеров кода HTML, CSS, JavaScript, SQL, PHP. Перевод W3Schools.">
  <link rel="icon" href="/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="/css/w3.css">  
<style>
a:hover,a:active{color:green;/*#4CAF50*/}
.left-tab{margin-left:220px;}
div.w3-code span{color:#000;}

</style>
</head>

<body>

  <!--navbar-->
  <!-- мозилла (в отличие от гуглхрома) добавляет к содержимому итемов навбара 0.5px -->
  <nav class="w3-bar w3-top w3-dark-gray" > 

  <!-- button open left sidebar-->
  <button class="w3-bar-item w3-button w3-light-gray  w3-hide-large" onclick="openLeftSidebar()">&#9776;</button>  
  
  <a href="/index.php" class="w3-bar-item w3-button w3-light-green" 
    style="font-weight:bold;" >Webcode</a>	
<?php 
	// класс подсветки активного поля, будет использоваться для всех навбаров и сайдбаров
    $active_fon = " w3-blue-gray";
	// класс деактивности
	$deactive = " w3-disabled";
	
	// строим навбар в массиве
	$nav = array(BASE_URL.'html-css.php' => 'HTML/CSS',
				'##' => 'JS/Jquery',
				BASE_URL.'cssframeworks.php' => 'W3.CSS/Bootstrap 4',
				BASE_URL.'php.php' => 'PHP Proc/OOP',
				'###' => 'SQL',
				BASE_URL.'howto.php' => 'Как Сделать',
				'####' => 'Ещё');
	
	// выводим в html
	foreach($nav as $link => $navitem) { 
	$output = "<a href=\"{$link}\" class=\"w3-bar-item w3-button w3-hide-small ";
		// подсвечиваем активную ссылку		
		$find_str = $_SERVER["PHP_SELF"]; // искомая строка, она короткая, т.к. содержит только относительный путь до файла
		$contain_str = $link;	// строка, в которой идёт поиск (содержащая строка), она длинная, т.к. за счёт BASE_URL. содержит весь абсолютный путь
					
		$pos = strpos($contain_str, $find_str);
		if ($pos !== false) {
			$output.= $active_fon;	
		}
		// деактивируем неактивную ссылку
		if (preg_match("/#/", $link)) {
			$output.= $deactive;	
		}
	$output.= "\">$navitem</a>\n";
	echo $output;
	}	
?>	  
    <!-- button open right menu --> 
    <button class="w3-button w3-gray  w3-right  w3-hide-medium w3-hide-large" onclick="openRightMenu()">&#9776;</button>
  </nav> <!-- /navbar -->

  <!-- right menu -->
  
  <nav id="rightMenu" class="w3-sidebar w3-bar-block w3-card w3-dark-gray w3-animate-right" style="display:none; right:0;  top:38px; bottom:0px; height:auto;">
    <!-- button close right menu --> 
    <button onclick="closeRightMenu()" class="w3-bar-item w3-button w3-large w3-dark-gray">Close &times;</button>

<?php     
	// строим правое меню в массиве
	$nav = array('html-css.php' => 'HTML/CSS',
				//'#' => 'JS/Jquery',
				'cssframeworks.php' => 'W3.CSS/Bootstrap 4',				
				'php.php' => 'PHP Proc/OOP',
				//'sql.php' => 'SQL',
				'howto.php' => 'Как Сделать',
				//'else.php' => 'Ещё'
				);
				
	// выводим в html
	foreach($nav as $link => $navitem) { 
	$output = "<a href=\"".BASE_URL."{$link}\" class=\"w3-bar-item w3-button ";
		// подсвечиваем активную ссылку
		if($_SERVER["REQUEST_URI"] == "/$link"){
			$output.= $active_fon;
		}	
	$output.= "\">$navitem</a>\n";
	echo $output;
	}				
?>		
	<p class="w3-bar-item"></p>
  </nav> <!-- /right menu -->

<!--left sidebar-->

<nav id="mySidebar" class="w3-sidebar w3-collapse w3-bar-block w3-card w3-light-gray w3-animate-left " style="width:220px; top:38.5px; bottom:0px; height:auto;">
  <!-- w3-sidebar содержит height:100%, что смещает весь сайдбар вниз, когда будет объявлен top-38.5px; применяются bottom:0px и height:auto, отменяющий правило height:100%; аналогичный способ применён в right menu.  -->

  <!-- button close left sidebar--> 
  <button class="w3-bar-item w3-button w3-hide-large"
  onclick="closeLeftSidebar()">Close &times;</button> 
  
<?php
		
	// выводим левый сайдбар в html, в каждом файле в начале создан массив sidebar (файл thislevel на каждом уровне)
	foreach($sidebar as $link => $navitem) { 
	$output = "<a href=\"{$link}\" class=\"w3-bar-item w3-button ";
		// подсвечиваем активную ссылку		
		$contain_str = $_SERVER["PHP_SELF"]; // $_SERVER["PHP_SELF"] здесь длинное, потому что содержит весь путь с папками, кроме корня
		$find_str = $link;	// искомая строка, $link в каждом цикле в каждом файле содержит лишь короткое название, служащее относительным путём
		$pos = strpos($contain_str, $find_str);
		if ($pos !== false) {
			$output.= $active_fon;
				
			$curr_light_key = $link; // текущий ключ - подсвеченный ключ
			$curr_light_val = $navitem; // текущий итем - подсвеченное значение
	
		}	
				
		// деактивируем неактивную ссылку
		if (preg_match("/#/", $link)) {
			$output.= $deactive;	
		}
		$output.= "\">$navitem</a>\n";
		echo $output;
			
		$myarr[] = $link; // создаем отдельно числовой массив на основе имеющихся ключей
	
	}
	
?>     
  <p class="w3-bar-item"></p>
</nav>

<!-- main page -->
<main class="w3-main w3-container left-tab" style="margin-top:72px;">
