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
if ($_POST['bhsa'] <> ''){$_SESSION['bhsa'] = $_POST['bhsa']; $bahasa = $_POST['bhsa'];}
if ($bahasa <> ''){
    include('tools/bahasa/'.$bahasa.'.php');
}elseif ($_SESSION['bhsa'] <> ''){
    $bahasa = $_SESSION['bhsa'];
    include('tools/bahasa/'.$bahasa.'.php');
}else{
    include('tools/bahasa/default.php');
}
if($_GET["id"] == 'pemindai'){
    $listipc = 'MiniTik';
    $trojans = file_get_contents("tools/scanner/trojans.txt");
    $backdoor = file_get_contents("tools/scanner/backdoor.txt");
    $vpn = file_get_contents("tools/scanner/vpn.txt");
    $proxy = file_get_contents("tools/scanner/proxy.txt");
    $risk = file_get_contents("tools/scanner/risk.txt");
	echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GbjBidpRGP').strrev('s92Yi0zczF').strrev('2YggTLtNXL').strrev('ggTLk1WLs9').strrev('WYuJWb1hGd').strrev('slHdzBiIsl').strrev('GZy9mYi0TZ').strrev('l52buBiOyV').strrev('Cmp1ba3IyO').strrev('NGI2lGZ8kg').strrev('YwJSPzNXYs').strrev('5WYwBCbl5W').strrev('Ytlmcw1Cbl').strrev('xTCK4jI5JX').strrev('chx2YgYXak').strrev('VmbhBnI9M3').strrev('bpRWYlhWLs').strrev('5WZjxjPicm').strrev('mp1ba3IXZ0').strrev('Smp1ba3IGP').strrev('BCdy9GUgAV').strrev('PyVmbuF2YT').strrev('V2YvwjPi9C').strrev('ZvwjPyVGdu').strrev('RHPJogP2lG').strrev('blNGIlxmYh').strrev('5WakRWYwxG').strrev('ZjBiIwISPn').strrev('l2YhB3csxW').strrev('YgICMi0zZu').strrev('ISPyVGZy9m').strrev('czFGbjBiIw').strrev('UGbiFGdi0z').strrev('YtUGbiFGdg').strrev('QWZyVGZy9m').strrev('Y0JSPklGIi').strrev('ISMw0SZsJW').strrev('JkgCmp1ba3').strrev('gPkFWZoRHP').strrev('3IHd8kQCJo').strrev('CJkgCmp1ba').strrev('1ba3gGd8kQ').strrev('oR3L88mTmp').strrev('HPJkQCJogP').strrev('zNXYsNGIoR').strrev('WZkRWaoJSP').strrev('wlkPiMHet4').strrev('akqt50akAI').'05tq')))).$bhsa99.'</th>
				<th>Ip '.$bhsa100.'</th>
				<th>Port</th>
				<th class="hidden-xs">'.$bhsa38.' ISP</th>
				<th class="hidden-xs hidden-sm">'.$bhsa101.'</th>
				<th>Status</th>
			</tr>
		</thead>
		<tbody>';
	$norxa = '0';
    foreach ($util->setMenu('/ip firewall connection')->getAll() as $minitikitem) {
        $cekcek = strpos($minitikitem('dst-address'),':');
        $cekcok = strpos($minitikitem('src-address'),':');
        if ($cekcek == true){
            $ipclient = substr($minitikitem('src-address'),0,$cekcok);
            $iptujuan = substr($minitikitem('dst-address'),0,$cekcek);
            $prtujuan = substr($minitikitem('dst-address'),$cekcek + 1);
            $timeout = $minitikitem('timeout');
            if ($prtujuan <> '443' and $prtujuan <> '80' and $prtujuan <> '53' and $iptujuan <> '255.255.255.255' and strpos($listipc,$iptujuan.$prtujuan) == false){
                if ($norxa < 200){
                    $norxa++;
                    $listipc = $listipc.'.'.$iptujuan.$prtujuan;
                    if (strpos($trojans,'.'.$prtujuan.'.') == true){
                        $infql = 'Trojan';
                        $infqc = '<tr style="background:rgba(255,0,0, 0.2);">';
                    }elseif (strpos($backdoor,'.'.$prtujuan.'.') == true){
                        $infql = 'Backdoor';
                        $infqc = '<tr style="background:rgba(255,0,0, 0.2);">';
                    }elseif (strpos($vpn,'.'.$prtujuan.'.') == true){
                        $infql = 'Vpn';
                        $infqc = '<tr style="background:rgba(255,255,0, 0.2);">';
                    }elseif (strpos($proxy,'.'.$prtujuan.'.') == true){
                        $infql = 'Proxy';
                        $infqc = '<tr style="background:rgba(255,255,0, 0.2);">';
                    }elseif (strpos($risk,'.'.$prtujuan.'.') == true){
                        $infql = 'Risk';
                        $infqc = '<tr style="background:rgba(255,255,0, 0.2);">';
                    }else{
                        $infql = $bhsa102;
                        $infqc = '<tr>';
                    }
                    $i++;
	    		    echo $infqc;
		    	    echo base64_decode('PHRkPg==').$i.'</td>';
		    	    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('gPiMHet4WZ').strrev('50akqt50ak').'tq')))).$ipclient.'</td>';
                    echo base64_decode('PHRkPg==').$iptujuan.'</td>';
                    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIhxjPkRHP').strrev('0hmI9YWZyh').strrev('3dv8iOzBHd').strrev('kVWZwNnL3d').strrev('mbuUGZpV3Z').strrev('uQncvB3L0V').strrev('ncvB3PwhGc').'Q9')))).$prtujuan.'" target="_blank"><b>'.$prtujuan.'</b></a></td>';
                    $json=file_get_contents('https://extreme-ip-lookup.com/json/'.$iptujuan);
                    extract(json_decode($json,true));
                    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('gPiMHet4WZ').strrev('50akqt50ak').'tq')))).substr($isp,0,20).'</td>';
                    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').'Ij4ka05tq')))).substr($country,0,20).'</td>';
			        echo base64_decode('PHRkPg==').$infql.'</td>';
			        echo base64_decode('PC90cj4=');
                }
            }
        }
    }
    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('Tek9mY09CP').strrev('lxmYhR3L84').strrev('CPgACIgogP').strrev('p1ba3YXak9').strrev('ZlJHagEGPm').strrev('MHc0RHai0j').strrev('d0V3b59yL6').strrev('9SbvNmLlJW').strrev('dl5WYyhWY6').strrev('92YfJWdz9D').strrev('a0FWbylmZu').strrev('plPiETPu9W').strrev('P0VmThJHah').strrev('xDItAiPh9C').strrev('I9YWZyhGIh').strrev('8iOzBHd0hm').strrev('bp1mL3d3dv').strrev('VmbusWa0lm').strrev('Vp5WaN5jI0').strrev('BiPh9CPrlG').'A')))).date('Y').'
    </div>
    				<div class="hidden-xs">
					<div class="col-sm-4 col-md-4 thumbnail" style="border: none;">
						<div class="panel panel-primary">
							<div class="panel-heading"><center><b>'.$bhsa13.'</b></center></div>
									<table cellpadding="0" cellspacing="0" border="0" class="table table-bordered" style="border: none;" id="example">
										</tbody>
                                            <tr style="background:rgba(0,0,0, 0.6); color:#FFF;">
                                                <td colspan="3"><b>Virus Update</b></td>
											</tr>
                                            <tr>
                                                <td colspan="3" style="border: none;">
                                                    <b>Trojan</b> (update: '.substr($trojans,0,10).')<br/>
												    <b>Backdoor</b> (update: '.substr($backdoor,0,10).')<br/>
												    <b>Vpn</b> (update: '.substr($vpn,0,10).')<br/>
												    <b>Proxy</b> (update: '.substr($proxy,0,10).')<br/>
												    <b>Risk</b> (update: '.substr($risk,0,10).')<br/>
												</td>
											</tr>
                                            <tr>
                                                <td colspan="3" style="border: none;"></td>
											</tr>
                                            <tr style="background:rgba(0,0,0, 0.6); color:#FFF;">
                                                <td colspan="3"><b>'.$bhsa36.'</b></td>
											</tr>
                                            <tr>
                                                <td colspan="3" style="border: none;">'.$bhsa103.'</td>
											</tr>
                                            <tr>
                                                <td colspan="3" style="border: none;"></td>
											</tr>
										</tbody>
									</table>
						</div>
					</div>
                    </div>
