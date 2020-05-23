<?php
/**
 * Created by PhpStorm.
 * User: igorribeirolobo
 * Date: 23/05/20
 * Time: 13:10
 */

class tarefa1
{
    protected $uf = ['ES','MG','RJ','SP'];
    protected $estados = ['São Paulo', 'Rio de Janeiro', 'Minas Gerais', 'Espírito Santo'];


    /**
     * Criando array por sigla e estado
     *
     * @return Array $estados
     */
    public function registrandoEstados()
    {
        $estados = null;
        $estadosCount = sizeof($this->estados) - 1;

        for($i = 0; $i < sizeof($this->uf);$i++){
            $estados[$this->uf[$i]] = $this->estados[$estadosCount];
            $estadosCount--;
        }

        return $estados;
    }

    /**
     * Retorna todas as siglas das uniões federativas
     *
     * @return array $this->uf;
     */
    public function getUf()
    {
        return $this->uf;
    }

    
}