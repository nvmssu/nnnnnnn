





<!-- select image then save db and folder -->

<?php
error_reporting(0);

$msg = "";

//If upload button is clicked ...
if (isset($_POST['upload'])) {

	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "./img/" . $filename;

	$db = mysqli_connect("localhost", "root", "", "load_img");

    

// if (isset($_POST['upload'])) {

    

	// Get all the submitted data from the form
	$sql = "INSERT INTO image (filename) VALUES ('$filename')";

	 //Execute query
	mysqli_query($db, $sql);

	 //Now let's move the uploaded image into the folder: image
	if (move_uploaded_file($tempname, $folder)) {
		echo "<h3> Image uploaded successfully!</h3>";
	} else {
		echo "<h3> Failed to upload image!</h3>";
	}
}

?>
	


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
		$query = " select * from image ";
		$result = mysqli_query($db, $query);

		while ($data = mysqli_fetch_assoc($result)) {
		?>
			<img src="./img/<?php echo $data['filename']; ?>">
       <?php
        }
		?>
	</div> 
       
    <!-- <this class="reload"></this> -->
</body>
    
</html>

    

