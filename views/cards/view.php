<?php require_once 'views/layout/header.php'; ?>
<body>
	<?php require_once 'views/layout/menu.php'; ?>

	<div class="container">
		<div class="row justify-content-center mt-3 pt-2">
			<div class="col-md-12">
				
					<div class="card text-center">
						<div class="card-header">
							Cards
						</div>
						<div class="card-body">					
							
							<h5 class="card-title">Bingo card:</h5>					
							<table class="table table-bordered">
							</table>                 
															
							<hr />
							<button id="generate_bingo_cards" class="btn btn-primary">Generar Bingo Card</button>
							<button id="delete_bingo_cards" class="btn btn-primary">Eliminar Bingo Card</button>
						</div>
						<div class="card-footer text-muted">
							Generate Bingo Cards
						</div>
					</div>                

			</div>
		</div>
	</div>

	<?php require_once 'views/layout/footer.php'; ?>
	<?php require_once 'views/layout/scripts.php'; ?>	
</body>
</html>