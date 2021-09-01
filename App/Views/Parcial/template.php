<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content="Projeto AJAX na estrutura MVC"/>
    <meta name="author" content="Roger Panosso"/>
    <meta name="keywords" content="AJAX, MVC"/>
    <title>Ajax MVC</title>
    <link rel="stylesheet" href="<?=BASE_URL;?>Public/Bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="<?=BASE_URL;?>Public/Bootstrap/css/bootstrap-reboot.min.css"/>
    <link rel="stylesheet" href="<?=BASE_URL;?>Public/Assets/css/style.css"/>
    <link rel="stylesheet" href="<?=BASE_URL;?>Public/Fontawesome/css/all.min.css"/>
    <link rel="stylesheet" href="<?=BASE_URL;?>Public/Fontawesome/css/fontawesome.min.css"/>
  </head>
  <body>
    <article>
      <header>
      </header>
      <footer>
      <!---------------------------------------------------->
      <?=$this->loadViewInTemplate($nomeView, $dadosModel);?>
      <!---------------------------------------------------->
      </footer>
    </article>
  </body>
</html>
