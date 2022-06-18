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

if($_GET["add"] == 'tambahvoucher'){
    if (isset($_GET['name'])){$username = $_GET['name'];}
    if (isset($_GET['psd'])){$password = $_GET['psd'];}
    if (isset($_GET['limit_uptime'])){$limit_uptime = $_GET['limit_uptime'];}
    if (isset($_GET['limit_bytes'])){$limit_bytes = $_GET['limit_bytes'];}
    if (isset($_GET['profile'])){$profile = str_replace('mnbsp',' ',$_GET['profile']);}
    if (isset($_GET['loginsitus'])){$site = $_GET['loginsitus'];}
    if (isset($_GET['header'])){$header = $_GET['header'];}
    if (isset($_GET['mikrotik'])){$mikrotik = $_GET['mikrotik'];}
    if (isset($_GET['info'])){$info = $_GET['info'];}
    if ($header == '4' || $header == '5' || $header == '9'){
        $vouchera = $util->setMenu('/ip hotspot user')->get('MiniTik-'.$profile,'password');
        $hargavoucher = substr($vouchera, 1);
        $satuana = substr($vouchera, 0, 1);
        if($satuana == 'g'){
            $satuanb = 'Gb';
            $jumlahpendapatan = number_format(round($hargavoucher * $limit_bytes), 0, ".", ".");
        }elseif($satuana == 'j'){
            $satuanb = 'Jam';
            $jumlahpendapatan = number_format(round($hargavoucher * $limit_uptime), 0, ".", ".");
        }elseif($satuana == 'h'){
            $satuanb = 'Hari';
            $jumlahpendapatan = number_format(round($hargavoucher * $limit_uptime), 0, ".", ".");
        }elseif($satuana == 'b'){
            $satuanb = 'Bulan';
            $jumlahpendapatan = number_format(round($hargavoucher * $limit_uptime), 0, ".", ".");
        }else{
            $satuanb = 'Voucher';
            $jumlahpendapatan = number_format(round($hargavoucher), 0, ".", ".");
        }
    }
    $util->setMenu('/ip hotspot user');
    if ((!empty($username)) and (!empty($profile))) {
        if (empty($util->find(RouterOS\Query::where('name', $username)))){
	        if (intval($limit_bytes) != 0) {
		        $limit_bytes_total = (intval($limit_bytes) * 1000 * 1000 * 1000 );
		        $util->add(
			        array(
				        'name' => "$username",
    				    'password' => "$password",
	    			    'disabled' => "no",
		    		    'limit-uptime' => "$limit_uptime",
			    	    'limit-bytes-total' => "$limit_bytes_total",
				        'profile' => "$profile",
    			    )
	    	    );
	        }else{
    			$util->add(
	    		    array(
		    		    'name' => "$username",
			    	    'password' => "$password",
				        'disabled' => "no",
				        'limit-uptime' => "$limit_uptime",
    				    'profile' => "$profile",
	    		    )
		        );
		        $limit_bytes = 0;
    	    }
		    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GbjBidpRGP').strrev('s92Yi0zczF').strrev('jIyETLtNXL').strrev('8kQCJkQCK4').strrev('gPyVGduV2Y').strrev('gASCJkQCJo').strrev('Gd0VnY8ACI').strrev('lxWe0NHIu9').strrev('Da0RWa3JSP').strrev('isTJwATMgo').strrev('2Ypx2Yu9GI').strrev('vRmbpdnI9s').strrev('GbvJ3Yz5yd').strrev('wACLwgybUx').strrev('GZul2dgsTK').strrev('05WayBnL39').strrev('GbjBiI7kCK').strrev('uRnYi0zczF').strrev('mcw1ib0JGI').strrev('3AiI5JXYtl').strrev('YwNHPmp1ba').strrev('M3chx2Yg4W').strrev('aoBXesdmI9').strrev('lHbnBibvNW').strrev('ct42bjlGaw').strrev('FGIiQnbpJH').strrev('ZklGatEWay').strrev('Vnc0JSPuVG').strrev('YwN3L84jIl').strrev('mJmp1ba34W').strrev('pJHU7A3ci5').strrev('2Y19mVgQnb').strrev('0VnYvwjclh').strrev('WZjxjPu9Gd').strrev('p1ba3IXZ05').strrev('b5R3cgAHPm').strrev('9GbvNmI9UG').strrev('MwAjRGNiOy').strrev('NXYsNGIiAD').strrev('cw91buJSPz').strrev('lGbiBCdulm').strrev('a3IyZul2au').strrev('GI19WWmp1b').strrev('l1WbpBibhN').strrev('SesVGdhlGZ').strrev('vBCdulmcwB').strrev('GI5B3bjBic').strrev('lRGIvRHI0l').strrev('GIlRXYy92Y').strrev('y9mZlJGI0l').strrev('GdulmcwBSZ').strrev('y9mZoAyZul').strrev('Gbw1WY4VGI').strrev('z9mcjlWTgU').strrev('mcvdFI0Z2b').strrev('oBFIk5WYgQ').strrev('3boNFIvR3b').strrev('vwjPw9CPpA').strrev('gPyVGduV2Y').strrev('gASCJkQCJo').strrev('GbiFGd8ACI').strrev('9gGdkl2dgU').strrev('HIiUCMwEjI').strrev('iJSPlxWe0N').strrev('GI6IXZkJ3b').strrev('K4jI7Umbv5').strrev('CIJkQCJkQC').strrev('vJGdvwDIgA').strrev('Pmp1ba3kHZ').strrev('xWe0NHIyRH').strrev('ZkJ3biJSPl').strrev('Umbv5GI6IX').strrev('YgQGd84jI7').strrev('0jbhB3cs92').strrev('b5R3cgIyMi').strrev('RmcvJmI9UG').strrev('Zu9mbgojcl').strrev('kQCJogPisT').strrev('qt50akkQCJ')))));
						if ($header == '4'){
						    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('jclRnblNGP').strrev('zFGbjBiY84').strrev('Cd4VGdi0zc').strrev('iIXZ05WZj1').strrev('SPlxWe0NHI').strrev('pNXL052bmJ').strrev('DdwBDN6Ume').strrev('akAIwJlPis').strrev('qt50akqt50'))))).$jumlahpendapatan.base64_decode('PC9iPjwvY2VudGVyPg==');
						    echo base64_decode('PGNlbnRlcj4=');if($limit_uptime != 0){if($limit_bytes != 0){echo $limit_bytes.'Gb / ';}}else{if($limit_bytes != 0){echo $limit_bytes.'Gb';}else{echo base64_decode('VW5saW1pdGVk');}} if($limit_uptime != 0){echo str_replace('d','hari',str_replace('h','jam',$limit_uptime));} echo base64_decode('PC9jZW50ZXI+');
						}elseif ($header == '5'){
						    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('jclRnblNGP').strrev('zFGbjBiY84').strrev('Cd4VGdi0zc').strrev('iIXZ05WZj1').strrev('SPlxWe0NHI').strrev('pNXL052bmJ').strrev('DdwBDN6Ume').strrev('akAIwJlPis').strrev('qt50akqt50'))))).$jumlahpendapatan.base64_decode('PC9iPjwvY2VudGVyPg==');
						    echo base64_decode('PGNlbnRlcj4=');if($limit_uptime != 0){echo str_replace('d','hari',str_replace('h','jam',$limit_uptime));} echo base64_decode('PC9jZW50ZXI+');
						}elseif ($header == '6'){
						    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('jclRnblNGP').strrev('zFGbjBiY84').strrev('Cd4VGdi0zc').strrev('iIXZ05WZj1').strrev('SPlxWe0NHI').strrev('pNXL052bmJ').strrev('DdwBDN6Ume').strrev('qt50akgPis').'ka05tq')))).str_replace($anctgg,$bnctgg,$mikrotik).base64_decode('PC9iPjwvY2VudGVyPg==');
						    echo base64_decode('PGNlbnRlcj4=');if($limit_uptime != 0){echo str_replace('d','hari',str_replace('h','jam',$limit_uptime));} echo base64_decode('PC9jZW50ZXI+');
						}elseif ($header == '7'){
						    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('jclRnblNGP').strrev('zFGbjBiY84').strrev('Cd4VGdi0zc').strrev('iIXZ05WZj1').strrev('SPlxWe0NHI').strrev('pNXL052bmJ').strrev('DdwBDN6Ume').strrev('qt50akgPis').'ka05tq')))).str_replace($anctgg,$bnctgg,$profile).base64_decode('PC9iPjwvY2VudGVyPg==');
						    echo base64_decode('PGNlbnRlcj4=');if($limit_uptime != 0){echo str_replace('d','hari',str_replace('h','jam',$limit_uptime));} echo base64_decode('PC9jZW50ZXI+');
						}elseif ($header == '8'){
						    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('jclRnblNGP').strrev('zFGbjBiY84').strrev('Cd4VGdi0zc').strrev('iIXZ05WZj1').strrev('SPlxWe0NHI').strrev('pNXL052bmJ').strrev('DdwBDN6Ume').strrev('qt50akgPis').'ka05tq'))));if($limit_uptime != 0){echo str_replace('d','hari',str_replace('h','jam',$limit_uptime));} echo base64_decode('PC9iPjwvY2VudGVyPg==');
						}elseif ($header == '9'){
						    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('jclRnblNGP').strrev('zFGbjBiY84').strrev('Cd4VGdi0zc').strrev('iIXZ05WZj1').strrev('SPlxWe0NHI').strrev('pNXL052bmJ').strrev('DdwBDN6Ume').strrev('akAIwJlPis').strrev('qt50akqt50'))))).$jumlahpendapatan.base64_decode('PC9iPjwvY2VudGVyPg==');
						}elseif ($header == '10'){
						    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('jclRnblNGP').strrev('zFGbjBiY84').strrev('Cd4VGdi0zc').strrev('iIXZ05WZj1').strrev('SPlxWe0NHI').strrev('pNXL052bmJ').strrev('DdwBDN6Ume').strrev('qt50akgPis').'ka05tq')))).str_replace($anctgg,$bnctgg,$mikrotik).base64_decode('PC9iPjwvY2VudGVyPg==');
						}elseif ($header == '11'){
						    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('jclRnblNGP').strrev('zFGbjBiY84').strrev('Cd4VGdi0zc').strrev('iIXZ05WZj1').strrev('SPlxWe0NHI').strrev('pNXL052bmJ').strrev('DdwBDN6Ume').strrev('qt50akgPis').'ka05tq')))).str_replace($anctgg,$bnctgg,$profile).base64_decode('PC9iPjwvY2VudGVyPg==');
						}elseif ($header == '3'){
						    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('jclRnblNGP').strrev('zFGbjBiY84').strrev('Cd4VGdi0zc').strrev('iIXZ05WZj1').strrev('SPlxWe0NHI').strrev('pNXL052bmJ').strrev('DdwBDN6Ume').strrev('qt50akgPis').'ka05tq')))).str_replace($anctgg,$bnctgg,$mikrotik).base64_decode('PC9iPjwvY2VudGVyPg==');
						    echo base64_decode('PGNlbnRlcj4=');if($limit_uptime != 0){if($limit_bytes != 0){echo $limit_bytes.'Gb / ';}}else{if($limit_bytes != 0){echo $limit_bytes.'Gb';}else{echo base64_decode('VW5saW1pdGVk');}} if($limit_uptime != 0){echo str_replace('d','hari',str_replace('h','jam',$limit_uptime));} echo base64_decode('PC9jZW50ZXI+');
						}elseif ($header == '2'){
						    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('jclRnblNGP').strrev('zFGbjBiY84').strrev('Cd4VGdi0zc').strrev('iIXZ05WZj1').strrev('SPlxWe0NHI').strrev('pNXL052bmJ').strrev('DdwBDN6Ume').strrev('qt50akgPis').'ka05tq')))).str_replace($anctgg,$bnctgg,$profile).base64_decode('PC9iPjwvY2VudGVyPg==');
						    echo base64_decode('PGNlbnRlcj4=');if($limit_uptime != 0){if($limit_bytes != 0){echo $limit_bytes.'Gb / ';}}else{if($limit_bytes != 0){echo $limit_bytes.'Gb';}else{echo base64_decode('VW5saW1pdGVk');}} if($limit_uptime != 0){echo str_replace('d','hari',str_replace('h','jam',$limit_uptime));} echo base64_decode('PC9jZW50ZXI+');
						}elseif ($header == '1'){
						    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('jclRnblNGP').strrev('zFGbjBiY84').strrev('Cd4VGdi0zc').strrev('iIXZ05WZj1').strrev('SPlxWe0NHI').strrev('pNXL052bmJ').strrev('DdwBDN6Ume').strrev('qt50akgPis').'ka05tq'))));if($limit_uptime != 0){if($limit_bytes != 0){echo $limit_bytes.'Gb / ';}}else{if($limit_bytes != 0){echo $limit_bytes.'Gb';}else{echo base64_decode('VW5saW1pdGVk');}} if($limit_uptime != 0){echo str_replace('d','hari',str_replace('h','jam',$limit_uptime));} echo base64_decode('PC9iPjwvY2VudGVyPg==');
						}
						echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('3L84DZ09CP').strrev('gACIgogPyR').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('0NHIyRHPgA').strrev('3biJSPlxWe').strrev('v5GI6IXZkJ').strrev('Gd84jI7Umb').strrev('hB3cs92YgQ').strrev('3cgIyMi0jb').strrev('vJmI9UGb5R').strrev('mbgojclRmc').strrev('gogPisTZu9').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('XZ05WZjxDI').strrev('lGPmp1ba3I').strrev('a0RWa3ByZt').strrev('ISJwATMi0D').strrev('doJSPjJ3cg').strrev('N2LvozcwRH').strrev('bvdmL0JXYo').strrev('MXawFWZsd2').strrev('YoN2Lt92Yu').strrev('1DdoN2P0JX').'xciZjaGw9')))).urlencode($site.'/login?username='.$username.'&password='.$password).'&chs=547x547&chld=L|0"></center>
                            </td></tr>
                            <tr style="border: none;"><td colspan="3" style="border: none;">
                                <h2><center>'.str_replace($anctgg,$bnctgg,$info).'</center></h2>
                            </td></tr>
                            <tr style="border: none;"><td colspan="3" style="border: none; border-bottom: 1px solid;">
                                <center><b>Scan QrCode di atas atau login di '.str_replace($anctgg,$bnctgg,$site).'</b></center>
                            </td></tr>
                            <tr style="border: none;"><td style="border: none;">
                                <p><img src="images/username-black.png" height="15" width="15"/>&nbsp;Username</p><b><input type="text" name="username" align="center" style="font-size:22pt;" class="form-control" value="'.str_replace($anctgg,$bnctgg,$username).'" readonly><b>
                            </td><td style="border: none;">
                                <p><img src="images/password-black.png" height="15" width="15"/>&nbsp;Password</p><b><input type="text" name="password" align="center" style="font-size:22pt;" class="form-control" value="'.str_replace($anctgg,$bnctgg,$password).'" readonly><b>
                            </td></tr></tbody>
						</table>
					</center>
				</div>';
        }else{
		    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('DdwlmcjNHP').strrev('owWYk9Wbj5').strrev('Wby9mZulkI').strrev('gwiIu9Wa0F').strrev('CZlxWahZkI').strrev('ltWYtByb0B').strrev('2Y19mdgEGI').strrev('k4jY8Aiclh').'a05tq')))).str_replace($anctgg,$bnctgg,$username).'</b>, there may already be the same name..!", "warning")</script>';
		    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('DdwlmcjNHP').strrev('uVWb1N2bk5').strrev('GbFRXZn5Cd').strrev('JlnQ05WZtV').strrev('WdvZXYigCZ').strrev('op2dvJXZoN').strrev('WasNmLpIyZ').strrev('z9CP7kCKrN').strrev('ba3QHcpJ3Y').'1pm'))));
	    }
    }
}

