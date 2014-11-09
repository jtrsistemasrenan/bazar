<?php
/**
 * Created by PhpStorm.
 * User: Legolas
 * Date: 09/11/14
 * Time: 18:10
 */

class Anuncio {

    private $anunc_id,$descricao,$data_inicio,$visualizacoes,$titulo,$preco,$status,$data_fim,$usu_id,$cat_id;

    function __construct($titulo,$descricao,$preco,$visualizacoes=0, $data_inicio,$usu_id,$cat_id, $anunc_id="",$data_fim="", $status=1)
    {
        $this->anunc_id = $anunc_id;
        $this->cat_id = $cat_id;
        $this->data_fim = $data_fim;
        $this->data_inicio = $data_inicio;
        $this->descricao = $descricao;
        $this->preco = $preco;
        $this->status = $status;
        $this->titulo = $titulo;
        $this->usu_id = $usu_id;
        $this->visualizacoes = $visualizacoes;
    }

    /**
     * @param mixed $anunc_id
     */
    public function setAnuncId($anunc_id)
    {
        $this->anunc_id = $anunc_id;
    }

    /**
     * @return mixed
     */
    public function getAnuncId()
    {
        return $this->anunc_id;
    }

    /**
     * @param mixed $cat_id
     */
    public function setCatId($cat_id)
    {
        $this->cat_id = $cat_id;
    }

    /**
     * @return mixed
     */
    public function getCatId()
    {
        return $this->cat_id;
    }

    /**
     * @param mixed $data_fim
     */
    public function setDataFim($data_fim)
    {
        $this->data_fim = $data_fim;
    }

    /**
     * @return mixed
     */
    public function getDataFim()
    {
        return $this->data_fim;
    }

    /**
     * @param mixed $data_inicio
     */
    public function setDataInicio($data_inicio)
    {
        $this->data_inicio = $data_inicio;
    }

    /**
     * @return mixed
     */
    public function getDataInicio()
    {
        return $this->data_inicio;
    }

    /**
     * @param mixed $descricao
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    /**
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param mixed $preco
     */
    public function setPreco($preco)
    {
        $this->preco = $preco;
    }

    /**
     * @return mixed
     */
    public function getPreco()
    {
        return $this->preco;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $titulo
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    /**
     * @return mixed
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * @param mixed $usu_id
     */
    public function setUsuId($usu_id)
    {
        $this->usu_id = $usu_id;
    }

    /**
     * @return mixed
     */
    public function getUsuId()
    {
        return $this->usu_id;
    }

    /**
     * @param mixed $visualizacoes
     */
    public function setVisualizacoes($visualizacoes)
    {
        $this->visualizacoes = $visualizacoes;
    }

    /**
     * @return mixed
     */
    public function getVisualizacoes()
    {
        return $this->visualizacoes;
    }




} 