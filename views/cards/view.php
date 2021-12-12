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
                                <?php if (isset($data['bingo_cards'])) { ?>    
                            
                                    <tbody>                                                                
                                        <tr>      
                                            <?php for ($i=0; $i<=4; $i++) { ?>
                                                <td><?=$data['bingo_cards'][$i]?></td>    
                                            <?php } ?>
                                        </tr>                                         
                                            
                                        <tr>      
                                            <?php for ($i=5; $i<=9; $i++) { ?>
                                                <td><?=$data['bingo_cards'][$i]?></td>    
                                            <?php } ?>         
                                        </tr>      

                                        <tr>      
                                            <?php for ($i=10; $i<=14; $i++) { ?>
                                                <td><?=$data['bingo_cards'][$i]?></td>    
                                            <?php } ?>         
                                        </tr>     

                                        <tr>      
                                            <?php for ($i=15; $i<=19; $i++) { ?>
                                                <td><?=$data['bingo_cards'][$i]?></td>    
                                            <?php } ?>         
                                        </tr>      

                                        <tr>      
                                            <?php for ($i=20; $i<=24; $i++) { ?>
                                                <td><?=$data['bingo_cards'][$i]?></td>    
                                            <?php } ?>         
                                        </tr>
                                    </tbody>

                                <?php } ?>
							</table>                 
															
							<hr />
							<form method="POST" action="<?=base_url?>cards/generate">
								<input type="SUBMIT" class="btn btn-primary" name="action" value="Generar cards">
								<input type="SUBMIT" class="btn btn-primary" name="action" value="Eliminar cards">
							</form>
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