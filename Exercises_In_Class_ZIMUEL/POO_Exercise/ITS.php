<?php 
require "Studenti.php";



class ITS extends Studenti
{
	
	//function __construct(argument)
	//{
		# code...
	//}
//prova a colocar variavel p ve se muda
	 public function pegarValor(){
	 	return "Funcao da Classe concreta ITS retornada";
	 }
}
//aki nao posso estanciar studenti porque è uma classe abstrata
//$arr_cursos = array("Java", "PHP", "C#", "Javascript");
//$arr_notas = array(" "); //ver como tratar excecao qdo o array for vazio
//$aluno1 = new Studenti("Edivania", "Costa","edi@brasil.com", "03/04/1988",$arr_cursos, $arr_notas);
//print_r($aluno1);
//$aluno1->pegarValor();
 ?>