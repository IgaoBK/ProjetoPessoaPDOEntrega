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

require_once '../controller/cPessoaFisica.php';

$cadPessoaF= new cPessoaFisica();

$listPessoaF=$cadPessoaF->getPessoaF();
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
                    <th>ID</th><th>NOME</th><th>TELEFONE</th><th>EMAIL</th><th>CPF</th><th>SEXO</th><th>FUNÇÕES</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listPessoaF as $pessoaF): ?>
                    <tr>
                        <td><?php echo $pessoaF ['idPessoa']; ?> </td>
                        <td> <?php echo $pessoaF ['nome']; ?> </td>
                        <td> <?php echo $pessoaF ['telefone']; ?> </td>
                        <td> <?php echo $pessoaF ['email']; ?> </td>
                        <td> <?php echo $pessoaF ['cpf']; ?> </td>
                        <td> <?php echo $pessoaF ['sexo']; ?> </td>
                        <td> 
                            <form action="../controller/deletePessoaF.php" method="POST"/>
                                <input type="hidden" name="idPessoa" value="<?php echo $pessoaF["idPessoa"]; ?>">
                                <input type="submit" name="deletePessoaF" value="Deletar"/>
                            </form>
                            <form action="editarPessoaF.php" method="POST">
                                <input type="hidden" name="idPessoa" value="<?php echo $pessoaF["idPessoa"]; ?>"/>
                                <input type="submit" name="UpdatePessoaF" value="Editar"/>
                            </form>
                        </td>
                    </tr>
                    <?php
                endforeach;
                ?>
            </tbody>
            <?php ?>
    </body>
</html>