<?php
$connection=mysqli_connect('localhost','root','flamigo','accidentsystem');
$categoryId = $_GET['categoryId'];
$query = mysqli_query($connection, "SELECT * FROM `accidentsubcat` WHERE accidentTypeId = '$categoryId'");
$result = "<select name='subcategory' required> <option value=''>-select-</option>";
while($row = mysqli_fetch_array($query)) {
	$id = $row['id'];
	$type = $row['type'];
	$result = $result. " <option value='$id'>$type</option>";

}
$result = $result. "</select>";
print $result;
?>
