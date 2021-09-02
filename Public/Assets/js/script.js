//define codigo jquery selecionando no documento(página) elemento HTML(form) bloqueando ação de envio
$(document).ready(function(
  $("#cadastro").on("submit", function(event){
    event.preventDefault();
  });
));
