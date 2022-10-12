<div class="text-center">FORMULÁRIO DE CONTACTO <br></div>

<?php
if(isset($_GET['r'])){
    if($_GET['r']=='emailok'){ ?>
      <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
          Contacto enviado com sucesso
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div> 
   <?php } if($_GET['r']=='empty'){ ?>
      <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
          Preencha email e mensagem para enviar o contacto
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div> 
   <?php }
   } ?>
  <form action="email.php" method="get">
    <div class="mb-3">
        <label class="form-cont-name">Nome</label>
        <input class="form-control" id="form-cont-name" name="form-cont-name" require>
    </div>
    <div class="mb-3">
      <label for="form-cont-email" class="form-label">Email</label>
      <input type="email" class="form-control" id="form-cont-email" name="form-cont-email" require>
    </div>
    <div class="mb-3">
      <label class="form-cont-assunto">Assunto</label>
      <input class="form-control" id="form-cont-assunto" name="form-cont-assunto" require>
    </div>
    <div class="mb-3">
      <label for="form-cont-mensagem" class="form-label">Mensagem</label>
      <textarea class="form-control" id="form-cont-mensagem" name="form-cont-mensagem" rows="3" require></textarea>
    </div>

    <button type="submit" class="btn btn-1">Enviar</button>
    
  </form>

  