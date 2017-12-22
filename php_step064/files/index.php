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
	//$file_type = array('image/gif', 'image/png', 'image/jpeg');
	/*if ( !in_array($_FILES['file']['type'], $file_type) ) {
        move_uploaded_file($tmp_name, "user-files/$name");
        echo '<div style="width: 100px;">' . '<img style="width: 100%;" src=' . "user-files/$name" . '>' . '</div>';
    }*/
    //if (!in_array($_FILES['file']['type'], $file_type))
        //$mime_info = finfo_open(FILEINFO_MIME_TYPE);
        //$mime_type = finfo_file($mime_info, $name);
        //echo $mime_type;
        //die('Запрещённый тип файла. <a href="?">Попробовать другой файл?</a>');
    /*else {
        echo 'ERROR';
    }*/
    move_uploaded_file($tmp_name, "user-files/$name");
    echo '<div style="width: 100px;">' . '<img style="width: 100%;" src=' . "user-files/$name" . '>' . '</div>';
}
echo '<div style="width: 100%;">'.'<pre>';
print_r($_FILES);
echo '</pre>'.'</div>';
?>