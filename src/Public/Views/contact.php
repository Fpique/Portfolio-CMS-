<?php
$content = "
<iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2783.0451088496266!2d4.8616040158204985!3d45.7702862209876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ea85718bc503%3A0xd8b25d38030c2!2sIT-Akademy!5e0!3m2!1sfr!2sfr!4v1494507565551' width='1920' height='250' frameborder='0' style='border:0' allowfullscreen></iframe>
		<div class='background_image'>
		<div id='coordonnees' style='font-weight:bold'>Mes coordonnées : <br>Adresse mail : Florent.Piquepaille@gmail.com</br> Numéro de téléphone : 06-12-82-94-41</div>
		<div id='ecole' style='font-weight:bold'>Adresse d'It-Akademy : 6 Place Hernu, Charpennes 69100 Villeurbanne <br> Numéro de téléphone :04-82-53-73-75</div>
		</div>
";


require_once('../Controllers/ContactController.php');
$contact = new Contact('Mon portfolio', $content, 'contact.css');

$contact->display();
