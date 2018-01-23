<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location:index.php");
}
print_r($_SESSION);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>ATW</title>
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
    <!--[if lt IE 9]>
    <!-- Bootstrap TOUR -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tour/0.11.0/css/bootstrap-tour.min.css"
          rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tour/0.11.0/js/bootstrap-tour.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>
<nav class="navbar navbar-default no-margin-bottom">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1"
                    aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img class="img-responsive" src="assets/img/run_logo.png"/></a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#" style="color: #000">Regulamento</a></li>
                <li class="sem_ponto"><a style="color:green;" href="#"><i class="fa fa-user" style="color: green;"
                                                                          aria-hidden="true"></i>
                        <?php echo $_SESSION['nome'] ?></a></li>
                <li class="sem_ponto"><a style="color:green;" href="logout.php">Logout</a></li>

            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-->
</nav>
<div class="container">

    <div class="row">
        <div id="maratona" class="col-sm-6">
            <h3 class="titulo">Maratona</h3>
            <table id="prova" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Prova</th>
                    <th>Localidade</th>
                    <th>Data</th>
                    <th>Distância</th>
                    <th>Inscrição</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><a href="#">41º Grande Prémio de Atletismo A.A</a></td>
                    <td>Guarda</td>
                    <td>Novembro, 25</td>
                    <td>0.00 km</td>
                    <td>
                        <button id="inscrever" type="button" class="btn btn-default btn-xs">clique aqui</button>
                    </td>
                </tr>

                <tr>
                    <td><a href="#">Corrida do Vitória 2017</a></td>
                    <td>Setubal</td>
                    <td>Novembro, 26</td>
                    <td>10.00 km</td>
                    <td>
                        <button type="button" class="btn btn-default btn-xs">clique aqui</button>
                    </td>
                </tr>

                <tr>
                    <td><a href="#">1º Grande Prémio Peniche a Correr</a></td>
                    <td>Peniche</td>
                    <td>Janeiro, 14</td>
                    <td>10.00 km</td>
                    <td>
                        <button type="button" class="btn btn-default btn-xs">clique aqui</button>
                    </td>
                </tr>


                </tbody>
            </table>

            <h3 class="titulo">Maratona</h3>
            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Prova</th>
                    <th>Localidade</th>
                    <th>Data</th>
                    <th>Distância</th>
                    <th>Inscrição</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><a href="#">41º Grande Prémio de Atletismo A.A</a></td>
                    <td>Guarda</td>
                    <td>Novembro, 25</td>
                    <td>0.00 km</td>
                    <td>
                        <button type="button" id="inscrito" class="btn btn-success btn-xs disabled">Inscrito!</button>
                    </td>
                </tr>

                <tr>
                    <td><a href="#">Corrida do Vitória 2017</a></td>
                    <td>Setubal</td>
                    <td>Novembro, 26</td>
                    <td>10.00 km</td>
                    <td>
                        <button type="button" class="btn btn-default btn-xs">clique aqui</button>
                    </td>
                </tr>

                <tr>
                    <td><a href="#">1º Grande Prémio Peniche a Correr</a></td>
                    <td>Peniche</td>
                    <td>Janeiro, 14</td>
                    <td>10.00 km</td>
                    <td>
                        <button type="button" class="btn btn-default btn-xs">clique aqui</button>
                    </td>
                </tr>


                </tbody>
            </table>

            <h3 class="titulo">Trail</h3>
            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Prova</th>
                    <th>Localidade</th>
                    <th>Data</th>
                    <th>Distância</th>
                    <th>Inscrição</th>
                </tr>
                </thead>
                <!--<tfoot>
                    <tr>
                        <th>Nome da prova</th>
                        <th>Data</th>
                        <th>Categoria</th>
                        <th>Extensão</th>
                    </tr>
                </tfoot>-->
                <tbody>
                <tr>

                    <td><a href="#">4º Grande trail das Lavadeiras</a></td>
                    <td>Granja do Ulmeiro, Alfarelos</td>
                    <td>Novembro, 25</td>
                    <td>45.00 km</td>
                    <td>
                        <button type="button" class="btn btn-success btn-xs disabled">Inscrito!</button>
                    </td>
                </tr>
                <tr>

                    <td><a href="#">4º Grande trail das Lavadeiras</a></td>
                    <td>Granja do Ulmeiro, Alfarelos</td>
                    <td>Novembro, 25</td>
                    <td>25.00 km</td>
                    <td>
                        <button type="button" class="btn btn-default btn-xs">clique aqui</button>
                    </td>
                </tr>
                <tr>

                    <td><a href="#">4º Grande trail das Lavadeiras</a></td>
                    <td>Granja do Ulmeiro, Alfarelos</td>
                    <td>Novembro, 25</td>
                    <td>12.00 km</td>
                    <td>
                        <button type="button" class="btn btn-default btn-xs">clique aqui</button>
                    </td>
                </tr>

                <tr>

                    <td><a href="#">Hard Trail Montejunto 2017 (versão inverno)</a></td>
                    <td>Cadaval</td>
                    <td>Novembro, 26</td>
                    <td>25.00 km</td>
                    <td>
                        <button type="button" class="btn btn-default btn-xs">clique aqui</button>
                    </td>
                </tr>

                <tr>

                    <td><a href="#">Hard Trail Montejunto 2017 (versão inverno)</a></td>
                    <td>Cadaval</td>
                    <td>Novembro, 26</td>
                    <td>16.00 km</td>
                    <td>
                        <button type="button" class="btn btn-default btn-xs">clique aqui</button>
                    </td>
                </tr>

                </tbody>
            </table>
        </div>

        <div class="col-sm-6">
            <h3 class="titulo">Trail</h3>
            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Prova</th>
                    <th>Localidade</th>
                    <th>Data</th>
                    <th>Distância</th>
                    <th>Inscrição</th>
                </tr>
                </thead>
                <!--<tfoot>
                    <tr>
                        <th>Nome da prova</th>
                        <th>Data</th>
                        <th>Categoria</th>
                        <th>Extensão</th>
                    </tr>
                </tfoot>-->
                <tbody>
                <tr>

                    <td><a href="#">4º Grande trail das Lavadeiras</a></td>
                    <td>Granja do Ulmeiro, Alfarelos</td>
                    <td>Novembro, 25</td>
                    <td>45.00 km</td>
                    <td>
                        <button type="button" class="btn btn-success btn-xs disabled">Inscrito!</button>
                    </td>
                </tr>
                <tr>

                    <td><a href="#">4º Grande trail das Lavadeiras</a></td>
                    <td>Granja do Ulmeiro, Alfarelos</td>
                    <td>Novembro, 25</td>
                    <td>25.00 km</td>
                    <td>
                        <button type="button" class="btn btn-default btn-xs">clique aqui</button>
                    </td>
                </tr>
                <tr>

                    <td><a href="#">4º Grande trail das Lavadeiras</a></td>
                    <td>Granja do Ulmeiro, Alfarelos</td>
                    <td>Novembro, 25</td>
                    <td>12.00 km</td>
                    <td>
                        <button type="button" class="btn btn-default btn-xs">clique aqui</button>
                    </td>
                </tr>

                <tr>

                    <td><a href="#">Hard Trail Montejunto 2017 (versão inverno)</a></td>
                    <td>Cadaval</td>
                    <td>Novembro, 26</td>
                    <td>25.00 km</td>
                    <td>
                        <button type="button" class="btn btn-default btn-xs">clique aqui</button>
                    </td>
                </tr>

                <tr>

                    <td><a href="#">Hard Trail Montejunto 2017 (versão inverno)</a></td>
                    <td>Cadaval</td>
                    <td>Novembro, 26</td>
                    <td>16.00 km</td>
                    <td>
                        <button type="button" class="btn btn-default btn-xs">clique aqui</button>
                    </td>
                </tr>

                </tbody>
            </table>
            <h3 class="titulo">Maratona</h3>
            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Prova</th>
                    <th>Localidade</th>
                    <th>Data</th>
                    <th>Distância</th>
                    <th>Inscrição</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><a href="#">41º Grande Prémio de Atletismo A.A</a></td>
                    <td>Guarda</td>
                    <td>Novembro, 25</td>
                    <td>0.00 km</td>
                    <td>
                        <button type="button" class="btn btn-default btn-xs">clique aqui</button>
                    </td>
                </tr>

                <tr>
                    <td><a href="#">Corrida do Vitória 2017</a></td>
                    <td>Setubal</td>
                    <td>Novembro, 26</td>
                    <td>10.00 km</td>
                    <td>
                        <button type="button" class="btn btn-default btn-xs">clique aqui</button>
                    </td>
                </tr>

                <tr>
                    <td><a href="#">1º Grande Prémio Peniche a Correr</a></td>
                    <td>Peniche</td>
                    <td>Janeiro, 14</td>
                    <td>10.00 km</td>
                    <td>
                        <button type="button" class="btn btn-default btn-xs">clique aqui</button>
                    </td>
                </tr>


                </tbody>
            </table>
        </div>

    </div>

