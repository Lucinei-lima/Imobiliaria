<?php
require_once 'model/Imovel.php';

class ImovelController{

    public static function salvar(){

        $imovel = new Imovel();

        $imovel->setDescricao($_POST['descricao']);
        $imovel->setValor($_POST['valor']);
        $imovel->setTipo($_POST['tipo']);
        $imovel->setFoto($_POST['foto']);

        $imovel->save();
    }

    public static function listar(){
        $imoveis = new Imovel();
        return $imoveis->listAll();
    }
}

?>