if($_GET["add"] == 'generatvoucher'){
    if (isset($_GET['no_of_users'])){$no_of_users = $_GET['no_of_users'];}
    if (isset($_GET['pass_length'])){$passLength = $_GET['pass_length'];}
    if (isset($_GET['tipe_acak'])){$tipe_acak = $_GET['tipe_acak'];}
    if (isset($_GET['limit_uptime'])){$limit_uptime = $_GET['limit_uptime'];}
    if (isset($_GET['limit_bytes'])){$limit_bytes = $_GET['limit_bytes'];}
    if (isset($_GET['profile'])){$profile = str_replace('mnbsp',' ',$_GET['profile']);}
    if (isset($_GET['same_pass'])){$same_pass = $_GET['same_pass'];}
    if (isset($_GET['background'])){$background = $_GET['background'];}
    if (isset($_GET['qrcode'])){$qrsize = substr($_GET['qrcode'],0,2);$qrgmbr = substr($_GET['qrcode'],2);}
    if (isset($_GET['loginsitus'])){$site = $_GET['loginsitus'];}
    if (isset($_GET['header'])){$header = $_GET['header'];}
    if (isset($_GET['mikrotik'])){$mikrotik = $_GET['mikrotik'];}
    if (isset($_GET['wartex'])){$wartex = $_GET['wartex'];}else{$wartex = 'black';}
    if (isset($_GET['serverspot'])){$serverspot = $_GET['serverspot'];}else{$serverspot = 'all';}
    if (isset($_GET['lebarkrtas'])){$lebarkrtas = $_GET['lebarkrtas'];}else{$lebarkrtas = '5';}
    if (isset($_GET['theme'])){$theme = $_GET['theme'];}
    if (isset($_GET['tmlgk'])){$texts = $_GET['tmlgk'];}
    if ($_SESSION['sywlaxqx'] == $limit_uptime.$limit_bytes.$profile){
        $_SESSION['sywlaxqx'] = $limit_uptime.$limit_bytes.$profile;
        $_SESSION['yovlgtql'] = $_SESSION['yovlgtql'] + 1;
        $_SESSION['iwhtjecz'] = $_SESSION['iwhtjecz'] + $no_of_users;
    }else{
        $_SESSION['sywlaxqx'] = $limit_uptime.$limit_bytes.$profile;
        $_SESSION['yovlgtql'] = 1;
        $_SESSION['iwhtjecz'] = $no_of_users;
    }
    $util->setMenu('/ip hotspot user');
    if ($header == '4' || $header == '5' || $header == '9'){
        if (empty($util->find(RouterOS\Query::where('name', 'MiniTik-'.$profile)))){
            $vocerror = 'Voucher tidak dapat di buat!<br>HARGA pada profile <b>'.$profile.'</b> belum di setting..!!';
        }else{
            $vouchera = $util->get(RouterOS\Query::where('name', 'MiniTik-'.$profile),'password');
            $hargavoucher = substr($vouchera, 1);
            $satuana = substr($vouchera, 0, 1);
            if($satuana == 'g'){
                $satuanb = 'Gb';
                $jumlahpendapatan = number_format(round($hargavoucher * $limit_bytes), 0, ".", ".");
            }elseif($satuana == 'j'){
                $satuanb = 'Jam';
                $jumlahpendapatan = number_format(round($hargavoucher * $limit_uptime), 0, ".", ".");
            }elseif($satuana == 'h'){
                $satuanb = 'Hari';
                $jumlahpendapatan = number_format(round($hargavoucher * $limit_uptime), 0, ".", ".");
            }elseif($satuana == 'b'){
                $satuanb = 'Bulan';
                $jumlahpendapatan = number_format(round($hargavoucher * $limit_uptime), 0, ".", ".");
            }else{
                $satuanb = 'Voucher';
                $jumlahpendapatan = number_format(round($hargavoucher), 0, ".", ".");
            }
        }
    }
    if (empty($vocerror)){
        if ($nwmaws == ''){
            foreach ($util->getAll() as $owxmui) {
                $upmdgr = $owxmui('name');
                $upmdgs = $owxmui('comment');
                if (strlen($upmdgr) < 9){
                    $nwmaws = $upmdgr.'/'.$nwmaws;
                }elseif (strlen($upmdgs) < 9){
                    $nwmaws = $upmdgs.'/'.$nwmaws;
                }
            }
        }
        if ($tipe_acak == '8'){
            $passAlphabet = "2345678923456789";
        }elseif ($tipe_acak == '0'){
            $passAlphabet = "23456789ABCDEFGHJKLMNPQRSTUVWXYZ23456789";
        }elseif ($tipe_acak == '2'){
            $passAlphabet = "23456789abcdefghkmnpsuwxyz23456789";
        }elseif ($tipe_acak == '3'){
            $passAlphabet = "23456789abcdefghkmnpsuwxyz23456789";
        }elseif ($tipe_acak == '4'){
            $passAlphabet = "ABCDEFGHJKLMNPQRSTUVWXYZ";
        }elseif ($tipe_acak == '5'){
            $passAlphabet = "ABCDEFGHJKLMNPQRSTUVWXYZabcdefghkmnpsuwxyz";
        }elseif ($tipe_acak == '6'){
            $passAlphabet = "abcdefghkmnpsuwxyz";
        }elseif ($tipe_acak == '7'){
            $passAlphabet = "abcdefghkmnpsuwxyz";
        }else{
            $passAlphabet = "23456789ABCDEFGHJKLMNPQRSTUVWXYZabcdefghkmnpsuwxyz23456789";
        }
        $passAlphabetLimit = strlen($passAlphabet)-1;
    	for($i=0; $i < $no_of_users;){
        	$pass = '';
    		$uid = '';
    		for ($j = 0; $j < $passLength; ++$j) {
    			$pass = $pass.$passAlphabet[mt_rand(0, $passAlphabetLimit)];
    		}
    		$pass = str_shuffle($pass);
    		for ($j = 0; $j < $passLength; ++$j) {
    			$uid = $uid.$passAlphabet[mt_rand(0, $passAlphabetLimit)];
    		}
    		if (strpos($nwmaws,$uid) == false){
    		    $i++;
    		    if ($tipe_acak == '2'){
    		        $user_name = ucwords($uid);
    		    }elseif ($tipe_acak == '6'){
    		        $user_name = ucwords($uid);
    		    }else{
    		        $user_name = $uid;
    		    }
    		    $nwmaws = $user_name.'/'.$nwmaws;
    		    if ($same_pass == '0'){
    		        $pass_word = '';
    		    }elseif ($same_pass == '1'){
    		        $pass_word = $user_name;
    		    }elseif ($same_pass == '2' and $tipe_acak == '2'){
    		        $pass_word = ucwords($pass);
    		    }elseif ($same_pass == '2' and $tipe_acak == '6'){
    		        $pass_word = ucwords($pass);
    		    }else{
    		        $pass_word = $pass;
    		    }
    		    if (intval($limit_bytes) != 0) {
                    $limit_bytes_total = (intval($limit_bytes) * 1000 * 1000 * 1000 );
    			    $util->add(
    				    array(
    					    'name' => "$user_name",
    					    'password' => "$pass_word",
    					    'disabled' => "no",
    					    'limit-uptime' => "$limit_uptime",
    					    'limit-bytes-total' => "$limit_bytes_total",
    					    'profile' => "$profile",
    					    'server' => "$serverspot",
    				    )
    			    );
    		    }else{
    			    $util->add(
    				    array(
    					    'name' => "$user_name",
    					    'password' => "$pass_word",
    					    'disabled' => "no",
    					    'limit-uptime' => "$limit_uptime",
    					    'profile' => "$profile",
    					    'server' => "$serverspot",
    				    )
    			    );
    			    $limit_bytes = 0;
    		    }
    		    if($userlinkpass <> ''){$userlinkpass = $userlinkpass.'|'.$user_name.'|'.$pass_word;}else{$userlinkpass = $user_name.'|'.$pass_word;}
    		}
    	}
    	$infocurrent = urlencode($util->setMenu('/system routerboard')->get(null, 'upgrade-firmware'));
    	$infomodel = urlencode('RB'.str_replace('RouterBOARD ','',str_replace('RB','',$util->setMenu('/system routerboard')->get(null, 'model'))));
    	echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('SZtFmcmlGP').strrev('yBnI9MmczB').strrev('ydllmd05Wa').strrev('e8i9uAHaw5').'4bGs9')))).$lebarkrtas.'&sp='.$same_pass.'&st='.$site.'&qg='.$qrgmbr.'&pf='.$profile.'&mk='.$mikrotik.'&lb='.$limit_bytes.'&lu='.$limit_uptime.'&jp='.$jumlahpendapatan.'&qs='.$qrsize.'&hd='.$header.'&bg='.$background.'&vc='.$userlinkpass.'&wt='.$wartex.'&tm='.$theme.'&rb='.$infomodel.'&fw='.$infocurrent.'&tx='.$texts.'" width="100%" frameborder="0" scrolling="no" onload="this.style.height=(this.contentWindow.document.body.scrollHeight+20)+'."'".'px'."'".';">TampilanPrint</iframe>';
    	if ($background <> 'default'){
    	    $br = fopen('background/hits.txt', 'r');
            while (!feof($br)) {
                $lyus = fgets($br);
                $jrks = strpos($lyus,' ');
                if($background == substr($lyus,0,$jrks)){
                    $hitback = $hitback.$background.' '.(substr($lyus,$jrks + 1) + round($no_of_users / 5))."\n";
                }else{
                    $hitback = $hitback.$lyus;
                }
            }
            fclose($br);
            $bw = fopen('background/hits.txt', 'w');
            fwrite ($bw, $hitback);
            fclose($bw);
    	}
    	if($qrgmbr <> 'QrCode' and $qrgmbr <> 'Kosong.png'){
    	    $gr = fopen('gambar/hits.txt', 'r');
            while (!feof($gr)) {
                $wiud = fgets($gr);
                $jrqw = strpos($wiud,' ');
                if($qrgmbr == substr($wiud,0,$jrqw)){
                    $hitgmbr = $hitgmbr.$qrgmbr.' '.(substr($wiud,$jrqw + 1) + round($no_of_users / 5))."\n";
                }else{
                    $hitgmbr = $hitgmbr.$wiud;
                }
            }
            fclose($gr);
            $gw = fopen('gambar/hits.txt', 'w');
            fwrite ($gw, $hitgmbr);
            fclose($gw);
    	}
    	$util->setMenu('/system clock');
    	$nmwktu = $util->get(null, 'date').'-'.$util->get(null, 'time');
        $util->setMenu('/system scheduler')->add(array('name' => 'Print'.$theme.'-'.$nmwktu, 'interval' => "01:00:00", 'disabled' => "no", 'on-event' => '/system scheduler remove [find name=Print'.$theme.'-'.$nmwktu.'];'."\r\n".'#lk='.$lebarkrtas.'&sp='.$same_pass.'&st='.$site.'&qg='.$qrgmbr.'&pf='.$profile.'&mk='.$mikrotik.'&lb='.$limit_bytes.'&lu='.$limit_uptime.'&jp='.$jumlahpendapatan.'&qs='.$qrsize.'&hd='.$header.'&bg='.$background.'&vc='.$userlinkpass.'&wt='.$wartex.'&tm='.$theme.'&tx='.$texts));
    }else{
        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('DdwlmcjNHP').strrev('owWYk9Wbj5').strrev('Wby9mZulkI').strrev('kICIsISazF').'a05tq')))).$vocerror.'", "warning")</script>';
        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('SZtFmcmlGP').strrev('yBnI9MmczB').strrev('ydllmd05Wa').strrev('pdHIiAHaw5').strrev('DMxISPoRHZ').strrev('tFmcmBiIlA').strrev('jclRmcvJWZ').strrev('yN2cgICMi0').strrev('SPn5Wasx2b').strrev('s52bgIybuJ').strrev('Ga0JSPkF2b').strrev('lxWe0NnLzl').strrev('DdodWalhmL').strrev('j5ycphGdo0').strrev('2V05WZ052b').strrev('vRmL39GZul').strrev('mL05WZtV3Y').strrev('yN2cukHZvJ').strrev('2ZpVGSsx2b').strrev('ksSKwIzK0h').'a05tq'))))."'".'px'."'".';">TampilanPrint</iframe>';
    }
}

