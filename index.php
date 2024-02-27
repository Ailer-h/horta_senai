<?php

    session_start();

    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cadastrar'])){
        addInformacao($_POST['nome'],$_POST['tipo'],$_POST['qtd'],$_POST['tempo'],$_POST['bloco']);
    }

    //Declaração das funções que serão utilizadas
    function addInformacao($nome, $tipo, $qtd, $tempo_colheita, $bloco){

        //Cria uma estrutura de dados para uma nova planta (~ JSON)
        $planta = [
            'id' => uniqid(), //Cria um id unico para cada elemento
            'nome' => $nome,
            'tipo' => $tipo,
            'qtd' => $qtd,
            'tempo_colheita' => $tempo_colheita,
            'bloco' => $bloco
        ];

        //Adiciona a informação ao array (Banco de dados)
        $_SESSION['plantas'][] = $planta;

    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <title>Horta Ouro Verde</title>
</head>
<body>

    <div class="navbar">
        <div class="menu">
            <button class="option" onclick="goToSection('formSection')">Adicionar planta</button>
            <a href="html/database.php"><button class="option">Visualizar database</button></a>
        </div>
    </div>

    <div class="banner">
        <div class="title">
            <h1>Horta Ouro Verde</h1>
            <h2>As melhores hortaliças da região!</h2>
        </div>
    </div>

    <div class="center">
    
        <section id="formSection">
            <div class="form">
                <h1>Cadastrar Hortaliça</h1>
                <form action="index.php" method="post">

                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" oninput="letters_js(this.value,this)" required>

                    <label for="tipo">Tipo de Hortaliça:</label>
                    <input type="text" id="tipo" name="tipo" required>

                    <label for="qtd">Qtd. Plantada:</label>
                    <input type="number" min="1" step="1" id="qtd" name="qtd" onkeydown="int_js()" required>

                    <label for="tempo"->Tempo pra colheita (Em meses):</label>
                    <input type="number" min="1" step="1" id="tempo" name="tempo" onkeydown="int_js()" required>

                    <label for="bloco">Canteiro:</label>
                    <select name="bloco" id="bloco" name="bloco" required>
                        <option value="" disabled selected hidden>Selecione um canteiro...</option>
                        <option value="1">Canteiro 1</option>
                        <option value="2">Canteiro 2</option>
                        <option value="3">Canteiro 3</option>
                        <option value="4">Canteiro 4</option>
                    </select>

                    <input type="submit" value="Cadastrar" name="cadastrar">
                </form>
            </div>
        </section>
    </div>
    

</body>
<script src="js/functions.js"></script>
</html>