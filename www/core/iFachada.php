<?php
/**
 *
 * Renan se assusta não, ideias loucas e que nem serão implementadas estão ai.
 * 
 * Created by PhpStorm.
 * User: Legolas
 * Date: 09/11/14
 * Time: 17:28
 */



    interface iFachada {
        /**
         * Recupera a lista de todas as categorias cadastradas e suas subcategorias.
         * A categoria pode ser pai, e filha ao mesmo tempo. Desta forma, uma categoria x
         * pode ter y como subcategoria, e y ter z com subcategoria.
         *
         * @return Array de objetos Categoria com suas subcategorias
         */
        public function getCategorias();

        /**
         * Recupera todas as categorias filhas de uma determinada categoria.
         *
         * @param $parent Categora pai, considerar como nó raiz
         * @return Array de subcategorias
         */
        public function getSubCategorias($parent);

        /**
         * Recupera uma categoria do banco de dados.
         *
         * @param $cat_id Identificador único da categoria
         * @return Objeto Categoria
         */
        public function getCategoria($cat_id);

        /**
         * Cadastra uma categoria no banco de dados.
         *
         * @param $categoria
         * @return mixed
         */
        public function cadastrarCategoria($categoria);

        /**
         * Remove uma categoria do banco de dados. As subcategorias devem ter o atributo parent nos filhos
         * deve ser setado para null.
         *
         * @param $cat_id Identificador da categoria que será removida
         * @return true caso seja removida com sucesso
         */
        public function removerCategoria($cat_id);

        /**
         * Remove a categoria em cascata. Todas as subcategorias serão removidas, bem como também suas respectivas
         * categorias filhas.
         *
         * @param $cat_id Identificador da categoria que será removida
         * @return true caso a remoção seja realizada com sucesso
         */
        public function removerCategoriaCascata($cat_id);

        /**
         * Altera um categoria existente.
         *
         * @param $catAntiga Categoria a ser atualizada
         * @param $catAlterada Categoria com os atributos alterados
         * @return true caso a alteração seja realizada com sucesso
         */
        public function alterarCategoria($catAntiga, $catAlterada);

}
