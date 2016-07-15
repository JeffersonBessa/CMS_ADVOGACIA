<?php

/**
 * Created by PhpStorm.
 * User: julio
 * Date: 15/07/16
 * Time: 18:14
 */
class Localizacao{

    var $id_localizacao;
    var $rua;
    var $bairro;
    var $cep;
    var $numero;
    var $complemento;
    var $mapa;


    public function getRua()
    {
        return $this->rua;
    }


    public function setRua($rua)
    {
        $this->rua = $rua;
    }


    public function getIdLocalizacao()
    {
        return $this->id_localizacao;
    }


    public function setIdLocalizacao($id_localizacao)
    {
        $this->id_localizacao = $id_localizacao;
    }


    public function getBairro()
    {
        return $this->bairro;
    }


    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
    }


    public function getCep()
    {
        return $this->cep;
    }

    public function setCep($cep)
    {
        $this->cep = $cep;
    }


    public function getNumero()
    {
        return $this->numero;
    }
    
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }


    public function getComplemento()
    {
        return $this->complemento;
    }


    public function setComplemento($complemento)
    {
        $this->complemento = $complemento;
    }


    public function getMapa()
    {
        return $this->mapa;
    }


    public function setMapa($mapa)
    {
        $this->mapa = $mapa;
    }
}