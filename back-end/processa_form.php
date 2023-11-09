<?php
   print_r($_GET);

    // print_r($_GET);
    $nome = $_GET['nome'];
    $idade = $_GET['idade'];

    echo '<h1>Dados de Usuário</1>';
    echo '<hr>';
    echo "<p>0 usuário $nome tem $idade anos.</p>";

    echo '<a href="http://localhost/udesc/index.html"><button>Home Page</button></a>';
    echo '<button type="button" onclick="javascript:history.back()">Voltar</button>';
    echo '<button onclick="window.location.href=\'https:\\www.udesc.br\'">Vai para Udesc</button>';
?>