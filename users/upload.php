<form name="upload" method="post" action="" enctype="multipart/form-data" >
	<input type="file" name="file" accept="image/*" />
	<input  type="submit" name="submit" />
</form>
<?php
if($_POST['submit']) {
	
	$tmp_name = $_FILES['file']['tmp_name'];
	$imagename = $_FILES['file']['name'];

	print "$tmp_name and $imagename";
	if(move_uploaded_file($tmp_name, $imagename)) print "success";
	else print "error";
}

?>