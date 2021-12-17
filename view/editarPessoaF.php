<?php
session_start();
if (isset($_SESSION['logadoT']) && $_SESSION['logadoT'] == true) {
    echo $_SESSION['usuarioT'] . " | " . $_SESSION['emailT'];
    echo " | <a href='../controller/cLogout.php'>Sair</a>";
} else {

    header("location: login.php");
}
require_once '../controller/cPessoaFisica.php';
$cadPessoaF = new cPessoaFisica();
$pessoass = null;
if (isset($_POST['UpdatePessoaF'])) {
    $pessoass = $cadPessoaF->getPessoaFById($_POST['idPessoa']);
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <h2>Editar Pessoa</h2>
    <form action="../controller/updatePessoaF.php" method="Post">
        <input type="hidden" name="idPessoa" value="<?php echo $pessoass[0]['idPessoa']; ?>"/>
        <label>Nome:</label>
        <input value="<?php echo $pessoass[0]['nome']; ?>" type="text" name="nome" id="nome"/>
        <br>
        <label>Telefone:</label>
        <input value="<?php echo $pessoass[0]['telefone']; ?>" type="text" name="telefone" id="telefone"/>
        <br>
        <label>Endereço:</label>
        <input value="<?php echo $pessoass[0]['endereco']; ?>" type="text" name="endereco" id="endereco"/>
        <br>
        <label>E-Mail:</label>
        <input value="<?php echo $pessoass[0]['email']; ?>" type="text" name="email" id="email"/>
        <br>
        <label>CPF:</label>
        <input value="<?php echo $pessoass[0]['cpf']; ?>" type="text" name="email" id="email"/>
        <br>
        <br>
        <br>
        <input type="submit" value="Salvar" name="UpdatePessoaF" />
    </form>
    <body>
        <?php ?>
    </body>
</html>
