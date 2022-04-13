<?php
include_once("header.php");
?>

<div class="quadrado">
    <form class="formulario">
    <img class="logo" src="../view/img/logo_empresa.png">
        <div id="input" class="col-6">
            <label for="exampleInputEmail1" class="form-label">Email </label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div id="input" class="col-6">
            <label for="exampleInputPassword1" class="form-label">Senha</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="button" id="btn3" class="btn btn_cadastro"> Entra </button>
        <button type="submit" class="btn btn_cadastro"> Cadastra </button>
    </form>
</div>

<?php
include_once("footer.php");
?>