<?php  include_once('thislevel.php'); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
<?php $title = "Html-Intro";
      $description = "";
    include($level.LAYOUT.'head.php'); ?>
</head>

<body>
<?php include($level.LAYOUT.'body_post_begin.php'); ?>
    
<?php include($level.LAYOUT.'offline.php'); ?>
    
			<h1>Html-Intro</h1>
            <p>                
				Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in dolor. Sed iaculis posuere diam ut cursus. <em>Morbi commodo sodales nisi id sodales. Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id bibendum diam velit et dui.</em> Proin massa magna, vulputate nec bibendum nec, posuere nec lacus. <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa, et feugiat ipsum consequat eu.</small>
			</p>        
    
    <div <?php if(function_exists('div_alert')){div_alert('');} ?>>
          <p>With HTML you can create your own Website.</p>
          <p>This tutorial teaches you everything about HTML.</p>
          <p>HTML is easy to learn - You will enjoy it.</p>
    </div>
    
            <p>        
				Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in dolor. Sed iaculis posuere diam ut cursus. <em>Morbi commodo sodales nisi id sodales. Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id bibendum diam velit et dui.</em> Proin massa magna, vulputate nec bibendum nec, posuere nec lacus. <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa, et feugiat ipsum consequat eu.</small>
			</p>     
    
<?php include($level.LAYOUT.'body_post_bottom.php'); ?>
</body>
</html>