<?php
session_start();
if (isset($_SESSION['logadoT']) && $_SESSION['logadoT'] == true) {
    echo $_SESSION['usuarioT'] . " | " . $_SESSION['emailT'];
    echo " | <a href='../controller/cLogout.php'>Sair</a>";
} else {

    header("location: login.php");
}
require_once '../controller/cPessoaJ.php';
$cadPessoaJ = new cPessoaJ();
$pessoasJ = null;
if (isset($_POST['UpdatePessoaJ'])) {
    $pessoasJ = $cadPessoaJ->getPessoaJById($_POST['idPessoa']);
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <h2>Editar Pessoa Jurídica</h2>
    <form action="../controller/updatePessoaJ.php" method="Post">
        
        <input type="hidden" name="idPessoa" value="<?php echo $pessoasJ[0]['idPessoa']; ?>"/>
        <label>Nome:</label>
        
        <input value="<?php echo $pessoasJ[0]['nome']; ?>" type="text" name="nome" id="nome"/>
        <br>
        
        <label>Telefone:</label>
        <input value="<?php echo $pessoasJ[0]['telefone']; ?>" type="text" name="telefone" id="telefone"/>
        <br>
        
        <label>E-Mail:</label>
        <input value="<?php echo $pessoasJ[0]['email']; ?>" type="text" name="email" id="email"/>
        <br>
        
        <label>CNPJ:</label>
        <input value="<?php echo $pessoasJ[0]['cnpj']; ?>" type="text" name="cnpj" id="cnpj"/>
        <br>
        
        <label>Nome Fantasia:</label>
        <input value="<?php echo $pessoasJ[0]['nomeFantasia']; ?>" type="text" name="nomeFantasia" id="nomeFantasia"/>
        <br>
        
        <br>
        
        <br>
        
        <input type="submit" value="Salvar" name="UpdatePessoaJ" />
    </form>
    <body>
        <?php
        // put your code here
        ?>
    </body>
</html>