<?php

echo
    "<form>
        <label for='firstName'>Nom</label>
        <input id='firstName' name='firstName' type='text' placeholder='Entrez votre nom de famille...'><br>
        <label for='lastName'>Prénom</label>
        <input id='lastName' name='lastName' type='text' placeholder='Entrez votre prénom...'><br>
        <label for='mail'>Adresse mail</label>
        <input id='mail' name='mail' type='text' placeholder='Entrez votre adresse mail...'><br>
        <label for='city'>Ville</label>
        <input id='city' name='city' type='text' placeholder='Entrez votre ville...'><br>
        <label for='gender'>Genre:</label>
            <label>Homme
                <input id='gender' name='gender' type='radio' checked>
            </label>
            <label>Femme
                <input id='gender' name='gender' type='radio'>
            </label>
            <label>Helicoptère de combat AH-64 Apache
                <input id='gender' name='gender' type='radio'>
            </label><br>

        <label for='training'>Intitulé de formation</label>
        <select id='training' name='training'>
            <option value=''>--Choisissez une option--</option>
            <option value='developper'>Développeur Logiciel</option><br>
            <option value='designer'>Designer web</option><br>
            <option value='integrator'>Intégrateur</option><br>
            <option value='projectManager'>Chef de projet</option>
        </select><br>

        <input type='submit' value='Envoyer'>
    </form>";

?>