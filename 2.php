<?php
function file_get_content_with_cache($file)
{
    static $files = NULL;
    static $content = NULL;
    static $arr = array();
    if ($content == NULL and $files == NULL) {
        $files = $file;
        $content = file_get_contents($file);
        $arr[0][0] = $file;
        $arr[0][1] = $content;
        echo $content, "<br>\n";
    } elseif ($content != NULL and $files != NULL) {
        foreach ($arr as $key1 => $value1) {
            $exist = false;
            if ($value1[0] == $file) {
                echo "Файл есть", "<br>\n";
                echo $arr[$key1][1], "<br>\n";
                $exist = true;
            }
        }
        if (!$exist)
        else {
            $content = file_get_contents($file);
            $arr[][0] = $file;
            $arr[count($arr) - 1][1] = $content;
            echo "Новый файл", "<br>\n";
            echo $content, "<br>\n";
            echo "<pre>";
            print_r($arr);
            echo "</pre>";
        }
    }
}



file_get_content_with_cache('content1.txt');
file_get_content_with_cache('content2.txt');
file_get_content_with_cache('content1.txt');
?>