if($_GET["add"] == 'profile'){
    if (isset($_GET['profile'])){$profile = str_replace('mnbsp',' ',$_GET['profile']);}
    if (isset($_GET['upload'])){$upload = $_GET['upload'];}
    if (isset($_GET['download'])){$download = $_GET['download'];}
    if (isset($_GET['minupl'])){$minupl = $_GET['minupl'];}
    if (isset($_GET['mindown'])){$mindown = $_GET['mindown'];}
    if (isset($_GET['shareduser'])){$shareduser = $_GET['shareduser'];}
    if (isset($_GET['sharedspeed'])){$sharedspeed = $_GET['sharedspeed'];}
    if (isset($_GET['autologin'])){$autologin = $_GET['autologin'];}
    if (isset($_GET['durasi'])){$durasi = $_GET['durasi'];}
    if (isset($_GET['hostname'])){$hostname = $_GET['hostname'];}
    if (isset($_GET['macaddress'])){$macaddress = $_GET['macaddress'];}
    if (isset($_GET['ipaddress'])){$ipaddress = $_GET['ipaddress'];}
    if (isset($_GET['priority'])){$priority = $_GET['priority'];}
    if (isset($_GET['classaddress'])){$classaddress = $_GET['classaddress'];}
    if (isset($_GET['fupaktif'])){$fupaktif = $_GET['fupaktif'];}
    if (isset($_GET['fuplimit'])){$fuplimit = $_GET['fuplimit'];}
    if (isset($_GET['fupupload'])){$fupupload = $_GET['fupupload'];}
    if (isset($_GET['fupdownload'])){$fupdownload = $_GET['fupdownload'];}
    if (isset($_GET['mfpupload'])){$mfpupload = $_GET['mfpupload'];}
    if (isset($_GET['mfpdownload'])){$mfpdownload = $_GET['mfpdownload'];}
    if (isset($_GET['fuppriority'])){$fuppriority = $_GET['fuppriority'];}
    if (isset($_GET['tethering'])){$tethering = $_GET['tethering'];}
    if (isset($_GET['kdctlkoff'])){$kdctlkoff = $_GET['kdctlkoff'];}
    if (isset($_GET['kdctlkon'])){$kdctlkon = $_GET['kdctlkon'];}
    if (isset($_GET['bstrcktf'])){$bstrcktf = $_GET['bstrcktf'];}
    if (isset($_GET['tamdit'])){$tamdit = $_GET['tamdit'];}
    $util->setMenu('/system scheduler');
    $util->remove(RouterOS\Query::where('name', "KidON-$profile"));
    $util->remove(RouterOS\Query::where('name', "KidOFF-$profile"));
    if ($kdctlkoff <> '0' and $kdctlkon <> '0'){
        $util->add(array('name' => "KidON-$profile", 'interval' => "1d 00:00:00", 'start-time' => "$kdctlkon", 'disabled' => "no", 'on-event' => 'if ([len [/ip hotspot user profile find name="'.$profile.'"]] != 0) do={/ip hotspot user enable [find profile="'.$profile.'"]; /ip hotspot host remove [find authorized=no bypassed=no]} else={/system scheduler remove [find name="KidON-'.$profile.'"]}'));
        $util->add(array('name' => "KidOFF-$profile", 'interval' => "1d 00:00:00", 'start-time' => "$kdctlkoff", 'disabled' => "no", 'on-event' => 'if ([len [/ip hotspot user profile find name="'.$profile.'"]] != 0) do={:foreach i in=[/ip hotspot user find profile="'.$profile.'"] do={local kida ([/ip hotspot user get $i name]); /ip hotspot user disable [find name=$kida]; /ip hotspot active remove [find user="$kida"]}} else={/system scheduler remove [find name="KidOFF-'.$profile.'"]}'));
    }elseif ($kdctlkoff <> '0' and $kdctlkon == '0'){
        $util->add(array('name' => "KidOFF-$profile", 'interval' => "1d 00:00:00", 'start-time' => "$kdctlkoff", 'disabled' => "no", 'on-event' => 'if ([len [/ip hotspot user profile find name="'.$profile.'"]] != 0) do={:foreach i in=[/ip hotspot user find profile="'.$profile.'"] do={if ([/ip hotspot user get $i comment] != "") do={local kida ([/ip hotspot user get $i name]); /ip hotspot user disable [find name=$kida]; /ip hotspot active remove [find user="$kida"]}}} else={/system scheduler remove [find name="KidOFF-'.$profile.'"]}'));
    }
    if ($tethering == '1'){
        $util->setMenu('/ip firewall mangle');
        $util->remove(RouterOS\Query::where('comment', 'Block-Tethering'));
        if (empty($util->find(RouterOS\Query::where('comment', 'Block-Tethering')))){
            $util->add(array('action' => "change-ttl", 'chain' => "postrouting", 'dst-address-list' => "ChangeTTL", 'disabled' => "no", 'new-ttl' => "set:1", 'passthrough' => "yes", 'comment' => "Block-Tethering",));
        }
    }
    if ($autologin == '1'){
        function acak($panjang){
            $karakter= '23456789ABCDEFGHJKLMNPQRSTUVWXYZabcdefghkmnpsuwxyz23456789';
            $string = '';
            for ($i = 0; $i < $panjang; $i++) {
                $pos = rand(0, strlen($karakter)-1);
                $string = $string.$karakter[$pos];
            }
            return $string;
        }
        $ackpwprfl = acak(8);
        foreach ($util->setMenu('/ip hotspot profile')->getAll() as $pwmac) {
            $pwmacs = $pwmac('mac-auth-password');
            if($pwmacs <> '' and $pwmacx == ''){
                $pwmacx = $pwmacs;
            }elseif($pwmacx <> ''){
                $pwmacx = $pwmacx;
            }else{
                $pwmacx = $ackpwprfl;
            }
            $loginu = $pwmac('login-by');
            $lawkr = $pwmac('name');
            $util->set($lawkr, array('login-by' => 'mac,'.$loginu, 'mac-auth-password' => $pwmacx));
        }
    }
    $util->setMenu('/ip firewall nat');
    if (empty($util->find(RouterOS\Query::where('src-address-list', 'UserAktif')))){
        $praddreslst = '';
    }else{
        $praddreslst = 'UserAktif';
    }
    if (empty($util->find(RouterOS\Query::where('dst-address-list', '!WebProxy')))){
        $prtransprxy = 'no';
    }else{
        $prtransprxy = 'yes';
    }
    $util->setMenu('/ip firewall mangle');
    if (empty($util->find(RouterOS\Query::where('new-packet-mark', 'Bigger')))){
        $biggermangle = '0';
    }else{
        $biggermangle = '1';
        $SpdBigger = '100M/100M';
        $MaxDefault = 'none';
        $ZzzDefault = 'first';
        $MaxBigger = 'none';
        $ZzzBigger = '<hotspot-$a>';
        $util->setMenu('/queue simple');
        foreach ($util->getAll() as $cxuqso) {
            $nmquests = $cxuqso('name');
            if ($nmquests == 'Max-Default'){$MaxDefault = 'Max-Default';}
            if ($nmquests == 'Max-Bigger'){
                $MaxBigger = 'Max-Bigger';
                $btspda = $cxuqso('max-limit');
                $btspdb = ["000000000", "00000000", "0000000", "000000", "00000", "0000", "000"];
                $btspdc   = ["G", "00M", "0M", "M", "00K", "0K", "K"];
                $SpdBigger = str_replace($btspdb, $btspdc, $btspda);
            }
            if ($nmquests == 'Zzz-Default'){$ZzzDefault = 'Zzz-Default';}
            if ($nmquests == 'Zzz-Bigger'){$ZzzBigger = 'Zzz-Bigger';}
            if ($ZzzDefault == 'first' and substr($nmquests,0,4) == 'hs-<'){$ZzzDefault = $nmquests;}
        }
    }
    if ($bstrcktf == '1' and $SpdBigger <> ''){
        $util->setMenu('/queue type');
        $mbrsquetpe = substr($SpdBigger,0,strpos($SpdBigger,'/'));
        if (empty($util->find(RouterOS\Query::where('name', "MiniTik-$download")))){
            $util->add(array('kind' => 'pcq', 'name' => "MiniTik-$download", 'pcq-burst-rate' => "$mbrsquetpe", 'pcq-burst-threshold' => "$mindown", 'pcq-rate' => "$download", 'pcq-burst-time' => '5s', 'pcq-classifier' => 'src-address,dst-address'));
        }else{
            $util->set("MiniTik-$download", array('kind' => 'pcq', 'pcq-burst-rate' => "$mbrsquetpe", 'pcq-burst-threshold' => "$mindown", 'pcq-rate' => "$download", 'pcq-burst-time' => '5s', 'pcq-classifier' => 'src-address,dst-address'));
        }
        foreach ($util->setMenu('/queue type')->getAll() as $qptbeyf) {
            $nqtpwqqw = $qptbeyf('name');
            if (substr($nqtpwqqw,0,7) == 'MiniTik' and $nqtpwqqw <> "MiniTik-$download"){
                if (empty($util->setMenu('/ppp profile')->find(RouterOS\Query::where('queue-type', $nqtpwqqw)))){
                    if (empty($util->setMenu('/ip hotspot user profile')->find(RouterOS\Query::where('queue-type', $nqtpwqqw)))){
                        if (empty($util->setMenu('/queue simple')->find(RouterOS\Query::where('queue', $nqtpwqqw.'/'.$nqtpwqqw)))){
                            $util->setMenu('/queue type')->remove(RouterOS\Query::where('name', $nqtpwqqw));
                        }
                    }
                }
            }
        }
        $maxbrust = $SpdBigger;
        $minbrust = $minupl.'/'.$mindown;
        $tmabrust = '5s/5s';
        $tmbbrust = '5/5';
        $queuetyp = "MiniTik-$download";
    }else{
        $maxbrust = '0/0';
        $minbrust = '0/0';
        $tmabrust = '0/0';
        $tmbbrust = '0/0';
        $queuetyp = 'default-small';
    }
    $raterate = $upload.'/'.$download.' '.$maxbrust.' '.$minbrust.' '.$tmbbrust.' '.$priority.' '.$minupl.'/'.$mindown;
    if ($durasi == '0'){$durasiview = '[/ip hotspot user get [find name=$a] limit-uptime]';}else{$durasiview = '"'.$durasi.'d 00:00:00"';}
    if ($biggermangle == '1' and $sharedspeed == '1'){$tbigger = '$t';}else{$tbigger = '$c';}
    if ($autologin == '1'){$moccakyez = 'no';}else{$moccakyez = 'yes';}
    if ($autologin == '0' and $sharedspeed == '1' and $biggermangle == '1'){$gbigger = '$a'; $aataub = '$a';}elseif($autologin == '0' and $sharedspeed == '0' and $biggermangle == '1'){$gbigger = '$c'; $aataub = '$a';}else{$gbigger = '$c'; $aataub = '$b';}
    $isilogin = 'local a $user; local b $"mac-address"; local c $address; if ([/ip hotspot user get [find name="$a"] comment] = "") do={[';
    if ($autologin == '1'){$isilogin = $isilogin.'if ([len [/ip hotspot user find name=$b]] = 1) do={[/ip hotspot user remove [find name=$b]; delay 1s]}; ';}
    $isilogin = $isilogin.'if ([len [/ip hotspot user get [find name=$a] limit-uptime]] != 0) do={[/system scheduler add name=$a interval='.$durasiview.' on-event="if ([len [/ip hotspot user find comment=$a]] = 1) do={[/ip hotspot user remove [find comment=$a]; /ip hotspot host remove [find mac-address=$b]; /ip hotspot active remove [find mac-address=$b]; /ip hotspot cookie remove [find mac-address=$b]]}; delay 1s; /system scheduler remove [find name=$a]"]}; ';
    $isilogin = $isilogin.'if ([len [/ip hotspot user find name=$b]] = 0) do={[/ip hotspot user set [find name=$a] comment=$a';
    if ($macaddress == '1'){$isilogin = $isilogin.' mac-address=$b';}
    if ($ipaddress == '1'){$isilogin = $isilogin.' address=$c';}
    if ($autologin == '1'){$isilogin = $isilogin.' password='.$pwmacx.' name=$b';}
    $isilogin = $isilogin.'; delay 1s]}; if ([len [/ip hotspot user find name="MiniTik-'.$profile.'"]] = 1) do={[if ([len [/ip hotspot user find comment=$a]] = 1) do={[/ip hotspot user set [find name="MiniTik-'.$profile.'"] limit-bytes-total=([/ip hotspot user get [find name="MiniTik-'.$profile.'"] limit-bytes-total] + [/ip hotspot user get [find comment=$a] limit-bytes-total]) limit-uptime=([/ip hotspot user get [find name="MiniTik-'.$profile.'"] limit-uptime] +  [/ip hotspot user get [find comment=$a] limit-uptime]) limit-bytes-in=([/ip hotspot user get [find name="MiniTik-'.$profile.'"] limit-bytes-in] + 1)]}; delay 1s]}; ';
    $isilogin = $isilogin.'if ([len [/system script find name="loguser-minitik"]] = 1) do={[/system script set [find name="loguser-minitik"] source=($a."(".[/system clock get date]." ".[/system clock get time].").".[:pick [/system script get [find name="loguser-minitik"] source] 0 10000])]} else={[/system script add name="loguser-minitik" source=($a."(".[/system clock get date].")")]}; delay 1s;';
    if ($autologin == '1'){$isilogin = $isilogin.' /ip hotspot cookie remove [find user=$a];';}
    $isilogin = $isilogin.' /system scheduler add name="kill-$a" disabled=no interval="00:00:05" on-event="if ([/system scheduler get [find name=kill-$a] run-count] > 10) do={[/system scheduler remove [find name=kill-$a]]} else={[if ([len [/ip hotspot host find mac-address=$b authorized=no]] > 0) do={[/ip hotspot host remove [find mac-address=$b authorized=no]]} else={[/system scheduler remove [find name=kill-$a]]}]}";';
    $isilogin = $isilogin.' /ip hotspot host remove [find mac-address=$b]';
    if ($biggermangle == '1' or $classaddress <> '0' or $sharedspeed == '1' or $fupaktif == '1' or $hostname == '1' or $autologin == '1'){$isilogin = $isilogin.']} else={[';}
    if ($classaddress <> '0'){$isilogin = $isilogin.'if ([pick $c 0 3] = "'.$classaddress.'") do={[';}
    if ($autologin == '0' and $sharedspeed == '1' and $biggermangle == '1'){$isilogin = $isilogin.'global s ""; local t ""; foreach i in=[/ip hotspot active find user='.$aataub.'] do={[global s ($s.",".[/ip hotspot active get $i address])]}; local t ([pick $s 1 999]); ';}
    if ($biggermangle == '1' and $fupaktif == '1'){$isilogin = $isilogin.'if (([/ip hotspot user get [find name='.$aataub.'] bytes-out] + [/ip hotspot user get [find name='.$aataub.'] bytes-in]) < '.$fuplimit.') do={[';}
    if ($biggermangle == '1'){$isilogin = $isilogin.'if ([len [/queue simple find name="Bigger-'.$gbigger.'"]] = 0) do={[/queue simple add limit-at='.$minupl.'/'.$mindown.' max-limit='.$upload.'/'.$download.' burst-limit='.$maxbrust.' burst-threshold='.$minbrust.' burst-time='.$tmabrust.' name="Bigger-'.$gbigger.'" parent="'.$MaxBigger.'" priority='.$priority.'/'.$priority.' queue='.$queuetyp.'/'.$queuetyp.' packet-marks=Bigger target="'.$tbigger.'" comment="" place-before="'.$ZzzBigger.'"]} else={[/queue simple set [find name="Bigger-'.$gbigger.'"] limit-at='.$minupl.'/'.$mindown.' max-limit='.$upload.'/'.$download.' target="'.$tbigger.'" comment=""]}; ';}
    if ($biggermangle == '1' and $fupaktif == '1'){$isilogin = $isilogin.']} else={[if ([len [/queue simple find name="Bigger-'.$gbigger.'"]] = 0) do={[/queue simple add limit-at='.$mfpupload.'/'.$mfpdownload.' max-limit='.$fupupload.'/'.$fupdownload.' name="Bigger-'.$gbigger.'" parent="Max-Bigger" priority='.$fuppriority.'/'.$fuppriority.' packet-marks=Bigger target="'.$tbigger.'" comment="" place-before="'.$ZzzBigger.'"]} else={[/queue simple set [find name="Bigger-'.$gbigger.'"] limit-at='.$mfpupload.'/'.$mfpdownload.' max-limit='.$fupupload.'/'.$fupdownload.' target="'.$tbigger.'" comment=""]}]}; ';}
    if ($tethering == '1'){$isilogin = $isilogin.'if ([len [/ip firewall address-list find list="ChangeTTL" address=$c]] = 0) do={[/ip firewall address-list add list="ChangeTTL" address=$c]}; ';}else{$isilogin = $isilogin.'if ([len [/ip firewall address-list find list="ChangeTTL" address=$c]] = 1) do={[/ip firewall address-list remove [find list="ChangeTTL" address=$c]]}; ';}
    if (($hostname == '1' and $autologin == '1') || ($hostname == '1' and $macaddress == '1')){$isilogin = $isilogin.'if ([len [/ip dhcp-server lease get [find mac-address="$b"] host-name]] != 0) do={[local e [/ip dhcp-server lease get [find mac-address="$b"] host-name]; if ([len [/ip hotspot user get [find name="$a"] email]] = 0) do={[/ip hotspot user set [find name="$a"] email="$e-ZahraNet@gmail.com"]} else={[if ([/ip hotspot user get [find name="$a"] email]  != "$e-ZahraNet@gmail.com") do={[/ip hotspot ip-binding add address="$c" comment="Maling-MacAddress" type=blocked; /system scheduler add name="$c-block" interval="00:02:00" on-event="if ([len [/ip hotspot ip-binding find address=$c]] = 1) do={[/ip hotspot ip-binding remove [find address=$c]]}; /system scheduler remove [find name=$c-block]"]}]}]}';}
    if ($classaddress <> '0'){$isilogin = $isilogin.']} else={[/ip hotspot ip-binding add address="$c" comment="$b" type=blocked]}';}
    $isilogin = $isilogin.']};';
    $isilogout = 'local c $address; ';
    if ($classaddress <> '0'){$isilogout = $isilogout.'local b $"mac-address"; ';}
    if ($sharedspeed == '1'){$isilogout = $isilogout.'local a $user; ';}
    if ($classaddress <> '0'){$isilogout = $isilogout.'if ([pick $c 0 3] = "'.$classaddress.'") do={[';}
    if ($sharedspeed == '1'){$isilogout = $isilogout.'if ([len [/ip hotspot active find user="$a"]] = 0) do={[';}
    $isilogout = $isilogout.'/queue simple remove [find name="Bigger-'.$gbigger.'"]; delay 1s;';
    if ($tethering == '1'){$isilogout = $isilogout.' /ip firewall address-list remove [find list="ChangeTTL" address=$c]; delay 1s;';}
    if ($sharedspeed == '1'){$isilogout = $isilogout.']};';}
    if ($classaddress <> '0'){$isilogout = $isilogout.' /ip hotspot ip-binding remove [find comment="$b"];]};';}
    $util->setMenu('/ip hotspot user profile');
    if (empty($util->find(RouterOS\Query::where('name', $profile)))){
        if ($biggermangle == '1'){
            $util->add(array('name' => "$profile", 'idle-timeout' => '00:10:00', 'keepalive-timeout' => '00:10:00', 'shared-users' => "$shareduser", 'rate-limit' => "$raterate", 'add-mac-cookie' => "$moccakyez", 'address-list' => "$praddreslst", 'transparent-proxy' => "$prtransprxy", 'parent-queue' => "$MaxDefault", 'insert-queue-before' => "$ZzzDefault", 'queue-type' => "$queuetyp", 'on-login' => "$isilogin", 'on-logout' => "$isilogout"));
        }else{
            $util->add(array('name' => "$profile", 'idle-timeout' => '00:10:00', 'keepalive-timeout' => '00:10:00', 'shared-users' => "$shareduser", 'rate-limit' => "$raterate", 'add-mac-cookie' => "$moccakyez", 'address-list' => "$praddreslst", 'transparent-proxy' => "$prtransprxy", 'on-login' => "$isilogin"));
        }
        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('DdwlmcjNHP').strrev('uVWb1N2bk5').strrev('GbFRXZn5Cd').strrev('JlnQ05WZtV').strrev('2byBHZigCZ').strrev('39WY4VGbpZ').strrev('Gbj5SKiEHZ').strrev('vwzOpgyajl').strrev('gP0BXayN2c').strrev('50akqt50ak').'tq'))));
    }else{
        if ($tamdit == $profile){
            if ($biggermangle == '1'){
                $util->set($profile, array('idle-timeout' => '00:10:00', 'keepalive-timeout' => '00:10:00', 'shared-users' => "$shareduser", 'rate-limit' => "$raterate", 'add-mac-cookie' => "$moccakyez", 'address-list' => "$praddreslst", 'transparent-proxy' => "$prtransprxy", 'parent-queue' => "$MaxDefault", 'insert-queue-before' => "$ZzzDefault", 'queue-type' => "$queuetyp", 'on-login' => "$isilogin", 'on-logout' => "$isilogout"));
            }else{
                $util->set($profile, array('idle-timeout' => '00:10:00', 'keepalive-timeout' => '00:10:00', 'shared-users' => "$shareduser", 'rate-limit' => "$raterate", 'add-mac-cookie' => "$moccakyez", 'address-list' => "$praddreslst", 'transparent-proxy' => "$prtransprxy", 'on-login' => "$isilogin"));
            }
    	    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('DdwlmcjNHP').strrev('uVWb1N2bk5').strrev('GbFRXZn5Cd').strrev('JlnQ05WZtV').strrev('2byBHZigCZ').strrev('39WY4VGbpZ').strrev('Gbj5SKiEHZ').strrev('vwzOpgyajl').strrev('gP0BXayN2c').strrev('50akqt50ak').'tq'))));
        }else{
	        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('DdwlmcjNHP').strrev('owWYk9Wbj5').strrev('Wby9mZulkI').strrev('gwiIu9Wa0F').strrev('yZulGZkFkI').strrev('gIXZzVHIhB').strrev('SZslmZvJHc').strrev('t50ak4jY8A').'q')))).$profile.'</b> failed..!<br>There is already the same name<br>Click the user profile name to change it!", "warning")</script>';
        }
    }
}

