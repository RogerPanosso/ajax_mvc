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
      data:{
        nome:nome,
        email:email,
        senha:senha
      },
      success:function(html) {
        $("#result").html(html);
        $("#result").css("color", "#006600");
      },
      error:function(html) {
        $("#result").html(html);
        $("#result").css("color", "#FF0000");
      }
    });
  })
});
