<style>
    .test {
        width: 90%;
        height: auto;
        margin-left: auto;
        margin-right: auto;
    }
	.test div {
		width: 390px;
		height: 390px;
		margin: 5px;
		display: block;
		float: left;
		position: relative;
	}
    .test .test2 {
        width: 95%;
        height: 95%;
        background-color: #fff;
        padding: 5px;
        border: 1px solid gray;
        border-radius: 4px;
        transition: all 0.5s;
    }
    .test .test2:hover {
        width: 450px;
        height: 450px;
        z-index: 100;
        position: relative;
        margin-left: -30px;
        margin-top: -30px;
        transition: all 0.5s;
    }
    .test div:hover span {
        z-index: 101;
    }
	img {
		width: 100%;
        height: 100%;
	}
	.test div span {
        width: 30px;
        height: 30px;
        position: absolute;
        top: 10px;
        right: 10px;
        background-color: green;
        color: white;
        font-size: 36px;
        text-align: center;
        border-radius: 50%;
        font-weight: bold;
        line-height: 30px;
        cursor: pointer;
        -webkit-transform: rotate(45deg);
        -moz-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        -o-transform: rotate(45deg);
        transform: rotate(45deg);
        opacity: 0.7;
	}
    .test div span:hover {
        background-color: red;
    }
</style>

<form method="post" enctype="multipart/form-data">
    <input type="file" name="file[]" multiple>
    <input type="submit" name="submit" value="Upload image">
</form>

<?php

    foreach($_FILES['file']['name'] as $key => $name) {

        $tmp_name = $_FILES['file']['tmp_name'][$key];

        $dir = 'img';

        $i++;

        $image = explode(".", $name);

        move_uploaded_file($tmp_name, "$dir/$i.$image[1]");

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

<?php

?>

<div class="test">
	<?php

		foreach($files as $key => $value){
			echo "<div><div class=\"test2\"><img src=\"img/$value\"><span>+</span></div></div>";
        }

	?>
</div>