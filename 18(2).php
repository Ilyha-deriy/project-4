<?php
function outputFiles($path){

    if(file_exists($path) && is_dir($path)){

        $result = scandir($path);


        $files = array_diff($result, array('.', '..'));

        if(count($files) > 0){

            foreach($files as $file){
                if(is_file("$path/$file")){

                    echo $file . "<br>";
                } else if(is_dir("$path/$file")){

                    outputFiles("$path/$file");
                }
            }
        } else{
            echo "ERROR: No files found in the directory.";
        }
    } else {
        echo "ERROR: The directory does not exist.";
    }
}


outputFiles("dz18");
?>