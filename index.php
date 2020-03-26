<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Beco</title>
    <link rel="shortcut icon" href="img/favicon.ico" >
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/css.css">
  </head>
  <body >
    <?php
      include "cabecalho.inc";
    ?>
    <!--Titulo-->
    <div class="titulo">
      <img src="img/logos/logo_grande2.png" class="img-fluid mx-auto d-block"  >
    </div> 
    <!--Carrossel-->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active" style="background-color:rgb(247, 41, 41);"></li>
        <li data-target="#myCarousel" data-slide-to="1"style="background-color:rgb(247, 41, 41);"></li>
        <li data-target="#myCarousel" data-slide-to="2"style="background-color:rgb(247, 41, 41);"></li>
      </ol>
      <div class="carousel-inner" >
        <div class="carousel-item active">
          <img src="img/encontros/beco_agro.jpg" class="img-fluid" >
          <div class="carousel-caption text-right">
            <h3 style="color: #53BC28;">Fique por dentro do que rolou </br>em nosso ultimo encontro!</h3>
            <p>Agro é tech, Agro é pop, Agro é tudo? 24 de outubro de 2019.</p>
            <p><a class="btn btn-lg btn-success" style="background-color: #53BC28;" href="#" >Veja mais</a></p>
          </div>
      </div>
      <div class="carousel-item">
        <img src="img/encontros/beco-ciencia.jpg" class="img-fluid" alt="Imagem responsiva">
        <div class="carousel-caption text-right">
            <h3 style="color: #53BC28;">Fique por dentro do que rolou </br>no encontro de Setembro!</h3>
            <p>Ciência ora quê? Ciência pra quem? 17 de setembro de 2019.</p>
            <p><a class="btn btn-lg btn-success" style="background-color: #53BC28;" href="#" >Veja mais</a></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/encontros/beco_desconectar.png" class="img-fluid" alt="Imagem responsiva">
        <div class="carousel-caption text-right">
              <h3 style="color: #53BC28;">Fique por dentro do que rolou </br>no encontro de Julho!</h3>
              <p>Desconectar para Conectar!10 de junho de 2019</p>
              <p><a class="btn btn-lg btn-success" style="background-color: #53BC28;" href="#" >Veja mais</a></p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a><!--botão anterior que muda o carrosel-->
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon"></span><!--botão proximo que muda o carrosel-->
    </a>
  </div>
  <div class="jumbotron bg-white text-dark">
  <div class="col-md-6">
    <h1 class="text-center" style="color: #53BC28;">Novidades</h1>
  </div>
</div>
    <!-- COMEÇO QUADRADOS -->
  <div class="container text-white">
    <div class="row align-items-center" >
      <div class="col-12 col-md-6" style="background-color:rgb(247, 41, 41); text-align:center; padding:10% 3% 5% 3%;">
      <h4>Sejam Bem Vindos!</h4>
        <h2 >Vem aí... Beco 2020</h2>
        <p class="lead">
            Fique por dentro dos processos seletivos para bolsas de  extensão e faça parte do projeto 
            Beco - Literatura e Linguagem em 2020!Se você acaba de chegar no IFSP ou não estuda aqui, 
            fique por dentro dos eventos e participe dos encontros mensais! Não perca esta oportunidade! 
        </p>
      </div>
      <div class="col-12 col-md-6">
      <img src="img/equipe-finalEncontro2.jpg"  class="img-fluid"> <!-- width="100%" height="90%"--> 
      </div>
    </div>
    <div class="row align-items-center">
      <div class="col-12 col-md-6" >
        <img src="img/equipe2019.jpg"  class="img-fluid" >
      </div>
      <div class="col-12 col-md-6" style="background-color:black; text-align:center; padding:15% 3% 5% 3%;">
        <h2> Beco e sua História</h2>
        <p class="lead">
          Ficou curioso? Quer saber mais sobre o projeto? Clique no botão 
          abaixo e conheça um pouco mais sobre nossa trajetória! Fique atento 
          aos próximos encontros e não deixe de participar!
        </p>
        <p><a class="btn btn-outline-success"  href="#" >Veja mais</a></p>
      </div>
    </div>
    <div class="row align-items-center" >
      <div class="col-12 col-md-6" style="background-color: #53BC28; text-align:center; padding:8% 3% 0% 3%;">
        <h2 >IFSP ARARAQUARA</h2>
        <p class="lead">Venha conhecer o IFSP </br> Acesse o site do Campus Araraquara 
        e fique por dentro de tudo o que acontece aqui. Entre em contato e agende sua 
        visita ao Campus ou sua participação no Beco.
        </p>
        <p><a class="btn btn-outline-danger" href="#" >Veja mais</a></p>
      </div>
      <div class="col-12 col-md-6" >
      <img src="img/ifsp.jpg" class="img-fluid" >
      </div>
    </div>
  </div>
  <!-- /  FIM QUADRADOS-->
    <?php
      include "rodape.inc";
    ?>
    <script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/validaform.min.js"></script>
</body>
</html>
