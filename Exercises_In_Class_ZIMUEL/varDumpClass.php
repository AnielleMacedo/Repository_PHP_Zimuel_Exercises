<?php 

/*Esercizio
Caricare la classe Studente (su github del prof Zimuel)
per creare un oggetto con i vostri dati e i corsi"PHP
Programming" e "Cloud Services".
Eseguire il var_dump dell'oggetto. Qual'è il risultato
ottenuto?*/


/**
 * Classe di esempio
 * @author Enrico Zimuel (enrico.zimuel@its-ictpiemonte.it)
 */
declare(strict_types=1);
class Studente {
    public $nome;
    public $cognome;
    public $email;
    public $dataDiNascita;
    protected $corsi = [];
    public function addCorso(string $corso): void
    {
        if (!isset($this->corsi[$corso])) {
            $this->corsi[$corso] = 0;
        }
    }
    public function addVotoEsame(string $corso, int $voto): void
    {
        if (isset($this->corsi[$corso])) {
            $this->corsi[$corso] = $voto;
        }
    }
    public function getMediaEsami(): ?float
    {
        if (empty($this->corsi)) {
            return null;
        }
        return array_sum($this->corsi) / count($this->corsi);
    }
}


//crio l'oggetto
$studente = new Studente();
var_dump($studente);








 ?>