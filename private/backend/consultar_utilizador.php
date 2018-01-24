<?php
include('../../ConnectDB.php');

$connection = ConnectDB::getInstance()->getConnection();
$query = "SELECT * FROM utilizador";
$result = mysqli_query($connection, $query);

?>
<?php include('include/header.php'); ?>
    <div class="container">
    	<div class="row">
    		<div class="col-sm-3">
                <?php include('include/sidebar.php')?>
    		</div>
    		<div class="col-sm-9">
                <h2 class="titulo" style="margin-top: 20px;">Consultar utilizador</h2>
                <table id="example" class="table table-bordered" cellspacing="0" width="100%">
    				<thead>
    					<tr>
    						<th>Nome</th>
    						<th>NIF</th>
    						<th>CC</th>
    						<th>Nascimento</th>
                <th>Email</th>
                <th>Telefone</th>
                <th></th>
    					</tr>
    				</thead>
    				<tfoot>
    					<tr>
    						<th>Nome</th>
    						<th>NIF</th>
    						<th>CC</th>
    						<th>Nascimento</th>
                <th>Email</th>
                <th>Telefone</th>
                <th></th>
    					</tr>
    				</tfoot>
    				<tbody>
                    <?php while ($row = $result->fetch_array()) { ?>
    					<tr>
    						<td><a href="#"><?= $row["nome"]; ?></a></td>
    						<td><?php echo $row['nif']; ?></td>
    						<td><?= $row['cc']; ?></td>
    						<td><?= $row['datan']; ?></td>
                <td><?= $row['email']; ?></td>
                <td><?= $row['telef']; ?></td>
                <td><input type="checkbox" value="<?= $row['uid'];?>" name="utilizadores[]"></td>
    					</tr>
                    <?php } ?>
                    </tbody>
                </table>
    		</div>
    		<!--<div class="col-md-2 offset-md-4"><h2 style="color: #ABABAB;"><img class="img-responsive" src="assets/img/Logo-Maratona.png"></h2></div>-->
    	</div>
    </div>
</div>
<?php include('include/footer.php') ?>
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