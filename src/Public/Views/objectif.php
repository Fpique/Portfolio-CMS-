<?php
$content = "
	        <h2>Objectif de la formation Développeur Web et Mobile :</h2>		
			<p>Histoire et organisation d’Internet<br>
			Tour d’horizon des technologies mises en jeu, bases des protocoles<br>
			Création et intégration – HTML5, CSS3 et JS<br>
			Concepts avancés : introduction à AJAX, UX, Responsive Design, Mobile First et Web Apps<br>
			Environnements de développement : virtualisation, IDE<br>
			Bases de la Programmation<br>
 			Systèmes de Gestion de Bases de Données<br>
			Programmation orientée objet (POO)<br>
			Architecture applicative MVC, design patterns, frameworks<br>
			Node.js et frameworks JS pour Web Apps<br>
			Web Services et APIs<br>
			Bases de la sécurité web<br>
";


require_once('../Controllers/ObjectifController.php');
$objectif = new Objectif('Mon portfolio', $content, 'Objectif.css');

$objectif->display();