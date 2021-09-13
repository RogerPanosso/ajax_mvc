//define codigo jquery selecionando no documento(página) elemento HTML(form) bloqueando ação de envio
$(document).ready(function(){
  $("#cadastro").on("submit", function(event){
    event.preventDefault();

    //seleciona elemento "form" através do padrão DOM
    let form = document.getElementById("cadastro");
    let nome = $("#nome").val();
    let email = $("#email").val();
    let senha = $("#senha").val();

    if(nome == "") {
      window.alert("por favor informe um nome valido");
      return false;
    }

    if(email == "" || email.indexOf("@") == -1) {
      window.alert("por favor informe um email valido");
      return false;
    }

    if(senha == "") {
      window.alert("por favor informe uma senha valida contendo no minímo cinco caracteres");
      return false;
    }

    //realiza requisição interna ajax
    $.ajax({
      type:"POST",
      url:"http://localhost/ajax_mvc/ajax/salvarCadastro/",
      dataType:"json",
      data:{
        nome:nome,
        email:email,
        senha:senha
      },
      success:function(json) {
        $("#result").html(json.msg);
        $("#result").css("color", "#006600");
      },
      error:function(json) {
        $("#result").html(json.msg);
        $("#result").css("color", "#888888");
      }
    });
  })
});

//define codigo jquery selecionando no documento(página) elemento HTML(form) bloqueando ação de envio
$(document).ready(function(){
  $("#pessoas").on("submit", function(event){
    event.preventDefault();

    //seleciona elemento "form" através do padrão DOM
    let formPessoas = document.getElementById("pessoas");
    let nome = $("#nome").val();
    let email = $("#email").val();
    let telefone = $("#telefone").val();
    let endereco = $("#endereco").val();
    let cidade = $("#cidade").val();
    let sobre = $("#sobre").val();

    if(nome == "" || nome.length <= 2) {
      window.alert("Por favor informe um nome valido");
      return false;
    }

    if(email == "" || email.indexOf("@") == -1) {
      window.alert(nome + " por favor informe um endereço de e-mail valido");
      return false;
    }

    if(telefone == "" || telefone.length < 15 || telefone.length > 15) {
      window.alert(nome + " por favor informe um número de telefone valido");
      return false;
    }

    if(endereco == "") {
      window.alert(nome + " por favor informe um endereço valido");
      return false;
    }

    if(cidade == "") {
      window.alert(nome + " por favor informe uma cidade valida");
      return false;
    }

    if(sobre == "") {
      window.alert(nome + " por favor informe uma descrição sobre a pessoa");
      return false;
    }

    //realiza requisição interna ajax
    $.ajax({
      type:"POST",
      url:"http://localhost/ajax_mvc/ajaxpessoas/salvarCadastro/",
      contentType:false,
      processData:false,
      data:{
        nome:nome,
        email:email,
        telefone:telefone,
        endereco:endereco,
        cidade:cidade,
        sobre:sobre
      },
      success:function(html) {
        $("#result").html(html);
      },
      error:function(html) {
        $("#result").html(html);
      }
    });
  });
});
