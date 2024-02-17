<?php

    session_start();

    //Funções necessárias
    function delInformacao($id){

        if(!empty($_SESSION['plantas'])){
            
            foreach($_SESSION['plantas'] as $ix => $planta){
                if($planta['id'] === $id){
                    unset($_SESSION['plantas'][$ix]);
                    break;
                }
            }

        }

    }

    function table($bloco){

        if(!empty($_SESSION['plantas'])){
            foreach($_SESSION['plantas'] as $planta){
                if($planta['bloco'] == $bloco){
                    echo '<p>'.$planta['nome'].'</p>';
                    echo '<p>'.$planta['tipo'].'</p>';
                    echo '<p>'.$planta['qtd'].'</p>';
                    echo '<p>'.$planta['tempo_colheita'].'</p>';
                    echo '<form method="post"><input type="hidden" name="id" value="'.$planta['id'].'"><input type="submit" value="Deletar" name="deletar"</form>';
                    echo '<form method="post"><input type="hidden" name="id" value="'.$planta['id'].'"><input type="submit" value="Editar" name="editar"</form>';
                }
            }
        }

    }


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/database.css">
    <link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon">
    <title>Hortaliças Cadastradas</title>
</head>
<body>
    
    <div class="navbar">
        <div class="menu">
            <a href="../index.php"><button class="option">Adicionar planta</button></a>
            <div class="block-select">
                <button class="block-option" onclick="goToSection('bloco1')">Bloco 1</button>
                <button class="block-option" onclick="goToSection('bloco2')">Bloco 2</button>
                <button class="block-option" onclick="goToSection('bloco3')">Bloco 3</button>
                <button class="block-option" onclick="goToSection('bloco4')">Bloco 4</button>
            </div>
        </div>
    </div>

    <div class="center">
        <div class="database">
            <section id="bloco1">
                <div class="bloco">
                    <h1>Bloco 1</h1>
                    <div class="tabela">
                        <?php
                            table(1);
                        ?>
                    </div>
                </div>
            </section>

            <section id="bloco2">
                <div class="bloco">
                    <h1>Bloco 2</h1>
                    <div class="tabela">
                        <?php
                            table(2);
                        ?>
                    </div>
                </div>
            </section>

            <section id="bloco3">
                <div class="bloco">
                    <h1>Bloco 3</h1>
                    <div class="tabela">
                        <?php
                            table(3);
                        ?>
                    </div>
                </div>
            </section>

            <section id="bloco4">
                <div class="bloco">
                    <h1>Bloco 4</h1>
                    <div class="tabela">
                        <?php
                            table(4);
                        ?>
                    </div>
                </div>
            </section>

        </div>
    </div>

</body>
<script src="../js/functions.js"></script>
</html>