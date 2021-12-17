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
require_once '../controller/cPessoaFisica.php';
$cadPessoaF = new cPessoaFisica();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Cadastro de Pessoa Física</h1>
        <form action="<?php $cadPessoaF->inserirPessoaF() ?>"method="POST">
            <form method="POST">
                <input type='text' name='nome' placeholder="nome Aqui..."/>
                <br><br>
                
                <input type='email' name='email' placeholder="email Aqui..."/>
                <br><br>
                
                <input type='text' name='telefone' placeholder="telefone Aqui..."/>
                <br><br>
                
                <input type='text' name='endereco' placeholder="endereço Aqui..."/>
                <br><br>
                
                <input type='text' name='cpf' placeholder="copf Aqui..."/>
                <br><br>
                
                <input type="radio" value="F" name="sexo"/>Feminino
                <input type="radio" value="M" name="sexo"/>Masculino
                <br><br>
                
                <input type='submit' name='salvar' value='salvar'/>
                <input type='reset' name='limpar' value="limpar"/> 
                <input type="button" name="voltar" value="voltar" onclick="location.href = '../index.php'" />
                <input type="button" name="listar" value='listar' onclick="location.href = 'listaPessoaF.php'"/>
                </body>
                
                </html>
