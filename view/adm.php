<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Advogacia</title>
    <meta charset="utf-8">
    <meta name="author" content="Júlio Vilar Melo">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/adm.css">
    <!--[if lt IE 9]>
    <script src="../advogacia/js/html5shiv.js"></script>
    <![endif]-->
</head>
<body>

<?php
    include ('header.html');
?>

<main>
    <div class="content">
        <div class="panel">
            <h2>Gerenciador de conteúdo</h2>
            <form id="form">
                <label for="inputSetor">Selecione o local da alteração</label>
                <select form="form" name="setor" id="inputSetor">
                    <option value="Selecione" disabled="true">Selecione...</option>
                    <option value="servicos">Serviços</option>
                    <option value="equipe">Equipe</option>
                    <option value="escritorio">Escritório</option>
                    <option value="area1">Área de atuação 1</option>
                    <option value="area2">Área de atuação 2</option>
                    <option value="area3">Área de atuação 3</option>
                    <option value="area4">Área de atuação 4</option>
                    <option value="area5">Área de atuação 5</option>
                </select>
                <textarea form="form" rows="10" cols="50" placeholder="conteúdo" id="textConteudo"></textarea>
                <input class="btnAdm" type="submit" value="Salvar"/>
                <input class="btnAdm" type="reset" value="Limpar campos"/>
            </form>
        </div>
        <div class="imagem">
            <img src="assets/rsz_12.jpg" alt="">
        </div>
        <div class="clear"></div>
        <div class="panelLocalizacao">
            <h2>Localização</h2>
            <form action="">
            <label for="inputRua">Rua</label>
            <input type="text" size="100" id="inputRua"/>
            <label for="inputNumero">Número</label>
            <input type="text" size="4" id="inputNumero"/>
            <label for="inputBairro">Bairro</label>
            <input type="text" size="100" id="inputBairro"/>
            <label for="inputCidade">Cidade</label>
            <input type="text" size="100" id="inputCidade"/>
            <label for="inputCep">Cep</label>
            <input type="text" size="20" id="inputCep"/>
            <label for="inputComplemento">Complemento</label>
            <input type="text" size="100" id="inputComplemento"/><br>
            <label for="inputMapa">Mapa</label>
            <input type="text" size="100" id="inputMapa"/><br>
            <input class="btnAdm" type="submit" value="Salvar"/>
            <input class="btnAdm" type="reset" value="Limpar Campos"/>
            </form>
        </div>
    </div>
    <div class="clear"></div>
</main>
<div class="clear"></div>


<?php

    include ('footer.html');
?>
