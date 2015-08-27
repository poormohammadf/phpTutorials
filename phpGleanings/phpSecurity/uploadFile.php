<?php


if (isset($_POST['submit'])){

    $uploadDir = "bab1/";

    //limit file size
    $maxsize = 50000;
    if ($_FILES['ufile']['size'] > $maxsize){

        exit("Your file (" . number_format($_FILES['ufile']['size']/1000,0,',','.') . " kb) exceed limit (50kb).");
    }

    //limit file type
    $allowedExt=array("gif","jpg","jpeg","png","bmp");
    $split=explode(".", $_FILES["ufile"]["name"]);
    $extension=end($split);
    if(in_array($extension,$allowedExt))
    {

        //change file name
        $newFilename = $uploadDir.round(microtime(true)) . '.' . $extension;
        $upload = move_uploaded_file($_FILES['ufile']['tmp_name'], $newFilename);

        if ($upload) {
            echo "success upload";

        } else {
            print_r($_FILES);
        }
    }

}
else{
    die('error');
}


?>