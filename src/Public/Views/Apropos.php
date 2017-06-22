<?php
$content = "
<div>
			<img src='images/yoda.png'>
			<img src='images/bulle.png'>
			</div>
  			<h2 class='border'>A propos de moi :</h2>		
			<p>Je m'appelle Florent Piquepaille, jai 26 ans et je suis un jeune padawan en développement 
			<br>Web & Mobile au sein de l'IT-AKADEMY, cette école me dispense actuellement
			une formation de 5 mois.<br>Je souhaite poursuivre avec cette école en Septembre afin d'intégrer le cursus Développeur Full Stack.<br>
			Passionné de nouvelles technologies, je m'intéresse aussi au Sport et à l'actualité.<br>
			<br>
			</p>
			<div class='background_image'></div>
";


require_once('../Controllers/AproposController.php');
$apropos = new Apropos('Mon portfolio', $content, 'apropos.css');

$apropos->display();
