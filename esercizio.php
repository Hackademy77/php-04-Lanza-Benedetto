<?php
// -- ES. 1:
// Creare un Computer con Dependency Injection e Object Composition, composto da 
// RAM
// ROM
// Scheda Video
// altro


abstract class SchedaMadre{
    abstract public function schedaMadre();
}

class Aliexpress extends SchedaMadre{   
    public function schedaMadre(){
        echo "Scheda madre per poveri comprata su aliexpress \n";
    }
}


class Amazon extends SchedaMadre{   
    public function schedaMadre(){
        echo "Scheda madre rogue comprata su amazon con la american express \n";
    }
}

abstract class Ram{
    abstract public function Ram();
}

class Asus extends Ram{   
    public function Ram(){
        echo "Ram comprata con il bonus giovani su amazon \n";
    }
}

class Wish extends Ram{   
    public function Ram(){
        echo "Ram di legno comprata su Wish \n";
    }
}

abstract class HardDisk{
    abstract public function hardDisk();
}

class Kingston extends HardDisk{   
    public function hardDisk(){
        echo "Ssd da ricconi da 5TB \n";
    }
}

class discoRigido extends HardDisk{   
    public function hardDisk(){
        echo "Hard disk rubato da un pc del 2001 \n";
    }
}



abstract class Cpu{
    abstract public function Cpu();
}

class M2ultra extends Cpu{   
    public function Cpu(){
        echo "Processore che costa più della mia auto \n";
    }
}

class IntelPentium extends Cpu{   
    public function Cpu(){
        echo "Processore che non regge nemmeno il prato fiorito \n";
    }
}


class Computer {
    public $schedaMadre;
    public $ram;
    public $hardDisk;
    public $cpu;

    public function __construct(SchedaMadre $schedaMadre,Ram $ram,HardDisk $hardDisk,Cpu $cpu)
    {
        $this->schedaMadre = $schedaMadre;
        $this->ram = $ram;
        $this->hardDisk = $hardDisk;
        $this->cpu = $cpu;
    }

    public function creaPc(){
        $this->schedaMadre->schedaMadre();
        $this->ram->Ram();
        $this->hardDisk->hardDisk();
        $this->cpu->Cpu();
    }

}

$computer = new Computer(new Aliexpress(),new Wish(),new discoRigido(),new IntelPentium());
$computer->creaPc();


