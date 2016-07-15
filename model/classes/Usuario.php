<?php

/**
 * Created by PhpStorm.
 * User: julio
 * Date: 15/07/16
 * Time: 18:00
 */
class Usuario{

    var $id;
    var $username;
    var $senha;
    var $email;

    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;
    }


    public function getUsername()
    {
        return $this->username;
    }


    public function setUserName($username)
    {
        $this->username = $username;
    }


    public function getSenha()
    {
        return $this->senha;
    }


    public function setSenha($senha)
    {
        $this->senha = $senha;
    }


    public function getEmail()
    {
        return $this->email;
    }


    public function setEmail($email)
    {
        $this->email = $email;
    }


}