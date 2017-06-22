<?php
$content = "
<div class='typewriter'>
  			<h1>Hello world !</h1>
			</div>
		<p class='border'>Florent Piquepaille
		<br>Développeur Web & Mobile</br>
		</p>
";


require_once('../Controllers/IndexController.php');
$index = new Index('Mon portfolio', $content, 'style.css');

$index->display();
