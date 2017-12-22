<form method="post" enctype="multipart/form-data">
    <input type="file" name="file[]" multiple>
    <input type="submit" name="submit">
</form>
<?php
/*$fileDirectory = '/user-files/';
$files = $fileDirectory . basename($_FILES['file']['name']);
move_uploaded_file($tmp_name, "$uploads_dir/$name");*/

foreach($_FILES['file']['name'] as $key => $name){
	$tmp_name = $_FILES['file']['tmp_name'][$key];
	$dir = 'photo';
	//if (  )
	$i = 1;
	$i++;
	$photo = explode(".", $name);
    move_uploaded_file($tmp_name, "$dir/$i.$photo[1]");
}

?>