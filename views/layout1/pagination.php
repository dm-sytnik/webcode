<?php
	
		$key = array_search($curr_light_key, $myarr);
			
?>

	<!-- Pagination -->
    <nav class="w3-container w3-padding-16">
	<!-- сочетание w3-container и w3-padding-16 дают паддинг 16 по кругу. -->
      <div class="w3-bar">
		<?php 	if ($key > 0) { // "предыдущее" выводится только если ключ не на нулевой позиции в массиве
					$prev = $myarr[$key - 1];
					echo "<a href=".$prev." class=\"w3-button\">&laquo; Предыдущее</a>";
				}
				//echo $key;
				//echo count($myarr);
				if (($key+1)!=(count($myarr))) { // до тех пор пока число ключ+1 не сравняется с полным числом элементов в массиве, выводим "следующее"
					$next = $myarr[$key + 1];					
					echo "<a href=".$next." class=\"w3-button\">Следующее &raquo;</a>";
				}
		?>	
      </div>
    </nav>