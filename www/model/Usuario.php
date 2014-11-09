<?php
/**
 * Created by PhpStorm.
 * User: Legolas
 * Date: 09/11/14
 * Time: 17:32
 */

class Usuario {

    private $id,$nome,$login,$senha,$email,$celular,$telefone;


    

    /**
     * @param mixed $celular
     */
    public function setCelular($celular)
    {
        $this->celular = $celular;
    }

    /**
     * @return mixed
     */
    public function getCelular()
    {
        return $this->celular;
    }




} 