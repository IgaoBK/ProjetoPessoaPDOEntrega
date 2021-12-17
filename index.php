<!DOCTYPE html>

<?php
session_start();
if (isset($_SESSION['logadoT']) && $_SESSION['logadoT'] == true) {
    echo $_SESSION['usuarioT'] . " | " . $_SESSION['emailT'];
    echo " | <a href='controller/logout.php'>Sair</a>";
} else {
    header("location: view/login.php");
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Teste</title>
    </head>
    <body>
        <h1>Teste de Criptografia</h1>
        <h2>Criptografias, Session, Autenticação, CRUD </h2>
        <p></p>
        <a href="view/cadUsuario.php">!!! Registro de usuarios !!!</a>
        <a href="view/cadPessoaF.php">!!!Registro de Pessoa Física !!!</a>
        <a href="view/cadPessoaJ.php">!!! Registro De Pessoa Jurídica !!!</a>
    </body>
</html>
