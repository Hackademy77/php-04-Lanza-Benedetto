<?php

// <!-- ES. 2:
// Siamo in guerra!
// Creare una classe Esercito, che sarà costituita da una Difesa e da un Attacco.
// Entrambe le classi si estenderanno a loro volta e avranno i rispettivi metodi: date sfoggio alla vostra fantasia!

// Esempio: 
// ATTACCO: Fanteria, cavalleria, arcieri, catapulte
// DIFESA: Fossato, fortezza, mura di cinta ecc..
// Creare quindi degli oggetti di classe esercito che possano attaccare o difendere utilizzando i metodi delle diverse classi create (modificato) -->



abstract class Attacco{
    abstract public function attacco();
}

class Fanteria extends Attacco{
    public function attacco(){
        echo "La fanteria attacca \n";
    }
}
class Cavalleria extends Attacco{
    public function attacco(){
        echo "La Cavalleria attacca \n";
    }
}
class Arcieri extends Attacco{
    public function attacco(){
        echo "Gli arcieri attaccano \n";
    }
}

abstract class Difesa{
    abstract public function difendi();
}
class Fossato extends Difesa{
    public function difendi(){
        echo "Il fossato difende \n";
    }
}

class Fortezza extends Difesa{
    public function difendi(){
        echo "La fortezza è inespugnabile \n";
    }
}

class MuraDiCinta extends Difesa{
    public function difendi(){
        echo "Le mura di cinta sono alte \n";
    }
}

class Esercito{
    public $attacco;
    public $difesa;

    public function __construct(Attacco $attacco, Difesa $difesa){
        $this->attacco = $attacco;
        $this->difesa= $difesa;
    }

    public function effettuaAttacco(){
        $this->attacco->attacco();
    }  
    
    public function effettuaDifesa(){
        $this->difesa->difendi();
    }
}


$esercito = new Esercito(new Fanteria(),new Fortezza());
$esercito->effettuaAttacco();
$esercito->effettuaDifesa();