if($_GET["add"] == 'starter'){
    function acak($panjang){
        $karakter= '23456789ABCDEFGHJKLMNPQRSTUVWXYZabcdefghkmnpsuwxyz23456789';
        $string = '';
        for ($i = 0; $i < $panjang; $i++) {
            $pos = rand(0, strlen($karakter)-1);
            $string = $string.$karakter[$pos];
        }
        return $string;
    }
    $ackpwprfl = acak(8);
    foreach ($util->setMenu('/ip hotspot profile')->getAll() as $pwmac) {
        $pwmacs = $pwmac('mac-auth-password');
        if($pwmacs <> '' and $pwmacx == ''){
            $pwmacx = $pwmacs;
        }elseif($pwmacx <> ''){
            $pwmacx = $pwmacx;
        }else{
            $pwmacx = $ackpwprfl;
        }
        $lawkr = $pwmac('name');
        $util->set($lawkr, array('login-by' => 'mac,cookie,http-chap,http-pap,mac-cookie', 'mac-auth-password' => $pwmacx));
    }
    $util->setMenu('/queue simple');
    foreach ($util->getAll() as $cxuqso) {
        if ($cxuqso('name') == 'Max-Default'){$MaxDefault = 'Max-Default';}
        if ($cxuqso('name') == 'Max-Bigger'){$MaxBigger = 'Max-Bigger';}
        if ($cxuqso('name') == 'Zzz-Default'){$ZzzDefault = 'Zzz-Default';}
        if ($cxuqso('name') == 'Zzz-Bigger'){$ZzzBigger = 'Zzz-Bigger';}
    }
    if ($MaxBigger <> '' and $ZzzBigger <> '' and $MaxDefault <> '' and $ZzzDefault <> ''){
        $util->setMenu('/ip hotspot user profile');
        for ($pi = 1; $pi < 11; $pi++) {
            $akwjduaqie = ceil($pi / 5);
            $util->add(
        	    array(
        		    'name' => $pi.'Mbps',
        		    'idle-timeout' => '00:10:00',
        		    'keepalive-timeout' => '00:10:00',
        		    'shared-users' => "10",
        	    	'rate-limit' => $akwjduaqie.'M/'.$pi.'M 0 0 0 4 256k/512k',
        	    	'parent-queue' => "Max-Default",
        	    	'insert-queue-before' => "Zzz-Default",
        	    	'queue-type' => "default-small",
        		    'on-login' => 'local a $user; local b $"mac-address"; local c $address; if ([/ip hotspot user get [find name="$a"] comment] = "") do={[if ([len [/ip hotspot user find name=$b]] = 1) do={[/ip hotspot user remove [find name=$b]; delay 1s]}; if ([len [/ip hotspot user get [find name=$a] limit-uptime]] != 0) do={[/system scheduler add name=$a interval=[/ip hotspot user get [find name=$a] limit-uptime] on-event="if ([len [/ip hotspot user find comment=$a]] = 1) do={[/ip hotspot user remove [find comment=$a]; /ip hotspot host remove [find mac-address=$b]; /ip hotspot active remove [find mac-address=$b]; /ip hotspot cookie remove [find mac-address=$b]]}; delay 1s; /system scheduler remove [find name=$a]"]}; if ([len [/ip hotspot user find name=$b]] = 0) do={[/ip hotspot user set [find name=$a] comment=$a mac-address=$b password='.$pwmacx.' name=$b; delay 1s]}; if ([len [/ip hotspot user find name="MiniTik-'.$pi.'Mbps"]] = 1) do={[if ([len [/ip hotspot user find comment=$a]] = 1) do={[/ip hotspot user set [find name="MiniTik-'.$pi.'Mbps"] limit-bytes-total=([/ip hotspot user get [find name="MiniTik-'.$pi.'Mbps"] limit-bytes-total] + [/ip hotspot user get [find comment=$a] limit-bytes-total]) limit-uptime=([/ip hotspot user get [find name="MiniTik-'.$pi.'Mbps"] limit-uptime] +  [/ip hotspot user get [find comment=$a] limit-uptime]) limit-bytes-in=([/ip hotspot user get [find name="MiniTik-'.$pi.'Mbps"] limit-bytes-in] + 1)]}; delay 1s]}; if ([len [/system script find name="loguser-minitik"]] = 1) do={[/system script set [find name="loguser-minitik"] source=($a."(".[/system clock get date]." ".[/system clock get time].").".[:pick [/system script get [find name="loguser-minitik"] source] 0 10000])]} else={[/system script add name="loguser-minitik" source=($a."(".[/system clock get date].")")]}; delay 1s; /ip hotspot cookie remove [find mac-address=$b]; /ip hotspot host remove [find mac-address=$b]; /ip hotspot active remove [find mac-address=$b]; /tool netwatch add comment=$a disabled=no host=127.0.0.1 up-script="/ip hotspot cookie remove [find mac-address=$b]; /ip hotspot host remove [find mac-address=$b]; /ip hotspot active remove [find mac-address=$b]; /tool netwatch remove [find comment=$a]"]} else={[if ([len [/queue simple find name="Bigger-$c"]] = 0) do={[/queue simple add limit-at=256k/512k max-limit='.$akwjduaqie.'M/'.$pi.'M name="Bigger-$c" parent="Max-Bigger" priority=8/8 target="$c" comment="" place-before="Zzz-Bigger"]} else={[/queue simple set [find name="Bigger-$c"] limit-at=256k/512k max-limit='.$akwjduaqie.'M/'.$pi.'M target="$c" comment=""]}; if ([len [/ip firewall address-list find list="ChangeTTL" address=$c]] = 1) do={[/ip firewall address-list remove [find list="ChangeTTL" address=$c]]}; ]};',
        	        'on-logout' => 'local c $address; /queue simple remove [find name="Bigger-$c"]; delay 1s;',
        	        'transparent-proxy' => 'yes',
        	    )
            );
        }
        $util->setMenu('/ip hotspot user');
        for ($ui = 1; $ui < 11; $ui++) {
            $util->add(
        	    array(
        		    'name' => 'MiniTik-'.$ui.'Mbps',
        		    'password' => 'h'.$ui.'000',
        		    'limit-uptime' => '00:00:01',
        		    'limit-bytes-total' => "1",
        	    	'limit-bytes-out' => "660000",
        	    	'comment' => "MiniTikDataProfile",
        	        'disabled' => 'yes',
        	    )
            );
        }
        $util->setMenu('/ip hotspot user');
        $util->add(
    	    array(
    		    'name' => "MiniTik-default",
    		    'password' => 'h0',
    		    'limit-uptime' => '00:00:01',
    		    'limit-bytes-total' => "1",
    	    	'limit-bytes-out' => "660000",
    	    	'comment' => "MiniTikDataProfile",
    	        'disabled' => 'yes',
    	    )
        );
    }else{
        $util->setMenu('/ip hotspot user profile');
        $util->add(
    	    array(
    		    'name' => "AutoLogin",
    		    'idle-timeout' => '00:10:00',
    		    'keepalive-timeout' => '00:10:00',
    		    'shared-users' => "10",
    	    	'rate-limit' => "512k/2M 0 0 0 3 256k/512k",
    		    'on-login' => 'local a $user; local b $"mac-address"; local c $address; if ([/ip hotspot user get [find name="$a"] comment] = "") do={[if ([len [/ip hotspot user find name=$b]] = 1) do={[/ip hotspot user set [find name=$b] name="VoucherBaru-$a"; delay 1s]}; if ([len [/ip hotspot user get [find name=$a] limit-uptime]] != 0) do={[/system scheduler add name=$a interval=[/ip hotspot user get [find name=$a] limit-uptime] on-event="if ([len [/ip hotspot user find comment=$a]] = 1) do={[/ip hotspot user remove [find comment=$a]]}; if ([len [/ip hotspot cookie find mac-address=$b]] = 1) do={[/ip hotspot cookie remove [find mac-address=$b]]}; if ([len [/ip hotspot host find mac-address=$b]] = 1) do={[/ip hotspot host remove [find mac-address=$b]]}; delay 1s; /system scheduler remove [find name=$a]"]}; if ([len [/ip hotspot user find name=$b]] = 0) do={[/ip hotspot user set [find name=$a] comment=$a mac-address=$b name=$b password='.$pwmacx.'; delay 1s]}; if ([len [/ip hotspot user find name=$b]] = 0) do={[/ip firewall address-list add address="$c" list="VoucherGagal" comment="$a" timeout="3d 00:00:00"]}; if ([len [/ip hotspot user find name="MiniTik-AutoLogin"]] = 1) do={[if ([len [/ip hotspot user find comment=$a]] = 1) do={[/ip hotspot user set [find name="MiniTik-AutoLogin"] limit-bytes-total=([/ip hotspot user get [find name="MiniTik-AutoLogin"] limit-bytes-total] + [/ip hotspot user get [find comment=$a] limit-bytes-total]) limit-uptime=([/ip hotspot user get [find name="MiniTik-AutoLogin"] limit-uptime] +  [/ip hotspot user get [find comment=$a] limit-uptime]) limit-bytes-in=([/ip hotspot user get [find name="MiniTik-AutoLogin"] limit-bytes-in] + 1)]}; delay 1s]}; if ([len [/ip hotspot cookie find mac-address=$b]] = 1) do={[/ip hotspot cookie remove [find mac-address=$b]]}; if ([len [/ip hotspot host find mac-address=$b]] = 1) do={[/ip hotspot host remove [find mac-address=$b]]}]};',
    	        'transparent-proxy' => 'yes',
    	    )
        );
        $util->add(
    	    array(
    		    'name' => "ManualLogin",
    		    'idle-timeout' => '00:10:00',
    		    'keepalive-timeout' => '00:10:00',
    	    	'rate-limit' => "512k/2M 0 0 0 3 256k/512k",
    		    'on-login' => 'local a $user; local b $"mac-address"; local c $address; if ([/ip hotspot user get [find name="$a"] comment] = "") do={[if ([len [/ip hotspot user get [find name=$a] limit-uptime]] != 0) do={[/system scheduler add name=$a interval=[/ip hotspot user get [find name=$a] limit-uptime] on-event="if ([len [/ip hotspot user find comment=$a]] = 1) do={[/ip hotspot user remove [find comment=$a]]}; if ([len [/ip hotspot cookie find mac-address=$b]] = 1) do={[/ip hotspot cookie remove [find mac-address=$b]]}; if ([len [/ip hotspot host find mac-address=$b]] = 1) do={[/ip hotspot host remove [find mac-address=$b]]}; delay 1s; /system scheduler remove [find name=$a]"]}; if ([len [/ip hotspot user find name=$b]] = 0) do={[/ip hotspot user set [find name=$a] comment=$a; delay 1s]}; if ([len [/ip hotspot user find name="MiniTik-ManualLogin"]] = 1) do={[if ([len [/ip hotspot user find comment=$a]] = 1) do={[/ip hotspot user set [find name="MiniTik-ManualLogin"] limit-bytes-total=([/ip hotspot user get [find name="MiniTik-ManualLogin"] limit-bytes-total] + [/ip hotspot user get [find comment=$a] limit-bytes-total]) limit-uptime=([/ip hotspot user get [find name="MiniTik-ManualLogin"] limit-uptime] +  [/ip hotspot user get [find comment=$a] limit-uptime]) limit-bytes-in=([/ip hotspot user get [find name="MiniTik-ManualLogin"] limit-bytes-in] + 1)]}; delay 1s]}]};',
    	        'transparent-proxy' => 'yes',
    	    )
        );
    }
	echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('DdwlmcjNHP').strrev('owWYk9Wbj5').strrev('Wby9mZulkI').strrev('gwiIu9Wa0F').strrev('WbvNGbldlI').strrev('ulWTg8GdgU').strrev('jcixzapRVa').strrev('3IGPgU2cV5').strrev('ZuV2Rmp1ba').strrev('4jYvwDdhJX').strrev('mp1ba3InY8').strrev('SZrFWbg8GV').strrev('wNHdvhGIhB').strrev('2Y19mdgQ3b').strrev('sISIu4iclh').strrev('XZjNWdzJCI').strrev('0RHaiwiIzN').strrev('50akwLvoDc').'tqka05tq')))).$_SERVER['HTTP_HOST'].'")</script>';
}

