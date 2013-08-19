<?php

    function romanos($num){
        
        $arrayUnidade = array('','I','II', 'III', 'IV', 'V', 'VI', 'VII', 'VIII', 'IX');
        $arrayDezena = array('','X','XX','XXX','XL','L','LX','LXX','LXXX','LC');
        $arrayCentena = array('','C','CC','CCC','CD','D','DC','DCC','DCCC','DM');
        $arrayMilhar = array('','M');
        
        if (strlen($num) == 1){
            return  $arrayUnidade[$num];
            
        }elseif (strlen($num) == 2){
            
            $dezena = substr($num, 0,1);
            $unidade = substr($num, 1,2);
                                  
            return "$arrayDezena[$dezena]$arrayUnidade[$unidade]";
           
        }elseif (strlen($num) == 3){
            
            $centena = substr($num, 0,1);
            $dezena = substr($num, 1,1);
            $unidade = substr($num, 2,3);
            
            return "$arrayCentena[$centena]$arrayDezena[$dezena]$arrayUnidade[$unidade]";
            
        }elseif (strlen($num) == 4 && $num < 4000){
            
            $milhar = substr($num, 0,1);
            $centena = substr($num, 1,1);
            $dezena = substr($num, 2,1);
            $unidade = substr($num, 3);
            
            return "$arrayMilhar[$milhar]$arrayDezena[$centena]$arrayDezena[$dezena]$arrayUnidade[$unidade]";
            
        }  else {
            return "Por favor! So ate 3999!";
        }
        
    }
    echo romanos(1000);
 
?>
