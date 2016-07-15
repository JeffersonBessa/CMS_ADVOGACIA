<?php

$dataAcesso = date('d/m/Y');
$horaAcesso = date('H:i:s');
$IPusuario = $_SERVER['REMOTE_ADDR'];
$login = $_POST['form_login'];
$senha = $_POST['form_senha'];


if($login == "admin" && $senha == "admin") {

    session_start();

    echo "Bem vindo ao sistema!";

    $arquivoLog = fopen('logs/acessoPermitido.txt', 'a');

    fwrite($arquivoLog, "Registro de Acesso Permitido:  IP de Acesso: [" . $IPusuario . "]. Usuário: ". $login . ' em ' . $dataAcesso . "às ". $horaAcesso ."/n");
    fclose($arquivoLog);
    header('Location: index.php');

}else {

    $arquivoLog = fopen('logs/acessoNegado.txt', 'a');
    fwrite($arquivoLog, "Registro de Acesso Negado:  IP de Acesso: [" . $IPusuario . "]. Usuário: ". $login . ' em ' . $dataAcesso . "às ". $horaAcesso ."/n");
    fclose($arquivoLog);
    header('Location: Login.php');

}

?>