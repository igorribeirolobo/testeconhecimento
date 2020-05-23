<?php
/**
 * Created by PhpStorm.
 * User: igorribeirolobo
 * Date: 23/05/20
 * Time: 20:09
 */

class tarefa4
{
    /**
     * Verifica os valores multiplos de 3 e 5
     *
     * @param int $valorMaximo
     *
     * @return int $valor
     */
    public function multiplos($valorMaximo)
    {
        $mult3 = $valorMaximo % 3;
        $mult5 = $valorMaximo % 5;

        if($mult3 == 0 || $mult5 == 0){
            $valor += $valorMaximo;
        }
        if($valorMaximo > 0){
            $valorMaximo--;
            $valor += $this->multiplos($valorMaximo);
        }
        return $valor;
    }

}