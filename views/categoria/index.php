<h1>Gestionar categorias</h1>

<a href="<?=base_url?>categoria/crear" class="button button-small">
	Crear categoria
</a>

<table>
	<tr>
		<th>ID</th>
		<th>NOMBRE</th>
		<th>ELIMINAR</th>
	</tr>
	<?php while($cat = $categorias->fetch_object()): ?>
		<tr>
			<td><?=$cat->id;?></td>
			<td><?=$cat->nombre;?></td>
			<td align="center">
				<form action="<?=base_url?>categoria/delete" method="POST">
					<input type="hidden" name="id" value="<?=$cat->id;?>">
					<input type="submit" style="background:red; border:red;" value="Eliminar">
				</form>				
			</td>
		</tr>
	<?php endwhile; ?>
</table>
