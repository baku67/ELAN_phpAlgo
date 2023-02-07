<h1>Exercice 1</h1>

<p>Soit la phrase « Notre formation DL commence aujourd'hui ».
	Ecrire un algorithme permettant de compter le nombre de caractères contenus dans cette phrase (espaces inclus).</p>

<?php
$text = "Notre formation DL commence aujourd'hui ";
$resultat = strlen($text);

?>


<h2>La phrase "Notre formation DL commence aujourd'hui " contient <?= $resultat ?> caractères.<h2>