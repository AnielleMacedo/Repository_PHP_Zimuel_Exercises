<pre>
<?php //declare(strict_types=1);

/*Creare una classe che gestisca i dati di uno studente
(nome, cognome, email, anno di nascita), i corsi seguiti
con i relativi voti d'esame.
Creare un metodo getMediaEsami(): ?foat che
restituisca la media degli esami sostenuti.*/

/*Aggiungere alla classe Studente il controllo sull'inserimento di un voto
valido tra 0 e 30 e di un numero massimo di corsi pari a
20, tramite delle costanti di classe (e.s. MAX_VOTO)*/


class Studente {
    public const VOTO_MAX =30;
    public const NUM_MAX_CORSI =20;
    public $nome;
    public $cognome;
    public $email;
    public $dataDiNascita;
    protected $corsi = [];


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


    //metodo que add um voto por curso existente dentro do array corsi
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


    public function getMediaEsami(): ?float
    {
        if (empty($this->corsi)) {
            return null; //se tiver vazio retorna 0
        }
        else
            return array_sum($this->corsi) / count($this->corsi);
    }
}

//Instancio a classe

$studente = new Studente();
print_r($studente); //array vuoto per ora
echo "<hr>";

$studente->nome = 'Mario';
$studente->cognome = 'Rossi';
$studente->email = 'mario.rossi@itspiemonte.it';
$studente->dataDiNascita = '1/1/1995';

//add os cursos
$studente->addCorso('Cloud Services');
$studente->addCorso('PHP Programming');
$studente->addCorso('Java');
$studente->addCorso('C#');
$studente->addCorso('Database');
$studente->addCorso('Database'); //curso ja existente
echo "<hr>";

//add os votos aos respectivos cursos
$studente->addVotoEsame('Cloud Services', 18);
$studente->addVotoEsame('PHP Programming', 21);
$studente->addVotoEsame('Java', 30);
$studente->addVotoEsame('Node.js', 28); //nao insere pq Nodejs nao existe na lista de cursos
echo "<hr>";

//imprimo ao array novamente
print_r($studente);

//testando o inserimento de votos invalidos e validos
$studente->addVotoEsame('Database',55);//invalido >30
echo "<hr>";
$studente->addVotoEsame('C#',-1);//invalido <0
echo "<hr>";
$studente->addVotoEsame('C#', 19);//como è voto valido inseriu no array 

//imprimo ao array novamente
print_r($studente);

//A media vai somar todas as notas incluindo os zeros e dividir pela qtidadde de todos os cursos
printf("Media voto esami: %.1f\n", $studente->getMediaEsami());

?>
</pre>