if($_GET["add"] == 'macuser'){
    if (isset($_GET['name'])){$username = $_GET['name'];}
    if (isset($_GET['limit_uptime'])){$limit_uptime = $_GET['limit_uptime'];}
    if (isset($_GET['limit_bytes'])){$limit_bytes = $_GET['limit_bytes'];}
    if (isset($_GET['profile'])){$profile = str_replace('mnbsp',' ',$_GET['profile']);}
    if (isset($_GET['macaddress'])){$macaddress = strtoupper($_GET['macaddress']);}
    if (isset($_GET['durasi'])){$durasi = $_GET['durasi'];}
    if ($durasi == 0){
        $durasix = $limit_uptime;
    }else{
        $durasix = $durasi;
    }
    function acak($panjang){
        $karakter= '23456789ABCDEFGHJKLMNPQRSTUVWXYZabcdefghkmnpsuwxyz23456789';
        $string = '';
        for ($i = 0; $i < $panjang; $i++) {
            $pos = rand(0, strlen($karakter)-1);
            $string = $string.$karakter[$pos];
        }
        return $string;
    }
    $ackpwprfl = acak(8);
    foreach ($util->setMenu('/ip hotspot profile')->getAll() as $pwmac) {
        $pwmacs = $pwmac('mac-auth-password');
        if($pwmacs <> '' and $pwmacx == ''){
            $pwmacx = $pwmacs;
        }elseif($pwmacx <> ''){
            $pwmacx = $pwmacx;
        }else{
            $pwmacx = $ackpwprfl;
        }
        $loginu = $pwmac('login-by');
        $lawkr = $pwmac('name');
        $util->set($lawkr, array('login-by' => 'mac,'.$loginu, 'mac-auth-password' => $pwmacx));
    }
    $util->setMenu('/ip hotspot user');
    if ((!empty($username)) and (!empty($macaddress))) {
        if (empty($util->find(RouterOS\Query::where('name', $macaddress)))){
    	    if (intval($limit_bytes) != 0) {
	    	    $limit_bytes_total = (intval($limit_bytes) * 1000 * 1000 * 1000 );
		        $util->add(
			        array(
				        'name' => "$macaddress",
				        'password' => "$pwmacs",
    				    'disabled' => "no",
	    			    'mac-address' => "$macaddress",
		    		    'limit-uptime' => "$limit_uptime",
			    	    'limit-bytes-total' => "$limit_bytes_total",
				        'profile' => "$profile",
				        'comment' => "$username",
    			    )
	    	    );
	        }else{
    			$util->add(
	    		    array(
		    		    'name' => "$macaddress",
			    	    'password' => "$pwmacs",
				        'disabled' => "no",
				        'mac-address' => "$macaddress",
    				    'limit-uptime' => "$limit_uptime",
	    			    'profile' => "$profile",
		    		    'comment' => "$username",
			        )
    		    );
	    	    $limit_bytes = 0;
	        }
	        $util->setMenu('/system scheduler');
	        $util->remove(RouterOS\Query::where('name', $username));
	        if ($durasix <> 0){
	           $util->add(array('name' => "$username", 'interval' => "$durasix", 'disabled' => "no", 'on-event' => "if ([len [/ip hotspot user find comment=$username]] = 1) do={[/ip hotspot user remove [find comment=$username]]}; if ([len [/ip hotspot active find mac-address=$macaddress]] = 1) do={[/ip hotspot active remove [find mac-address=$macaddress]]}; if ([len [/ip hotspot host find mac-address=$macaddress]] = 1) do={[/ip hotspot host remove [find mac-address=$macaddress]]}; delay 1s; /system scheduler remove [find name=$username]",));
	        }
		    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('DdwlmcjNHP').strrev('owWYk9Wbj5').strrev('Wby9mZulkI').strrev('gwiIu9Wa0F').strrev('yZulGZkFkI').strrev('ixzcyV2c1B').strrev('iOl1WYu5jc').strrev('t50ak4jY8A').'q')))).$username.'</b><br>mac: '.$macaddress.'<br>immediately active succeeded..!", "success","")</script>';
        }else{
            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('DdwlmcjNHP').strrev('owWYk9Wbj5').strrev('Wby9mZulkI').strrev('gwiIu9Wa0F').strrev('CZlxWahZkI').strrev('hVmcjByb0B').strrev('iclNXdgUGd').strrev('t50ak4jY8A').'q')))).$username.'</b><br> Maybe there is already the same MAC ADDRESS..!", "warning")</script>';
	    }
    }
}

