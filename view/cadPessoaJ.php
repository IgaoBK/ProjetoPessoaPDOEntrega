<!DOCTYPE html>

<?php
session_start();
if (isset($_SESSION['logadoT']) && $_SESSION['logadoT'] == true) {
    echo $_SESSION['usuarioT'] . " | " . $_SESSION['emailT'];
    echo " | <a href='../controller/cLogout.php'>Sair</a>";
} else {

    header("location: login.php");
}
?>
<?php
require_once '../controller/cPessoaJ.php';
$cadPessoaJ = new cPessoaJ();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Cadastro de Pessoa Jurídica</h1>
        <form action="<?php $cadPessoaJ->inserirPessoaJ() ?>"method="POST">
            <form method="POST">
                
                <input type='text' name='nome' placeholder="nome Aqui..."/>
                <br><br>
                
                <input type='email' name='email' placeholder="eail Aqui..."/>
                <br><br>
                
                <input type='text' name='telefone' placeholder="telefone Aqui..."/>
                <br><br>
                
                <input type='text' name='endereco' placeholder="endereço Aqui..."/>
                <br><br>
                
                <input type='text' name='cnpj' placeholder="cnpj Aqui..."/>
                <br><br>
                
                <input type='text' name='nomeFantasia' placeholder="NFantasia Aqui..."/>
                <br><br>
                
                <input type='submit' name='salvar' value='salvar'/>
                <input type='reset' name='limpar' value="limpar"/> 
                <input type="button" name="voltar" value="voltar" onclick="location.href = '../index.php'" />
                <input type="button" name="listar" value='listar' onclick="location.href = 'listaPessoaJ.php'"/>
                </body>
                
                </html>
