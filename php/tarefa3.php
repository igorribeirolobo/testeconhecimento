<?php
/**
 * Created by PhpStorm.
 * User: igorribeirolobo
 * Date: 23/05/20
 * Time: 19:57
 */

class tarefa3
{

    protected $valor1, $valor2, $valor3;


    /**
     * Retorna o valor da propriedade 1
     *
     * @return int $this->valor1
     */
    public function getValor1()
    {
        return $this->valor1;
    }

    /**
     * Retorna o valor da propriedade 2
     *
     * @return int $this->valor2
     */
    public function getValor2()
    {
        return $this->valor2;
    }

    /**
     * Retorna o valor da propriedade 3
     *
     * @return int $this->valor3
     */
    public function getValor3()
    {
        return $this->valor3;
    }

    /**
     * Insere valor na propriedade 1
     *
     * @param INT $valor
     */
    public function setValor1($valor)
    {
        $this->valor1 = $valor;
    }

    /**
     * Insere valor na propriedade 3
     *
     * @param int $valor
     */
    public function setValor2($valor)
    {
        $this->valor2 = $valor;
    }

    /**
     * Insere valor na propriedade 3
     *
     * @param int $valor
     */
    public function setValor3($valor)
    {
        $this->valor3 = $valor;
    }

    /**
     * Realiza a multiplicação das 3 propriedades e retorna o produto
     *
     * @return int $resultado
     */
    public function multiplicaPropriedade()
    {
        return $resultado = $this->valor1 * $this->valor2 * $this->valor3;
    }

}