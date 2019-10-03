<pre> 
<?php 
require "ITS.php";

class ICT extends ITS
{
	
	//function __construct(argument)
	//{
		# code...
	//}
	public function pegarValor() {
        return "Funcao da Classe Concreta ITC retornada";
    }
}
//CLASSE ABSTRATA Studenti NAO SE PODE INSTANCIAR logo instancia sua filha ITS


//usando o construtor dificulta o inserimento pq ele quer q insira todos os dados de uma vez obrigatoriamente e n quero inserir cursos agora
//$aluno1 = new ITS("Edivania", "Costa","edi@brasil.com", "03/04/1988",$arr_cursos);

$aluno1 = new ITS(); //instancio normal sem usar construtor

$aluno1->nome = 'Mario';
$aluno1->cognome = 'Rossi';
$aluno1->email = 'mario.rossi@itspiemonte.it';
$aluno1->anoNascita = '1/1/1995';
print_r($aluno1);
$aluno1->pegarValor();

//add os cursos
$aluno1->addCorso('Cloud Services');
$aluno1->addCorso('PHP Programming');
$aluno1->addCorso('Java');
$aluno1->addCorso('C#');
$aluno1->addCorso('Database');
$aluno1->addCorso('Database'); //curso ja existente
echo "<hr>";

//add os votos aos respectivos cursos
$aluno1->addVotoEsame('Cloud Services', 18);
$aluno1->addVotoEsame('PHP Programming', 21);
$aluno1->addVotoEsame('Java', 30);
$aluno1->addVotoEsame('Node.js', 28); //nao insere pq Nodejs nao existe na lista de cursos
echo "<hr>";

//imprimo ao array novamente
print_r($aluno1);


//aluno 2
$aluno2 = new ITS(); //instancio normal sem usar construtor

$aluno2->nome = 'Maria';
$aluno2->cognome = 'Clara';
$aluno2->email = 'maria.rossi@itspiemonte.it';
$aluno2->anoNascita = '1/1/2000';
$aluno2->addCorso('Baby Shark');
$aluno2->addVotoEsame('Baby Shark', 30);
print_r($aluno2);

 ?>

 </pre>