<?php
if (isset($_GET['cmd'])) {
	$cmd = $_GET['cmd'];
	$ToFront = exec("C:\Users\Cramik\Desktop\ASF\ToFront.exe"); /* Change path to path of ToFront.exe */
	$output = exec("C:\Users\Cramik\Desktop\ASF\ASF.exe --client" . " " . $cmd); /*Change path to path of your ASF server */
	$img = imagegrabscreen();
	imagepng($img, 'screenshot.png');
	echo '<img src="screenshot.png" border=0>'; 
}else{
    echo "No Command Given";
}
?>