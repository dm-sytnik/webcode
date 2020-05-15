<?php include_once('thislevel.php'); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<?php $title = "Personal Home Page";
          $description = "";
          include($level.LAYOUT.'head.php'); ?>
</head>

<body>
<?php include($level.LAYOUT.'body_page_begin.php'); ?>
    
			<h1>Home</h1>
            <p>                
				Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in dolor. Sed iaculis posuere diam ut cursus. <em>Morbi commodo sodales nisi id sodales. Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id bibendum diam velit et dui.</em> Proin massa magna, vulputate nec bibendum nec, posuere nec lacus. <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa, et feugiat ipsum consequat eu.</small>
			</p>        
    
    <div <?php if(function_exists('div_alert')){div_alert('');} ?>>
          <p>With HTML you can create your own Website.</p>
          <p>This tutorial teaches you everything about HTML.</p>
          <p>HTML is easy to learn - You will enjoy it.</p>
    </div>
	
	 <table id="table_id">
    <thead>
        <tr>
            <th>Column 1</th>
            <th>Column 2</th>
            <th>На чём?</th>
			<th>Н</th>
			<th>Номер в Гит</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>HTML</td>
            <td>tables</td>
            <td><a href="http://#">Files</a></td>
			<td></td>
			<td>5</td>
        </tr>
        <tr>
            <td>CSS-</td>
            <td>CSS-grid</td>
            <td>Drupal</td>
			<td></td>
			<td></td>
        </tr>
        <tr>
            <td>PHP-FIG</td>
            <td></td>
            <td>PHP-Fusion</td>
			<td></td>
			<td>7</td>
        </tr>
        <tr>
            <td>PHP</td>
            <td>MVC.теория</td>
            <td>My vehicle #4</td>
            <td></td>
			<td>1</td>
        </tr>
        <tr>
            <td>PHP</td>
            <td>MVC. Front Controller. Основа до БД</td>
            <td><a href="http://#">Files</a></td>
            <td></td>
			<td></td>
        </tr>
        <tr>
            <td>PHP</td>
            <td>MVC. Front Controller. Основа c БД</td>
            <td><a href="http://#">Files</a></td>
            <td></td>
			<td>23</td>
        </tr>
    </tbody>
</table>  
    
            <p>        
				Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in dolor. Sed iaculis posuere diam ut cursus. <em>Morbi commodo sodales nisi id sodales. Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id bibendum diam velit et dui.</em> Proin massa magna, vulputate nec bibendum nec, posuere nec lacus. <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa, et feugiat ipsum consequat eu.</small>
			</p>    
    
    <ul>
      <li>fhgfhgf</li>
        <li>werwe</li>
        <li>werew
             <ul>
                 <li>Black tea</li>
                 <li>Green tea</li>
                 <li>ghgh tea</li>
                 <li>yuiuoiu tea
                          <ul>
                            <li>Black tea</li>
                            <li>Green tea</li>
                            <li>Black tea
                                   <ul>
                                     <li>Black tea</li>
                                     <li>Green tea
                                                  <ul>
                                             <li>Black tea</li>
                                            <li>Green tea</li>
                                            <li>Black tea
                                                        <ul>
                                                    <li>Black tea</li>
                                                    <li>Green tea</li>
                                                 </ul>                                
                                            </li>
                                            <li>Green tea</li>
                                             </ul>   
                                      </li>
                                  </ul>                                
                            </li>
                            <li>Green tea</li>
                          </ul>                
                 </li>
                 <li>Green tea</li>                 
             </ul>        
        </li>
        <li>xzczxc</li>
        <li>uilouio</li>
        <li>rtyrt</li>        
    </ul>
    
<?php include($level.LAYOUT.'body_page_bottom.php'); ?>
</body>
</html>