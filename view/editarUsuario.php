<!DOCTYPE html>

<?php
session_start();
if (isset($_SESSION['logadoT']) && $_SESSION['logadoT'] == true) {
    echo $_SESSION['usuarioT'] . " | " . $_SESSION['emailT'];
    echo " | <a href='../controller/cLogout.php'>Sair</a>";
} else {

    header("location: login.php");
}
require_once '../controller/cUsuario.php';
$cadUser = new cUsuario();
$Users = null;
if (isset($_POST['Update'])) {
    $Usuarios = $cadUser->getUsuarioById($_POST['idUser']);
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <h2>Editar Usuario</h2>
    <form action="../controller/updateUser.php" method="Post">
        <input type="hidden" name="idUser" value="<?php echo $Usuarios[0]['idUser']; ?>"/>
        <label>Nome:</label>
        <input value="<?php echo $Usuarios[0]['nome']; ?>" type="text" name="nome" id="nome"/>
        <br>
        <br>
        <label>Email:</label>
        <input value="<?php echo $Usuarios[0]['email']; ?>" type="email" name="email" id="email" />
        <br>
        <br>
        <input type="submit" value="Salvar" name="Update" />
    </form>
    <body>
        <?php ?>
    </body>
</html>
