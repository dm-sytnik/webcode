<?php  include_once('thislevel.php'); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<?php $title = "Content-html-index";
          $description = "";
          include($level.LAYOUT.'head.php'); ?>
</head>

<body>
<?php include($level.LAYOUT.'body_post_begin.php'); ?>
    
       <h1 style="word-wrap: break-word;">content/html/index</h1>
            <p>                
				Сначала идёт очень много-много русских букв и слов. Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in dolor. Sed iaculis posuere diam ut cursus. <em>Morbi commodo sodales nisi id sodales. Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id bibendum diam velit et dui.</em> Proin massa magna, vulputate nec bibendum nec, posuere nec lacus. <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa, et feugiat ipsum consequat eu.</small>
			</p>
 
    <p>Как это выглядит:</p>
    
<?php if(function_exists('code_open')){echo code_open('htmlHigh');} ?>

<pre><code>&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
&lt;title&gt; Титульный Заголовок &lt;/title&gt;
&lt;/head&gt;
&lt;body&gt; 
&lt;h1&gt;  Это Заголовок Страницы.  &lt;/h1&gt;
&lt;p&gt;  Это параграф. &lt;/p&gt; 
&lt;/body&gt;
&lt;/html&gt;
</code></pre>

<?php if(function_exists('code_close')){echo code_close();} ?>
    
<?php include($level.LAYOUT.'body_post_bottom.php'); ?>
</body>
</html>