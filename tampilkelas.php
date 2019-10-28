<!DOCTYPE html>
<html>
<head>
    <title>Tampil Data Kelas</title>
    <!-- bootsrap  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

	<div class="container">

		<a class="btn btn-success text-light" href="insertkelas.php" style="text-decoration: none;">Tambah</a><br><br>

	    <table class="table table-striped table-sm table-hover table-bordered">
	        <?php
	            include 'koneksi.php';
	 
	            $sql = "SELECT * FROM tb_kelas";
	 
	            $tampil_data = $koneksi->query($sql);
	 
	            if ($tampil_data->num_rows > 0) {      
	        ?>
	        <thead class='thead-dark'>

	        <tr>
	                <th>No</th>
	                <th>Nama kelas</th>
	                <th>Keterangan kelas</th>
	                <th>Aksi</th>
	            </tr>
	        	
	        </thead>
	        <tbody>
	            
	 
	        <?php
	            $no = 1;
	            while ($row = $tampil_data->fetch_assoc()) {
	        ?>
	       
	       

	       	<tr>
	                <td><?= $no++ ?></td>
	                <td><?= $row['nama_kelas'] ?></td>
	                <td><?= $row['keterangan_kelas'] ?></td>
	                <td><a class="btn btn-warning"href="editkelas.php?id=<?=$row['id_kelas'] ?>">Edit</a> 
	                	<a class="btn btn-danger"href="hapuskelas.php?id=<?=$row['id_kelas']?>" onclick="return confirm('Hapus data?')">Hapus</a></td>
	            </tr>
	       	
	       
	            
	 
	        <?php
	            }
	   
	            } else {
	                echo "Data kosong";
	            }
	           
	        ?>

	    	</tbody>
	    </table>
	</div>
	    
<!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

<!-- bootstrap script -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>