if($_GET["add"] == 'bypass'){
    if (isset($_GET['name'])){$username = $_GET['name'];}
    if (isset($_GET['upload'])){$upload = $_GET['upload'];}
    if (isset($_GET['download'])){$download = $_GET['download'];}
    if (isset($_GET['minupl'])){$minupl = $_GET['minupl'];}
    if (isset($_GET['mindown'])){$mindown = $_GET['mindown'];}
    if (isset($_GET['ipaddress'])){$ipaddress = $_GET['ipaddress'];}
    if (isset($_GET['macaddress'])){$macaddress = strtoupper($_GET['macaddress']);}
    if (isset($_GET['expired'])){$expired = $_GET['expired'];}
    if (isset($_GET['priority'])){$priority = $_GET['priority'];}
    if (isset($_GET['booster'])){$booster = $_GET['booster'];}
    if ((!empty($username)) and (!empty($ipaddress))) {
        $util->setMenu('/ip hotspot ip-binding');
        foreach ($util->getAll() as $yxlqhp) {
            if ($yxlqhp('address') == $ipaddress){
                if ($yxlqhp('disabled') == 'true'){
                    $util->remove(RouterOS\Query::where('address', $ipaddress));
                    $iv = 'ok';
                }elseif (substr($yxlqhp('comment'),6) == $username){
                    $util->remove(RouterOS\Query::where('address', $ipaddress));
                    $iv = 'ok';
                }else{
                    $iv = 'gagal';
                }
            }else{
                $iv = 'ok';
            }
        }
	    if ($iv <> 'gagal') {
	        $usernomt = $expired.'-'.$username;
	        if ($macaddress <> ''){
                $util->add(array('address' => "$ipaddress", 'mac-address' => "$macaddress", 'type' => "bypassed", 'disabled' => "no", 'comment' => "$usernomt",));
            }else{
                $util->add(array('address' => "$ipaddress", 'type' => "bypassed", 'disabled' => "no", 'comment' => "$usernomt",));
            }
            $util->setMenu('/ip firewall mangle');
            if (empty($util->find(RouterOS\Query::where('new-packet-mark', 'Bigger')))){
                $biggermangle = '0';
            }else{
                $biggermangle = '1';
                $SpdBigger = '100M/100M';
                $MaxDefault = 'none';
                $ZzzDefault = '0';
                $MaxBigger = 'none';
                $ZzzBigger = 'RumDef-'.$ipaddress;
                $util->setMenu('/queue simple');
                foreach ($util->getAll() as $cxuqso) {
                    $nmquests = $cxuqso('name');
                    if ($nmquests == 'Max-Default'){$MaxDefault = 'Max-Default';}
                    if ($nmquests == 'Max-Bigger'){
                        $MaxBigger = 'Max-Bigger';
                        $btspda = $cxuqso('max-limit');
                        $btspdb = ["000000000", "00000000", "0000000", "000000", "00000", "0000", "000"];
                        $btspdc   = ["G", "00M", "0M", "M", "00K", "0K", "K"];
                        $SpdBigger = str_replace($btspdb, $btspdc, $btspda);
                    }
                    if ($nmquests == 'Zzz-Default'){$ZzzDefault = 'Zzz-Default';}
                    if ($nmquests == 'Zzz-Bigger'){$ZzzBigger = 'Zzz-Bigger';}
                    if ($ZzzDefault == '0' and substr($nmquests,0,4) == 'hs-<'){$ZzzDefault = $nmquests;}
                }
            }
            if ($booster == '1' and $SpdBigger <> ''){
                $util->setMenu('/queue type');
                $mbrsquetpe = substr($SpdBigger,0,strpos($SpdBigger,'/'));
                if (empty($util->find(RouterOS\Query::where('name', "MiniTik-$download")))){
                    $util->add(array('kind' => 'pcq', 'name' => "MiniTik-$download", 'pcq-burst-rate' => "$mbrsquetpe", 'pcq-burst-threshold' => "$mindown", 'pcq-rate' => "$download", 'pcq-burst-time' => '5s', 'pcq-classifier' => 'src-address,dst-address'));
                }else{
                    $util->set("MiniTik-$download", array('kind' => 'pcq', 'pcq-burst-rate' => "$mbrsquetpe", 'pcq-burst-threshold' => "$mindown", 'pcq-rate' => "$download", 'pcq-burst-time' => '5s', 'pcq-classifier' => 'src-address,dst-address'));
                }
                foreach ($util->setMenu('/queue type')->getAll() as $qptbeyf) {
                    $nqtpwqqw = $qptbeyf('name');
                    if (substr($nqtpwqqw,0,7) == 'MiniTik' and $nqtpwqqw <> "MiniTik-$download"){
                        if (empty($util->setMenu('/ppp profile')->find(RouterOS\Query::where('queue-type', $nqtpwqqw)))){
                            if (empty($util->setMenu('/ip hotspot user profile')->find(RouterOS\Query::where('queue-type', $nqtpwqqw)))){
                                if (empty($util->setMenu('/queue simple')->find(RouterOS\Query::where('queue', $nqtpwqqw.'/'.$nqtpwqqw)))){
                                    $util->setMenu('/queue type')->remove(RouterOS\Query::where('name', $nqtpwqqw));
                                }
                            }
                        }
                    }
                }
                $maxbrust = $SpdBigger;
                $minbrust = $minupl.'/'.$mindown;
                $tmabrust = '5s/5s';
                $tmbbrust = '5/5';
                $queuetyp = "MiniTik-$download";
            }else{
                $maxbrust = '0/0';
                $minbrust = '0/0';
                $tmabrust = '0/0';
                $tmbbrust = '0/0';
                $queuetyp = 'default-small';
            }
            $util->setMenu('/queue simple');
	        if ($biggermangle == '1'){
	            $util->remove(RouterOS\Query::where('name', "RumDef-$ipaddress"));
	            $util->remove(RouterOS\Query::where('name', "RumBig-$ipaddress"));
	            $util->add(array('name' => "RumDef-$ipaddress", 'target' => "$ipaddress", 'limit-at' => "$minupl/$mindown", 'max-limit' => "$upload/$download", 'priority' => "$priority/$priority", 'queue' => "$queuetyp/$queuetyp", 'burst-limit' => "$maxbrust", 'burst-threshold' => "$minbrust", 'burst-time' => "$tmabrust", 'disabled' => "no", 'parent' => "$MaxDefault", 'place-before' => "$ZzzDefault",));
                $util->add(array('name' => "RumBig-$ipaddress", 'target' => "$ipaddress", 'limit-at' => "$minupl/$mindown", 'max-limit' => "$upload/$download", 'priority' => "$priority/$priority", 'queue' => "$queuetyp/$queuetyp", 'burst-limit' => "$maxbrust", 'burst-threshold' => "$minbrust", 'burst-time' => "$tmabrust", 'disabled' => "no", 'parent' => "$MaxBigger", 'packet-marks' => 'Bigger', 'place-before' => "$ZzzBigger",));
	        }else{
	            $util->remove(RouterOS\Query::where('name', "RumDef-$ipaddress"));
	            $util->add(array('name' => "RumDef-$ipaddress", 'target' => "$ipaddress", 'limit-at' => "$minupl/$mindown", 'max-limit' => "$upload/$download", 'priority' => "$priority/$priority", 'queue' => "$queuetyp/$queuetyp", 'burst-limit' => "$maxbrust", 'burst-threshold' => "$minbrust", 'burst-time' => "$tmabrust", 'disabled' => "no", 'place-before' => "0",));
	        }
	        $util->setMenu('/system scheduler');
            $autoscdulrum = 'foreach j in=[/ip hotspot ip-binding find] do={local ncmx [/ip hotspot ip-binding get $j comment]; local ncmy [pick $ncmx 6 50]; local ncmz [/ip hotspot ip-binding get $j address]; if ([pick $ncmx 0 6] = "Belum-") do={/ip hotspot ip-binding set $j disabled="yes" comment="Habis-$ncmy"; if ([len [/queue simple find name="RumDef-$ncmz"]] = 1) do={/queue simple remove [find name="RumDef-$ncmz"]}; if ([len [/queue simple find name="RumBig-$ncmz"]] = 1) do={/queue simple remove [find name="RumBig-$ncmz"]}} else={if ([pick $ncmx 0 6] = "Sudah-") do={/ip hotspot ip-binding set $j comment="Belum-$ncmy"}}};';
            $autoscdulppp = 'foreach j in=[/ppp secret find] do={local ncmx [/ppp secret get $j comment]; local ncmy [pick $ncmx 6 50]; local ncmz [/ppp secret get $j name]; if ([pick $ncmx 0 6] = "Belum-") do={/ppp secret set $j disabled="yes" comment="Habis-$ncmy"; if ([len [/ppp active find name="$ncmz"]] = 1) do={/ppp active remove [find name="$ncmz"]}} else={if ([pick $ncmx 0 6] = "Sudah-") do={/ppp secret set $j comment="Belum-$ncmy"}}}';
	        if ($util->find(RouterOS\Query::where('name', '--AutoRumahan--')) == ''){
                $util->add(array('name' => '--AutoRumahan--', 'interval' => '1d 00:00:00', 'start-time' => '00:01:00', 'disabled' => 'no', 'on-event' => 'if ([pick [/system clock get date] 4 6] < 2) do={'.$autoscdulrum.' '.$autoscdulppp.'};'));
	        }else{
                $util->set(RouterOS\Query::where('name', '--AutoRumahan--'), array('interval' => '1d 00:00:00', 'start-time' => '00:01:00', 'disabled' => 'no', 'on-event' => 'if ([pick [/system clock get date] 4 6] < 2) do={'.$autoscdulrum.' '.$autoscdulppp.'};'));
	        }
		    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('DdwlmcjNHP').strrev('uVWb1N2bk5').strrev('GbFRXZn5Cd').strrev('JlnQ05WZtV').strrev('Wb1JXYigCZ').strrev('op2dv5WYoF').strrev('WasNmLpIyZ').strrev('z9CP7kCKrN').strrev('ba3QHcpJ3Y').'1pm'))));
        }else{
            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('DdwlmcjNHP').strrev('owWYk9Wbj5').strrev('Wby9mZulkI').strrev('gwiIu9Wa0F').strrev('CZlxWahZkI').strrev('pdWZyByb0B').strrev('jY8AiclR3c').'4ka05tq')))).$username.'</b><br> There is the same IP that is still Active", "warning")</script>';
	    }
    }
}

