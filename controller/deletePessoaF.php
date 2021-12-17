<?php
if (isset($_POST['deletePessoaF'])) {
            $pdo= require_once '../PDO/connection.php';
            $id = $_POST['idPessoa'];
            $sql = "delete from pessoa where idPessoa = $id";
            
            $sth=$pdo->prepare($sql);
            
            $sth->execute();
            
            unset($sth);
            unset($pdo);
            
            header('Location: ../view/listaPessoaF.php'); //recarrecar a página F5
        }

