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
							<?php
								$numeros = "";
								if (isset($data['numeros_aleatorios'])) {
									foreach ($data['numeros_aleatorios'] as $key => $value) { 
										$numeros .= $value . ", ";
									}   
								}                                                      
							?>
							<p class="card-text"><?=$numeros?></p>                        
															
							<hr />
							<form method="POST" action="<?=base_url?>bingo/generate">
								<input type="SUBMIT" class="btn btn-primary" name="action" value="Generar numero">
								<input type="SUBMIT" class="btn btn-primary" name="action" value="Eliminar numero">
							</form>
							
							<br />
							<h1 style="font-size:200px;"><?=isset($data['numero_aleatorio_actual']) ? $data['numero_aleatorio_actual'] : 0;?></h1>
						</div>
						<div class="card-footer text-muted">
							La cantidad de numeros actual es: <?=$data['cantidad_numeros']?><br />
							<?=Utils::showStatusBingo($data['status'])?>
						</div>
					</div>                

			</div>
		</div>
	</div>
	
	<?php require_once 'views/layout/footer.php'; ?>
	<?php require_once 'views/layout/scripts.php'; ?>	
</body>
</html>