<?php
 if (isset($_POST['deleteUser'])) {
            $pdo= require_once '../PDO/connection.php';
            $id = $_POST['idUser'];
            $sql = "delete from usuario where idUser = $id";
            $sth=$pdo->prepare($sql);
            $sth->execute();
            unset($sth);
            unset($pdo);
            header('Location: ../view/listaUsuarios.php');
        }
