<?php
/**
 * Created by PhpStorm.
 * User: Legolas
 * Date: 09/11/14
 * Time: 18:37
 */

class Imagem {

    private $img_id,$url,$descricao,$anunc_id;

    function __construct($url, $anunc_id, $descricao="", $img_id="")
    {
        $this->anunc_id = $anunc_id;
        $this->descricao = $descricao;
        $this->img_id = $img_id;
        $this->url = $url;
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
     * @param mixed $img_id
     */
    public function setImgId($img_id)
    {
        $this->img_id = $img_id;
    }

    /**
     * @return mixed
     */
    public function getImgId()
    {
        return $this->img_id;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }



} 