<?php 

class loja {
    public  static $totalvendas = 0; // atributo estatico
    
 
    public function registrarvendas(){  // instacia
        loja::$totalvendas ++;



    }

    public static function getTotalvendas(){ // estatico
        return self::$totalvendas;
    }

    /*
     funçao estatica da questao 19
    
     public static $totalvendas = 0;            // atributo estatico

    public static function getTotalvendas(){    // funçao estatico
        return self::$totalvendas;
    }

    echo "vendas". loja::getTotalvendas();      // estatico

    */
}

$lojinha = new loja();
$lojinha->registrarvendas();
echo "Vendas". loja::getTotalvendas(); // estatico

/*   outro exemolo do self::
<?php 

class loja {
    public  static $totalvendas = 0; 
    
 
    public function registrarvendas(){  // instacia
        loja::$totalvendas ++;
		echo "Vendas". self::getTotalvendas();
    }

    public static function getTotalvendas(){ // eststico
        return self::$totalvendas;
    }
}

$lojinha = new loja();
$lojinha->registrarvendas();
// echo "Vendas". loja::getTotalvendas(); // estatico

exemplo 2

<?php 

class loja {

    public $cnpj = "12340001/12";

    public  static $totalvendas = 0; 
    
 
    public function registrarvendas(){  // instacia
        loja::$totalvendas ++;
		echo "Vendas". self::getTotalvendas();
    }

    public static function getTotalvendas(){ // eststico
      // echo $this->cnpj;  error not context obejct   
    return self::$totalvendas;
    }
}

$lojinha = new loja();
$lojinha->registrarvendas();
// echo "Vendas". loja::getTotalvendas(); // estatico

*/