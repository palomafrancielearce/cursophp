<?php
class Documento2{
    private $numero;

    public function getNumero(){
        return $this->numero;
    }

    public function setNumero($numero){
        $resultado=Documento2::validarCpf($numero);
        //para métodos estáticos não utilizamos o $this->metodo
        //utilizamos o nome da classe :: e depois o nome do método
        if($resultado){
            $this->numero = $numero;
        } else{
            throw new Exception("CPF não é válido");
            //criamos um erro próprio com uma mensagem
        }
        
    }

    public static function validarCpf($cpf){
        //método estático
        if(empty($cpf)) {
            return false;
        }
     
        $cpf = preg_match('/[0-9]/', $cpf)?$cpf:0;
    
        $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
         
        
        if (strlen($cpf) != 11) {
            echo "length";
            return false;
        }
        
        else if ($cpf == '00000000000' || 
            $cpf == '11111111111' || 
            $cpf == '22222222222' || 
            $cpf == '33333333333' || 
            $cpf == '44444444444' || 
            $cpf == '55555555555' || 
            $cpf == '66666666666' || 
            $cpf == '77777777777' || 
            $cpf == '88888888888' || 
            $cpf == '99999999999') {
            return false;
    
         } else {   
             
            for ($t = 9; $t < 11; $t++) {
                 
                for ($d = 0, $c = 0; $c < $t; $c++) {
                    $d += $cpf[$c] * (($t + 1) - $c);
                }
                $d = ((10 * $d) % 11) % 10;
                if ($cpf[$c] != $d) {
                    return false;
                }
            }
     
            return true;
        }
    }
}

$cpf = new Documento2;
$cpf->setNumero("12345678911");
var_dump($cpf->getNumero());

//var_dump(Documento::validarCpf("12345678911"));
//métodos estáticos não precisamos instanciar a classe para chama-lo, podemos chamar conforme a sintaxe acima
?>