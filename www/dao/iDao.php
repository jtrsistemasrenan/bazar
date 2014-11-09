<?php
/**
 * Created by PhpStorm.
 * User: xy
 * Date: 09/11/14
 * Time: 17:38
 */

interface iDao {

    public criar($obj);
    public remover($obj);
    public atualizar($objAntigo, $objNovo);
    public listar();
    public buscar($objId);

} 