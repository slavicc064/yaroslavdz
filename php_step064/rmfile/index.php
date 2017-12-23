<style>
	.test div {
		width: 25%;
		heught: auto;
		padding: 5px;
		display: block;
		float: left;
		position: relative;
	}
	img {
		width: 100%;
	}
	.test {
		width: 100%;
	}
	.test div span {
		width: 30px;
		height: 30px;
		position: absolute;
		top: 10px;
		right: 10px;
		background-color: green;
		color: white;
		font-size: 24px;
		text-align: center;
		border-radius: 50%; 
		font-weight: bold;
		cursor: pointer;
	}
    .test div span:hover {
        background-color: red;
    }
</style>

<form method="get" enctype="multipart/form-data">
    <input type="file" name="file[]" multiple>
    <input type="submit" name="submit" value="Upload image">
</form>
<?php

    foreach($_FILES['file']['name'] as $key => $name){
        $tmp_name = $_FILES['file']['tmp_name'][$key];
        $dir = 'img';
        //if (  )
        $i++;
        $image = explode(".", $name);
        move_uploaded_file($tmp_name, "$dir/$i.$image[1]");
        echo '<div style="width: 100px;">' . '<img style="width: 100%;" src=' . "$dir/$i.$image[1]" . '>' . '</div>';
    }
?>


<?php 
	$dir = "img";
    function dirToArray($dir) {

        $result = array();

        $cdir = scandir($dir);
        foreach ($cdir as $key => $value)
        {
            if (!in_array($value,array(".","..")))
            {
                if (is_dir($dir . DIRECTORY_SEPARATOR . $value))
                {
                    $result[$value] = dirToArray($dir . DIRECTORY_SEPARATOR . $value);
                }
                else
                {
                    $result[] = $value;
                }
            }
        }

        return $result;
    }
    $files = dirToArray($dir);
	/*echo '<pre>';
	print_r($files);*/
?>

<div class="test">
	<?php
		foreach($files as $key => $value){
			echo "<div><img src=\"img/$value\"><span>+</span></div>";
		}
	?>
</div>