<?php
	require 'connection.php';
	if(ISSET($_POST['search'])){
?>
	<table class="table table-bordered">
		<thead class="alert-info">
			<tr>
				<th>Clasa</th>
				<th>Nume</th>
                                <th>Nota</th>
				<th>Descriere</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$keyword = $_POST['keyword'];
				$query = $dbh->prepare("SELECT * FROM liceu WHERE clasa LIKE '%$keyword%' or nume LIKE '%$keyword%' or nota LIKE '%$keyword%' or descriere LIKE '%$keyword%'");
				$query->execute();
				while($row = $query->fetch()){
			?>
			<tr>
				<td><?php echo $row['clasa']?></td>
				<td><?php echo $row['nume']?></td>
                                <td><?php echo $row['nota']?></td>
				<td><?php echo $row['descriere']?></td>
			</tr>
			
			
			<?php
				}
			?>
		</tbody>
	</table>
<?php		
	}else{
?>
	<table class="table table-bordered">
		<thead class="alert-info">
			<tr>
				<th>Clasa</th>
				<th>Nume</th>
				<th>Descriere</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$query = $dbh->prepare("SELECT * FROM liceu");
				$query->execute();
				while($row = $query->fetch()){
			?>
			<tr>
				<td><?php echo $row['clasa']?></td>
				<td><?php echo $row['nume']?></td>
                                <td><?php echo $row['nota']?></td>
				<td><?php echo $row['descriere']?></td>
			</tr>
			
			
			<?php
				}
			?>
		</tbody>
	</table>
<?php
	}
?>