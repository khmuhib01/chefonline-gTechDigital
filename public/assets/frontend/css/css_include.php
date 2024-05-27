<?php

function compress($buffer) 
{
    $buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer);

    $buffer = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $buffer);

    return $buffer;
}

$handle = opendir(".");

header  ('Content-type: text/css');
header  ("Cache-control: public");
header  ("Vary: Accept-Encoding");
header  ("Content-Encoding: gzip");

ob_start("ob_gzhandler");

while (false != ($file = readdir($handle))) 
{
    if (strpos($file,".css") !== FALSE)
    {
        echo compress (file_get_contents($file));
    }
}

?>