<div class="titulo">Modificadores de Acesso</div>

<?php

class A{

    public $publico = "publico";
    protected $protegido = "Protegido";
    private $privado = "privado";

    public function mostrarA(){
        //publico é visto por todos e acessado por todos;
        echo"Class A) Publico = {$this->publico}<br>";
        //protegido é acessado apenas dentro da classe e pelos filhos diretos da mesma.
        echo"Class A) Protegido = {$this->protegido}<br>";
        //privado é apenas acessado pela classe:;
        echo"Class A) Privado = {$this->privado}<br>";

        $this->naoSereiExibido();
    }
    //função protected é passada por heraça e pode ser usada pelos filhos de A
    protected function passaPorHeranca(){
        echo"Serei passadado por herança<br>";
    }
    //funcções privadas so podem ser acessada dentro do próprio objeto e dentro de uma função do objeto. Não é passada por herança
    private function naoSereiExibido(){
        echo"Não serei exibido";
    }

}

class B extends A{
    public function mostrarB(){
        echo"Class B) Publico = {$this->publico}<br>";
        echo"Class B) Protegido = {$this->protegido}<br>";
        echo"Class B) Privado = {$this->privado}<br>";
        parent::passaPorHeranca();
    }

}

$b = new B();
$a = new A();


$b->mostrarB();
$a->mostrarA();
?>