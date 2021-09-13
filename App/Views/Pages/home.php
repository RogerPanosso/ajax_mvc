<section>
  <div class="container">
    <div class="row mb-0">
      <div class="col-md-12 order-1 mt-5 mb-3">
        <div class="page-header">
          <h3 class="bd-lead text-center">Cadastrar Usuário.</h3>
        </div>
      </div>
    </div>
    <div class="row mb-0">
      <div class="col-md-12 order-1">
        <a class="link-striped" href="http://localhost/ajax_mvc/pessoas">Pessoas</a>
        <div class="alert alert-warning fade show shadow-sm bd-lead text-center" role="alert">
          <small class="mb-0">
            Preencha os campos abaixo corretamente perante o formulário. Realizando o cadastro de usuário
          </small>
        </div>
        <div id="result">
          <!-- result da requisição interna ajax -->
        </div>
      </div>
    </div>
    <div class="row mb-0">
      <div class="col-md-12 order-1 mb-0">
        <!-- Início estrutura "form" contendo id para ser acessado e manipulado para requisição via AJAX -->
        <form id="cadastro" method="POST" action="http://localhost/ajax_mvc/ajax/salvarCadastro/">
          <div class="form-group">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" class="form-control" placeholder="Nome" autocomplete="off" id="nome"/>
          </div>
          <div class="form-group">
            <label for="email" class="form-label">E-Mail</label>
            <input type="email" name="email" class="form-control" placeholder="exemplo@hotmail.com" autocomplete="off" id="email"/>
          </div>
          <div class="form-group">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" name="senha" class="form-control" placeholder="Senha" autocomplete="off" id="senha"/>
          </div>
          <div class="form-group d-flex justify-content-center">
            <button type="submit" class="btn btn-success w-50 my-3 p-2">Cadastrar</button>
          </div>
        </form>
        <!-- Fim -->
      </div>
    </div>
  </div>
</section>
