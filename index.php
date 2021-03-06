<?php
// Initialize the session
session_start();

// If session variable is not set it will redirect to login page

if (isset($_SESSION['email'])) {
    header("location: provas.php");
    exit;
}
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <title>ATW teste</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">
  <!-- Bootstrap v3-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel="stylesheet" href="assets/css/tabela.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- Bootstrap TOUR -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tour/0.11.0/css/bootstrap-tour.min.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tour/0.11.0/js/bootstrap-tour.min.js"></script>

  <!--[if lt IE 9]>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
</head>

<body>
<nav class="navbar navbar-default no-margin-bottom">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
              aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img class="img-responsive" src="assets/img/run_logo.png" /></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li>
          <p class="navbar-btn">
            <a href="#" id="login" class="btn btn-success login" style="color: #FFF !important;" data-toggle="modal" data-target="#myModal">Login</a>
          </p>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-->
</nav>
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <h3 class="titulo">Provas principais</h3>
      <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active"><img src="assets/img/maratona.jpg" alt="Los Angeles"></div>
          <div class="item"><img src="assets/img/sidney.jpg" alt="Chicago"></div>
          <div class="item"><img src="assets/img/braga.jpg" alt="New York"></div>
          <div class="item"><img src="assets/img/paris.jpg" alt="New York"></div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>

  <div class="row mtm">
    <div id="regras" class="col-sm-6">
      <h3 id="agenda" class="titulo">Quais as regras da maratona?</h3>
      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/FZk40J_drws"></iframe>
      </div>
      <!--<p>Assim como nas demais provas do atletismo, <strong>as regras da maratona</strong> logicamente são criadas e garantidas pela Associação Internacional de Federações de Atletismo, são elas:</p>
            <ul>
                <li>O percurso precisa ter a medida exata de 42.195 metros. Geralmente é acrescentado 1 metro a mais a cada 1 km, com o objetivo de evitar que alguma falha aconteça e os atletas acabem fazendo um caminho mais curto.</li>
                <li>A cada 1 km existe uma marcação para que os atletas possam se orientar.</li>
                <li>O desnível máximo permitido na maratona é de 1/1000, sendo que o mesmo é medido na topografia.</li>
                <li>A cada 5 km devem existir estações de descanso, onde os corredores podem se recompor caso necessário e depois retomar a prova. É extremamente proibido descansar fora dos locais previamente estabelecidos.</li>
                <li>Entre as estações de descanso são montadas estações de hidratação onde eles disponibilizam água e esponjas mlihadas.</li>
                <li>A maratona não pode ser disputada em estradas de terra ou em gramados.</li>
                <li>Caso o atleta recebe qualquer tipo de ajuda externa, o mesmo será automaticamente desclassificado.</li>
            </ul>
            <p>Nas Olimpíadas existe a categoria masculina e a feminina.</p>-->
    </div>

    <div id="register" class="col-sm-6">
      <h3 class="titulo">Ainda não se encontra registado?</h3>
      <div class="panel panel-success">
        <div class="panel-heading">
          <h3 class="panel-title">Junte-se no nosso <strong>clube</strong></h3>
        </div>
        <div class="panel-body">
          <form role="form" action="register.php" method="POST">
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="text" name="username" id="first_name" class="form-control input-sm" placeholder="Primeiro nome" required>
                </div>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="number" name="nif" id="last_name" class="form-control input-sm" placeholder="nif" required>
                </div>
              </div>
            </div>

            <div class="form-group">
              <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email" required>
            </div>

            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password" required>
                </div>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Repetir Password" required>
                </div>
              </div>
            </div>
            <div class="form-group">

              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" value="">
                <small>Desejo incluir o meu email na newsletter do clube</small>
              </label>

            </div>
            <input type="submit" value="Registar" class="btn btn-success btn-block">

          </form>
          <hr>
          <p>O registo é efectuado na nossa plataforma através do gestor do clube de atletismo.
             Contudo poderá efectuar um pedido de registo nesta área ao que o mesmo será avaliado e aprovado pelo nosso
             gestor. </p>
        </div>
      </div>

      <!--<div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/FZk40J_drws"></iframe>
            </div>-->
    </div>

  </div>
  <!--<div class="row">

        <div class="col-sm-6">
            <h3 class="titulo">Curiosidades da Maratona</h3>
            <p>O percurso total da maratona atualmen<te corresponde a 42.195 km. Você sabe por que a distância original de 40 km que se referia ao trajeto entre as cidades gregas Maratona e Atenas foi alterado? </p>
            <p>Historiadores afirmam que a família real inglesa exigiu que a prova da maratona passasse no jardim do Castelo Windsor, para que os mesmos pudessem apreciar a competição. Daí este acréscimo da distância original que permanece até hoje.</p>
            <p>No ano de 1960, nas Olimpíadas de Roma, o atleta etíope Abebe Bikila venceu a prova e levou a medalha de ouro correndo com os pés descalços. Contente com o resultado, ele repetiu o feito em 1964, nas Olimpíadas de Tóquio.</p>
            <p>Nos jogos Olímpicos de Atenas em 2004, o maratonista brasileiro Vanderlei Cordeiro estava em primeiro lugar com uma boa vantagem para o segundo colocado quando foi agarrado por um fanático, à ação afetou a concentração do maratonista que acabou a prova em terceiro lugar ficando com a medalha de bronze.</p>
            <p>O recorde mundial da maratona pertence ao Queniano Dennis Kimetto, ele completou os mais de 42 km com um tempo de 2 horas, 2 minutos e 57 segundos. Este recorde aconteceu na Maratona de Berlim no ano de 2014.</p>
            <p>O melhor tempo em Olimpíadas também pertence a um Queniano, Samuel Wanjiru completou a prova em 2 horas, 6 minutos e 32 segundos em Pequim no ano de 2008.</p>
            <p>Entre as mulheres o recorde mundial pertence à maratonista do Reino Unido Paula Radcliffe que completou aprova em 2 horas, 15 minutos e 25 segundos em Londres no ano de 2003.</p>
            <p>O melhor tempo feminino em Olimpíadas pertence à etíope Tiki Gelana que completou a prova em 2 horas, 23 minutos e 7 segundos em Londres no ano de 2012.</p>
        </div>

        <div class="col-sm-6">
            <h3>Newsletter</h3>
            <p>Subscribe to our weekly Newsletter and stay tuned.</p>
            <h3 class="titulo">Agenda</h3>
        </div>
    </div>-->