</div>
<div class="navbar navbar-fixed-bottom">
    <div class="container-fluid"
         style="background-color: #F8F8F8; padding: 10px; border-top: 1px solid #ebebeb; margin-top:25px;">
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
<script type="text/javascript">

    var prev = 'Ant.';
    var next = 'Próx.';
    var endtour = 'Fim';
    var tour = new Tour({
        storage: false,
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
        name: 'provas',

        onEnd: function (tour) {
            $('#myCarousel').carousel({cycle: true});
        },
        onStart: function (tour) {
            $('#myCarousel').carousel({
                interval: 5000,
                pause: "hover"
            });
        },
        backdrop: true,
        steps: [{
            element: "#prova",
            title: "Lista de provas",
            content: "Nesta página vai encontrar diferentes tabelas identificadas pela categoria a que pertencem."
        }, {
            element: "#inscrever",
            title: "Inscrição",
            content: "Para se inscrever deverá carregar neste botão. Vai receber um email a confirmar a sua inscrição!"
        },
            {
                element: "#inscrito",
                title: "Inscrição bem sucedida",
                content: "No caso da inscrição ser bem sucedida, além do email deverá observar que a prova pela qual se inscreveu tem um botão diferente das outras!"
            }
        ]
    });
    // Initialize the tour
    tour.init();
    // Start the tour
    // tour.start();

</script>

</body>
</html>