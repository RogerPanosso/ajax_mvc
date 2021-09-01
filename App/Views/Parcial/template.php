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
      <!---------------------------------------------------->
      <?=$this->loadViewInTemplate($nomeView, $dadosModel);?>
      <!---------------------------------------------------->
      <footer>
      </footer>
    </article>
    <script src="<?=BASE_URL;?>Public/jquery/jquery.min.js"></script>
    <script src="<?=BASE_URL;?>Public/Bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?=BASE_URL;?>Public/Assets/js/script.js"></script>
    <script src="<?=BASE_URL;?>Public/Fontawesome/js/all.min.js"></script>
    <script src="<?=BASE_URL;?>Public/Fontawesome/js/fontawesome.min.js"></script>
  </body>
</html>
