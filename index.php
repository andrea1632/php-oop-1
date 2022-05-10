<?php
class Movie {
    public $titolo;
    public $rilascita;
    public $genere;
    public $regista;
    public $durata;

    public function setDurataFilm($minuti){
        $this->durata = $minuti;
        $minutiPubblicità = 15;
        $this->durata += $minutiPubblicità;
    }
    public function getDurataFilm(){
        return $this->durata;
    }
    function __construct($_titolo, $_rilascita, $_genere, $_regista){
        $this->titolo = $_titolo;
        $this->rilascita = $_rilascita;
        $this->regista = $_regista;
        $this->genere = $_genere;
    }

}
$aranciaMeccanica = new Movie("Arancia Meccanica", 1972, "Drammatico", "Stanley Kubrick");
$aranciaMeccanica->setDurataFilm(136);
$durata = $aranciaMeccanica->getDurataFilm();


$theWolfOfWallStreet = new Movie("The Wolf of Wall Street", 2014, "Drama", "Martin Scorsese");
$theWolfOfWallStreet->setDurataFilm(180);
$durata = $theWolfOfWallStreet->getDurataFilm();


echo  "<p>" . "<strong>Titolo : </strong>" . $aranciaMeccanica->titolo . "</p>";
echo  "<p>" . "<strong>Rilascita : </strong>" . $aranciaMeccanica->rilascita . "</p>";
echo  "<p>" . "<strong>Genere : </strong>" . $aranciaMeccanica->genere . "</p>";
echo  "<p>" . "<strong>Regista : </strong>" . $aranciaMeccanica->regista . "</p>";
echo  "<p>" . "<strong>Durata (compresa pubblicità): </strong>" . $aranciaMeccanica->durata . "</p>";

echo  '<p style="padding-top: 200px;">' . "<strong>Titolo : </strong>" . $theWolfOfWallStreet->titolo . "</p>";
echo  "<p>" . "<strong>Rilascita : </strong>" . $theWolfOfWallStreet->rilascita . "</p>";
echo  "<p>" . "<strong>Genere : </strong>" . $theWolfOfWallStreet->genere . "</p>";
echo  "<p>" . "<strong>Regista : </strong>" . $theWolfOfWallStreet->regista . "</p>";
echo  "<p>" . "<strong>Durata (compresa pubblicità): </strong>" . $theWolfOfWallStreet->durata . "</p>";
?>

