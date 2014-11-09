<?php
/**
 * Created by PhpStorm.
 * User: xy
 * Date: 09/11/14
 * Time: 17:38
 */

interface iDao {

    public function criar($obj);
    public function remover($obj);
    public function atualizar($objAntigo, $objNovo);
    public function listar();
    public function buscar($objId);

} 