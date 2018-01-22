<!doctype html>

<html lang="en">
<head>
	<meta charset="utf-8">

	<title>ATW</title>
	<meta name="description" content="The HTML5 Herald">
	<meta name="author" content="SitePoint">
	<!-- Bootstrap v3-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">      
	<!-- Custom CSS -->
	<link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/tabela.css">
	<!-- Font Awesome -->		
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
	<!-- jQuery library -->		
		<!--[if lt IE 9]>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
		<![endif]-->
	</head>

	<body>		
		<nav class="navbar navbar-default no-margin-bottom">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" 
					aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>				
				<a class="navbar-brand" href="#"><img class="img-responsive" src="assets/img/run_logo.png" alt="logo" /></a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">								
				<ul class="nav navbar-nav navbar-right">								
					<li class="sem_ponto"><a href="#">Utilizador</a></li>
					<!--<li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Opcoes <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            
                        </ul>
                    </li>-->

                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <div class="container">
    	<div class="row">	
    		<div class="col-sm-3">
    			<div id="sidebar" data-spy="affix" data-offset-top="60" data-offset-bottom="400">
    				<ul class="menu-backoffice">
    					<li class="sem-ponto"><h5>Utilizadores</h5></li>
    					<li class="sem-ponto"><small><a href="#">Adicionar utilizador</a></small></li>
    					<li class="sem-ponto"><small><a href="#">Consultar utilizadores</a></small></li>
    					<li class="sem-ponto"><h5>Provas</h5></li>
    					<li class="sem-ponto"><small><a href="#">Adicionar prova</a></small></li>
    					<li class="sem-ponto"><small><a href="#">Consultar provas</a></small></li>
    					<!--<li class="sem-ponto"><hr></li>-->
    					<li class="sem-ponto"><h5>Definições</h5></li>
    					<li class="sem-ponto"><small><a href="#">Gerir perfil</a></small></li>
    					<li class="sem-ponto"><small><a href="#">Logout</a></small></li>
    				</ul>	
    			</div>

    		</div>
    		<div class="col-sm-9">    			    			
    			<div class="alert alert-danger" role="alert">
    				Apenas fiz as secções de "<strong>Adicionar utilizador</strong>" e "<strong>Consultar provas</strong>" porque as outras repetem-se
    				e na eventualidade de ter de efectuar alterações evito repetir trabalho.
    			</div>    			    			
    			<h2 class="titulo" style="margin-top: 0px;">Adicionar utilizador</h2>				
    			<form role="form">
    				<div class="form-group">
    					<label for="email">Nome</label>
    					<input type="text" class="form-control" id="mame">
    				</div>				  
    				<div class="form-group">
    					<label for="email">Email:</label>
    					<input type="email" class="form-control" id="email">
    				</div>
    				<div class="form-group">
    					<label for="pwd">Password:</label>
    					<input type="password" class="form-control" id="pwd">
    				</div>				  
    				<div class="form-group">
    					<label for="pwd">Repetir password:</label>
    					<input type="password" class="form-control" id="repeat_pwd">
    				</div>				  
    				<button type="submit" class="btn btn-default">Submit</button>
    			</form>
    			<hr>
    			<h2 class="titulo">Consultar provas</h2>
    			<table id="example" class="table table-bordered" cellspacing="0" width="100%">
    				<thead>        
    					<tr>
    						<th>Titulo</th>
    						<th>Data</th>
    						<th>Categoria</th>
    						<th>Inscrições</th>                                            
                            <th>PDF</th>                                            
    					</tr>
    				</thead>
    				<tfoot>
    					<tr>
    						<th>Titulo</th>
    						<th>Data</th>
    						<th>Categoria</th>
    						<th>Inscrições</th>                                            
                            <th>PDF</th>                                            
    					</tr>
    				</tfoot>
    				<tbody>
    					<tr>
    						<td><a href="#">Tiger Nixon</a></td>
    						<td>System Architect</td>
    						<td>Edinburgh</td>
    						<td>61</td>
                            <td><i class="fa fa-file-pdf-o" aria-hidden="true"></i></td>
    					</tr>
    					<tr>
    						<td><a href="#">Garrett Winters</a></td>
    						<td>Accountant</td>
    						<td>Tokyo</td>
    						<td>63</td>
                            <td><i class="fa fa-file-pdf-o" aria-hidden="true"></i></td>
    					</tr>
    					<tr>
    						<td><a href="#">Ashton Cox</a></td>
    						<td>Junior Technical Author</td>
    						<td>San Francisco</td>
    						<td>66</td>
                            <td><i class="fa fa-file-pdf-o" aria-hidden="true"></i></td>
    					</tr>
    					<tr>
    						<td><a href="#">Cedric Kelly</a></td>
    						<td>Senior Javascript Developer</td>
    						<td>Edinburgh</td>
    						<td>22</td>
                            <td><i class="fa fa-file-pdf-o" aria-hidden="true"></i></td>
    					</tr>
    					<tr>
    						<td><a href="#">Airi Satou</a></td>
    						<td>Accountant</td>
    						<td>Tokyo</td>
    						<td>33</td>
                            <td><i class="fa fa-file-pdf-o" aria-hidden="true"></i></td>
    					</tr>
    					<tr>
    						<td><a href="#">Brielle Williamson</a></td>
    						<td>Integration Specialist</td>
    						<td>New York</td>
    						<td>61</td>
                            <td><i class="fa fa-file-pdf-o" aria-hidden="true"></i></td>
    					</tr>
    					<tr>
    						<td>Herrod Chandler</td>
    						<td>Sales Assistant</td>
    						<td>San Francisco</td>
    						<td>59</td>
                            <td><i class="fa fa-file-pdf-o" aria-hidden="true"></i></td>
    					</tr>
    					<tr>
    						<td>Rhona Davidson</td>
    						<td>Integration Specialist</td>
    						<td>Tokyo</td>
    						<td>55</td>
                            <td><i class="fa fa-file-pdf-o" aria-hidden="true"></i></td>
    					</tr>
    					<tr>
    						<td>Colleen Hurst</td>
    						<td>Javascript Developer</td>
    						<td>San Francisco</td>
    						<td>39</td>
                            <td><i class="fa fa-file-pdf-o" aria-hidden="true"></i></td>
    					</tr>
    					<tr>
    						<td>Sonya Frost</td>
    						<td>Software Engineer</td>
    						<td>Edinburgh</td>
    						<td>23</td>
                            <td><i class="fa fa-file-pdf-o" aria-hidden="true"></i></td>
    					</tr>
    					<tr>
    						<td>Jena Gaines</td>
    						<td>Office Manager</td>
    						<td>London</td>
    						<td>30</td>
                            <td><i class="fa fa-file-pdf-o" aria-hidden="true"></i></td>
    					</tr>
    					<tr>
    						<td>Quinn Flynn</td>
    						<td>Support Lead</td>
    						<td>Edinburgh</td>
    						<td>22</td>
                            <td><i class="fa fa-file-pdf-o" aria-hidden="true"></i></td>
    					</tr>
    					<tr>
    						<td>Charde Marshall</td>
    						<td>Regional Director</td>
    						<td>San Francisco</td>
    						<td>36</td>
                            <td><i class="fa fa-file-pdf-o" aria-hidden="true"></i></td>
    					</tr>    				

    				</tbody>
    			</table>	
    		</div>		




    		<!--<div class="col-md-2 offset-md-4"><h2 style="color: #ABABAB;"><img class="img-responsive" src="assets/img/Logo-Maratona.png"></h2></div>-->
    	</div>		
    </div>				
</div>
<div class="container-fluid" style="background-color: #F8F8F8; padding: 10px; border-top: 1px solid #ebebeb; margin-top:25px;">
    <div class="container">
        <div class="row">
            <div class="col-sm-6" style="background-color: #F8F8F8"><small>Trabalho de ATW - 1º momento de avaliação</small></div>
            <div class="col-sm-6" style="text-align:right;"><small>André Garcia - EI072135</small></div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>				
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.16/datatables.min.js"></script>
<script type="text/javascript">
   $(document).ready(function() {
      $('#example').DataTable();
      $('#lower-nav').affix({offset: {top: 0}});
  } );

</script>
</body>
</html>