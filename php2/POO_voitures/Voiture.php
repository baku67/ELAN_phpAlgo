<!-- Exercice N°13 -->

<?php 

class Voiture {
    // propriétés
    protected string $_marque;
    protected string $_modele;
    protected int $_nbrPortes;
    protected int $_vitesseActuelle;
    protected bool $_demarred;
    
    // déclaration du constructeur de la classe Voiture
    public function __construct(string $marque, string $modele, int $nbrPortes) {
        $this->_marque = $marque;
        $this->_modele = $modele;
        $this->_nbrPortes = $nbrPortes;
        $this->_vitesseActuelle = 0;
        $this->_demarred = false;

        // * On ajoute le nouvel object dans le tableau à chaque instanciation
        // ! PB: variable locale à la fonction
        // ? NOOOOOOOOOOOOOOOOOOOOOOOOOO!!!!!!!!!!!!!!!!!!!!!!!!!
        // $voituresArray[] = $this;
        // echo json_encode($voituresArray);
        // var_dump($voituresArray);
    }
    public function getMarque(): string {
        return $this->_marque;
    }
    public function getModele(): string {
        return $this->_modele;
    }
    public function getNbrPortes(): int {
        return $this->_nbrPortes;
    }
    public function getVitesseActuelle(): int {
        return $this->_vitesseActuelle;
    }
    public function getStatus(): bool {
        return $this->_demarred;
    }


    public function setMarque(string $marque) {
        $this->_marque = $marque;
    }
    public function setModele(string $modele) {
        $this->_modele = $modele;
    }
    public function setNbrPortes(int $nbrPortes) {
        $this->_nbrPortes = $nbrPortes;
    }
    public function setVitesseActuelle(int $vitesseActuelle) {
        if ($vitesseActuelle >= 0) {
            $this->_vitesseActuelle = $vitesseActuelle;
        }
        else {
            $this->_vitesseActuelle = 0;
        }
    }
    public function setStatus(bool $status) {
        $this->_demarred = $status;
    }


    // Méthodes de la classe Voiture
    public function demarrer() {
        // Vérif si deja démarrée
        if ($this->getStatus() == true) {
            $result = "Le véhicule " . $this->getMarque() . " " . $this->getModele() . " est déjà démarré.";
        }
        else {
            $this->setStatus(true);
            $result = "Le véhicule " . $this->getMarque() . " " . $this->getModele() . " démarre.";    
        }
        return $result;
    }


    public function accelerer(int $amount) {
        if ($this->_demarred) {
            // if ($amount > 0) {
                $vitesseActuelle = $this->getVitesseActuelle();
                $this->setVitesseActuelle($vitesseActuelle + $amount);
                return "Le véhicule " . $this->getMarque() . " " . $this->getModele() . " accélère de " . $amount . " km/h.";
            // }
            // // TODO Sortir le code décélrer dans une fonction propre "ralentir()"
            // elseif ($amount < 0) {
            //     $vitesseActuelle = $this->getVitesseActuelle();
            //     $this->setVitesseActuelle($vitesseActuelle - $amount);
            //     return "Le véhicule " . $this->getMarque() . " " . $this->getModele() . " décélère de " . $amount . " km/h.";
            // }
        }
        else {
            return "Le véhicule " . $this->getMarque() . " " . $this->getModele() . " veut accélèrer de " . $amount . " km/h.<br>Pour accélèrer, il faut démarrer le véhicule " . $this->getMarque() . " " . $this->getModele() . " !";
        }
    }

    public function ralentir(int $amount) {
        if ($this->_demarred) {
            $vitesseActuelle = $this->getVitesseActuelle();
            // Si l'utilisateur veut freiner "plus" que la vitesse actuelle, il freine de l'équivelent:
            if ($amount > $this->getVitesseActuelle()) {
                $amount = $this->getVitesseActuelle();
            }
            $this->setVitesseActuelle($vitesseActuelle - $amount);
            return "Le véhicule " . $this->getMarque() . " " . $this->getModele() . " décélère de " . $amount . " km/h.";
        }
        else {
            return "Le véhicule " . $this->getMarque() . " " . $this->getModele() . " veut décélèrer de " . $amount . " km/h.<br>Pour décélèrer, il faut démarrer le véhicule " . $this->getMarque() . " " . $this->getModele() . " !";
        }
    }


    public function printVitesseActuelle() {
        echo "La vitesse du véhicule " . $this->getMarque() . " " . $this->getModele() . " est de " . $this->_vitesseActuelle . " km/h.";
    }

    public function stopper() {
        // Vérif si deja stoppée 
        if ($this->getStatus() == false) {
            $result = "Le véhicule " . $this->getMarque() . " " . $this->getModele() . " est déjà à l'arrêt.";
        }
        else {
            $this->setStatus(false);
            $result = "Le véhicule " . $this->getMarque() . " " . $this->getModele() . " s'est arrêté."; 
        }
        return $result;
    }

    // Exo14 **************************************************** */
    public function getInfos() {
        if($this->getStatus() === false) {
            $status = "démarré";
        }else {
            $status = "à l'arrêt";
        }

        return "<span style='text-decoration:underline;'>Voiture:</span> " . $this->getMarque() . " " . $this->getModele() . ", " . $this->getNbrPortes() . " portes. La voiture est " . $status . " et sa vitesse est de " . $this->getVitesseActuelle() . " km/h.";
    }
    // ********************************************************** */

    public function __toString() {
        return "Marque: " . $this->getMarque() . ", modèle: " . $this->getModele() . ", nbrPortes: " . $this->getNbrPortes() . ", vitesseActuelle: " . $this->getVitesseActuelle();
    }
}




//****************************************************** */
// Exercice 14
class VoitureElec extends Voiture {

    private string $_autonomie;

    public function __construct(string $marque, string $modele, int $nbrPortes, $autonomie) {
        parent::__construct($marque, $modele, $nbrPortes);
        $this->_autonomie = $autonomie;
    }

    public function getAutonomie(): int {
        return $this->_autonomie;
    }

    public function setAutonomie(int $autonomie) {
        $this->_autonomie = $autonomie;
    }

    public function printAutonomie() {
        return "Cette voiture électrique possède une autonomie de " . $this->getAutonomie() . " km.";
    }

    public function getInfos() {
        if($this->getStatus() === false) {
            $status = "démarré";
        }else {
            $status = "à l'arrêt";
        }

        return "<span style='text-decoration:underline;'>Voiture <span style='font-weight:bold; color:darkblue;'>électrique</span></span>: " . $this->getMarque() . " " . $this->getModele() . ", " . $this->getNbrPortes() . " portes. La voiture est " . $status . " et sa vitesse est de " . $this->getVitesseActuelle() . " km/h. En tant que voiture électrique, elle possède une autonomie de " . $this->getAutonomie() . " km.";
    }

}
//****************************************************** */


?>