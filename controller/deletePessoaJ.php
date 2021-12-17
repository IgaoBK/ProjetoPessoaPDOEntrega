<?php
if (isset($_POST['deletePessoaJ'])) {
            $pdo= require_once '../PDO/connection.php';
            $id = $_POST['idPessoa'];
            $sql = "delete from pessoa where idPessoa = $id";
            
            $sth=$pdo->prepare($sql);
            
            $sth->execute();
            
            unset($sth);
            unset($pdo);
            
            header('Location: ../view/listaPessoaJ.php');
        }

