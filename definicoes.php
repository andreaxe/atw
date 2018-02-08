<?php include('header.php') ?>
<?php include('ConnectDB.php');

function verificar_password($id, $password, $connection)
{
  $query = mysqli_query($connection, "SELECT senha from utilizador where idu = ".$id)->fetch_row();
  if(sha1($password) == $query[0]){
    return true;
  }
  return false;

}

$connection    = ConnectDB::getInstance()->getConnection();
$id_utilizador = $_SESSION['idu'];
$query         = "SELECT * from utilizador WHERE idu = ".$id_utilizador;
$dados         = mysqli_query($connection, $query)->fetch_row();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_POST['saveDef'])) { //check if form was submitted

    $nome     = mysqli_real_escape_string($connection, $_POST['nome']);
    $nif      = mysqli_real_escape_string($connection, $_POST['nif']);
    $email    = mysqli_real_escape_string($connection, $_POST['email']);
    $tlf      = mysqli_real_escape_string($connection, $_POST['tlf']);
    $pais     = mysqli_real_escape_string($connection, $_POST['nacionalidade']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);

   if(verificar_password($id_utilizador, $password, $connection))
    {
      $query = "UPDATE utilizador SET nome = '$nome', nif = '$nif', email = '$email', telef = '$tlf', nacionalidade = '$pais' 
                WHERE utilizador.idu =".$id_utilizador.";";
      print_r($query);
      if(mysqli_query($connection, $query)){
         header('location:definicoes.php?definicoes_salvas=true');
      }

    } else {
      header('location:definicoes.php?erro_password=true');
   }



    $query = "UPDATE utilizador SET nome = $nome, nif = $nif,  WHERE condition;";
}

?>

<div class="container">
  <div class="row">
    <div class="col-md-10 ">
      <form class="form-horizontal" method="POST" action="" name="saveDef">
        <fieldset>

          <!-- Form Name -->
          <legend><h3 class="titulo">O meu perfil</h3></legend>
<div class="alert alert-danger hide" id="erro_pass">
        <strong>Erro</strong> As palavras-passe não coincidem!
      </div>
          <div class="alert alert-success hide" id="def_salvas">
        <strong>Sucesso</strong> O perfil foi salvo!
      </div>
          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="nome">Nome Completo</label>
            <div class="col-md-8">
              <input id="nome" name="nome" type="text" placeholder="<?= $dados[1]; ?>" class="form-control input-md"
                     value="<?= $dados[1]; ?>" required="">
              <span class="help-block">Nome completo</span>
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="nif">NIF</label>
            <div class="col-md-5">
              <input id="nif" name="nif" type="text" placeholder="nif" class="form-control input-md" value="<?= $dados[2]; ?>">
              <span class="help-block">NIF (Número de Informação Fiscal)</span>
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="email">Email</label>
            <div class="col-md-6">
              <input id="email" name="email" type="text" value="<?= $dados[5]; ?>" class="form-control input-md" >
              <span class="help-block">Endereço de email</span>
            </div>
          </div>

          <!-- Prepended text-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="tlf">Mobile</label>
            <div class="col-md-5">
              <div class="input-group">
                <span class="input-group-addon">+351</span>
                <input id="tlf" name="tlf" class="form-control" placeholder="Mobile Number" type="text"
                       value="<?= $dados[6]; ?>" >
              </div>
              <p class="help-block">O seu contacto móvel/casa</p>
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="morada">Actual morada</label>
            <div class="col-md-8">
              <input id="morada" name="morada" type="text" value="<?= $dados[7]; ?>" placeholder="Onde vive neste momento?" class="form-control input-md" >
              <span class="help-block">A sua morada actual</span>
            </div>
          </div>

          <!-- Search input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="datan">Data de nascimento</label>
            <div class="col-md-6">
              <input id="datan" name="datan" type="search" placeholder="Data de nascimento" class="form-control input-md"
                     value="<?= $dados[4]; ?>" >
              <p class="help-block">Data de nascimento</p>
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="nacionalidade">Nacionalidade</label>
            <div class="col-md-6">
              <input id="nacionalidade" name="nacionalidade" type="text" value="<?= $dados[8]; ?>" placeholder="Nacionalidade"
                     class="form-control input-md" >

            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="tamanho">Tamanho</label>
            <div class="col-md-5">
              <input id="tamanho" name="tamanho" type="text" placeholder="Tamanho" value="<?= $dados[14] ?>" class="form-control input-md">
              <span class="help-block">Enter if you are temporary resident</span>
            </div>
          </div>
          <hr>
          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="password">Password</label>
            <div class="col-md-6">
              <input id="password" name="password" type="text" placeholder="Password" class="form-control input-md">

            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label" for="repeat_password">Password repeat</label>
            <div class="col-md-6">
              <input id="repeat_password" name="repeat_password" type="text" placeholder="Repetir password" class="form-control input-md">

            </div>
          </div>

        </fieldset>
        <button type="submit" class="btn btn-default pull-right" name="saveDef">Guardar</button>
      </form>

    </div>

  </div>
</div>
<?php include('footer.php'); ?>

<script>
  if (window.location.search.indexOf('erro_password=true') > -1) {
    $("#erro_pass").removeClass('hide');
  }
  if (window.location.search.indexOf('definicoes_salvas=true') > -1) {
    $("#def_salvas").removeClass('hide');
  }
</script>
