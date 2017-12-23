<form method="post" enctype="multipart/form-data">
    <input type="file" name="file[]" multiple>
    <input type="submit" name="submit">
</form>
<?php

foreach($_FILES['file']['name'] as $key => $name){
	$tmp_name = $_FILES['file']['tmp_name'][$key];
	$dir = 'photo';
	//if (  )
    $i++;
	$photo = explode(".", $name);
    move_uploaded_file($tmp_name, "$dir/$i.$photo[1]");
    echo '<div style="width: 100px;">' . '<img style="width: 100%;" src=' . "$dir/$i.$photo[1]" . '>' . '</div>';
}
echo '<div style="width: 100%;">'.'<pre>';
print_r($_FILES);
print_r($photo);
echo '</pre>'.'</div>';
?>