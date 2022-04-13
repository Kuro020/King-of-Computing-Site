<?php
include_once("header.php");
?>

<body>

    <h1 class="titulo"> Cadastre-se </h1>
      <div class="logo_empresa">
        <img src="../view/img/logo_empresa.png">
      </div>

  <form id="formulario"> 
      <div class="col-6">
        <label for="inputNome" class="form-label"></label>
        <input type="text" class="form-control" id="inputNome" placeholder="Nome">
      </div>

      <div class="col-6">
        <label for="inputCPF" class="form-label"> </label>
        <input type="text" class="form-control" id="inputCPF" placeholder="CPF">
      </div>

      <div class="col-6">
        <label for="inputEmail" class="form-label"></label>
        <input type="text" class="form-control" placeholder="E-mail" id="inputEmail">
      </div>

      <div class="col-6">
        <label for="formGroupExampleInput2" class="form-label"></label>
        <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="Senha">
      </div>

      <!--Data Nascimento-->
      <div class="col-6">
        <label for="inputData" class="form-label"></label>
        <input type="date" class="form-control" id="inputData">
      </div>

      <div class="col-6">
        <label for="formGroupExampleInput2" class="form-label"></label>
        <input type="tell" class="form-control" id="formGroupExampleInput2" placeholder="Telefone">
      </div>

      <!--Endereço-->
      <div class="col-6">
        <label for="inputAddress2" class="form-label"></label>
        <input type="text" class="form-control" placeholder="Endereço" id="inputAddress2">
      </div>

      <div class="col-6">
        <label for="inputAddress2" class="form-label"> </label>
        <input type="text" class="form-control" placeholder="CEP" id="inputAddress2">
      </div>

      <!--Botões-->
      <div class="botao">
        <button type="button" class="btn btn_cadastro"> Entra </button>
        <button type="submit" class="btn btn_cadastro"> Cadastra </button>
      </div>
  </form>

  </div>

  <div id="rodape">
      <?php
        include_once("footer2.php");
      ?>
  </div>