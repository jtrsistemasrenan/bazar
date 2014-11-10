<?php
/**
 * Created by PhpStorm.
 * User: Legolas
 * Date: 09/11/14
 * Time: 17:32
 */

class Usuario {

    private $id,$nome,$login,$senha,$email,$celular,$telefone;

    function __construct($nome,$login,$senha,$email,$celular="",$telefone="",$id="")
    {
        $this->celular = $celular;
        $this->email = $email;
        $this->id = $id;
        $this->login = $login;
        $this->nome = $nome;
        $this->senha = $senha;
        $this->telefone = $telefone;
    }



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

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $senha
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    /**
     * @return mixed
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * @param mixed $telefone
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    /**
     * @return mixed
     */
    public function getTelefone()
    {
        return $this->telefone;
    }







} 