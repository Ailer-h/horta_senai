<!-- AILER, VC TEM Q FAZER A FUNÇÃO EDITAR -->
<!-- VC VAI MANDAR UMA ESTRUTURA PRA OUTRA PG E USAR O ADD LÁ -->
<!-- NÃO ESQUECE -->

<?php

    session_start();


    //Busca os dados para serem editados com base no ID
    foreach($_SESSION['plantas'] as $planta){

        if($planta['id'] == $_POST['id']){
            $data = [

                'id' => $_POST['id'],
                'nome' => $planta['nome'],
                'tipo' => $planta['tipo'],
                'qtd' => $planta['qtd'],
                'tempo_colheita' => $planta['tempo_colheita'],
                'bloco' => $planta['bloco']

            ];         
        }

    }

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/edit.css">
    <link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon">
    <title>Editar</title>
</head>
<body>
    
<div class="center">
    <section id="formSection">
        <div class="form">
            <h1>Cadatrar Hortaliça</h1>
            <form action="database.php" method="post">

                <?php
                
                    echo'
                        <label for="nome">Nome:</label>
                        <input type="text" id="nome" name="nome" value='.$data["nome"].' required>

                        <label for="tipo">Tipo de Hortaliça:</label>
                        <input type="text" id="tipo" name="tipo" value='.$data["tipo"].' required>

                        <label for="qtd">Qtd. Plantada:</label>
                        <input type="text" id="qtd" name="qtd" value='.$data["qtd"].' required>

                        <label for="tempo"->Tempo pra colheita:</label>
                        <input type="text" id="tempo" name="tempo" value='.$data["tempo_colheita"].' required>

                        <label for="bloco">Bloco:</label>
                        <select name="bloco" id="bloco" name="bloco" required>
                            <option value="" disabled selected hidden>Selecione um bloco...</option>
                            <option value="1">Bloco 1</option>
                            <option value="2">Bloco 2</option>
                            <option value="3">Bloco 3</option>
                            <option value="4">Bloco 4</option>
                        </select>

                        <input type="submit" value="Confirmar" name="confirmar">
                    ';

                ?>
                
            </form>
        </div>
    </section>
</div>

</body>
</html>