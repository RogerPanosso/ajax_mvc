<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12 order-1 mt-5 mb-3">
        <div class="page-header">
          <h3 class="bd-lead text-dark">Cadastrar Pessoas.</h3>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 order-1">
        <div id="result">
          <!-- HTML obtido perante retorno da requisição ajax -->
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 order-1">
        <div class="card">
          <div class="card-header">
            <small class="text-muted mb-0">Formulário de cadastro de pessoas</small>
          </div>
          <div class="card-body">
            <!-- Início estrutura "form" de cadastro -->
            <form id="pessoas" method="POST" action="http://localhost/ajax_mvc/ajaxpessoas/salvarCadastro">
              <div class="form-row">
                <div class="col-md-6 order-1 mb-1">
                  <div class="form-group">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" name="nome" class="form-control" autocomplete="off" autofocus placeholder="Nome" id="nome"/>
                  </div>
                </div>
                <div class="col-md-6 order-2 mb-1">
                  <div class="form-group">
                    <label for="email" class="form-label">E-Mail</label>
                    <input type="email" name="email" class="form-control" autocomplete="off" placeholder="exemplo@hotmail.com" id="email"/>
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-3 order-1 mb-1">
                  <div class="form-group">
                    <label for="telefone" class="form-label">Telefone</label>
                    <input type="tel" name="telefone" class="form-control" autocomplete="off" placeholder="(44) 0000-0000" id="telefone"/>
                  </div>
                </div>
                <div class="col-md-6 order-2 mb-1">
                  <div class="form-group">
                    <label for="endereco" class="form-label">Endereço</label>
                    <input type="text" name="endereco" class="form-control" autocomplete="off" placeholder="Rua José da Silva Nº 500" id="endereco"/>
                  </div>
                </div>
                <div class="col-md-3 order-3 mb-1">
                  <div class="form-group">
                    <label for="cidade" class="form-label">Cidade</label>
                    <input type="text" name="cidade" class="form-control" autocomplete="off" placeholder="Cidade" id="cidade"/>
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-12 order-1 mb-1">
                  <div class="form-group">
                    <label for="sobre" class="form-label">Sobre</label>
                    <textarea name="sobre" rows="5" class="form-control" autocomplete="off" placeholder="Sobre a pessoa..." id="sobre"></textarea>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-success btn-block">Cadastrar</button>
            </form>
            <!-- Fim estrutura "form" de cadastro -->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