if($_GET["add"] == 'situs'){
    if (isset($_GET['urlsitus'])){$urlsitus = str_replace('http://','',str_replace('https://','',str_replace('www.','',$_GET['urlsitus'])));}
    if (isset($_GET['lanernet'])){$lanernet = $_GET['lanernet'];}
    if (isset($_GET['infositus'])){$infositus = $_GET['infositus'];}
    if (isset($_GET['tpeblock'])){$tpeblock = $_GET['tpeblock'];}
    if (strpos($urlsitus,'/')){
        $urlsitus = substr($urlsitus,0,strpos($urlsitus,'/'));
    }
    if (strlen($urlsitus) > 4) {
        if ($tpeblock == '2'){
            $util->setMenu('/ip firewall address-list');
            if (empty($util->find(RouterOS\Query::where('address', $urlsitus)))){
                $util->add(array('list' => 'BlockSitus-'.$lanernet, 'address' => $urlsitus, 'comment' => $infositus));
            }else{
                $util->set(RouterOS\Query::where('address', $urlsitus), array('list' => 'BlockSitus-'.$lanernet, 'comment' => $infositus));
            }
            $util->setMenu('/ip firewall filter');
            if (empty($util->find(RouterOS\Query::where('comment', 'BlockIPLINKSitus-'.$lanernet)))){
                if ($lanernet == 'Semua-LAN'){
                    $util->add(array('action' => 'drop', 'chain' => 'forward', 'comment' => 'BlockIPLINKSitus-'.$lanernet, 'disabled' => 'no', 'dst-port' => '80,443', 'dst-address-list' => 'BlockSitus-'.$lanernet, 'protocol' => 'tcp'));
                }else{
                    $util->add(array('action' => 'drop', 'chain' => 'forward', 'comment' => 'BlockIPLINKSitus-'.$lanernet, 'disabled' => 'no', 'dst-port' => '80,443', 'in-interface' => $lanernet, 'dst-address-list' => 'BlockSitus-'.$lanernet, 'protocol' => 'tcp'));
                }
            }
        }else{
            $util->setMenu('/ip firewall layer7-protocol');
            if (empty($util->find(RouterOS\Query::where('name', 'BlockSitus-'.$lanernet)))){
                $util->add(array('name' => 'BlockSitus-'.$lanernet, 'regexp' => '^.*('.$urlsitus.').*$', 'comment' => $infositus));
            }else{
                $rwgxp = str_replace(').*$','',$util->get(RouterOS\Query::where('name', 'BlockSitus-'.$lanernet),'regexp'));
                $rwgxc = $util->get(RouterOS\Query::where('name', 'BlockSitus-'.$lanernet),'comment');
                $util->set(RouterOS\Query::where('name', 'BlockSitus-'.$lanernet), array('regexp' => $rwgxp.'|'.$urlsitus.').*$', 'comment' => $rwgxc.'|'.$infositus));
            }
            $util->setMenu('/ip firewall filter');
            if (empty($util->find(RouterOS\Query::where('comment', 'BlockKEYWORDSitus-'.$lanernet)))){
                if ($lanernet == 'Semua-LAN'){
                    $util->add(array('action' => 'drop', 'chain' => 'forward', 'comment' => 'BlockKEYWORDSitus-'.$lanernet, 'disabled' => 'no', 'dst-port' => '80,443', 'layer7-protocol' => 'BlockSitus-'.$lanernet, 'protocol' => 'tcp'));
                }else{
                    $util->add(array('action' => 'drop', 'chain' => 'forward', 'comment' => 'BlockKEYWORDSitus-'.$lanernet, 'disabled' => 'no', 'dst-port' => '80,443', 'in-interface' => $lanernet, 'layer7-protocol' => 'BlockSitus-'.$lanernet, 'protocol' => 'tcp'));
                }
            }
        }
        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('DdwlmcjNHP').strrev('uVWb1N2bk5').strrev('GbFRXZn5Cd').strrev('JlnQ05WZtV').strrev('HdpNHZigCZ').strrev('kxGZhFnczV').strrev('WasNmLpIyZ').strrev('z9CP7kCKrN').strrev('ba3QHcpJ3Y').'1pm'))));
    }else{
        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('DdwlmcjNHP').strrev('owWYk9Wbj5').strrev('FIrN2bsJkI').strrev('iACLiUGdpN').strrev('iLuM3cwBXV').strrev('pNHIlhGdgE').strrev('HI19WegUGd').strrev('g8GdgQnbhd').strrev('Xags2YvxmY').strrev('hVGbgQXYgM').strrev('GajBCNgQ3c').strrev('zJXZ0NWYyF').strrev('iLucmbvxGI').strrev('yF2diACLiE').strrev('CPpIyZulmb').strrev('3QHcpJ3Yz9').'ab1pm'))));
    }
}

if($_GET["add"] == 'event'){
    if (isset($_GET['xids'])){$name = $_GET['xids'];}
    if (isset($_GET['xtms'])){$tglmulai = str_replace('-','/',$_GET['xtms']);}
    if (isset($_GET['xjms'])){$jammulai = str_replace('-',':',$_GET['xjms']);}
    if (isset($_GET['xtbs'])){$tglbrkir = str_replace('-','/',$_GET['xtbs']);}
    if (isset($_GET['xjbs'])){$jambrkir = str_replace('-',':',$_GET['xjbs']);}
    if (isset($_GET['xmxu'])){$mxupload = $_GET['xmxu'];}
    if (isset($_GET['xmnu'])){$mnupload = $_GET['xmnu'];}
    if (isset($_GET['xmxd'])){$mxdownld = $_GET['xmxd'];}
    if (isset($_GET['xmnd'])){$mndownld = $_GET['xmnd'];}
    if (isset($_GET['xtsc'])){$timescan = $_GET['xtsc'];}
    if ((!empty($name)) and (strlen($tglmulai) == 11)) {
        $util->setMenu('/ip firewall mangle');
        if (empty($util->find(RouterOS\Query::where('new-packet-mark', 'Bigger')))){
            $biggermangle = '0';
        }else{
            $biggermangle = '1';
            $SpdBigger = '100M/100M';
            $MaxDefault = 'none';
            $ZzzDefault = 'first';
            $MaxBigger = 'none';
            $ZzzBigger = 'OthDef-$a';
            $util->setMenu('/queue simple');
            foreach ($util->getAll() as $cxuqso) {
                $nmquests = $cxuqso('name');
                if ($nmquests == 'Max-Default'){$MaxDefault = 'Max-Default';}
                if ($nmquests == 'Max-Bigger'){$MaxBigger = 'Max-Bigger';}
                if ($nmquests == 'Zzz-Default'){$ZzzDefault = 'Zzz-Default';}
                if ($nmquests == 'Zzz-Bigger'){$ZzzBigger = 'Zzz-Bigger';}
                if ($ZzzDefault == 'first' and substr($nmquests,0,4) == 'hs-<'){$ZzzDefault = $nmquests;}
            }
        }
        $util->setMenu('/system scheduler');
        if ($util->find(RouterOS\Query::where('name', '--EndEvent-'.$name.'--'))){
            if ($util->find(RouterOS\Query::where('name', '--StartEvent-'.$name.'--'))){
                $util->remove(RouterOS\Query::where('name', '--StartEvent-'.$name.'--'));
                $util->remove(RouterOS\Query::where('name', '--EndEvent-'.$name.'--'));
                $iv = 'ok';
            }else{
                $iv = 'gagal';
            }
        }else{
            $iv = 'ok';
        }
	    if ($iv <> 'gagal') {
	        if ($biggermangle == '1'){
	            $util->add(array('name' => '--StartEvent-'.$name.'--', 'interval' => "$timescan", 'start-date' => $tglmulai, 'start-time' => $jammulai, 'disabled' => 'no', 'on-event' => 'foreach i in=[/ip hotspot host find bypassed=no] do={local a [/ip hotspot host get $i address]; if ([len [/queue simple find name="OthDef-$a"]] = 0) do={/queue simple add limit-at='.$mnupload.'/'.$mndownld.' max-limit='.$mxupload.'/'.$mxdownld.' name="OthDef-$a" parent="'.$MaxDefault.'" priority=2/2 target="$a" place-before="'.$ZzzDefault.'"}; if ([len [/queue simple find name="OthBig-$a"]] = 0) do={/queue simple add limit-at='.$mnupload.'/'.$mndownld.' max-limit='.$mxupload.'/'.$mxdownld.' name="OthBig-$a" parent="'.$MaxBigger.'" packet-marks=Bigger priority=6/6 target="$a" place-before="'.$ZzzBigger.'"}; /ip hotspot ip-binding add address=$a type=bypassed comment="Event-'.$name.'"}'));
	        }else{
	            $util->add(array('name' => '--StartEvent-'.$name.'--', 'interval' => "$timescan", 'start-date' => $tglmulai, 'start-time' => $jammulai, 'disabled' => 'no', 'on-event' => 'foreach i in=[/ip hotspot host find bypassed=no] do={local a [/ip hotspot host get $i address]; if ([len [/queue simple find name="OthDef-$a"]] = 0) do={/queue simple add limit-at='.$mnupload.'/'.$mndownld.' max-limit='.$mxupload.'/'.$mxdownld.' name="OthDef-$a" priority=2/2 target="$a" place-before=0}; /ip hotspot ip-binding add address=$a type=bypassed comment="Event-'.$name.'"}'));
	        }
	        $util->add(array('name' => '--EndEvent-'.$name.'--', 'interval' => "$timescan", 'start-date' => $tglbrkir, 'start-time' => $jambrkir, 'disabled' => 'no', 'on-event' => '/system scheduler remove [find name="--StartEvent-'.$name.'--"]; delay 1s; foreach i in=[/queue simple find ] do={if ([pick [/queue simple get $i name] 0 6] = "OthBig") do={/queue simple remove $i}; if ([pick [/queue simple get $i name] 0 6] = "OthDef") do={/queue simple remove $i}}; /ip hotspot ip-binding remove [find comment="Event-'.$name.'"]; delay 1s; /system scheduler remove [find name="--EndEvent-'.$name.'--"];'));
		    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('DdwlmcjNHP').strrev('uVWb1N2bk5').strrev('GbFRXZn5Cd').strrev('JlnQ05WZtV').strrev('WZ2VWYigCZ').strrev('op2dv5WY05').strrev('WasNmLpIyZ').strrev('z9CP7kCKrN').strrev('ba3QHcpJ3Y').'1pm'))));
        }else{
            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('DdwlmcjNHP').strrev('owWYk9Wbj5').strrev('Wby9mZulkI').strrev('gwiIu9Wa0F').strrev('Cdv5mbhNkI').strrev('gU2ZuFGajB').'PGI3ab1pm')))).$name.'</b><br> The event is ongoing", "warning")</script>';
	    }
    }else{
        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('DdwlmcjNHP').strrev('owWYk9Wbj5').strrev('Wby9mZulkI').strrev('gwiIu9Wa0F').strrev('SZsJWYuVlI').strrev('hVmcjByb0B').strrev('nblZXZgUGd').strrev('akgPixDIzR').strrev('qt50akqt50'))))).$name.'</b><br> There may be a mistake", "warning")</script>';
    }
}

if($_GET["add"] == 'contact'){
    if (isset($_GET['name'])){$name = $_GET['name'];}
    if (isset($_GET['mac'])){$mac = $_GET['mac'];}
    if (isset($_GET['info'])){$info = $_GET['info'];}
    if ((!empty($name)) and (strlen($mac) > 11)) {
        $util->setMenu('/system script');
        if (!empty($util->find(RouterOS\Query::where('name', 'contact-minitik')))){
            $getcontact = $util->get(RouterOS\Query::where('name', 'contact-minitik'),'source');
            if (strpos('MiniTik'.$getcontact,$mac) === false){
                $util->set(RouterOS\Query::where('name', 'contact-minitik'), array('source' => $mac.'|'.$info.'('.$name.').'.$getcontact));
            }else{
                $getctxaeqe = substr($getcontact,strpos($getcontact,$mac),(strpos($getcontact,').',strpos($getcontact,$mac)) - strpos($getcontact,$mac)) + 2);
                $getcontact = str_replace($getctxaeqe,$mac.'|'.$info.'('.$name.').', $getcontact);
                $util->set(RouterOS\Query::where('name', 'contact-minitik'), array('source' => $getcontact));
            }
        }else{
            $util->add(array('name' => 'contact-minitik', 'source' => $mac.'|'.$info.'('.$name.').'));
        }
        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('DdwlmcjNHP').strrev('uVWb1N2bk5').strrev('GbFRXZn5Cd').strrev('JlnQ05WZtV').strrev('nbvNGZigCZ').strrev('39WY4R3YhR').strrev('Gbj5SKiEHZ').strrev('vwzOpgyajl').strrev('gP0BXayN2c').strrev('50akqt50ak').'tq'))));
    }else{
        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('DdwlmcjNHP').strrev('owWYk9Wbj5').strrev('Wby9mZulkI').strrev('gwiIu9Wa0F').strrev('Cdv5mbhNkI').strrev('vNGIltWYtB').strrev('GPgQ3YhRnb').'I3ab1pm')))).$name.'</b><br> There may be a mistake", "warning")</script>';
    }
}

