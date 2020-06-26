<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php  wp_title();  ?></title>
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' );  ?>">
    <link href="https://fonts.googleapis.com/css2?family=Metal+Mania&display=swap" rel="stylesheet" type='text/css'>

     <!-- Google Icon -->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Importanto Jquery -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
    crossorigin="anonymous"></script>
    <!-- Importanto JavaScript do Materialize-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!-- Importando .js -->
    <script src="<?php echo get_template_directory_uri(); ?>/script.js"></script>

    <?php wp_head();  ?>
</head>


<body>


<div class="navbar-fixed responsive">
    <nav class="blue lighten-1 z-depth-3">
        <div class="nav-wrapper container">
          <a href="#" class="brand-logo left"><i class="material-icons">nature</i>Silicone Valley</a>
          <a href="#" data-target="menu-mobile" class="sidenav-trigger right"><i class="material-icons ">menu</i></a>
          
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="#">Produtos</a></li>
            <li><a href="#">Sobre</a></li>
            <li><a href="#">Contato</a></li>
          </ul> 
        </div>
      </nav>
</div>
        <!-- menu-mobile -->
        <ul id="menu-mobile" class="sidenav">
            <li><a href="#">Produtos</a></li>
            <li><a href="#">Sobre</a></li>
            <li><a href="#">Contato</a></li>
        </ul>


<div class="header">
    <div class="wrap container">
        <h1><a href="<?php echo site_url();?>" title="<?php bloginfo('name');?>">Silicone Valley</a></h1>
        <div class="infor">
            <h2>Titulo</h2>
            <p>este é um paragrafo sobre este belissimo site que estou fazendo utilizando wordpress</p>
            <a href="#" class="custom-botao">Leia mais</a>
        </div>
    </div>
</div>