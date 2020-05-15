<?php  include_once('thislevel.php'); ?>
<!DOCTYPE html>
<html lang="ru">
<head>    
	<?php $title = "Content-index";
          $description = "";
          include($level.LAYOUT.'head.php');?>
</head>

<body>
<?php include($level.LAYOUT.'body_page_begin.php'); ?>
	
             <h1> Tutorials </h1>
            <p>                
				Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in dolor. Sed iaculis posuere diam ut cursus. <em>Morbi commodo sodales nisi id sodales. Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id bibendum diam velit et dui.</em> Proin massa magna, vulputate nec bibendum nec, posuere nec lacus. <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa, et feugiat ipsum consequat eu.</small>        
			</p>
    
     <h2><?php $string_row = find_text_by_id(1);
               echo $string_row['mytext'];         
         ?>
    </h2>
    <p>  <?php $string_row = find_text_by_id(2);
               echo $string_row['mytext'];         
         ?>
    </p>
     <p>  <?php $string_row = find_text_by_id(3);
               echo $string_row['mytext'];         
         ?>
    </p>
    
    <p>  <?php $string_row = find_text_by_id(4);
               echo $string_row['mytext'];         
         ?>
    </p>
    
    <hr>
        <h2>Examples in Every Chapter</h2>
        <p>This HTML tutorial contains hundreds of HTML examples.</p>
        <p>With our online HTML editor, you can edit the HTML, and click on a button to 
        view the result.</p>

<?php if(function_exists('code_open')){echo code_open('htmlHigh');} ?>
<pre><code>&lt;!DOCTYPE html&gt; 
&lt;html&gt; 
&lt;head&gt; 
&lt;title&gt;<span> Титульный Заголовок </span>&lt;/title&gt;
&lt;/head&gt; 
&lt;body&gt;  
&lt;h1&gt; <span> Это Заголовок Страницы. </span> &lt;/h1&gt; 
&lt;p&gt; <span> Это параграф. </span>&lt;/p&gt; 
&lt;/body&gt; 
&lt;/html&gt;
</code></pre>
<?php if(function_exists('code_close')){echo code_close();} ?>    
    
<?php include($level.LAYOUT.'body_page_bottom.php'); ?>    
</body>
</html>