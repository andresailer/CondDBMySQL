<?php
/*This file is used to display objects selected with the option
	browse point.
*/

//print browser menu
require_once(PHP_LIB_PATH. "browser_menu.php");
$objects= $condDB->getTag($_SESSION['folder'], $_SESSION['tag']);

echo("<br/> <div class=\"info\">\n");
require_once(PHP_LIB_PATH . "cond_utils.php");
printObjects($objects);
echo("\n</div>\n");

?>		
