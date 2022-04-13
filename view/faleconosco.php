<?php
    include_once("header.php");
?>

<body>
    <div class="card w-75">
      <div class="card-body">
        <h5 class="card-title">Fale conosco</h5>
        <p class="card-text">Deixe aqui na caixa de mensagem suas dúvidas</p>

        <form>
          <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="inputEmail3">
            </div>


          </div>
          <div class="row mb-3">
            <label for="inputnome3" class="col-sm-2 col-form-label">Nome</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputnome3">
            </div>
          </div>

          <div class="card">
            <div class="card-header">
              Deixe aqui o seu comentario 
            </div>
            <div class="card-body">
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea><br>
        
              <button type="submit" class="btn btn-primary" style="background-color:#52B2C1; border-color:#52B2C1">Enviar</button>
            </div>
          </div>
      </div>
    </div>
</div>
<?php
    include_once("footer.php");
?>

