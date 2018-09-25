<?php	include_once('thislevel.php');
// уровень вложенности этого уровня, initialize, итемы левого сайдбара, header, pagination, begin_row() и begin_partrow() для каждой страницы в этой папке
?>
			
		<h1>HTML</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Писать по-русски. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Писать по-русски. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		  <?php // echo $curr_light_key.' > '; echo $curr_light_val.'<br>';  ?>
		  	<br>
		  <pre><?php //print_r($sidebar);?></pre>
		  <pre><?php //print_r($myarr);?></pre>	  
		  <pre><?php // print_r($_SERVER); ?></pre>
          		  
<?php	end_part_ads_row();

	begin_row();
	begin_partrow();  ?>
		<hr>
        <h2>Examples in Every Chapter</h2>
        <p>This HTML tutorial contains hundreds of HTML examples.</p>
        <p>With our online HTML editor, you can edit the HTML, and click on a button to 
        view the result.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Писать по-русски. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

<?php	end_part_ads_row();

	include(VIEW.'pagination.php');
	include(VIEW.'footer.html');?>