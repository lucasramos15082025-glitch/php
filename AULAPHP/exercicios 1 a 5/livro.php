<?php
	class Livro{
		public $titulo;
		public $autor;
		public $paginas;

		function __construct($t, $a , $p){
			$this->titulo = $t;
			$this->autor = $a;
			$this->paginas = $p;
		}
		function resumo(){
			echo "Título: $this->titulo | Autor: $this->autor | Páginas: $this->paginas <br>";
		}

	}

	$livro_sor = new Livro("Minha historia com minha filha em 13 dicas de superação","evandro",50);
	$livro_sor->resumo();

	$livro_covey = new Livro("7 habitos das passoas mais eficazes","stephen covey",100);
	$livro_covey->resumo();
?>