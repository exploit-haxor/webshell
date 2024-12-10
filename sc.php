<?php
/**
 * POSSIBLE PATTERNS = "passthru|shell_exec|system|phpinfo|base64_decode|popen|exec|proc_open|pcntl_exec|python_eval|fopen|fclose|readfile"
 */
ini_set('max_execution_time', '0');
ini_set('set_time_limit', '0');

find_files('.');

function find_files($seed) {
    if (!is_dir($seed)) {
        return false;
    }

    $files = [];
    $dirs = [$seed];

    while (NULL !== ($dir = array_pop($dirs))) {
        if ($dh = opendir($dir)) {
            while(false !== ($file = readdir($dh))) {
                if ($file == '.' || $file == '..') {
                    continue;
                }
                $path = $dir . '/' . $file;
                if (is_dir($path)) {
                    $dirs[] = $path;
                } else {
                    if (preg_match('/^.*\.(php[\d]?|js|txt)$/i', $path)) {
                        check_files($path);
                    }
                }
            }
            closedir($dh);
        }
    }
}

function check_files($this_file) {
    $str_to_find = 'wso'; // the string(code/text) to search for

    if (!($content = file_get_contents($this_file))) {
        echo "<p>Could not check $this_file</p>\n";
    } else {
        if (stristr($content, $str_to_find)) {
            echo "<p>$this_file -> contains $str_to_find</p>\n";
        }
    }
    unset($content);
}
