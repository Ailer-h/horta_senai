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
                <div class="bloco"></div>
            </section>

            <section id="bloco2">
                <div class="bloco"></div>
            </section>

            <section id="bloco3">
                <div class="bloco"></div>
            </section>

            <section id="bloco4">
                <div class="bloco"></div>
            </section>
        </div>
    </div>


</body>
<script src="../js/functions.js"></script>
</html>