<!DOCTYPE html>
<?php
session_start();
if (isset($_SESSION['logadoT']) && $_SESSION['logadoT'] == true) {
    echo $_SESSION['usuarioT'] . " | " . $_SESSION['emailT'];
    echo " | <a href='../controller/logout.php'>Sair</a>";
} else {
    header("location: login.php");
}
?>
<?php
require_once '../controller/cPessoaJ.php';
$cadPessoaJ = new cPessoaJ();
$listPessoaJ = $cadPessoaJ->getPessoaJ();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>id</th><th>Nome</th><th>Telefone</th><th>E-mail</th><th>CNPJ</th><th>Nome Fantasia</th><th>Funções</th><!--cria Cabeçalho-->
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listPessoaJ as $pessoaJ): ?>
                    <tr>
                        <td><?php echo $pessoaJ ['idPessoa']; ?> </td>
                        <td> <?php echo $pessoaJ ['nome']; ?> </td>
                        <td> <?php echo $pessoaJ ['telefone']; ?> </td>
                        <td> <?php echo $pessoaJ ['email']; ?> </td>
                        <td> <?php echo $pessoaJ ['cnpj']; ?> </td>
                        <td> <?php echo $pessoaJ ['nomeFantasia']; ?> </td>
                        <td> 
                            <form action="../controller/deletePessoaJ.php" method="POST">
                                <input type="hidden" name="idPessoa" value="<?php echo $pessoaJ["idPessoa"]; ?>"/>
                                <input type="submit" name="deletePessoaJ" value="Deletar"/>
                            </form>
                            <form action="../view/editarPessoaJ.php" method="POST">
                                <input type="hidden" name="idPessoa" value="<?php echo $pessoaJ["idPessoa"]; ?>"/>
                                <input type="submit" name="UpdatePessoaJ" value="Editar"/>
                            </form>
                        </td>
                    </tr>
                    <?php
                endforeach;
                ?>
            </tbody>
            <?php
            ?>
    </body>
</html>