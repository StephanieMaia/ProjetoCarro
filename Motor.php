<?php

/**
 * Classe Generica para motor
 * @author Fernando
 * @link https://github.com/FernandoQuinta/POO.git
 */
class Motor 
{
   const POTENCIA = 2.0;
   
    private $tipoCombustivel = "Flex";
    private $aceleracao = 0;
    
    /**
     * Acelerar o motor
     * @parametro $valor valor da aceleração de 0 a 100
     * @return $valor int
     */
    public function acelerar($valor = 0)
    {
        $this->aceleracao = $valor;
        $potencia = $valor * self::POTENCIA; //self referencia-se a si mesmo
        return $potencia;
    }
}
