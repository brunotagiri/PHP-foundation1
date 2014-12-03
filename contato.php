<?php require_once 'cabecalho.php'; ?>
<?php require_once 'menu.php'; ?>
      
    <form action="usuario.php" method="GET" class="form-horizontal">
        <div class="control-group">
          <label class="control-label" for="nome">Nome</label>
          <div class="controls">
            <input type="text" id="nome" name="nome" placeholder="Nome">
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="email">Email</label>
          <div class="controls">
            <input type="text" id="email" name="email" placeholder="Email">
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="assunto">Assunto</label>
          <div class="controls">
            <input type="text" id="assunto" name="assunto" placeholder="Assunto">
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="mensagem">Mensagem</label>
          <div class="controls">
              <textarea rows="3" id="mensagem" name="mensagem" placeholder="Digite sua mensagem"></textarea>
          </div>
        </div>
        <div class="control-group">
          <div class="controls">
            <button type="submit" class="btn">Sign in</button>
          </div>
        </div>
    </form>
      
<?php require_once 'rodape.php'; ?>