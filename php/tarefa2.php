<?php
/**
 * Created by PhpStorm.
 * User: igorribeirolobo
 * Date: 23/05/20
 * Time: 19:27
 */

class tarefa2
{
    /**
     * Calcula o menor numero divisível por 2, 3 e 10 simultaneamente
     *
     * @param INT $valorMaximo
     *
     * @return INT $valor
     */
    public function calculaValorMinimo($valorMaximo)
    {
        $div2 = $valorMaximo % 2;
        $div3 = $valorMaximo % 3;
        $div10 = $valorMaximo % 10;

        if ($div2 == 0 && $div3 == 0 && $div10 == 0 ) {
           $valor = $valorMaximo;

        }
        if($valorMaximo > 0) {
            $valorMaximo--;
            $valor = $this->calculaValorMinimo($valorMaximo);
        }

        return $valor;
    }

}