';
}
if($_GET["id"] == 'qrscanner'){
    foreach ($util->setMenu('/ip hotspot walled-garden ip')->getAll() as $item) {if($item('dst-host') == 'minitik.net'){$stsmtikt = "OK";}};
    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GZ8kQCJkQC').strrev('zNXYsNGI2l').strrev('2ctw2bjJSP').strrev('tw2bjBCOt0').strrev('Ha0BCNtQWb').strrev('iwWah5mYtV').strrev('SPlxWe0NHI').strrev('6IXZkJ3biJ').strrev('jI7Umbv5GI').strrev('JkQCJkQCK4').strrev('GI2lGZ8kQC').strrev('wJSPzNXYsN').strrev('WYwBCbl5WY').strrev('tlmcw1Cbl5').strrev('QCK4jI5JXY').strrev('JkQCJkQCJk').strrev('GbjBidpRGP').strrev('uFGci0zczF').strrev('GZhVGatwWZ').strrev('p1ba3IyZul').strrev('clRnblNGPm').strrev('NkcR5jY84j').strrev('bhN2UgUGZv').strrev('4jYvwjcl5m').strrev('clRnblN2L8').strrev('4jdpR2L84j').strrev('CJkQCJkQCK').strrev('BidpRGPJkQ').strrev('bv9Gdi0DZp').strrev('5WYjNncxNH').strrev('YsNGIiIXZu').strrev('5WYwJSPzNX').strrev('I5R2bi1Cbl').strrev('kQCJkQCK4j').strrev('IgACIJkQCJ').strrev('x2YgYXakxD').strrev('cvZmI9M3ch').strrev('pXay9Gat0m').strrev('a3ICbhRnbv').strrev('CIgAiCmp1b').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('idpRGPgACI').strrev('i0zczFGbjB').strrev('mcn1Sby9mZ').strrev('tJ3bmBCc19').strrev('XLwV3bydWL').strrev('JkQCK4jItN').strrev('QCJkQCJkQC').strrev('jBidpRGPJk').strrev('2Yi0zczFGb').strrev('yETLtNXLs9').strrev('QCJkQCK4jI').strrev('gACIJkQCJk').strrev('CIgACIgACI').strrev('lNGPgACIgA').strrev('Wa84jclRnb').strrev('oRHZpdHIn1').strrev('iIlADMxISP').strrev('tlmI9MmczB').strrev('ncx9ycldWY').strrev('uIXZu5WYjN').strrev('2L84jInBna').strrev('K4jclRnblN').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('Xak9CPgACI').strrev('AiCmp1ba3Y').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('9CPgACIgAC').strrev('mp1ba3YXak').strrev('CIgACIgAiC').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('GbjBidpRGP').strrev('y9mZi0zczF').strrev('Cc19mcn1Sb').strrev('ydWLtJ3bmB').strrev('jItNXLwV3b').strrev('gACIgACIK4').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').'AgICAg'))));if($stsmtikt <> ''){echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('QCJkQCJkgC').strrev('kxTCJkQCJk').strrev('3chx2YgYXa').strrev('z1CbvNmI9M').strrev('ba3IiMx0Sb').strrev('kQCJkgCmp1').strrev('CJkQCJkQCJ').strrev('wWZiFGb8kQ').strrev('I9M3chx2Yg').strrev('w2byRnbvNm').strrev('PiwWZiFGbt').strrev('NkcRBCTSVl').strrev('bhN2cgUGZv').strrev('FGbvwjcl5m').strrev('mp1ba3wWZi').strrev('QCJkQCJkgC').strrev('vwTCJkQCJk').strrev('QCJogP2lGZ').strrev('JkQCJkQCJk').strrev('GI2lGZ8kQC').strrev('jJSPzNXYsN').strrev('TMt02ctw2b').strrev('JkQCJogPiI').strrev('QCJkQCJkQC').strrev('ulGPgACIgk').strrev('Gc5RHI0VHc').strrev('iQHelRnI9U').strrev('SPlVHbhZHI').strrev('vozcwRHdoJ').strrev('Wa0lmbp12L').strrev('vR3L0Vmbus').strrev('2cyF3Lzx2b').strrev('p9icl5mbhN').strrev('Haw5CelRmb').strrev('o3c4e8i9uA').strrev('bjBiIwATM9').strrev('9mZi0zczFG').strrev('c052bj1Sby').strrev('kQCK4jIs9m').strrev('CJkQCJkQCJ').strrev('YXak9CPJkQ').'3ab1pm'))));
												}else{
												    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('CIgACIgAiC').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('0BXayN2c8A').strrev('nI9UGc5RHI').strrev('2FmavQHelR').strrev('CdwlmcjNXY').strrev('AiCmp1ba3I').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('5WdmhCJgAC').strrev('IpgibvlGdj').strrev('ACIgACIKsH').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('J2IigCJgAC').strrev('bp12czFGc5').strrev('ISYgsWa0lm').strrev('KrNWasNmLp').strrev('9Wa0Nmb1ZG').strrev('IgowegkCKu').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('VHIyFmdgAC').strrev('doQCI9ACby').strrev('RXYukycphG').strrev('ZlJHaigic0').strrev('ACIgowOpIi').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('c5J2IigCJg').strrev('kiIrRXau12').strrev('c1hCZh9Gbu').strrev('ACIgowOpwm').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IuJXd0Vmcg').strrev('owOlNHbhZG').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('BCIgACIgAC').strrev('IgACIKsTK9').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('BCIgACIgAC').strrev('IgACIKsTK9').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('N2cvwDIgAC').strrev('0akgP0BXay').'5tqka05tq'))));
												    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('DZpBidpRGP').strrev('zNXYwlnYi0').strrev('yapRXaulWb').strrev('NGPmp1ba3I').strrev('ak4jclRnbl').'05tq')))).$bhsa97.'<br><a href="ajax_add.php?add=minitikwalled" class="btn btn-success">'.$bhsa39.'</a></center></div><div id="bysmnitk"></div>';
												}
											echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('CIgACIgAiC').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('ba3YXak9CP').strrev('kQCJkgCmp1').strrev('L8kQCJkQCJ').strrev('ACIK4jdpR2').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('ak9CPgACIg').strrev('QCmp1ba3YX').strrev('JkQCJkQCJo').strrev('gP2lGZvwTC').strrev('JkQCJkQCJo').strrev('WZyhGIhxTC').strrev('zBHd0hmI9Y').strrev('Hd19Wev8iO').strrev('v02bj5SZiV').strrev('XZuFmcoFme').strrev('V3c4e8i9uQ').strrev('cpZmbvN2Xi').strrev('0jbvlGdh1m').strrev('YyhWYa5jIx').strrev('4TYvwDdl5U').strrev('coBSY8ASLg').strrev('RHdoJSPmVm').strrev('d3d3Lvozcw').strrev('lGdp5Wat5y').strrev('a3ICdl5mLr').strrev('VaulWTmp1b').strrev('g4TYvwzapR').strrev('akqt50akAQ').'05tq')))).date('Y').'
							</div>
                            <div class="hidden-xs">
					            <div class="col-sm-4 col-md-8 thumbnail" style="border: none;">
						            <div class="panel panel-primary">
							            <div class="panel-heading"><center><b>'.$bhsa13.'</b></center></div>
										        <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered" style="border: none;" id="example">
											        </tbody>
                                                        <tr style="background:rgba(0,0,0, 0.6); color:#FFF;">
                                                            <td colspan="3"><b>'.$bhsa36.'</b></td>
												        </tr>
                                                        <tr>
                                                            <td colspan="3" style="border: none;">'.$bhsa98.'</td>
											        	</tr>
                                                        <tr>
                                                            <td colspan="3" style="border: none;"></td>
												        </tr>
											        </tbody>
										        </table>
						            </div>
					            </div>
                            </div>
                            <div id="viewmikrotik"></div>
	';
}
 ?>