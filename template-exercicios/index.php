<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/CSS/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Alkalami&family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Curso PHP</title>
</head>
    <body>
        <header class="cabecalho">
            <h1>Curso PHP</h1>
            <h2>Índice dos Exercícios</h2>
        </header>
        
        <main class="principal">
            <div class="conteudo">
               <nav class="modulos">
                    <div class="modulo verde">
                        <h3>Módulo 01 - Básico</h3>
                        <ul>
                            <li><a href="exercicio.php?dir=teste&file=teste">Exercício A</a></li>
                        </ul>
                    </div>     
               </nav>
            </div>
        </main>
        
        <footer class="rodape">
            COD3R & ALUNOS &COPY; <?= date('Y'); ?>
        </footer>
    </body>
</html>