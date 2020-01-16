<?php

    $index = $_GET['index'];
    $currentFile = "img-file".$index;

    if($_FILES[$currentFile]["error"])
    {
        echo $_FILES[$currentFile]["error"];
    }
    else
    {
        if(($_FILES[$currentFile]["type"]=="image/jpeg" || $_FILES[$currentFile]["type"]=="image/png")&& $_FILES[$currentFile]["size"]<1024000)
        {
            $fname = "uploads/".date("YmdHis").$_FILES[$currentFile]["name"]; 

            $filename = iconv("UTF-8","gb2312",$fname);

            if(file_exists($filename))
            {
                echo "<script>alert('该文件已存在！');</script>";
            }
            else
            {
                move_uploaded_file($_FILES[$currentFile]["tmp_name"],$filename);
                unlink($_POST["tp"]);
                echo "<script>parent.showimg('{$fname}', $index);</script>";
            }

        }
    }
?>