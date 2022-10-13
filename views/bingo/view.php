<?php require_once 'views/layout/header.php'; ?>
<body>
	<?php require_once 'views/layout/menu.php'; ?>

	<div class="container">
		<div class="row justify-content-center mt-3 pt-2">
			<div class="col-md-12">
				
					<div class="card text-center">
						<div class="card-header">
							Bingo
						</div>
						<div class="card-body">
							
							<h5 class="card-title">Los numeros que salieron son:</h5>
							<p class="card-text"></p>                        
															
							<hr />							
							<input type="SUBMIT" class="btn btn-primary" name="action" value="Generar numero">
							<input type="SUBMIT" class="btn btn-primary" name="action" value="Eliminar numero">							
							
							<br />
							<h1 style="font-size:200px;">0</h1>
						</div>
						<div class="card-footer text-muted">
							Aun falta para llegar a los 75 :) y nadie canto bingo
						</div>
					</div>                

			</div>
		</div>
	</div>
	
	<?php require_once 'views/layout/footer.php'; ?>
	<?php require_once 'views/layout/scripts.php'; ?>	
</body>
</html>