<?php
if(isset($_POST['username'])&&isset($_POST['username'])){
	$username = $_GET['username'];
	$password = $_GET['password'];
}
$baseIntToChar = str_split("abcdefghijklmnopqrstuvwxyz0123456789");
$baseCharToInt = array();
for ($i = 0; $i < count($baseIntToChar); $i++) {
	$baseCharToInt[$baseIntToChar[$i]] = $i;
}
function Encrypt($plain,$key){
	$EncryptStr = "";
	$lenKey = 40-count($plain);
	function AdditionChar($char1,$char2){
		global $baseCharToInt,$baseIntToChar;
		$IntAdditionChr = ($baseCharToInt[$char1]+$baseCharToInt[$char2])%count($baseCharToInt);
		return $baseIntToChar[$IntAdditionChr];
	}
	foreach(str_split($plain) as $Plainch){
		$EncryptStr = $EncryptStr.AdditionChar($Plainch,'a');
	}
	return $EncryptStr;
}
function Decrypt($ChiperTxt){
	$DecryptTxt = "";
	return $DecryptTxt;
}
function MakeKey($plainTxt,$lenKey){
	$Key = "";
	return $Key;
}
echo Encrypt("hello","shit");
?>