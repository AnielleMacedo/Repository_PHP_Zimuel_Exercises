<pre> 

<?php 
/***Creare una classe astratta Studenti per la gestione di
tutti gli studenti dell'ITS Piemonte e una classe ICT che
estenda questa classe per gestire le specificità dei corsi
di Informatica (e.s. Backend Developer)
**/
/**
 * 
 */
abstract class Studenti
{
	public const VOTO_MAX =30;
	public const NUM_MAX_CORSI =20;
	public $nome = ''; //adicionou uma
	public $cognome;
	public $email;
	public $anoNascita;
	public $corsi = [];
	//public $votoEsami = [];
 
 

	// function __construct(string $nome,$cognome,$email,$ano, $cursos)
	// {
	// 	$this->nome = $nome;
	// 	$this->cognome = $cognome;
	// 	$this->email = $email;
	// 	$this->anoNascita = $ano;
	// 	$this->corsi = $cursos;
	// 	//$this->votoEsami = $votos;
	// }


	// Força a classe que estende ClasseAbstrata a definir esse método
    abstract protected function pegarValor();

    
	//GETS E SETTERS
	 public function setNome(string $nome) {
	 	$this->nome = $nome;
	 }
	 public function getNome() : string {
	 	return $this->nome;
	 }
	 public function setCognome(string $cognome) {
	 	$this->cognome = $cognome;
	 }
	 public function getCognome() : string {
	 	return $this->cognome;
	 }
	 public function setEmail(string $email) {
	 	$this->email = $email;
	 }
	 public function getEmail() : string {
	 	return $this->email;
	 }
	 public function setAnoNascita(string $ano) {
	 	$this->anoNascita = $ano;
	 }
	 public function getAnoNascita() : string {
	 	return $this->anoNascita;
	 }
	  public function setCorsi(string $cursos) {
	 	$this->corsi = $cursos;
	 }
	 public function getCorsi() : string {
	 	return $this->corsi;
	 }
	 


	   public function addVotoEsame(string $corso, int $voto): void
    {

        if($voto > 0 && $voto <= self::VOTO_MAX){  
            if (isset($this->corsi[$corso])) {
                $this->corsi[$corso] = $voto;
            }
            else
                echo "Impossivel add voto a um curso inexistente!"."<br>";
        }
        else
            echo "Impossivel inserir; voto Invalido!";
    }



	
	 public function addCorso(string $nuovoCorso): void
    {
        if(count($this->corsi)< self:: NUM_MAX_CORSI) {  //como escrever a constante
            if (!isset($this->corsi[$nuovoCorso])) {
                //se o curso nao existir ainda add o novo curso(key) com o value (0)
                $this->corsi[$nuovoCorso] = 0;
            }
            else
                echo "Impossivel add um curso ja existente!"."<br>";
        }    
        
        else
            echo "Impossivel inserir novo curso.Limite de 20 cursos alcancado!"."<br>";
            
    }


	public function getMediaEsami():?float{ //possibilidade de retornar null ou float
		if(empty($this->corsi)){
			return null;
		}
		else{
			$soma = array_sum($this->votoEsami);
			$count = count($this->votoEsami);
			return $soma/$count;
		}
	}
}
 
 ?>
 </pre>