<?php include('include/header.php'); ?>
    <div class="container">
    	<div class="row">
    		<div class="col-sm-3">
                <?php include('include/sidebar.php') ?>
    		</div>
    		<div class="col-sm-9">

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