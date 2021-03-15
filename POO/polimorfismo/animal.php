<?php
abstract class Animal{
    public function falar(){
        return "som";
    }

    public function mover()
    {
        return "anda";
    }
}

class Cachorro extends Animal{
    public function falar(){
        return "late";
    }


}

class Gato extends Animal{
    public function falar(){
        return "Mia";
    }
}

class Passaro extends Animal{
    public function falar(){
        return "canta";
    }

    public function mover(){
        return "voa e " . parent::mover();
        //utilizamos parent para puxar um metodo da classe pai, semelhante ao super em java
        //é um método estático, por isso chamamos dessa forma
    }
}

$pluto = new Cachorro();
echo $pluto->falar() . "<br>";
echo $pluto->mover() . "<br>";
echo "-----------------------<br>";
$ave = new Passaro();
echo $ave->falar();
echo $ave->mover();
?>