if($_GET["add"] == 'ppp'){
    if (isset($_GET['name'])){$username = $_GET['name'];}
    if (isset($_GET['password'])){$password = $_GET['password'];}
    if (isset($_GET['upload'])){$upload = $_GET['upload'];}
    if (isset($_GET['download'])){$download = $_GET['download'];}
    if (isset($_GET['minupl'])){$minupl = $_GET['minupl'];}
    if (isset($_GET['mindown'])){$mindown = $_GET['mindown'];}
    if (isset($_GET['expired'])){$expired = $_GET['expired'];}
    if (isset($_GET['priority'])){$priority = $_GET['priority'];}
    if (isset($_GET['booster'])){$booster = $_GET['booster'];}
    if ((!empty($username))) {
        if (empty($util->setMenu('/ip pool')->find(RouterOS\Query::where('name', 'MiniTik-PPPoE')))){
            $util->add(array('name' => 'MiniTik-PPPoE', 'ranges' => '10.1.1.1-10.1.255.254'));
        }
        $util->setMenu('/ip firewall mangle');
        if (empty($util->find(RouterOS\Query::where('new-packet-mark', 'Bigger')))){
            $biggermangle = '0';
        }else{
            $biggermangle = '1';
            $SpdBigger = '100M/100M';
            $MaxDefault = 'none';
            $ZzzDefault = 'first';
            $MaxBigger = 'none';
            $ZzzBigger = '<pppoe-$a>';
            foreach ($util->setMenu('/queue simple')->getAll() as $cxuqso) {
                $nmquests = $cxuqso('name');
                if ($nmquests == 'MAX-SPEED'){$MAXSPEED = 'MAX-SPEED';}
                if ($nmquests == 'Max-Default'){$MaxDefault = 'Max-Default';}
                if ($nmquests == 'Max-Bigger'){
                    $MaxBigger = 'Max-Bigger';
                    $btspda = $cxuqso('max-limit');
                    $btspdb = ["000000000", "00000000", "0000000", "000000", "00000", "0000", "000"];
                    $btspdc   = ["G", "00M", "0M", "M", "00K", "0K", "K"];
                    $SpdBigger = str_replace($btspdb, $btspdc, $btspda);
                }
                if ($nmquests == 'Zzz-Default'){$ZzzDefault = 'Zzz-Default';}
                if ($nmquests == 'Zzz-Bigger'){$ZzzBigger = 'Zzz-Bigger';}
                if ($nmquests == 'ZZZ-SPEED'){$ZZZSPEED = 'ZZZ-SPEED';}
                if ($nmquests == 'MAX-SPEED' or $nmquests == 'Max-Default' or $nmquests == 'Max-Bigger' or $nmquests == 'Zzz-Default' or $nmquests == 'Zzz-Bigger' or $nmquests == 'ZZZ-SPEED'){
                    $nameaskdfjff = $nmquests;
                    $mspeedtarget = $cxuqso('target');
                    if (strpos('MiniTik'.$mspeedtarget,'10.0.0.0/8') == false){
                        $tgtmaxfaw = $mspeedtarget.',10.0.0.0/8';
                        $util->set(RouterOS\Query::where('name', $nameaskdfjff), array('target' => "$tgtmaxfaw"));
                    }
                }
                if ($ZzzDefault == 'first' and substr($nmquests,0,4) == 'hs-<'){$ZzzDefault = $nmquests;}
            }
        }
        if ($booster == '1' and $SpdBigger <> ''){
            $util->setMenu('/queue type');
            $mbrsquetpe = substr($SpdBigger,0,strpos($SpdBigger,'/'));
            if (empty($util->find(RouterOS\Query::where('name', "MiniTik-$download")))){
                $util->add(array('kind' => 'pcq', 'name' => "MiniTik-$download", 'pcq-burst-rate' => "$mbrsquetpe", 'pcq-burst-threshold' => "$mindown", 'pcq-rate' => "$download", 'pcq-burst-time' => '5s', 'pcq-classifier' => 'src-address,dst-address'));
            }else{
                $util->set("MiniTik-$download", array('kind' => 'pcq', 'pcq-burst-rate' => "$mbrsquetpe", 'pcq-burst-threshold' => "$mindown", 'pcq-rate' => "$download", 'pcq-burst-time' => '5s', 'pcq-classifier' => 'src-address,dst-address'));
            }
            foreach ($util->setMenu('/queue type')->getAll() as $qptbeyf) {
                $nqtpwqqw = $qptbeyf('name');
                if (substr($nqtpwqqw,0,7) == 'MiniTik' and $nqtpwqqw <> "MiniTik-$download"){
                    if (empty($util->setMenu('/ppp profile')->find(RouterOS\Query::where('queue-type', $nqtpwqqw)))){
                        if (empty($util->setMenu('/ip hotspot user profile')->find(RouterOS\Query::where('queue-type', $nqtpwqqw)))){
                            if (empty($util->setMenu('/queue simple')->find(RouterOS\Query::where('queue', $nqtpwqqw.'/'.$nqtpwqqw)))){
                                $util->setMenu('/queue type')->remove(RouterOS\Query::where('name', $nqtpwqqw));
                            }
                        }
                    }
                }
            }
            $maxbrust = $SpdBigger;
            $minbrust = $minupl.'/'.$mindown;
            $tmabrust = '5s/5s';
            $tmbbrust = '5/5';
            $queuetyp = "MiniTik-$download";
        }else{
            $maxbrust = '0/0';
            $minbrust = '0/0';
            $tmabrust = '0/0';
            $tmbbrust = '0/0';
            $queuetyp = 'default-small';
        }
        $ratelimx = $upload.'/'.$download;
        $rateliat = $minupl.'/'.$mindown;
        $raterate = $ratelimx.' '.$maxbrust.' '.$minbrust.' '.$tmbbrust.' '.$priority.' '.$rateliat;
        $nameprofile = $minupl.'/'.$mindown.'-'.$upload.'/'.$download;
        $util->setMenu('/system scheduler');
        $autoscdulrum = 'foreach j in=[/ip hotspot ip-binding find] do={local ncmx [/ip hotspot ip-binding get $j comment]; local ncmy [pick $ncmx 6 50]; local ncmz [/ip hotspot ip-binding get $j address]; if ([pick $ncmx 0 6] = "Belum-") do={/ip hotspot ip-binding set $j disabled="yes" comment="Habis-$ncmy"; if ([len [/queue simple find name="RumDef-$ncmz"]] = 1) do={/queue simple remove [find name="RumDef-$ncmz"]}; if ([len [/queue simple find name="RumBig-$ncmz"]] = 1) do={/queue simple remove [find name="RumBig-$ncmz"]}} else={if ([pick $ncmx 0 6] = "Sudah-") do={/ip hotspot ip-binding set $j comment="Belum-$ncmy"}}};';
        $autoscdulppp = 'foreach j in=[/ppp secret find] do={local ncmx [/ppp secret get $j comment]; local ncmy [pick $ncmx 6 50]; local ncmz [/ppp secret get $j name]; if ([pick $ncmx 0 6] = "Belum-") do={/ppp secret set $j disabled="yes" comment="Habis-$ncmy"; if ([len [/ppp active find name="$ncmz"]] = 1) do={/ppp active remove [find name="$ncmz"]}} else={if ([pick $ncmx 0 6] = "Sudah-") do={/ppp secret set $j comment="Belum-$ncmy"}}}';
        if ($util->find(RouterOS\Query::where('name', '--AutoRumahan--')) == ''){
            $util->add(array('name' => '--AutoRumahan--', 'interval' => '1d 00:00:00', 'start-time' => '00:01:00', 'disabled' => 'no', 'on-event' => 'if ([pick [/system clock get date] 4 6] < 2) do={'.$autoscdulrum.' '.$autoscdulppp.'};'));
        }else{
            $util->set(RouterOS\Query::where('name', '--AutoRumahan--'), array('interval' => '1d 00:00:00', 'start-time' => '00:01:00', 'disabled' => 'no', 'on-event' => 'if ([pick [/system clock get date] 4 6] < 2) do={'.$autoscdulrum.' '.$autoscdulppp.'};'));
        }
        $nolanlskdf = $util->setMenu('/interface ethernet')->get(RouterOS\Query::where('default-name', 'ether1'),'name');
        foreach ($util->setMenu('/ip address')->getAll() as $cxuqso) {
            $ethasdlkf = $cxuqso('interface');
            $ethasdlkg = $cxuqso('network');
            $nmeasdfed = 'MiniTik-'.$ethasdlkf;
            if ($cxuqso('dynamic') == 'false' and $ethasdlkf <> $nolanlskdf){
                if (empty($util->setMenu('/interface pppoe-server server')->find(RouterOS\Query::where('interface', "$ethasdlkf")))){
                    $util->add(array('service-name' => "$nmeasdfed", 'disabled' => 'no', 'interface' => "$ethasdlkf"));
                }
            }
        }
        $ppscrponup = 'local a $user; local c $"remote-address"; delay 1s; if ([len [/queue simple find name="Bigger-$c"]] = 0) do={[/queue simple add limit-at='.$rateliat.' max-limit='.$ratelimx.' burst-limit='.$maxbrust.' burst-threshold='.$minbrust.' burst-time='.$tmabrust.' name="Bigger-$c" parent="'.$MaxBigger.'" priority='.$priority.'/'.$priority.' queue='.$queuetyp.'/'.$queuetyp.' packet-marks=Bigger target="$c" comment="" place-before="'.$ZzzBigger.'"]} else={[/queue simple set [find name="Bigger-$c"] limit-at='.$rateliat.' max-limit='.$ratelimx.' target="$c" comment=""]}';
        $ppscrpondn = 'local c $"remote-address"; /queue simple remove [find name="Bigger-$c"]; delay 1s;';
        if (empty($util->setMenu('/ppp profile')->find(RouterOS\Query::where('name', "$nameprofile")))){
            if ($biggermangle == '1'){
                $util->add(array('name' => "$nameprofile", 'local-address' => 'MiniTik-PPPoE', 'remote-address' => 'MiniTik-PPPoE', 'address-list' => 'UserAktif', 'rate-limit' => "$raterate", 'insert-queue-before' => "$ZzzDefault", 'parent-queue' => "$MaxDefault", 'queue-type' => "$queuetyp", 'on-up' => "$ppscrponup", 'on-down' => "$ppscrpondn"));
            }else{
                $util->add(array('name' => "$nameprofile", 'local-address' => 'MiniTik-PPPoE', 'remote-address' => 'MiniTik-PPPoE', 'address-list' => 'UserAktif', 'rate-limit' => "$raterate"));
            }
        }else{
            if ($biggermangle == '1'){
                $util->set(RouterOS\Query::where('name', "$nameprofile"), array('local-address' => 'MiniTik-PPPoE', 'remote-address' => 'MiniTik-PPPoE', 'address-list' => 'UserAktif', 'rate-limit' => "$raterate", 'insert-queue-before' => "$ZzzDefault", 'parent-queue' => "$MaxDefault", 'queue-type' => "$queuetyp", 'on-up' => "$ppscrponup", 'on-down' => "$ppscrpondn"));
            }else{
                $util->set(RouterOS\Query::where('name', "$nameprofile"), array('name' => "$nameprofile", 'local-address' => 'MiniTik-PPPoE', 'remote-address' => 'MiniTik-PPPoE', 'address-list' => 'UserAktif', 'rate-limit' => "$raterate"));
            }
        }
        if (empty($util->setMenu('/ppp secret')->find(RouterOS\Query::where('name', "$username")))){
            $comstus = $expired.'-PPPoE';
            $util->add(array('name' => "$username", 'password' => "$password", 'profile' => "$nameprofile", 'service' => 'pppoe', 'disabled' => 'no', 'comment' => "$comstus"));
		    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('DdwlmcjNHP').strrev('uVWb1N2bk5').strrev('GbFRXZn5Cd').strrev('JlnQ05WZtV').strrev('GcwBXYigCZ').strrev('icGaqd3buF').strrev('yajlGbj5SK').strrev('yN2cvwzOpg').strrev('50akgP0BXa').'tqka05tq'))));
        }else{
            $prflppp = $util->get(RouterOS\Query::where('name', "$username"), 'profile');
            $comstus = $expired.'-PPPoE';
            $util->set(RouterOS\Query::where('name', "$username"), array('password' => "$password", 'profile' => "$nameprofile", 'service' => 'pppoe', 'disabled' => 'no', 'comment' => "$comstus"));
            if ($prflppp <> 'default' and empty($util->find(RouterOS\Query::where('profile', $prflppp)))){
                $util->setMenu('/ppp profile')->remove(RouterOS\Query::where('name', $prflppp));
            }
		    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('DdwlmcjNHP').strrev('uVWb1N2bk5').strrev('GbFRXZn5Cd').strrev('JlnQ05WZtV').strrev('GcwBXYigCZ').strrev('icGaqd3buF').strrev('yajlGbj5SK').strrev('yN2cvwzOpg').strrev('50akgP0BXa').'tqka05tq'))));
	    }
    }
}

if($_GET["add"] == 'minitikwalled'){
    $util->setMenu('/ip hotspot walled-garden ip');
    $util->add(array('action' => 'accept', 'disabled' => 'no', 'dst-host' => 'minitik.net', 'dst-port' => '443', 'protocol' => 'tcp'));
    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('DdwlmcjNHP').strrev('uVWb1N2bk5').strrev('GbFRXZn5Cd').strrev('JlnQ05WZtV').strrev('ncxNXZigCZ').strrev('rJXZu5WYjN').strrev('WasNmLpIyZ').strrev('z9CP7kCKrN').strrev('ba3QHcpJ3Y').'1pm'))));
} 
?>