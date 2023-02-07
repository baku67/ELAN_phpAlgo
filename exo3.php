<h1>Exercice 3</h1>

<p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de remplacer le mot « aujourd’hui » par le mot « demain ». Afficher l’ancienne et la nouvelle phrase.</p>

<?php
$text = "Notre formation DL commence aujourd'hui ";
$resultat = str_replace("aujourd'hui", "demain", $text);

?>


<h2>La phrase obtenue est: <?= $resultat ?><h2>