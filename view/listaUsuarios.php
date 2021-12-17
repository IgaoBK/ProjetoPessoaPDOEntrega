<!DOCTYPE html>
<?php
session_start();
if (isset($_SESSION['logadoT']) && $_SESSION['logadoT'] == true) {
    echo $_SESSION['usuarioT'] . " | " . $_SESSION['emailT'];
    echo " | <a href='../controller/logout.php'>Sair</a>";
} else {
    header("location: login.php");
}
require_once '../controller/cUsuario.php';
$cadUser = new cUsuario();
$listUsers = $cadUser->getUsuarios();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <table><
            <thead>
                <tr>
                    <th>id</th><th>Usuário</th><th>E-mail</th><th>Funções</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listUsers as $user): ?>
                    <tr>
                        <td><?php echo $user ['idUser']; ?> </td>
                        <td> <?php echo $user ['nome']; ?> </td>
                        <td> <?php echo $user ['email']; ?> </td>
                        <td> 
                            <form action="../controller/deleteUser.php" method="POST">
                                <input type="hidden" name="idUser" value="<?php echo $user["idUser"]; ?>"/>
                                <input type="submit" name="deleteUser" value="delete"/>
                            </form>
                            <form action="editarUsuario.php" method="POST">
                                <input type="hidden" name="idUser" value="<?php echo $user["idUser"]; ?>"/>
                                <input type="submit" name="Update" value="editar"/>
                            </form>
                    </tr>
                    <?php
                endforeach;
                ?>
            </tbody>
            <?php
            ?>
    </body>
</html>