</div>
<div class="navbar navbar-fixed-bottom">
  <div class="container-fluid" style="background-color: #F8F8F8; padding: 10px; border-top: 1px solid #ebebeb; margin-top:25px;">
    <div class="container">
      <div class="row">
        <div class="col-sm-6" style="background-color: #F8F8F8">
          <small>Trabalho de ATW - 1º momento de avaliação</small>
        </div>
        <div class="col-sm-6" style="text-align:right;">
          <small>André Garcia - EI072135</small>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div id="login-overlay" class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        Login
        <!--<img class="img-responsive" style="max-height: 50px;" src="assets/img/run_logo.png"/>-->
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-xs-12">

            <form id="loginForm" method="POST" action="login.php">
              <div class="form-group">
                <label for="email" class="control-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" title="Introduza o seu email" placeholder="example@gmail.com" required>
                <span class="help-block"></span>
              </div>
              <div class="form-group">
                <label for="password" class="control-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" title="Introduza a sua password" required>
                <span class="help-block"></span>
              </div>
              <div id="loginErrorMsg" class="alert alert-error hide">Wrong username og password</div>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="remember" id="remember"> Lembrar
                </label>
                <p class="help-block">(se este for um computador privado)</p>
              </div>

              <hr>
              <button type="submit" class="btn btn-success btn-block">Login</button>
            </form>
          </div>

        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript">

    var prev    = 'Ant.';
    var next    = 'Próx.';
    var endtour = 'Fim';
    var tour    = new Tour({
      storage : false,
      template: "<div class='popover tour'> \
			<div class='arrow'></div> \
			<h3 class='popover-title'></h3> \
			<div class='popover-content'></div> \
			<nav class='popover-navigation'> \
				<div class='btn-group'> \
					<button class='btn btn-default' data-role='prev'>" + prev + "</button> \
					<button class='btn btn-default' data-role='next'>" + next + "</button> \
				</div> \
				<button class='btn btn-primary' data-role='end'>" + endtour + "</button> \
			</nav> \
		</div>",
      name    : 'teste212222',

      /*onEnd: function (tour) {$('#myCarousel').carousel({cycle:true});},
          onStart: function (tour) { $('#myCarousel').carousel({
              interval: 5000,
              pause: "hover"
          });},*/
      backdrop: true,
      steps   : [
        {
          element: "#login",
          title  : "Login",
          content: "Se a sua inscrição já foi efectuada pode efectuar a autenticação na plataforma através deste link"
        }, {
          element: "#register",
          title  : "Registo",
          content: "Nesta área pode efectuar o seu registo sendo que deverá aguardar pela aprovação do nosso gestor na sua caixa de email" + '<strong> (pode demorar alguns dias)</strong>.'
        }
      ]
    });
    // Initialize the tour
    tour.init();
    // Start the tour
    tour.start();

  </script>
</body>
</html>