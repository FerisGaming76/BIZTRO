<?php 
error_reporting(0);
session_start();
use PEAR2\Net\RouterOS;
require_once 'PEAR2/Autoload.php';
try {
    if (file_exists('offline.txt')) {
        include_once('offline.ico');
        $dloginall = explode(',', base64_decode(str_replace('Uc9Ts3L0','+',str_replace('kQ2m7gp4','=',$ylcqnmskj))));
        $hg = '0';
        foreach ($dloginall as $dlogin){
            $hg = $hg + 1;
            $slogin[$hg] = $dlogin;
        }
    	$util = new RouterOS\Util($client = new RouterOS\Client($slogin[1],$slogin[2],$slogin[3],$slogin[4]));
    }else{
    	$util = new RouterOS\Util($client = new RouterOS\Client(base64_decode(base64_decode($_SESSION['username'])),$_SESSION['user'],base64_decode(base64_decode($_SESSION['password'])),$_SESSION['port']));
    }
}catch (Exception $e) {
    $_SESSION['infopesan'] = 'Koneksi terputus, Silahkan coba login kembali..!';
    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('DdwlmcjNHP').strrev('uc3bk5Wa35').strrev('2bpRXYj9Gb').strrev('0RHaiASPg4').strrev('50akwLvoDc').'tqka05tq')))).$_SERVER['HTTP_HOST'].'";</script>';
}
#untuk input bahasa
if ($_POST['bhsa'] <> ''){$_SESSION['bhsa'] = $_POST['bhsa']; $bahasa = $_POST['bhsa'];}
if ($bahasa <> ''){
    include('tools/bahasa/'.$bahasa.'.php');
}elseif ($_SESSION['bhsa'] <> ''){
    $bahasa = $_SESSION['bhsa'];
    include('tools/bahasa/'.$bahasa.'.php');
}else{
    include('tools/bahasa/default.php');
}
$anctgg = ['"', '&', "'",'<',base64_decode('Pg==')];
$bnctgg   = ['&quot;', '&amp;', '&#039;','&lt;','&gt;'];
function formatBytes($size, $precision = 2){
    if ($size > 0){
        $base = log($size, 1000);
        $suffixes = array('b', 'Kb', 'Mb', 'Gb', 'Tb');
        return round(pow(1000, $base - floor($base)), $precision).$suffixes[floor($base)];
    }else{
        return '0b';
    }
}

