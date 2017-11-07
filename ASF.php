<?php include("C:\\xampp\\htdocs\\password_protect.php"); ?>
<?php
if (isset($_GET['cmd'])) {
	$cmd = $_GET['cmd'];
	$output = exec("C:\Users\Cramik\Desktop\ASF\ASF.exe --client" . " " . $cmd);
	print_r($output);
}else{
    echo "No Command Given";
}
?>
