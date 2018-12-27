<?php
$tmpname=$_FILES['upload']['tmp_name'];
$size=$_FILES['upload']['size'];
$name=$_FILES['upload']['name'];
$type=$_FILES['upload']['type'];
$path="../Uploads/";
if (move_uploaded_file($tmpname,$path.$name)) 
{
	echo"file uploaded";
	echo "img src=$path.$name>";
}
else
{
	echo "Something Wrong";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Fileupload</title>
</head>
<body>
	<form method="POST" name="ImgUpload" action="" enctype="multipart/form-data">
		<input type="file" name="upload"/>
		<input type="submit" name="submit" value="upload"/>
		
	</form>

</body>
</html>