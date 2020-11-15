<?php  include_once('thislevel.php'); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<?php $title = "Content-1";
          $description = "";
          include($level.LAYOUT.'head.php');?>
</head>

<body>
<?php include($level.LAYOUT.'body_post_begin.php'); ?>
	
<div class="w3-container">

<h2>Active Accordions</h2>
<p>In this example we add the w3-red class to an active accordion (when the button is clicked on and the content is opened).</p>

<button onclick="myFunction('Demo1')" class="w3-button w3-block w3-light-grey w3-left-align">Open Section 1</button>
<div id="Demo1" class="w3-hide w3-container">
    <p>Some text..</p>
</div>

<button onclick="myFunction('Demo2')" class="w3-button w3-block w3-light-grey w3-left-align">Open Section 2</button>
<div id="Demo2" class="w3-hide w3-container">
    <p>Some other text..</p>
    
    <button onclick="myFunction('Demo21')" class="w3-button w3-block w3-light-grey w3-left-align">Open Section 2</button>
    <div id="Demo21" class="w3-hide w3-container">
    <p>Some 21 21 21 other text..</p>
    </div>
    
</div>

</div>           
    
<?php include($level.LAYOUT.'body_post_bottom.php'); ?>    

<script>
function myFunction(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
    x.previousElementSibling.className = 
    x.previousElementSibling.className.replace("w3-light-grey", "w3-blue-grey");
  } else { 
    x.className = x.className.replace(" w3-show", "");
    x.previousElementSibling.className = 
    x.previousElementSibling.className.replace("w3-blue-grey", "w3-light-grey");
  }
}
</script>
</body>
</html>