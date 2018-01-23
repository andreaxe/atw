<?php
?>
<?php include('include/header.php'); ?>
<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <?php include('include/sidebar.php')?>
        </div>
<div class="col-sm-9">
    <h2 class="titulo" style="margin-top: 20px;">Inserir Prova</h2>
    <form role="form">
        <div class="form-group">
            <label for="designacao">Designação</label>
            <input type="text" class="form-control" id="designacao">
        </div>
        <div class="form-group">
            <label for="local">Local:</label>
            <input type="text" name="local" class="form-control" id="local">
        </div>
        <div class="form-group">
            <label for="coordenadas">Coordenadas</label>
            <input type="text" name="coordenadas" class="form-control" id="coordenadas">
        </div>
        <div class="form-group">
          <label for="sel1">Categoria</label>
          <select class="form-control" id="sel1">
            <option>Maratona</option>
            <option>Trial</option>
            <option>Resistência</option>
            <option>4</option>
          </select>
        </div>
        <div class="form-group">
            <label for="data">Data</label>
            <input type="date" name="data" class="form-control" id="data">
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
</div>
<?php include('include/footer.php'); ?>