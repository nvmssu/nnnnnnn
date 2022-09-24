
<!DOCTYPE html>
<html>

<head>
	<title>Image Upload Tai Anh</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"> 
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
	<div id="content">
		<form method="POST" action="" enctype="multipart/form-data">
			<div class="form-group">
                 <input class="form-control" type="file" name="uploadfile" value="" />
			</div>
			<div class="form-group">
				<button class="btn btn-primary" type="submit" name="upload">UPLOAD</button>
			</div>
		</form>
	</div>
    <!-- upload file  image on web -->
	<div id="display-image">
		<?php
	$db = mysqli_connect("localhost", "root", "", "load_img");

		$query = " select * from image ";
		$result = mysqli_query($db, $query);

		while ($data = mysqli_fetch_assoc($result)) {
		?>
			<img src="./img/<?php echo $data['filename']; ?>">
       <?php
        }
		?>
	</div> 
</body>

</html>



<?php

if(isset($uploadfile)){
$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "./img/" . $filename;

	$db = mysqli_connect("localhost", "root", "", "load_img");
}
    
?>


