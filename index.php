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
            <button class="option" onclick="goToForm('formSection')">Adicionar planta</button>
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
                <h1>Cadatrar Hortaliça</h1>
                <form action="index.php" method="post">

                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" required>

                    <label for="tipo">Tipo de Hortaliça:</label>
                    <input type="text" id="tipo" nome="tipo" required>

                    <label for="qtd">Qtd. Plantada:</label>
                    <input type="text" id="qtd" name="qtd" required>

                    <label for="tempo"->Tempo pra colheita:</label>
                    <input type="text" id="tempo" name="tempo" required>

                    <label for="bloco">Bloco:</label>
                    <select name="bloco" id="bloco" required>
                        <option value="" disabled selected hidden>Selecione um bloco...</option>
                        <option value="1">Bloco 1</option>
                        <option value="2">Bloco 2</option>
                        <option value="3">Bloco 3</option>
                        <option value="4">Bloco 4</option>
                    </select>

                    <input type="submit" value="Cadastrar">
                </form>
            </div>
        </section>
    </div>
    

</body>
<script src="js/functions.js"></script>
</html>