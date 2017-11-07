<?php
if (isset($_GET['cmd'])) {
	$cmd = $_GET['cmd'];
	$output = exec("*INSERT ASF DIRECTORY*/ASF.exe --client" . " " . $cmd);
	print_r($output);
}else{
    echo "No Command Given";
}
?>
