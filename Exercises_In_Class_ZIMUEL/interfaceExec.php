<pre>
<?php 

/*Esercizio: Implementare una classe Studente rispettando le
interfacce StudenteInterface e CorsiInterface presenti nel repository su github
*/

//interfaces di Zimuel
interface StudenteInterface
{

    public function setNome(string $nome);
    public function getNome(): string;
    public function setCognome(string $cognome): bool;
    public function getCognome(): string;
    public function setEmail(string $email): bool;
    public function getEmail(): string;
    public function setDataDiNascita(int $giorno, int $mese, int $anno): bool;
    public function getDataDiNascita(): string; // nel formato "gg/mm/AAAA"
}


interface CorsiInterface
{
    
    public function addCorso(string $corso): bool;
    public function getCorsi(): array;
    public function addVoto(string $corso, int $voto): bool;
    public function getMediaEsami():?float;
}


//crio a classe que implementa as 2 interfaces simultaneamente
class Studente implements StudenteInterface, CorsiInterface
{
	
	//crio os atributos necessarios p poder usar nos metodos
	protected $nome = '';
	protected $cognome = '';
	protected $email = '';
	protected $dataDiNascita = '';

	public $corsi= [];
	


	//implemento obrigat. TODOS os metodos da StudenteINTERFACE
	public function setNome(string $nome){
		$this->nome=$nome;
		//QUAAL ESCOPO DE RETORNAR SEMPRE BOOL??
	}
    
    public function getNome() : string {
 		return $this->nome;
 	}
    public function setCognome(string $cognome): bool{
    	 if(empty($cognome)) {
        	return false;
   	    }
   	    $this->cognome=$cognome;
   	    	return true;
   	    }
    public function getCognome(): string{
    	return $this->cognome;
    }
    public function setEmail(string $email): bool{
    	$this->email=$email;
    	return true;
    }
    public function getEmail(): string{
    	return $this->email;
    }
    public function setDataDiNascita(int $giorno, int $mese, int $anno): bool{
    	$this->dataDiNascita = $giorno . "/".$mese."/". $anno;
    	//$this->dataDiNascita = date("$giorno.$mese.$anno");
    	
    	return true;
    }
    public function getDataDiNascita(): string{
    	return $this->dataDiNascita;
    	
    }


    //implemento obrigat todos os metodo da CorsiInterface

    public function addCorso($nuovoCurso): bool{
		if(!isset($this->corsi[$nuovoCurso])){
			$this->corsi[$nuovoCurso]= ""; //ou 0
			//array_push($this->corsi, $novoCurso);
			echo "Corso aggiunto"."<br>";   
			return true;
		}else{
			echo "Impossibile aggiungere un corso già esistente!"."<br>";
			return false;
			
		}
	}

	public function getCorsi(): array{
		return $this->corsi;
	}


	public function addVoto(string $corso, int $voto): bool{
		//se il corso esiste aggiunge un voto al corso esistente
		if (isset($this->corsi[$corso]) && ($voto>0 && $voto<= 30)) {
			$this->corsi[$corso]= $voto;
			return true;
			}
		//se nao existe nao adiciona
		else{
			echo "Impossibile aggiungere un voto; voto invalido o corso inesistente!"."<br>";
			return false;
		}
			
	}




	public function getMediaEsami():?float{ 
		if(empty($this->corsi)){
			return null;
		}
		else{
			$soma = array_sum($this->corsi);
			$count = count($this->corsi);
			return $soma/$count;
		}
	}
}





//intancio a classe p fazer output
//SEM USAR valor booleano
$estudante = new Studente(); //crio oggetto

//testando os metoddo da Studente Interface
$estudante->setNome("ANIELLE");
echo $estudante->getNome();
//USANDO valor booleano
echo "<br>";
$estudante->setCognome("GOMES MACEDO");
echo $estudante->getCognome();
echo "<br>";
$estudante->setEmail("anielelovely18@hotmail.com");
echo $estudante->getEmail();
echo "<br>";
$estudante->setDataDiNascita(03,04,1988);
echo $estudante->getDataDiNascita();
echo "<br>";
echo $today = date("m.d.Y");     
//doubts:	pergunta SO STRICT LINES; pq usar BOOLENAO; e como gestir formato da data
//Fatal error: strict_types declaration must be the very first statement in the script in C:\xampp\htdocs\POO\interface.php on line 2

echo "<hr>";

//testando os metoddo da Corsi Interface
//add corsi
echo $estudante->addCorso('MONGODB');
echo $estudante->addCorso('C#');
echo $estudante->addCorso('PHP');
echo $estudante->addCorso('HTML');
echo $estudante->addCorso('PHP');
echo "<hr>";
print_r($estudante);
echo "<hr>";
//add voti ai corsi
echo $estudante->addVoto('MONGODB',25); 
echo $estudante->addVoto('C#',29);
echo $estudante->addVoto('PHP',30);
echo $estudante->addVoto('HTML',18);
echo $estudante->addVoto('MONGODB',29);//sostituissce
echo $estudante->addVoto('SQL',31);    //corso non esiste
print_r($estudante);
echo "<hr>";

//retorna un array con tutti i corsi e voti corrispondenti
print_r($estudante->getCorsi());
echo "<hr>";
//ritorna un float con la media dei voti dello studente
echo "La media dei voti dello studente è: {$estudante->getMediaEsami()}"; 
echo "<hr>";


 ?>
 </pre>