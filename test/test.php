<?php
$read = file("name.docx");
foreach($read as $line){
	echo($line."<br/>");
}
