<?php

    session_start();

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['confirmar'])) {

        $dataStr = [

            'id' => $_POST['id'],
            'nome' => $_POST['nome'],
            'tipo' => $_POST['tipo'],
            'qtd' => $_POST['qtd'],
            'tempo_colheita' => $_POST['tempo'],
            'bloco' => $_POST['bloco']

        ];

        editInformation($_POST['id'], $dataStr);
        header('Location: database.php');
        exit;
    }


    //Busca os dados para serem editados com base no ID
    foreach ($_SESSION['plantas'] as $planta) {

        if ($planta['id'] == $_POST['id']) {
            $data = [

                'id' => $_POST['id'],
                'nome' => $planta['nome'],
                'tipo' => $planta['tipo'],
                'qtd' => $planta['qtd'],
                'tempo_colheita' => $planta['tempo_colheita'],
                'bloco' => $planta['bloco']

            ];
            break;
        }
    }

    function editInformation($id, $dataStructure){

        if (!empty($_SESSION['plantas'])) {
            foreach ($_SESSION['plantas'] as $ix => $planta) {
                if ($planta['id'] === $id) {
                    $_SESSION['plantas'][$ix] = $dataStructure;
                    break;
                }
            }
        }
    }

    function printCanteiro($canteiro){

        echo '<label for="bloco">Canteiro:</label>
              <select name="bloco" id="bloco" name="bloco" required>';

        if($canteiro == 1){

            echo '<option value="1" selected>Canteiro 1</option>
                  <option value="2">Canteiro 2</option>
                  <option value="3">Canteiro 3</option>
                  <option value="4">Canteiro 4</option>';

        }else if($canteiro == 2){

            echo '<option value="1">Canteiro 1</option>
                  <option value="2" selected>Canteiro 2</option>
                  <option value="3">Canteiro 3</option>
                  <option value="4">Canteiro 4</option>';

        }else if($canteiro == 3){

            echo '<option value="1">Canteiro 1</option>
                  <option value="2">Canteiro 2</option>
                  <option value="3" selected>Canteiro 3</option>
                  <option value="4">Canteiro 4</option>';

        }else{

            echo '<option value="1">Canteiro 1</option>
                  <option value="2">Canteiro 2</option>
                  <option value="3">Canteiro 3</option>
                  <option value="4" selected>Canteiro 4</option>';

        }

        echo '</select>';

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
                <h1>Editar Hortaliça</h1>
                <form action="edit.php" method="post">
                    <?php

                    echo '
                        <input  type="hidden" name="id" value='.$_POST['id'].'>
                        <label for="nome">Nome:</label>
                        <input type="text" id="nome" name="nome" value=' . $data["nome"] . ' oninput="letters_js(this.value,this)" required>

                        <label for="tipo">Tipo de Hortaliça:</label>
                        <input type="text" id="tipo" name="tipo" value=' . $data["tipo"] . ' required>

                        <label for="qtd">Qtd. Plantada:</label>
                        <input type="number" min="1" step="1" id="qtd" name="qtd" onkeydown="int_js()" value='. $data['qtd'] .' required>

                        <label for="tempo"->Tempo pra colheita (Em messes):</label>
                        <input type="number" min="1" step="1" id="tempo" name="tempo" onkeydown="int_js()" value=' . $data["tempo_colheita"] . ' required>';
                        
                        printCanteiro($data['bloco']);

                        echo '<input type="submit" value="Confirmar" name="confirmar">';

                    ?>

                </form>
            </div>
        </section>
    </div>

</body>
<script src="../js/functions.js"></script>
</html>