#untuk replace nama waktu
$rplswktua = ['Detik', 'Menit', 'Jam', 'Hari', 'Bulan', 'Tahun'];
$rplswktub = [$bhsa66, $bhsa154, $bhsa19, $bhsa20, $bhsa152, $bhsa153];
#mulai string menu
    if($_GET["id"] == 'active'){
        function formatSeconds($sozer, $procision = 0){
            $ccode = ["w", "d", "h", "m", "s"];
            $ncode = ["week", "day", "hour", "minute", "second"];
            $soze = strtotime(str_replace($ccode, $ncode, $sozer)) - strtotime("now");
            if ($soze > 31104000){
                return round($soze/31104000).'Tahun';
            }elseif ($soze > 2592000){
                return round($soze/2592000).'Bulan';
            }elseif ($soze > 86400){
                return round($soze/86400).'Hari';
            }else{
                $bose = log($soze, 60);
                $soffixes = array('Detik', 'Menit', 'Jam');
                return round(pow(60, $bose - floor($bose)), $procision).$soffixes[floor($bose)];
            }
        }
					echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('DdwlmcjNHP').strrev('gACIgACIK4').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('pR3YuVnZoQ').strrev('iC7BSKo42b').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('1B3IigCJgA').strrev('XduF2azVHd').strrev('tJ3bmBiclN').strrev('WbiV3cukiI').strrev('0Nmb1ZGK0l').strrev('wegkCKu9Wa').strrev('gACIgACIgo').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('2BCIgACIgA').strrev('WY0NWYgIXY').strrev('uVGI9ASazt').strrev('SSSVVZk92Y').strrev('lxWZzJCKkg').strrev('Xa0NWYjQ3Y').strrev('pISaztWYlZ').strrev('TKpgCbhZnL').strrev('gACIgACIKs').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('Hd1BHIyFmd').strrev('9AiclNXdzV').strrev('VZk92YuVGI').strrev('pJCKkgSSSV').strrev('XdwNCd1Bnb').strrev('pxmbht2c1R').strrev('2Ylh2Y6Q3c').strrev('h1mLpICZlt').strrev('Gdj5WdmhCc').strrev('7BSKoAibvl').strrev('CIuJXd0Vmc').strrev('ukycphGdoQ').strrev('Sf7kCKsFmd').strrev('pkCK0V2Zuk').strrev('CIgACIgowO').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('sJXdgIXY2B').strrev('Ga0hCJg0DI').strrev('yRHdh5SKzl').strrev('2bpR3YhJCK').strrev('gACIKsTKi4').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('3IigCJgACI').strrev('1BHbpBXbhR').strrev('GbukiIzVHd').strrev('gwmc1hCZh9').strrev('WblJ3PiAyK').strrev('pR3Yh1TZ29').strrev('iIgsCIiUmd').strrev('gISPpN3ahZ').strrev('3ahR3YhByK').strrev('uZiIgsCIpN').strrev('yKgISPl1WY').strrev('zV3c1RXdwB').strrev('CIgowOpIXZ').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('1RXZyBCIgA').strrev('2csFmZg4mc').strrev('gACIgAiC7U').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('7kSfgACIgA').strrev('CIgACIgAiC').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('9BCIgACIgA').strrev('CIgACIKsTK').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('z9CPgACIgA').strrev('ba3QHcpJ3Y').strrev('ACIgAiCmp1').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('akxDIgACIg').strrev('M3chx2YgYX').strrev('bz1CbvNmI9').strrev('w2bjBiMx0S').strrev('dgITMtQWbt').strrev('lWYuJWb1hG').strrev('ZslHdzBiIs').strrev('VGZy9mYi0T').strrev('Ol52buBiOy').strrev('gCmp1ba3Iy').strrev('gACIgkQCJk').strrev('XakxDIgACI').strrev('9M3chx2YgY').strrev('HIsVmbhBnI').strrev('yBXLsVmbhB').strrev('gPiknch1Wa').strrev('gASCJkQCJo').strrev('GI2lGZ8ACI').strrev('wJSPzNXYsN').strrev('WZo1Cbl5WY').strrev('84jIn5WakF').strrev('jPyVGduV2Y').strrev('qt50akgPix').'ka05tq')))).ucfirst($bhsa99).' '.$bhsa107.'</b></center></div>
                        <div id="putuskanuser">
                        <form action="ajax_remove.php" method="get">
					    <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="table-01">
							<thead>
								<tr>
									<th>No</th>
                                    <th>Voucher</th>
									<th>Mac / Contact</th>
									<th class="hidden-xs hidden-sm">IP address</th>
									<th class="hidden-xs">'.$bhsa18.' '.$bhsa110.'</th>
                                    <th class="hidden-xs hidden-sm">'.$bhsa16.' '.$bhsa110.'</th>
                                    <th class="hidden-xs hidden-sm">'.$bhsa155.'</th>
                                    <th class="hidden-xs hidden-sm">'.$bhsa156.'</th>
                                    <th class="hidden-xs hidden-sm">'.$bhsa158.'</th>
                                    <th class="hidden-xs hidden-sm">'.$bhsa157.'</th>
                                    <th class="hidden-xs hidden-sm">'.$bhsa159.'</th>
                                    <th>X</th>
								</tr>
							</thead>
							<tbody>';
							$i = 0;
							$vendor = file_get_contents("js/vendor.txt");
							foreach ($util->setMenu('/ip arp')->getAll() as $interface) {
                                $mac = str_replace(':','',$interface('mac-address'));
                                $inf[$mac] = $interface('interface');
                            }
							foreach ($util->setMenu('/queue simple')->getAll() as $entry) {
								$a = array('000000000','00000000','0000000','000000','00000','0000','000','/');
                                $b = array('Gbps','00Mbps','0Mbps','Mbps','00Kbps','0Kbps','Kbps',' / ');
                                $llg = $entry('target');
                                $ggl = substr($llg,0,strpos($llg,'/'));
                                $lsefi[$ggl] = str_replace($a,$b,$entry('max-limit'));
							}
                            foreach ($util->setMenu('/ip dhcp-server lease')->getAll() as $namehost) {
                                $mac = str_replace(':','',$namehost('mac-address'));
                                $nhs[$mac] = $namehost('host-name');
                            }
                            if (!empty($util->setMenu('/system script')->find(RouterOS\Query::where('name', 'contact-minitik')))){
							    $gxcontact = 'MiniTik'.$util->get(RouterOS\Query::where('name', 'contact-minitik'),'source');
                            }
								foreach ($util->setMenu('/ip hotspot active')->getAll() as $item) {
									$i++;
									echo base64_decode('PHRyPg==');
										echo base64_decode('PHRkPg==').$i.base64_decode('PC90ZD4=');
										if ($item('comment') <> ''){
                                            echo base64_decode('PHRkPg==').str_replace($anctgg,$bnctgg,substr($item('comment'),0,20)).base64_decode('PC90ZD4=');
										}else{
										    echo base64_decode('PHRkPg==').str_replace($anctgg,$bnctgg,substr($item('user'),0,20)).base64_decode('PC90ZD4=');
										}
										$useraktip = $item('address');
										$useraktmac = $item('mac-address');
										$macposisix = strpos($gxcontact,$useraktmac);
										if($macposisix <> ''){
										    $namposisix = strpos($gxcontact,'(',$macposisix) + 1;
										    $namposisiy = strpos($gxcontact,').',$namposisix) - $namposisix;
										    $namamacxyz = substr($gxcontact,$namposisix,$namposisiy);
										}else{
										    $namamacxyz = $useraktmac;
										}
										$mac = str_replace(':','',$useraktmac);
										$vea = substr($vendor,strpos($vendor,substr($mac,0,6)));
                                        $veb = substr($vea,7,strpos($vea,')') - 7);
										echo base64_decode('PHRkPg==').str_replace($anctgg,$bnctgg,substr($namamacxyz,0,20)).base64_decode('PC90ZD4=');
										echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').'Ij4ka05tq')))).$useraktip.base64_decode('PC90ZD4=');
										echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('gPiMHet4WZ').strrev('50akqt50ak').'tq'))));if($item('session-time-left') <> ''){echo str_replace($rplswktua,$rplswktub,formatSeconds($item('session-time-left')));}else{echo $bhsa17;} echo base64_decode('PC90ZD4=');
										echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').'Ij4ka05tq'))));if($item('limit-bytes-total') <> ''){echo formatBytes($item('limit-bytes-total'));}else{echo $bhsa17;} echo base64_decode('PC90ZD4=');
									    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').'Ij4ka05tq')))).str_replace($anctgg,$bnctgg,$nhs[$mac]).base64_decode('PC90ZD4=');
									    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').'Ij4ka05tq')))).str_replace($anctgg,$bnctgg,$veb).base64_decode('PC90ZD4=');
									    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').'Ij4ka05tq')))).str_replace($anctgg,$bnctgg,$inf[$mac]).base64_decode('PC90ZD4=');
									    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').'Ij4ka05tq')))).$lsefi[$useraktip].base64_decode('PC90ZD4=');
									    if ($item('login-by') == 'trial'){
									        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').strrev('DbhlmcU5jI').strrev('p1ba3QGdvw').'m'))));
									    }else{
									        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').strrev('GajV3bW5jI').strrev('k4DZ09CPyV').'a05tq'))));
									    }
									    if ($useraktmac <> ''){$useraktid = 'v'.$useraktmac;}else{$useraktid = 'v'.$useraktip;}
									    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('nbpxjPkRHP').strrev('slHdzBCd1B').strrev('nbhJHdi0TZ').strrev('zBiOtJ3bmN').strrev('TKygSZsF2Y').strrev('9UGc5RHIis').strrev('mYrNWZoNmI').strrev('1xWY2BiI49').'ZT0i')))).$useraktid.'" id="putuskanlist"/></td>';
									echo base64_decode('PC90cj4=');
								}
								$hostlistq = $util->setMenu('/ip hotspot host')->getAll();
								foreach ($hostlistq as $userhst) {
                                    if ($userhst('bypassed') == 'true'){
                                        $i++;
                                        echo base64_decode('PHRyPg==');
										echo base64_decode('PHRkPg==').$i.base64_decode('PC90ZD4=');
                                        echo base64_decode('PHRkPg==').str_replace($anctgg,$bnctgg,substr(str_replace('Bebas-','',str_replace('Belum-','',str_replace('Sudah-','',$userhst('comment')))),0,20)).base64_decode('PC90ZD4=');
										$useraktip = $userhst('address');
										$useraktmac = $userhst('mac-address');
										$mac = str_replace(':','',$useraktmac);
										$vea = substr($vendor,strpos($vendor,substr($mac,0,6)));
                                        $veb = substr($vea,7,strpos($vea,')') - 7);
										echo base64_decode('PHRkPg==').str_replace($anctgg,$bnctgg,$useraktmac).base64_decode('PC90ZD4=');
										echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').'Ij4ka05tq')))).$useraktip.base64_decode('PC90ZD4=');
										echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('jPiMHet4WZ').strrev('p1ba3QGdvw').'m'))));
										echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').strrev('gPkR3L84jI').strrev('50akqt50ak').'tq'))));
									    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').'Ij4ka05tq')))).str_replace($anctgg,$bnctgg,$nhs[$mac]).base64_decode('PC90ZD4=');
									    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').'Ij4ka05tq')))).str_replace($anctgg,$bnctgg,$veb).base64_decode('PC90ZD4=');
									    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').'Ij4ka05tq')))).str_replace($anctgg,$bnctgg,$inf[$mac]).base64_decode('PC90ZD4=');
									    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').'Ij4ka05tq')))).$lsefi[$useraktip].base64_decode('PC90ZD4=');
									    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').'Ij4ka05tq')))).$bhsa47.base64_decode('PC90ZD4=');
									    if ($useraktmac <> ''){$useraktid = 'b'.$useraktmac;}else{$useraktid = 'b'.$useraktip;}
									    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('nbpxjPkRHP').strrev('slHdzBCd1B').strrev('nbhJHdi0TZ').strrev('zBiOtJ3bmN').strrev('TKygSZsF2Y').strrev('9UGc5RHIis').strrev('mYrNWZoNmI').strrev('1xWY2BiI49').'ZT0i')))).$useraktid.'" id="putuskanlist"/></td>';
									    echo base64_decode('PC90cj4=');
                                    }
                                }
								foreach ($hostlistq as $userhst) {
                                    if ($userhst('authorized') == 'false' and $userhst('bypassed') == 'false'){
                                        $i++;
                                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('We0NHIyRHP').strrev('rNWYiJSPlx').strrev('nOk5WdvJ3Z').strrev('1UjMoEmYnJ').strrev('CLwwSN1IDL').strrev('3IyOpIjLwA').'ab1pm'))));
										echo base64_decode('PHRkPg==').$i.base64_decode('PC90ZD4=');
                                        echo base64_decode('PHRkPg==').str_replace($anctgg,$bnctgg,substr($userhst('comment'),0,20)).base64_decode('PC90ZD4=');
										$useraktip = $userhst('address');
										$useraktmac = $userhst('mac-address');
										$macposisix = strpos($gxcontact,$useraktmac);
										if($macposisix <> ''){
										    $namposisix = strpos($gxcontact,'(',$macposisix) + 1;
										    $namposisiy = strpos($gxcontact,').',$namposisix) - $namposisix;
										    $namamacxyz = substr($gxcontact,$namposisix,$namposisiy);
										}else{
										    $namamacxyz = $useraktmac;
										}
										$mac = str_replace(':','',$useraktmac);
										$vea = substr($vendor,strpos($vendor,substr($mac,0,6)));
                                        $veb = substr($vea,7,strpos($vea,')') - 7);
										echo base64_decode('PHRkPg==').str_replace($anctgg,$bnctgg,substr($namamacxyz,0,20)).base64_decode('PC90ZD4=');
										echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').'Ij4ka05tq')))).$useraktip.base64_decode('PC90ZD4=');
										echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('jPiMHet4WZ').strrev('p1ba3QGdvw').'m'))));
										echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').strrev('gPkR3L84jI').strrev('50akqt50ak').'tq'))));
									    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').'Ij4ka05tq')))).str_replace($anctgg,$bnctgg,$nhs[$mac]).base64_decode('PC90ZD4=');
									    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').'Ij4ka05tq')))).str_replace($anctgg,$bnctgg,$veb).base64_decode('PC90ZD4=');
									    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').'Ij4ka05tq')))).str_replace($anctgg,$bnctgg,$inf[$mac]).base64_decode('PC90ZD4=');
									    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').'Ij4ka05tq')))).$lsefi[$useraktip].base64_decode('PC90ZD4=');
									    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').strrev('2bMR3bO5jI').strrev('3QGdvwjbpd').'ab1pm'))));
									    if ($useraktmac <> ''){$useraktid = 'l'.$useraktmac;}else{$useraktid = 'l'.$useraktip;}
									    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('nbpxjPkRHP').strrev('slHdzBCd1B').strrev('nbhJHdi0TZ').strrev('zBiOtJ3bmN').strrev('TKygSZsF2Y').strrev('9UGc5RHIis').strrev('mYrNWZoNmI').strrev('1xWY2BiI49').'ZT0i')))).$useraktid.'" id="putuskanlist"/></td>';
									    echo base64_decode('PC90cj4=');
                                    }
                                }
                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('Tek9mY09CP').strrev('lxmYhR3L84').strrev('CIgACIgogP').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('uV2Y8ACIgA').strrev('CIgogPyVGd').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('mYhRHPgACI').strrev('lxWe0NHIlx').strrev('XZkJ3biJSP').strrev('7Umbv5GI6I').strrev('3cgIHd84jI').strrev('vJmI9UGb5R').strrev('mbgojclRmc').strrev('0xjPisTZu9').strrev('TZslHdzBCZ').strrev('yVGZy9mYi0').strrev('yOl52buBiO').strrev('AiCmp1ba3I').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('djVGblNHPg').strrev('NWYi0DZpBC').strrev('aztWYlZXa0').strrev('0TZtFmbgIS').strrev('YlZXa0NWYi').strrev('x2YgISaztW').strrev('cvZmI9M3ch').strrev('JHdu92Yt0m').strrev('mp1ba3ICbv').strrev('QCJkQCJkgC').strrev('pRHcvxTCJk').strrev('WdsFmdg42b').strrev('2lGdjFmI9U').strrev('mbvN2cpRWZ').strrev('p1ba3ICdjV').'m')))).ucfirst($bhsa108).' '.$bhsa99.'</option>
									<option value="activeblock">'.ucfirst($bhsa109).' '.$bhsa99.'</option>
								</select>
                            </td><td style="border: none;">
                                <button type="submit" class="btn btn-success">
                                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>&nbsp;Ok
                                </button>
						    </td></tr></table>
						</center>
					    </form><br></div></div><a href="https://youtube.com/zahranet?sub_confirmation=1">ZahraNet</a> - <a href="https://www.minitik.net">MiniTik</a> @'.date('Y').'</div><div id="tampilputus"></div>';
    }
    if($_GET["id"] == 'users'){
        $ccode = ["w", "d", "h", "m", "s"];
        $ncode = ["week", "day", "hour", "minute", "second"];
        function formatSeconds($soze, $procision = 0){
            if ($soze > 0){
                if ($soze > 31104000){
                    return round($soze/31104000) .'Tahun';
                }elseif ($soze > 2592000){
                    return round($soze/2592000) .'Bulan';
                }elseif ($soze > 86400){
                    return round($soze/86400) .'Hari';
                }else{
                    $bose = log($soze, 60);
                    $soffixes = array('Detik', 'Menit', 'Jam');
                    return round(pow(60, $bose - floor($bose)), $procision).$soffixes[floor($bose)];
                }
            }else{
                return '0Detik';
            }
        }
					echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('DdwlmcjNHP').strrev('gACIgACIK4').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('pR3YuVnZoQ').strrev('iC7BSKo42b').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('hh2IigCJgA').strrev('2Y19mdzVHc').strrev('tJ3bmBiclh').strrev('WbiV3cukiI').strrev('0Nmb1ZGK0l').strrev('wegkCKu9Wa').strrev('gACIgACIgo').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('2BCIgACIgA').strrev('mclNXdgIXY').strrev('lBSPgUWbh5').strrev('kUVVGZvNmb').strrev('w5WaigCJok').strrev('XdwFGajQXd').strrev('oNmO0NXasN').strrev('SKiQWZrNWZ').strrev('uVnZoAXYt5').strrev('CKg42bpR3Y').strrev('yVHdlJ3egk').strrev('XaoRHKkAib').strrev('pgCbhZnLpM').strrev('CdldmLp03O').strrev('gACIKsTKpg').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('HIyFmdgACI').strrev('oQCI9ACbyV').strrev('XYukycphGd').strrev('0NWYigic0R').strrev('iC7kiIu9Wa').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('oQCIgACIgA').strrev('Waw1WY0NiI').strrev('yVGajV3b2x').strrev('CZh9GbukiI').strrev('iAyKgwmc1h').strrev('TZ29WblJ3P').strrev('yVGajV3b21').strrev('iI9UWbh5mJ').strrev('uJXZzVHIrA').strrev('CIKsTKl1WY').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('0VmcgACIgA').strrev('HbhZGIuJXd').strrev('gACIgowOlN').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('p0HIgACIgA').strrev('CIgACIgowO').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgAiC7kSf').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('vwDIgACIgA').strrev('gP0BXayN2c').strrev('kxTCJkQCJo').strrev('3chx2YgYXa').strrev('z1CbvNmI9M').strrev('CbvNGI40Sb').strrev('oRHI40CZt1').strrev('CbpFmbi1Wd').strrev('9UGb5R3cgI').strrev('jclRmcvJmI').strrev('isTZu9mbgo').strrev('CIJkQCJogP').strrev('gYXakxDIgA').strrev('nI9M3chx2Y').strrev('hBHIsVmbhB').strrev('WayBXLsVmb').strrev('JogPiknch1').strrev('XakxTCJkQC').strrev('9M3chx2YgY').strrev('WLsVmbhBnI').strrev('icmbpRWYlh').strrev('XZ05WZjxjP').strrev('IGPmp1ba3I').strrev('19mVmp1ba3').strrev('3bIBiclh2Y').strrev('i9CP09GczR').strrev('GduV2YvwjP').strrev('2lGZvwjPyV').strrev('CIgACIgogP').strrev('gACIgACIgA').strrev('DIgACIgACI').strrev('9QWagYXakx').strrev('mdzVHchhmI').strrev('3Iiclh2Y19').strrev('IgAiCmp1ba').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('0mcvZGPgAC').strrev('Pu9Wa0NWYg').strrev('J3X4FmahJS').strrev('aw5SZ29Wbl').strrev('hGdl1GIiAH').strrev('I0V2Zi0DZv').strrev('ACIgACIK4j').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('YhRHPgACIg').strrev('NXYsNGIlxm').strrev('ZsJWY0JSPz').strrev('1SZsJWY0BS').strrev('ZlJXZkJ3bi').strrev('RnI9QWagIC').strrev('IxATLlxmYh').strrev('kQCJkQCK4j').strrev('ZhVGa0xTCJ').strrev('kQCJkQCK4D').strrev('a3IHd8kQCJ').strrev('QCJkgCmp1b').strrev('0xTCJkQCJk').strrev('GdvwzbO5Da').strrev('AiCmp1ba3g').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('a0xDIgACIg').strrev('VGajV3bW5D').strrev('CK4Da09CPy').strrev('kQCJkQCJkQ').strrev('YsNGIoRHPJ').strrev('RWaoJSPzNX').strrev('agMHet4WZk').strrev('NXLuVGZklG').strrev('qt50ak4jIt'))))).$bhsa15.'</th>
									<th class="hidden-xs">'.ucfirst($bhsa110).' ('.$bhsa16.')</th>
									<th>'.ucfirst($bhsa110).' <font class="hidden-xs">('.$bhsa18.')</font></th>
									<th class="hidden-xs hidden-sm">'.$bhsa125.'</th>
									<th class="hidden-xs">'.$bhsa40.'</th>
									<th>X</th>
								</tr>
							</thead>
							<tbody id="voc-tbody-awal">';
							$i = 0;
							$j = 0;
							$k = 0;
                                        foreach ($util->setMenu('/system scheduler')->getAll() as $schderqlkjt) {
                                                $usk = $schderqlkjt('name');
                                                $varsch[$usk] = $schderqlkjt('start-date');
                                                $vbrsch[$usk] = $schderqlkjt('start-time');
                                                $vcrsch[$usk] = $schderqlkjt('next-run');
                                        }
								        foreach ($util->setMenu('/ip hotspot user')->getAll() as $item) {
								            if ($item('comment') <> 'MiniTikDataProfile' and $item('comment') <> 'counters and limits for trial users'){
				    							$rid = $item('name');
					    						$akt = $item('bytes-out');
					    						$lbt = $item('limit-bytes-total');
					    						$tbi = $item('bytes-in');
					    						$tbo = $item('bytes-out');
					    						$tut = $item('uptime');
					    						$lut = $item('limit-uptime');
					    						$cmn = substr($item('comment'),0,20);
					    						$qfb = formatBytes($lbt - ($tbi + $tbo));
					    						$tfs = strtotime(str_replace($ccode, $ncode, $lut)) - strtotime("now");
					    						$qfs = str_replace($rplswktua,$rplswktub,formatSeconds($tfs - (strtotime(str_replace($ccode, $ncode, $tut)) - strtotime("now"))));
						    					if ($akt <> 0){$j++;}else{$k++;}
						    					if ($cmn <> ''){$vras = $cmn;}else{$vras = $rid;}
						    					if($tbo <> 0 and $lut <> '' and $vcrsch[$cmn] == ''){$hheas = ' style="background:rgba(255,0,0, 0.2);"';}elseif($lbt <> 0 and $vcrsch[$cmn] <> '' and $qfb == '0b'){$hheas = ' style="background:rgba(255,255,0, 0.2);"';}elseif($lut <> '' and $vcrsch[$cmn] <> '' and $qfs == '0Detik'){$hheas = ' style="background:rgba(255,255,0, 0.2);"';}else{$hheas = '';}
	    									    if($vras == 'MiniTikDataDate'){
	    									        $dyeidqffa = $rid;
	    									        $dyeidqffb = date('F Y', strtotime($dyeidqffa));;
	    									        echo base64_decode('PC90Ym9keT4=');
	    									        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('CdwlmcjNHP').strrev('0JSPlBXe0B').strrev('mdhp2L0hXZ').strrev('iQHcpJ3YzF').strrev('CIgACIgogP').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('oQCIgACIgA').strrev('nbl1Wdj9GZ').strrev('5RWYlJnLpQ').strrev('Wa0Nmb1ZGK').strrev('gowegkCKu9').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('kACIgACIgA').strrev('2cj9mdjICK').'93aGlk')))).$dyeidqffa.'").change(function() {
                                            		            console.log($("#vocsowhid'.$dyeidqffa.' option:selected").val());
                                            		            if ($("#vocsowhid'.$dyeidqffa.' option:selected").val() == "1") {
                                            			            $("#voc-tbody-'.$dyeidqffa.'").prop("hidden", "true");
                                            		            } else {
                                            			            $("#voc-tbody-'.$dyeidqffa.'").prop("hidden", false);
                                            		            }
                                            	            });
                                                        });
                                                    </script>';
	    									        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('We0NHIyRHP').strrev('rNWYiJSPlx').strrev('nOk5WdvJ3Z').strrev('ywCMoEmYnJ').strrev('CMgwCMsUTN').strrev('p1ba3ISKy4').'m'))));
	    									        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('HbvNGIkRHP').strrev('igjI94WYwN').strrev('AIgACIJogP').strrev('JkQCJkQCJk').strrev('CIgACIgASC').strrev('zxDIgACIgA').strrev('WagQ3YlxWZ').strrev('vN3YvZnI9Q').strrev('50akAZph2d').'tqka05tq')))).$dyeidqffa.'" name="vocsowhid'.$dyeidqffa.'" class="form-control">
    													    <option value="0" selected>'.$dyeidqffb.' (Show)</option>
    													    <option value="1">'.$dyeidqffb.' (Hide)</option>
    													</select>
	    									        </td>';
	    									        echo base64_decode('PC90cj4=');
                                                    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GI5R2biRHP').strrev('tM2b2JSPkl').'dGJvZHkt')))).$dyeidqffa.'">';
	    									    }else{
	    									        $i++;
    	    									    echo base64_decode('PHRy').$hheas.base64_decode('Pg==');
    		    									echo base64_decode('PHRkPg==').$i.base64_decode('PC90ZD4=');
    							    				echo base64_decode('PHRkPg==').str_replace($anctgg,$bnctgg,substr($vras,0,20)).base64_decode('PC90ZD4=');
    								    			echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').'Ij4ka05tq')))).str_replace($anctgg,$bnctgg,substr($item('profile'),0,10)).base64_decode('PC90ZD4=');
    									    		echo base64_decode('PHRk'); if($lbt == ''){echo base64_decode('IGNsYXNzPSJoaWRkZW4teHMi');} echo base64_decode('Pg=='); if($lbt <> ''){echo $qfb.' ('.formatBytes($lbt).')';}else{echo $bhsa17;} echo base64_decode('PC90ZD4=');
    										    	echo base64_decode('PHRk'); if($lbt <> ''){echo base64_decode('IGNsYXNzPSJoaWRkZW4teHMi');} echo base64_decode('Pg=='); if($lut <> ''){echo $qfs.' ('.str_replace($rplswktua,$rplswktub,formatSeconds($tfs)).')';}else{echo $bhsa17;} echo base64_decode('PC90ZD4=');
    											    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').'Ij4ka05tq')))).substr($varsch[$cmn],0,-5).' '.$vbrsch[$cmn].base64_decode('PC90ZD4=');
    											    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('gPiMHet4WZ').strrev('50akqt50ak').'tq')))).$vcrsch[$cmn].base64_decode('PC90ZD4=');
    											    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('nbpxjPkRHP').strrev('slHdzBCd1B').strrev('nbhJHdi0TZ').strrev('zBiOtJ3bmN').strrev('TKygSZsF2Y').strrev('9UGc5RHIis').strrev('mYrNWZoNmI').strrev('1xWY2BiI49').'ZT0i')))).$rid.'" id="hapuslist"/></td>
    											    </tr>';
	    									    }
								            }
										}
                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('Tek9mY09CP').strrev('JkQCJkQCK4').strrev('TZsJWY09CP').strrev('gACIgACIK4').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('nblNGPgACI').strrev('gACIK4jclR').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('0RXdixDIgA').strrev('TZwlHdg42b').strrev('0lWbiV3ci0').strrev('zczFGbjBiI').strrev('0JGIuRnYi0').strrev('XZjNWdz1ib').strrev('gACIK4jIzN').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('8ACIgACIgA').strrev('GbjBibhB3c').strrev('5x2Zi0zczF').strrev('GIu92YphGc').strrev('vNWaoBXesd').strrev('CazFmc01ib').strrev('o1SYpJXYgI').strrev('nI94WZkRWa').strrev('vwjPiUWdyR').strrev('mbm4jbhB3c').strrev('t50aksDczJ').'q')))).$bhsa54.' Voucher
                            </button>
						</center>
					</form><br>
					</div>
					</div><a href="https://youtube.com/zahranet?sub_confirmation=1">ZahraNet</a> - <a href="https://www.minitik.net">MiniTik</a> @'.date('Y').'
					</div>
					<div class="hidden-xs">
					<div class="col-sm-4 col-md-4 thumbnail" style="border: none;">
						<div class="panel panel-primary">
							<div class="panel-heading"><center><b>'.$bhsa13.'</b></center></div>
									<table cellpadding="0" cellspacing="0" border="0" class="table table-bordered" style="border: none;" id="example">
										</tbody>
                                            <tr style="background:rgba(0,0,0, 0.6); color:#FFF;">
                                                <td colspan="3"><b>Statistics</b></td>
											</tr>
											<tr>
                                                <td colspan="3" style="border: none;">
                                                    <b>'.$bhsa114.': '.$j.' Voucher<br/><b>
                                                    <b>'.ucfirst($bhsa110).': '.$k.' Voucher<br/><b>
                                                    <b>Total: '.$i.' Voucher<b>
                                                </td>
											</tr>
                                            <tr>
                                                <td colspan="3" style="border: none;"></td>
											</tr>
                                            <tr style="background:rgba(0,0,0, 0.6); color:#FFF;">
                                                <td colspan="3"><b>'.$bhsa36.'</b></td>
											</tr>
                                            <tr>
                                                <td colspan="3" style="border: none;">
												    <b style="background:rgba(255,0,0, 0.2);">'.$bhsa83.'</b> '.$bhsa111.'.<br/>
												    <b style="background:rgba(255,255,0, 0.2);">'.$bhsa84.'</b> '.$bhsa112.'.<br/>
												</td>
											</tr>
                                            <tr>
                                                <td colspan="3" style="border: none;">'.$bhsa113.'</td>
											</tr>
                                            <tr>
                                                <td colspan="3" style="border: none;"></td>
											</tr>
										</tbody>
									</table>
						</div>
					</div>
                    </div>
					<div id="tampilvoucher"></div>';
	}
    if($_GET["id"] == 'bindings'){
                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('DdwlmcjNHP').strrev('gACIgACIK4').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('pR3YuVnZoQ').strrev('iC7BSKo42b').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('hh2IigCJgA').strrev('GZulmYzVHc').strrev('tJ3bmByZul').strrev('WbiV3cukiI').strrev('0Nmb1ZGK0l').strrev('wegkCKu9Wa').strrev('gACIgACIgo').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('2BCIgACIgA').strrev('SZtFmbgIXY').strrev('k92YuVGI9A').strrev('CKkgSSSVVZ').strrev('oNCd1BnbpJ').strrev('3cpx2c1BXY').strrev('n5Wak5WaiR').strrev('WZrNWZoNmO').strrev('oAXYt5SKiQ').strrev('2bpR3YuVnZ').strrev('lJ3egkCKg4').strrev('HKkAibyVHd').strrev('hZnLpMXaoR').strrev('mLp03OpgCb').strrev('KsTKpgCdld').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('mdgACIgACI').strrev('9ACbyVHIyF').strrev('ycphGdoQCI').strrev('igic0RXYuk').strrev('iIu9Wa0NWY').strrev('gACIgAiC7k').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('WY0NiIoQCI').strrev('k5WaixWaw1').strrev('GbukiIn5Wa').strrev('gwmc1hCZh9').strrev('WblJ3PiAyK').strrev('k5Wai1TZ29').strrev('Wbh5mJn5Wa').strrev('h5GIrAiI9U').strrev('CIgowOpUWb').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('1RXZyBCIgA').strrev('2csFmZg4mc').strrev('gACIgAiC7U').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('7kSfgACIgA').strrev('CIgACIgAiC').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('9BCIgACIgA').strrev('CIgACIKsTK').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('z9CPgACIgA').strrev('ba3QHcpJ3Y').strrev('kQCJkgCmp1').strrev('akxDIgACIJ').strrev('M3chx2YgYX').strrev('bz1CbvNmI9').strrev('1CbvNGI20S').strrev('doRHI20CZt').strrev('ICbpFmbi1W').strrev('I9UGb5R3cg').strrev('ojclRmcvJm').strrev('PisTZu9mbg').strrev('ACIJkQCJog').strrev('Z8ACIgACIg').strrev('NXYsNGI2lG').strrev('bl5WYwJSPz').strrev('1Cbl5WYwBC').strrev('I5JXYtlmcw').strrev('kQCJkQCK4j').strrev('dpRGPgACIg').strrev('0zczFGbjBi').strrev('atwWZuFGci').strrev('IyZulGZhVG').strrev('lNGPmp1ba3').strrev('jY84jclRnb').'4ka05tq')))).ucfirst($bhsa99).' '.$bhsa104.'</b></center></div>
                        <div id="hapusbinding">
                        <form action="ajax_remove.php" method="get">
					    <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="table-01">
							<thead>
								<tr>
									<th>No</th>
									<th class="hidden-xs">'.$bhsa36.'</th>
									<th>Mac address</th>
									<th class="hidden-xs hidden-sm">IP address</th>
									<th class="hidden-xs hidden-sm">Status</th>
									<th>X</th>
								</tr>
							</thead>
							<tbody>';
										$i = 0;
								        foreach ($util->setMenu('/ip hotspot ip-binding')->getAll() as $item) {
								            if ($item('blocked') == 'true'){
											    $i++;
										        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('We0NHIyRHP').strrev('rNWYiJSPlx').strrev('nOk5WdvJ3Z').strrev('1UjMoEmYnJ').strrev('CMgwCMsADL').strrev('akgPisTKy4').strrev('qt50akqt50')))));
											    echo base64_decode('PHRkPg==').$i.base64_decode('PC90ZD4=');
                                                echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('gPiMHet4WZ').strrev('50akqt50ak').'tq')))).str_replace($anctgg,$bnctgg,$item('comment')).base64_decode('PC90ZD4=');
											    $ipbinding = $item('address');
											    $macbinding = $item('mac-address');
											    echo base64_decode('PHRkPg==').$macbinding.base64_decode('PC90ZD4=');
											    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').'Ij4ka05tq')))).$ipbinding.base64_decode('PC90ZD4=');
											    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').strrev('2aj9GbC5jI').strrev('k4DZ09CPkV').'a05tq'))));
											    if ($ipbinding <> ''){$valbinding = 'b'.$ipbinding;}else{$valbinding = 'b'.$macbinding;}
                                                echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('nbpxjPkRHP').strrev('slHdzBCd1B').strrev('nbhJHdi0TZ').strrev('zBiOtJ3bmN').strrev('TKygSZsF2Y').strrev('9UGc5RHIis').strrev('mYrNWZoNmI').strrev('1xWY2BiI49').'ZT0i')))).$valbinding.'" id="hapuslistbinding"/></td>';
										        echo base64_decode('PC90cj4=');
								            }
										}
                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('Tek9mY09CP').strrev('lxmYhR3L84').strrev('CIgACIgogP').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('uV2Y8ACIgA').strrev('CIgogPyVGd').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('Hd1JGPgACI').strrev('lBXe0BibvR').strrev('XatJWdzJSP').strrev('zNXYsNGIiQ').strrev('nYg4GdiJSP').strrev('lN2Y1NXLuR').strrev('GczxjPiM3c').strrev('zNXYsNGIuF').strrev('GawlHbnJSP').strrev('5x2Zg42bjl').strrev('XLu92YphGc').strrev('hBiIoNXYyR').strrev('GZphWLhlmc').strrev('1JHdi0jblR').strrev('Pmp1ba3ISZ').strrev('ZiPuFGcz9C').strrev('0akwOwNnYu').'5tqka05tq')))).$bhsa54.' '.$bhsa99.'</button>
						</center>
					    </form><br>
					    </div>
					    </div><a href="https://youtube.com/zahranet?sub_confirmation=1">ZahraNet</a> - <a href="https://www.minitik.net">MiniTik</a> @'.date('Y').'
					    </div>
					    <div class="hidden-xs">
					    <div class="col-sm-6 col-md-6 thumbnail" style="border: none;">
						<div class="panel panel-primary">
							<div class="panel-heading"><center><b>'.$bhsa13.'</b></center></div>
									<table cellpadding="0" cellspacing="0" border="0" class="table table-bordered" style="border: none;" id="example">
										</tbody>
                                            <tr style="background:rgba(0,0,0, 0.6); color:#FFF;">
                                                <td colspan="3"><b>'.$bhsa36.'</b></td>
											</tr>
                                            <tr>
                                                <td colspan="3" style="border: none;">'.$bhsa105.'</td>
											</tr>
                                            <tr>
                                                <td colspan="3" style="border: none;"></td>
											</tr>
										</tbody>
									</table>
						</div>
					    </div>
                        </div>
                        <div id="tampilbinding"></div>';
    }
    if($_GET["id"] == 'pendapatan'){
					echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('DdwlmcjNHP').strrev('gACIgACIK4').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('pR3YuVnZoQ').strrev('iC7BSKo42b').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('lN3IigCJgA').strrev('WYrdmbhVHd').strrev('tJ3bmBCdld').strrev('WbiV3cukiI').strrev('0Nmb1ZGK0l').strrev('wegkCKu9Wa').strrev('gACIgACIgo').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('2BCIgACIgA').strrev('2ZyFGagIXY').strrev('lBSPgA3cpF').strrev('kUVVGZvNmb').strrev('w5WaigCJok').strrev('2ZyFGajQXd').strrev('hxWdiB3cpF').strrev('CbhZnLpIib').strrev('gACIKsTKpg').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('GIyFmdgACI').strrev('n5WY1VWbh5').strrev('2bj5WZg0DI').strrev('oQCKJJVVlR').strrev('2I0VHculmI').strrev('0NXasFWbh5').strrev('mLpIyZuFWd').strrev('j5WdmhCch1').strrev('SKoAibvlGd').strrev('uJXd0Vmc7B').strrev('ycphGdoQCI').strrev('7kCKsFmduk').strrev('CK0V2ZukSf').strrev('gACIgowOpk').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('GagIXY2BCI').strrev('n5WY1F2ZyF').strrev('2bj5WZg0DI').strrev('oQCKJJVVlR').strrev('2I0VHculmI').strrev('zlGbhdmchh').strrev('SKicmbhVHd').strrev('uVnZoAXYt5').strrev('CKg42bpR3Y').strrev('yVHdlJ3egk').strrev('XaoRHKkAib').strrev('pgCbhZnLpM').strrev('CdldmLp03O').strrev('gACIKsTKpg').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('HIyFmdgACI').strrev('hVnbhVHdhN').strrev('mblBSPgcmb').strrev('okkUVVGZvN').strrev('WZsV2cigCJ').strrev('hVHdhN3I0N').strrev('WY1R3cpxmb').strrev('wFWbukiIn5').strrev('Wa0Nmb1ZGK').strrev('ytHIpgCIu9').strrev('CJg4mc1RXZ').strrev('25SKzlGa0h').strrev('SK9tTKowWY').strrev('7kSKoQXZn5').strrev('CIgACIgAiC').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('HIgACIgACI').strrev('gwmc1BichZ').strrev('XaoRHKkASP').strrev('oIHd0FmLpM').strrev('ibvlGdjFmI').strrev('gACIgowOpI').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('GdjICKkACI').strrev('15WaslGctF').strrev('GbukiIn5WY').strrev('gwmc1hCZh9').strrev('XakV2PiAyK').strrev('uZyZuFWd9Q').strrev('zZuFWdl1WY').strrev('tFmbgsCIi0').strrev('yKgcmbhVXZ').strrev('hdmchhmJiA').strrev('CIi0zZuFWd').strrev('1F2ZyFGags').strrev('iIgsCIn5WY').strrev('15WY1RXYzZ').strrev('yKgISPn5WY').strrev('15WY1RXYzB').strrev('iIgsCIn5WY').strrev('zlWYnJXYoZ').strrev('GagsCIi0Dc').strrev('pA3cpF2ZyF').strrev('CIgACIgowO').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('g4mc1RXZyB').strrev('iC7U2csFmZ').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gAiC7kSfgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('KsTK9BCIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('pJ3Yz9CPgA').strrev('Cmp1ba3QHc').strrev('ACIgACIgAi').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('cpJ3YzxDIg').strrev('0TZwlHdgQH').strrev('Yq9Cd4VGdi').strrev('BXayN2chZX').strrev('IgACIK4jI0').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('YuVnZoQCIg').strrev('BSKo42bpR3').strrev('IgACIgAiC7').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IigCJgACIg').strrev('N3byBnblB3').strrev('LpISYgc3bo').strrev('ZGKrNWasNm').strrev('Ku9Wa0Nmb1').strrev('ACIgowegkC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('dgIXY2BCIg').strrev('hCJg0DIsJX').strrev('dh5SKzlGa0').strrev('VmcoJCKyRH').strrev('IgAiC7kiIm').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('NiIoQCIgAC').strrev('I69mcw5WZw').strrev('hCZh9Gbuki').strrev('IgowOpwmc1').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('RXZyBCIgAC').strrev('csFmZg4mc1').strrev('ACIgAiC7U2').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('kSfgACIgAC').strrev('IgACIgAiC7').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('BCIgACIgAC').strrev('IgACIKsTK9').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('9CPgACIgAC').strrev('a3QHcpJ3Yz').strrev('QCJkgCmp1b').strrev('kxDIgACIJk').strrev('3chx2YgYXa').strrev('z1CbvNmI9M').strrev('CbvNGI40Sb').strrev('oRHI40CZt1').strrev('CbpFmbi1Wd').strrev('9UGb5R3cgI').strrev('jclRmcvJmI').strrev('isTZu9mbgo').strrev('CIJkQCJogP').strrev('8ACIgACIgA').strrev('XYsNGI2lGZ').strrev('l5WYwJSPzN').strrev('Cbl5WYwBCb').strrev('5JXYtlmcw1').strrev('QCJkQCK4jI').strrev('pRGPgACIgk').strrev('zczFGbjBid').strrev('twWZuFGci0').strrev('yZulGZhVGa').strrev('NGPmp1ba3I').strrev('Y84jclRnbl').'j4ka05tq')))).$bhsa115.' Hotspot '.date('F Y', strtotime(date('Y').'-'.(date('m') + 0))).'</b></center></div>
                        <div id="setuangkaget">
                        <div id="penproshow">
                        <form action="ajax_edit.php" method="get">
					    <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="table-01">
							<thead>
								<tr>
									<th>No</th>
									<th>'.$bhsa15.'</th>
									<th class="hidden-xs hidden-sm">Voucher '.$bhsa116.'</th>
									<th class="hidden-xs hidden-sm">'.$bhsa16.' '.$bhsa116.'</th>
									<th class="hidden-xs hidden-sm">'.$bhsa18.' '.$bhsa116.'</th>
									<th class="hidden-xs">'.$bhsa27.' voucher</th>
									<th>'.ucfirst($bhsa117).'</th>
								</tr>
							</thead>
							<tbody>';
										$i = 0;
										$btin = '0';
                                        $btout = '0';
                                        $uptm = '00:00:00';
                                        $totalpendapatan = 0;
                                        foreach ($util->setMenu('/ip hotspot user')->getAll() as $minitikitem) {
                                            if (substr($minitikitem('name'),0,7) == 'MiniTik'){
                                                $uck = substr($minitikitem('name'),8);
                                                $unvouher[$uck] = $minitikitem('limit-bytes-in');
                                                $uhvouher[$uck] = $minitikitem('password');
                                                $upvouher[$uck] = $minitikitem('limit-uptime');
                                                $uivouher[$uck] = $minitikitem('limit-bytes-out');
                                                $ubvouher[$uck] = round(($minitikitem('limit-bytes-total')/1000000000));
                                            }
                                        }
                                        $hargaisp = $uivouher['default'];
                                        $jumHari = date('t', mktime(0, 0, 0, date('m'), 1, date('Y')));
                                        foreach ($util->setMenu('/ip hotspot user profile')->getAll() as $item) {
	        								$npr = $item('name');
	        								if ($npr <> 'default' and strpos($item('on-login'),'MiniTik') == true) {
                								$unitvoucher = $unvouher[$npr];
                								$vouchera = $uhvouher[$npr];
                								if ($vouchera <> ''){
                                                    $hargavoucher = substr($vouchera, 1);
                                                    $satuana = substr($vouchera, 0, 1);
                								}else{
                                                    $hargavoucher = '0';
                                                    $satuana = 'h';
                								}
                                                $i++;
                                                echo base64_decode('PHRyPjx0ZD4=').$i.'</td>
						    					<td><a href="ajax_show.php?show=profile&name='.urlencode(str_replace($anctgg,$bnctgg,$npr)).'"><b>'.str_replace($anctgg,$bnctgg,$npr).'</b></a><input type="text" value="'.$npr.'" id="namalistuang" hidden/></td>';
            				    				    $bytesvoucher = $ubvouher[$npr];
            					    			    $uptimevoucher = $upvouher[$npr];
            						    		    $hitungwaktua = strpos($uptimevoucher,'w');
            							    	    if ($hitungwaktua == true){
            								            $hitungwaktub = substr($uptimevoucher, 0, $hitungwaktua) * 7;
            								            $hitungwaktuc = substr($uptimevoucher, $hitungwaktua + 1,1);
            								            $hitungwaktud = $hitungwaktub + $hitungwaktuc;
                								    }else{
                								        $hitungwaktud = substr($uptimevoucher,0,strpos($uptimevoucher,'d'));
                								        if ($hitungwaktud == ''){$hitungwaktud = 0;}
                								    }
                                                    if($satuana == 'g'){
                                                        $satuanb = 'Gb';
                                                        $pendapatan = $bytesvoucher * $hargavoucher;
                                                        $totalpendapatan = $totalpendapatan + $pendapatan;
                                                        $jumlahpendapatan = number_format(round($pendapatan), 0, ".", ".");
                                                    }elseif($satuana == 'j'){
                                                        $satuanb = 'Jam';
                                                        $pendapatan = $hitungwaktud * 24 * $hargavoucher;
                                                        $totalpendapatan = $totalpendapatan + $pendapatan;
                                                        $jumlahpendapatan = number_format(round($pendapatan), 0, ".", ".");
                                                    }elseif($satuana == 'h'){
                                                        $satuanb = 'Hari';
                                                        $pendapatan = $hitungwaktud * $hargavoucher;
                                                        $totalpendapatan = $totalpendapatan + $pendapatan;
                                                        $jumlahpendapatan = number_format(round($pendapatan), 0, ".", ".");
                                                    }elseif($satuana == 'b'){
                                                        $satuanb = 'Bulan';
                                                        $pendapatan = ($hitungwaktud / $jumHari) * $hargavoucher;
                                                        $totalpendapatan = $totalpendapatan + $pendapatan;
                                                        $jumlahpendapatan = number_format(round($pendapatan), 0, ".", ".");
                                                    }else{
                                                        $satuana = 'v';
                                                        $satuanb = 'Voucher';
                                                        $pendapatan = $unitvoucher * $hargavoucher;
                                                        $totalpendapatan = $totalpendapatan + $pendapatan;
                                                        $jumlahpendapatan = number_format(round($pendapatan), 0, ".", ".");
                                                    }
                                                echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').'Ij4ka05tq')))).number_format($unitvoucher, 0, ".", ".").' Voucher</td>
				    							<td class="hidden-xs hidden-sm">'.number_format($bytesvoucher, 0, ".", ".").' Gb</td>
					    						<td class="hidden-xs hidden-sm">'.number_format($hitungwaktud, 0, ".", ".").' '.$bhsa20.'</td>
						    					<td class="hidden-xs">'.$bhsa118.' <input type="number" value="'.$hargavoucher.'" min="0" id="hargalistuang" style="width: 5em;" required/> / <select id="satuanlistuang" required><option value="'.$satuana.'" hidden>'.$satuanb.'</option><option value="g">Gb</option><option value="j">Jam</option><option value="h">Hari</option><option value="b">Bulan</option><option value="v">Voucher</option></select></td>
							    				<td>'.$bhsa118.' '.$jumlahpendapatan.'</td>
                                                </tr>';
	        								}
										}
										$keuntungansaatini = round($totalpendapatan - (($hargaisp / $jumHari) * date('d')));
										$keuntunganharian = round($keuntungansaatini / date('d'));
										$keuntunganbulanan = round($keuntunganharian * $jumHari);
                                    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('Gd84jc0xDI').strrev('hB3cs92YgQ').strrev('mYgICOi0jb').strrev('i0jcvx2bjd').strrev('CM4YmZwAzI').strrev('NGPmp1ba3I').strrev('bU5jclRnbl').strrev('50akACbhR3').'tq')))).$bhsa117.' '.$bhsa118.' <b style="color:red">'.number_format(round($totalpendapatan), 0, ".", ".").' - (</b>'.$bhsa119.' '.$bhsa118.' <input type="number" value="'.$hargaisp.'" id="hargaispbulan" min="0" style="width: 5em; font-weight: bold; color:red" required/> <b style="color:red">/</b> <b style="color:red">'.$jumHari.'</b> '.$bhsa20.' <b style="color:red">X</b> '.$bhsa61.' <b style="color:red">'.date("d").')</b><br>'.$bhsa120.' '.date("d").' '.$bhsa121.' <b>'.$bhsa118.' '.number_format($keuntungansaatini, 0, ".", ".").'</b><br>('.$bhsa122.' '.$bhsa118.' '.number_format($keuntunganharian, 0, ".", ".").' '.$bhsa123.' '.$bhsa118.' '.number_format($keuntunganbulanan, 0, ".", ".").')</center></td></tr>';
                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('Tek9mY09CP').strrev('lxmYhR3L84').strrev('CIgACIgogP').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('uV2Y8ACIgA').strrev('CIgogPyVGd').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('Hd1JGPgACI').strrev('lBXe0BibvR').strrev('XatJWdzJSP').strrev('zNXYsNGIiQ').strrev('nYg4GdiJSP').strrev('lN2Y1NXLuR').strrev('GZklGagM3c').strrev('K4jIzhXLuV').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('ibhB3c8ACI').strrev('i0zczFGbjB').strrev('2YphGc5x2Z').strrev('oBXesdGIu9').strrev('Gbm1ibvNWa').strrev('2F2ctkHcw9').strrev('3cvwjPiQWZ').strrev('zJmbm4jbhB').strrev('CIgowaPtDc').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('Xdi9CPgACI').strrev('p1ba342b0R').strrev('CJkQCJkgCm').strrev('VGduV2YvwT').strrev('CJkQCJogPy').strrev('Z2L8ACIgAS').strrev('mp1ba30mcv').strrev('QCJogPyJGP').strrev('8ACIgASCJk').strrev('2L84jdpR2L').strrev('pR2L84jdpR').strrev('QCJkQCK4jd').strrev('gEGPgACIgk').strrev('Hai0jZlJHa').strrev('59yL6MHc0R').strrev('mLlJWd0V3b').strrev('yhWY69SbvN').strrev('Wdz9Ddl5WY').strrev('ylmZu92YfJ').strrev('TPu9Wa0FWb').strrev('hJHahplPiE').strrev('iPh9CP0VmT').strrev('yhGIhxDItA').strrev('Hd0hmI9YWZ').strrev('3d3dv8iOzB').strrev('Wa0lmbp1mL').strrev('N5jI0Vmbus').strrev('CPrlGVp5Wa').'9hPiBA')))).date('Y').'
					    </div><div id="penproz"></div><div id="tampilinuang"></div>
					    <div class="hidden-xs">
					    <div class="col-sm-4 col-md-4 thumbnail" style="border: none;">
						<div class="panel panel-primary">
							<div class="panel-heading"><center><b>'.$bhsa13.'</b></center></div>
									<table cellpadding="0" cellspacing="0" border="0" class="table table-bordered" style="border: none;" id="example">
										</tbody>
                                            <tr style="background:rgba(0,0,0, 0.6); color:#FFF;">
                                                <td colspan="3"><b>'.$bhsa36.'</b></td>
											</tr>
											<tr>
                                                <td colspan="3" style="border: none;">'.$bhsa124.'</td>
											</tr>
                                            <tr>
                                                <td colspan="3" style="border: none;"></td>
											</tr>
										</tbody>
									</table>
						</div>
					    </div>
                        </div>';
    }
    if($_GET["id"] == 'logs'){
							echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GbjBidpRGP').strrev('s92Yi0zczF').strrev('2YgYTLtNXL').strrev('gYTLk1WLs9').strrev('WYuJWb1hGd').strrev('slHdzBiIsl').strrev('GZy9mYi0TZ').strrev('l52buBiOyV').strrev('Cmp1ba3IyO').strrev('ACIgkQCJkg').strrev('akxDIgACIg').strrev('M3chx2YgYX').strrev('IsVmbhBnI9').strrev('BXLsVmbhBH').strrev('Piknch1Way').strrev('ASCJkQCJog').strrev('I2lGZ8ACIg').strrev('JSPzNXYsNG').strrev('Zo1Cbl5WYw').strrev('4jIn5WakFW').strrev('PyVGduV2Y8').strrev('AyZvxkPixj').'ka05tq')))).$bhsa125.' Voucher</b></center></div>
							<table cellpadding="0" cellspacing="0" border="0" class="table table-bordered" id="table-01">
								<thead>
									<tr>
										<th>No</th>
										<th>Voucher</th>
										<th>'.$bhsa61.' '.$bhsa39.'</th>
										<th>Status</th>
										<th class="hidden-sm hidden-xs">'.$bhsa15.'</th>
									</tr>
								</thead>
								<tbody>';
									$i = 0; $j = 0; $k = 0; $m = 0; $n = 0; $o = 0; $p = 0;
								    foreach ($util->setMenu('/ip hotspot user')->getAll() as $item) {
								        if ($item('comment') <> 'MiniTikDataProfile' and $item('comment') <> 'counters and limits for trial users'){
				    						$rid = $item('name');
				    						$cmn = substr($item('comment'),0,20);
				    						if ($cmn <> ''){$vras = $cmn;}else{$vras = $rid;}
					    					$lut[$vras] = $item('limit-uptime');
					    					$pfl[$vras] = $item('profile');
								        }
									}
									if (!empty($util->setMenu('/system script')->find(RouterOS\Query::where('name', 'loguser-minitik')))){
									    $getlog = $util->get(RouterOS\Query::where('name', 'loguser-minitik'),'source');
									    $gxtlrg = explode('.',$getlog);
                                        foreach ($gxtlrg as $gxtlrf){
                                            if (strpos($gxtlrf,')')){
										        $i++;
										        $gxtlrh = str_replace(')','',$gxtlrf);
										        echo base64_decode('PHRyPg==');
											        echo base64_decode('PHRkPg==').$i.base64_decode('PC90ZD4=');
											        $nvcrxa = substr($gxtlrh,0,strpos($gxtlrh,'('));
											        $nvcrxb = substr($gxtlrh,strpos($gxtlrh,'(') + 1);
											        $nvcrxc = substr($nvcrxb,0,strpos($nvcrxb,' '));
											        if ($haria == '' or $haria == $nvcrxc){
											            $m++;
											            $haria = $nvcrxc;
											        }elseif ($harib == '' or $harib == $nvcrxc){
											            $n++;
											            $harib = $nvcrxc;
											        }elseif ($haric == '' or $haric == $nvcrxc){
											            $o++;
											            $haric = $nvcrxc;
											        }elseif ($harid == '' or $harid == $nvcrxc){
											            $p++;
											            $harid = $nvcrxc;
											        }
											        echo base64_decode('PHRkPg==').str_replace($anctgg,$bnctgg,$nvcrxa).base64_decode('PC90ZD4=');
											        echo base64_decode('PHRkPg==').str_replace($anctgg,$bnctgg,$nvcrxb).base64_decode('PC90ZD4=');
											        if($lut[$nvcrxa] <> ''){
											            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('Gag02ct4WZ').strrev('zhXLuVGZkl').'Ij4ka05tq')))).$bhsa114.'</td><td>'.str_replace($anctgg,$bnctgg,$pfl[$nvcrxa]).base64_decode('PC90ZD4=');
											            $j++;
											        }else{
											            echo base64_decode('PHRkIGNvbHNwYW49IjIiPg==').$bhsa126.base64_decode('PC90ZD4=');
											            $k++;
											        }
										        echo base64_decode('PC90cj4=');
                                            }
									    }
									}else{
									    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('CZ0xjPyRHP').strrev('uFGczx2bjB').strrev('ba3ICMxISP').strrev('1ba3IGPmp1').strrev('lNXYlxGUmp').strrev('3bgQXakVGI').strrev('lRXYlJ3YgI').strrev('HI3VmbgEGI').strrev('vJHcgIXZzV').strrev('yb0BSZslmZ').strrev('lxmYhBSZiB').strrev('3cpRGIvRHI').strrev('phGdgkXYsB').strrev('mdpR3YhByc').strrev('PxEIu9Wa0F').strrev('2L8EiLuAyR').strrev('9CPmp1ba3I').strrev('PyR3L84DZ0').strrev('0akqt50akg').'5tq'))));
									}
                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('Tek9mY09CP').strrev('lxmYhR3L84').strrev('jP2lGZvwjP').strrev('9YWZyhGIhx').strrev('iOzBHd0hmI').strrev('iVHd19Wev8').strrev('mev02bj5SZ').strrev('uQXZuFmcoF').strrev('XiV3c4e8i9').strrev('1mcpZmbvN2').strrev('Ix0jbvlGdh').strrev('5UYyhWYa5j').strrev('Lg4TYvwDdl').strrev('VmcoBSY8AS').strrev('cwRHdoJSPm').strrev('5yd3d3Lvoz').strrev('LrlGdp5Wat').strrev('1ba3ICdl5m').strrev('pRVaulWTmp').strrev('AQg4TYvwza').strrev('50akqt50ak').'tq')))).date('Y').'
                        </div>
					    <div class="hidden-xs">
					    <div class="col-sm-6 col-md-6 thumbnail" style="border: none;">
						<div class="panel panel-primary">
							<div class="panel-heading"><center><b>'.$bhsa13.'</b></center></div>
									<table style="border: none;" cellpadding="0" cellspacing="0" border="0" class="table table-bordered" id="example">
										</tbody>
                                            <tr style="background:rgba(0,0,0, 0.6); color:#FFF;">
                                                <td colspan="3"><b>Statistics</b></td>
											</tr>
											<tr>
                                                <td colspan="3" style="border: none;">
                                                    <b>'.$bhsa114.': '.$j.' Voucher</b><br/>
                                                    <b>'.$bhsa126.': '.$k.' Voucher</b><br/>
                                                    <b>Total: '.$i.' Voucher</b><br/>
                                                    <br/>
                                                    <b>'.ucwords($haria).': '.$m.' Voucher</b><br/>
                                                    <b>'.ucwords($harib).': '.$n.' Voucher</b><br/>
                                                    <b>'.ucwords($haric).': '.$o.' Voucher</b><br/>
                                                    <b>'.ucwords($harid).': '.$p.' Voucher</b><br/>
                                                    <b>'.$bhsa127.' ('.ucwords($harib).' - '.ucwords($harid).'): '.round(($n + $o + $p) / 3).' Voucher</b>
                                                </td>
											</tr>
                                            <tr>
                                                <td colspan="3" style="border: none;"></td>
											</tr>
                                            <tr style="background:rgba(0,0,0, 0.6); color:#FFF;">
                                                <td colspan="3"><b>'.$bhsa36.'</b></td>
											</tr>
											<tr>
                                                <td colspan="3" style="border: none;">'.$bhsa113.$bhsa128.'</td>
											</tr>
                                            <tr>
                                                <td colspan="3" style="border: none;"></td>
											</tr>
										</tbody>
									</table>
						</div>
					    </div>
                        </div>';
    }
 ?>