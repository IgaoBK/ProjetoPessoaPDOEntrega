<!DOCTYPE html>

<?php
require_once '../controller/cLogin.php';
$login = new cLogin();

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>!!! Login !!!</h1>
        <form action="<?php $login->login() ?>"method="POST">
             <form method="POST">
            <input type='email' name='email' placeholder="email Aqui..."/>
            <br><br>
            <input type='password' name='pas' placeholder="senha Aqui..."/>
            <br><br>
            <input type='submit' name='logar' value='logar'/>
            <input type='reset' name='limpar' value="limpar"/>
             </form>
        <?php
//test
        ?>
    </body>
</html>
