<?php
$new_user = isset($_GET['novo_utilizador']) ? true : false;
?>

<?php include('include/header.php'); ?>
    <div class="container">
    	<div class="row">
    		<div class="col-sm-3">
                <?php include('include/sidebar.php')?>
    		</div>
    		<div class="col-sm-9">
          <?php if($new_user):?>
            <div class="alert alert-success" style="margin-top: 20px;">
              Novo utilizador criado com sucesso!
            </div>
          <?php endif; ?>

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