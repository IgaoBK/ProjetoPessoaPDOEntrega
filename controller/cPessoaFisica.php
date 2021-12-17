<?php
/**
 * Description of cPessoaFisica
 *
 * @author Igor
 */
class cPessoaFisica {

    public function inserirPessoaF() {
        if (isset($_POST['salvar'])) {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $telefone = $_POST['telefone'];
            $endereco = $_POST['endereco'];
            $cpf = $_POST['cpf'];
            $sexo = $_POST['sexo'];

            $pdo = require '../pdo/connection.php';
            $sql = "insert into pessoa (nome, email, telefone, endereco, cpf, sexo) values (?,?,?,?,?,?)";
            $Statement = $pdo->prepare($sql);
            $Statement->bindParam(1, $nome, PDO::PARAM_STR);
            $Statement->bindParam(2, $email, PDO::PARAM_STR);
            $Statement->bindParam(3, $telefone, PDO::PARAM_STR);
            $Statement->bindParam(4, $endereco, PDO::PARAM_STR);
            $Statement->bindParam(5, $cpf, PDO::PARAM_STR);
            $Statement->bindParam(6, $sexo, PDO::PARAM_STR);
            $Statement->execute();
            header("location: cadPessoaF.php");
            
            unset($Statement);
            unset($pdo);
        }
    }

    public function getPessoaF() {
        $pdo = require_once '../pdo/connection.php';
        $sql = "select idPessoa, nome, telefone, email, endereco, cpf, sexo from pessoa where cnpj is null";
        $sth = $pdo->prepare($sql);
        $sth->execute();
        $result = $sth->fetchAll();
        return $result;
        
        unset($sth);
        unset($pdo);
    }

    public function getPessoaFById($idPessoa) {
        $pdo = require_once '../pdo/connection.php';
        $sql = "select  idPessoa, nome, telefone, email, endereco, cpf, sexo from pessoa where idPessoa= ?";
        $sth = $pdo->prepare($sql);
        $sth->execute([$idPessoa]);
        $result = $sth->fetchAll();
        
        unset($sth);
        unset($pdo);
        return $result;
    }
    
    
}
