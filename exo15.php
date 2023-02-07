<h1>Exercice 15</h1>

<p>Créer une classe Personne (nom, prénom et date de naissance).</br>
	Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.</br>
	$p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;</br>
	$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ;
</p>


<?php
class Personne
{
	private string $_firstName;
	private string $_lastName;
	private DateTime $_birthDate;

	public function __construct($firstNameInput, $lastNameInput, $birthDateInput)
	{
		$this->_firstName = $firstNameInput;
		$this->_lastName = $lastNameInput;
		$this->_birthDate = new DateTime($birthDateInput);
	}

	public function getFirstName()
	{
		return $this->_firstName;
	}
	public function getLastName()
	{
		return $this->_lastName;
	}
	public function getbirthDate()
	{
		return $this->_birthDate;
	}

	// public function setFirstName($name)
	// {
	// 	$this->_firstName = $name;
	// }

	public function getAge()
	{
		$todayDate = new DateTime();
		$interval = $this->_birthDate->diff($todayDate);

		return $interval->format("%Y ans %m mois et %d jours");
	}

	public function __toString()
	{
	}
}

$p1 = new Personne("DUPONT", "Michel", "1980-02-19");
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17");


$prenom1 = $p1->getFirstName();
$prenom2 = $p2->getFirstName();
$nom1 = $p1->getLastName();
$nom2 = $p2->getLastName();

echo $nom1 . " " . $prenom1 . " a " . $p1->getAge() . "<br>";
echo $nom2 . " " . $prenom2 . " a " . $p2->getAge() . "<br>";
?>