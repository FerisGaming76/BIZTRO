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
if($_GET["id"] == 'background'){
    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GZ8kQCJkQC').strrev('zNXYsNGI2l').strrev('2ctw2bjJSP').strrev('tw2bjBCOt0').strrev('Ha0BCNtQWb').strrev('iwWah5mYtV').strrev('SPlxWe0NHI').strrev('6IXZkJ3biJ').strrev('jI7Umbv5GI').strrev('JkQCJkQCK4').strrev('GI2lGZ8kQC').strrev('wJSPzNXYsN').strrev('WYwBCbl5WY').strrev('tlmcw1Cbl5').strrev('QCK4jI5JXY').strrev('JkQCJkQCJk').strrev('GbjBidpRGP').strrev('uFGci0zczF').strrev('GZhVGatwWZ').strrev('p1ba3IyZul').strrev('clRnblNGPm').strrev('xGcV5jY84j').'vYWQg')))).$bhsa25.'</b></center></div>
									<div class="panel-body">';
									if (file_exists('offline.txt')) {
									    echo $bhsa95;
									}else{
								echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('WYg0mcvZGP').strrev('1JSPu9Wa0N').strrev('GcuQWYvxGc').strrev('oRXZtBiIwh').strrev('3cvBnI9Q2b').strrev('5R3YuVGIiQ').strrev('Hb11mI9UGc').strrev('m9CdyFGcpR').strrev('GdhRWLtJ3b').strrev('JkQCJogPiE').strrev('GPJkQCJkQC').strrev('zFGbjBidpR').strrev('Sby9mZi0zc').strrev('u9mepJ3bo1').strrev('CIK4jIsFGd').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('GZ8ACIgACI').strrev('zNXYsNGI2l').strrev('WLtJ3bmJSP').strrev('vZGIwV3byd').strrev('XdvJ3Zt0mc').strrev('JogPi02ctA').strrev('QCJkQCJkQC').strrev('2lGZ8kQCJk').strrev('SPzNXYsNGI').strrev('t02ctw2bjJ').strrev('QCJogPiITM').strrev('gkQCJkQCJk').strrev('CIgACIgACI').strrev('8ACIgACIgA').strrev('jPyVGduV2Y').strrev('kl2dgcWbpx').strrev('CMwEjI9gGd').strrev('i0zYyNHIiU').strrev('0LzV2Zh1Wa').strrev('wVFavRnbvN').strrev('Gcq5CZh9Gb').strrev('uV2YvwjPic').strrev('CIgogPyVGd').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('K4jdpR2L8A').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('8ACIgACIgA').strrev('CIK4jdpR2L').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('GZ8ACIgACI').strrev('zNXYsNGI2l').strrev('WLtJ3bmJSP').strrev('vZGIwV3byd').strrev('XdvJ3Zt0mc').strrev('JogPi02ctA').strrev('QCJkQCJkQC').strrev('2lGZ8kQCJk').strrev('SPzNXYsNGI').strrev('t02ctw2bjJ').strrev('QCJogPiITM').strrev('JkQCJkQCJk').strrev('mYhxGPJkQC').strrev('zNXYsNGIsV').strrev('mc052bjJSP').strrev('sVmYhxWLs9').'Ij4ka05tq')))).$bhsa38.' '.$bhsa25.'</label>
												</div>
												<div class="col-sm-12">
												    <input type="text" placeholder="Nama background*" name="name" id="name" class="form-control" required >
												    <input type="text" value="background" name="tipe" id="tipe" hidden >
												</div>
                                            </div>
											<div class="form-group form-group-sm">
												<div class="col-sm-12">
													<label class="control-label">'.$bhsa25.'</label>
												</div>
												<div class="col-sm-12">
												    <input type="file" name="image" placeholder="Gambar JPG atau PNG saja*" class="form-control" required></input></td>
												</div>
                                            </div>
											<div class="form-group form-group-sm">
												<div class="col-sm-12">
													<div class="col-sm-12" id="ButtonBatalBackround" hidden>
														<center style="background:rgba(0,0,0, 0.3)">&nbsp;<img src="images/loading.gif"><b> Loading '.$bhsa25.'..!&nbsp;</b></center>
													</div>
													<div class="col-sm-3 col-sm-offset-3" id="ButtonUploadBackround">
														<div class="pull-right">
															<button type="submit" class="btn btn-success" id="ButtonKlickUploadBackround">
                                                                <span class="glyphicon glyphicon-floppy-saved"></span>&nbsp;Ok
                                                            </button>
														</div>
													</div>
													<div class="col-sm-3" id="ButtonKembaliBackround">
														<div class="pull-left">
															<button data-dismiss="modal" class="btn btn-warning" onclick="window.location.href='."'".'https://youtube.com'."'".'" disabled><span class="glyphicon glyphicon-facetime-video"></span>&nbsp;'.$bhsa29.'</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</form>';}
								echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('ba3YXak9CP').strrev('kQCJkgCmp1').strrev('ak9CPJkQCJ').strrev('gCmp1ba3YX').strrev('8kQCJkQCJk').strrev('CIK4jdpR2L').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('XakxDIgACI').strrev('9M3chx2YgY').strrev('iblRGZphmI').strrev('p1ba3Iyc41').strrev('IJkQCJkgCm').strrev('ACIgACIgAC').strrev('dpRGPgACIg').strrev('0zczFGbjBi').strrev('LtNXLs92Yi').strrev('1WLs92YgQT').strrev('b1hGdggTLk').strrev('BiIslWYuJW').strrev('Yi0TZslHdz').strrev('BiOyVGZy9m').strrev('a3IyOl52bu').strrev('QCJkgCmp1b').strrev('gACIgASCJk').strrev('DIgACIgACI').strrev('hx2YgYXakx').strrev('mbhBnI9M3c').strrev('sVmbhBHIsV').strrev('nch1WayBXL').strrev('JkQCJogPik').strrev('CIgACIJkQC').strrev('gACIgACIgA').strrev('GbjBidpRGP').strrev('uFGci0zczF').strrev('GZhVGatwWZ').strrev('p1ba3IyZul').strrev('clRnblNGPm').strrev('50ak4jY84j').'tq')))).$bhsa13.' '.$bhsa25.'</b></center></div>
	                                            <div style="overflow:auto; width:100%;">
                                                    <center><table style="border: none;"><tr style="border: none;">';
                                                    $fh = fopen('background/hits.txt', 'r');
                                                    $to = 0;
                                                    $tu = 0;
                                                    while (!feof($fh)) {
                                                        $line = fgets($fh);
                                                        $jrks = strpos($line,' ');
                                                        if ($tu < 48 and substr($line,0,$jrks) <> ''){
                                                            if ($to < 6){
                                                                echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('We0NHIkRHP').strrev('kJ3biJSPlx').strrev('mbv5GI6IXZ').strrev('pxWY2BiI7U').strrev('CcvRnI942Z').'I3ab1pm'))));
                                                                $to = $to + 1;
                                                            }else{
                                                                echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('Hd84jc09CP').strrev('9UGb5R3cgI').strrev('jclRmcvJmI').strrev('isTZu9mbgo').strrev('HdzBCZ0xjP').strrev('y9mYi0TZsl').strrev('2buBiOyVGZ').strrev('sFmdgIyOl5').strrev('3b0JSPudWa').strrev('qt50akgPiA').'ka05tq'))));
                                                                $to = 1;
                                                            }
                                                            echo base64_decode('PGNlbnRlcj48Yj4=').substr($line,0,$jrks - 4).'</b><br>'.substr($line,$jrks).' '.$bhsa20.'</center>
                                                     		    <table border="1" width="115" style="background-image: url(background/v'.substr($line,0,$jrks).') !important; background-size:100%;">
                                                            <tr style="border: none; padding: 1px;">
                                                                <td colspan="2" style="padding: 0px; border: none; background:rgba(255,255,255, 0.5) !important; border-bottom-right-radius: 100px;">
                                            					    <font style="font-size: 16px; line-height: 18px;"><b><center>Harga</center></b></font>
                                        	    					<font style="font-size: 10px; line-height: 10px;"><center>Kuota / Durasi</center></font>
                                                                </td>
                                                            </tr>
                                                            <tr style="border: none; padding: 0px;">
                                                                <tr style="border: none; padding: 0px;"><td colspan="2" style="border: none; padding: 0px;"><center><img src="images/vqrcode.png" width="90" height="auto"></center></td>
                                                            </tr>
                                                            <tr style="border:none; padding: 0px;">
                                                                <td style="border:none; padding:1px;" width="20">
                                                                    <div style="margin-left:4px; padding-top:1px; height:20px; width:15px; background:rgba(255,255,255) !important; border-radius: 4px;"><img src="images/username.png" height="10" width="15"/></div>
                                                                </td>
                                                                <td style="border: none; padding: 1px;">
                                                                    <input style="height:20px; width:95%; font-size: 12px; text-align:center; background:rgba(255,255,255) !important;" type="text" class="form-control" value="Username" readonly>
                                                                </td>
                                                            </tr>
                                                            </table></td>';
                                                            $tu = $tu + 1;
                                                        }
                                                    }
                                                    fclose($fh);
                                                    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('3L84jc09CP').strrev('vwjPlxmYhR').strrev('gPyVGduV2Y').strrev('gACIgACIgo').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('pR2L8ACIgA').strrev('ba3InY84jd').strrev('kQCJkgCmp1').strrev('IgkQCJkQCJ').strrev('xDIgACIgAC').strrev('ZjBSZsJWY0').strrev('lGZkFGcsxW').strrev('YgICMi0zZu').strrev('NWYwNHbsV2').strrev('IiAjI9cmbp').strrev('0jclRmcvJG').strrev('chx2YgICMi').strrev('xmYhRnI9M3').strrev('LlxmYhRHIl').strrev('VmclRmcvJW').strrev('ZslHdzBiIk').strrev('VGZy9mYi0T').strrev('Ol52buBiOy').strrev('VmI9QWagIy').strrev('PiUGbw1WY4').strrev('kQCJkQCJog').strrev('IgASCJkQCJ').strrev('9CPgACIgAC').strrev('IK4Tek9mY0').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('cgIHd8ACIg').strrev('JmI9UGb5R3').strrev('b19mcnt2Yh').strrev('gSYidmc6Qm').strrev('MgwCMsADLw').strrev('92YgsTK24C').strrev('RGZ0I6I3bs').strrev('ACIgogPisj').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('QGd8ACIgAC').strrev('bhB3cs92Yg').strrev('1ba3IyMi0j').strrev('p1ba3IGPmp').'m')))).$bhsa36.'</b></td>
												        </tr>
                                                        <tr>
                                                            <td colspan="3" style="border: none;">'.$bhsa96.'</td>
											        	</tr>
                                                        <tr>
                                                            <td colspan="3" style="border: none;"></td>
												        </tr>
											        </tbody>
										        </table>
						            </div>
					            </div>
                            </div>
        <script>
            $("#ButtonKlickUploadBackround").click(
                function() {
                    document.getElementById("ButtonUploadBackround").style.display = "none";
                    document.getElementById("ButtonKembaliBackround").style.display = "none";
                    document.getElementById("ButtonBatalBackround").style.display = "block";
                    setTimeout(
                        function() {
                            document.getElementById("ButtonUploadBackround").style.display = "block";
                            document.getElementById("ButtonKembaliBackround").style.display = "block";
                            document.getElementById("ButtonBatalBackround").style.display = "none";
                        },
                    20000);
                }
            );
        </script>
	';
}
if($_GET["id"] == 'gambar'){
    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GZ8kQCJkQC').strrev('zNXYsNGI2l').strrev('2ctw2bjJSP').strrev('tw2bjBCOt0').strrev('Ha0BCNtQWb').strrev('iwWah5mYtV').strrev('SPlxWe0NHI').strrev('6IXZkJ3biJ').strrev('jI7Umbv5GI').strrev('JkQCJkQCK4').strrev('GI2lGZ8kQC').strrev('wJSPzNXYsN').strrev('WYwBCbl5WY').strrev('tlmcw1Cbl5').strrev('QCK4jI5JXY').strrev('JkQCJkQCJk').strrev('GbjBidpRGP').strrev('uFGci0zczF').strrev('GZhVGatwWZ').strrev('p1ba3IyZul').strrev('clRnblNGPm').strrev('xGcV5jY84j').'vYWQg')))).$bhsa23.'</b></center></div>
									<div class="panel-body">';
									if (file_exists('offline.txt')) {
									    echo $bhsa95;
									}else{
								echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('WYg0mcvZGP').strrev('1JSPu9Wa0N').strrev('GcuQWYvxGc').strrev('oRXZtBiIwh').strrev('3cvBnI9Q2b').strrev('5R3YuVGIiQ').strrev('Hb11mI9UGc').strrev('m9CdyFGcpR').strrev('GdhRWLtJ3b').strrev('JkQCJogPiE').strrev('GPJkQCJkQC').strrev('zFGbjBidpR').strrev('Sby9mZi0zc').strrev('u9mepJ3bo1').strrev('CIK4jIsFGd').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('GZ8ACIgACI').strrev('zNXYsNGI2l').strrev('WLtJ3bmJSP').strrev('vZGIwV3byd').strrev('XdvJ3Zt0mc').strrev('JogPi02ctA').strrev('QCJkQCJkQC').strrev('2lGZ8kQCJk').strrev('SPzNXYsNGI').strrev('t02ctw2bjJ').strrev('QCJogPiITM').strrev('gkQCJkQCJk').strrev('CIgACIgACI').strrev('8ACIgACIgA').strrev('jPyVGduV2Y').strrev('kl2dgcWbpx').strrev('CMwEjI9gGd').strrev('i0zYyNHIiU').strrev('0LzV2Zh1Wa').strrev('wVFavRnbvN').strrev('Gcq5CZh9Gb').strrev('uV2YvwjPic').strrev('CIgogPyVGd').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('K4jdpR2L8A').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('8ACIgACIgA').strrev('CIK4jdpR2L').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('GZ8ACIgACI').strrev('zNXYsNGI2l').strrev('WLtJ3bmJSP').strrev('vZGIwV3byd').strrev('XdvJ3Zt0mc').strrev('JogPi02ctA').strrev('QCJkQCJkQC').strrev('2lGZ8kQCJk').strrev('SPzNXYsNGI').strrev('t02ctw2bjJ').strrev('QCJogPiITM').strrev('JkQCJkQCJk').strrev('mYhxGPJkQC').strrev('zNXYsNGIsV').strrev('mc052bjJSP').strrev('sVmYhxWLs9').'Ij4ka05tq')))).$bhsa38.' '.$bhsa23.'</label>
												</div>
												<div class="col-sm-12">
												    <input type="text" placeholder="Nama gambar*" name="name" id="name" class="form-control" required >
												    <input type="text" value="gambar" name="tipe" id="tipe" hidden >
												</div>
                                            </div>
											<div class="form-group form-group-sm">
												<div class="col-sm-12">
													<label class="control-label">'.$bhsa23.'</label>
												</div>
												<div class="col-sm-12">
												    <input type="file" name="image" placeholder="JPG or PNG only*" class="form-control" required></input></td>
												</div>
                                            </div>
											<div class="form-group form-group-sm">
												<div class="col-sm-12">
													<div class="col-sm-12" id="ButtonBatalGambar" hidden>
													    <center style="background:rgba(0,0,0, 0.3)">&nbsp;<img src="images/loading.gif"><b> Loading '.$bhsa23.'..!&nbsp;</b></center>
													</div>
													<div class="col-sm-3 col-sm-offset-3" id="ButtonUploadGambar">
														<div class="pull-right">
															<button type="submit" class="btn btn-success" id="ButtonKlickUploadGambar">
                                                                <span class="glyphicon glyphicon-floppy-saved"></span>&nbsp;Ok
                                                            </button>
														</div>
													</div>
													<div class="col-sm-3" id="ButtonKembaliGambar">
														<div class="pull-left">
															<button data-dismiss="modal" class="btn btn-warning" onclick="window.location.href='."'".'https://youtube.com'."'".'" disabled><span class="glyphicon glyphicon-facetime-video"></span>&nbsp;'.$bhsa29.'</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</form>';}
									echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('ba3YXak9CP').strrev('kQCJkgCmp1').strrev('ak9CPJkQCJ').strrev('gCmp1ba3YX').strrev('8kQCJkQCJk').strrev('CIK4jdpR2L').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('XakxDIgACI').strrev('9M3chx2YgY').strrev('iblRGZphmI').strrev('p1ba3Iyc41').strrev('IJkQCJkgCm').strrev('ACIgACIgAC').strrev('dpRGPgACIg').strrev('0zczFGbjBi').strrev('LtNXLs92Yi').strrev('1WLs92YgQT').strrev('b1hGdggTLk').strrev('BiIslWYuJW').strrev('Yi0TZslHdz').strrev('BiOyVGZy9m').strrev('a3IyOl52bu').strrev('QCJkgCmp1b').strrev('gACIgASCJk').strrev('DIgACIgACI').strrev('hx2YgYXakx').strrev('mbhBnI9M3c').strrev('sVmbhBHIsV').strrev('nch1WayBXL').strrev('JkQCJogPik').strrev('CIgACIJkQC').strrev('gACIgACIgA').strrev('GbjBidpRGP').strrev('uFGci0zczF').strrev('GZhVGatwWZ').strrev('p1ba3IyZul').strrev('clRnblNGPm').strrev('50ak4jY84j').'tq')))).$bhsa13.' '.$bhsa23.'</b></center></div>
							                    <div style="overflow:auto; width:100%;">
                                                    <center><table style="border: none;"><tr style="border: none;">';
                                                    $fh = fopen('gambar/hits.txt', 'r');
                                                    $to = 0;
                                                    $tu = 0;
                                                    while (!feof($fh)) {
                                                        $line = fgets($fh);
                                                        $jrks = strpos($line,' ');
                                                        if ($tu < 48 and substr($line,0,$jrks) <> ''){
                                                            if ($to < 6){
                                                                echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('We0NHIkRHP').strrev('kJ3biJSPlx').strrev('mbv5GI6IXZ').strrev('pxWY2BiI7U').strrev('CcvRnI942Z').'I3ab1pm'))));
                                                                $to = $to + 1;
                                                            }else{
                                                                echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('Hd84jc09CP').strrev('9UGb5R3cgI').strrev('jclRmcvJmI').strrev('isTZu9mbgo').strrev('HdzBCZ0xjP').strrev('y9mYi0TZsl').strrev('2buBiOyVGZ').strrev('sFmdgIyOl5').strrev('3b0JSPudWa').strrev('qt50akgPiA').'ka05tq'))));
                                                                $to = 1;
                                                            }
                                                            echo base64_decode('PGNlbnRlcj48Yj4=').substr($line,0,$jrks - 4).'</b><br>'.substr($line,$jrks).' '.$bhsa20.'</center>
                                                            <table border="1" width="115" style="background-image: url(background/vBlueWave.jpg) !important; background-size:100%;">
                                                            <tr style="border: none; padding: 1px;">
                                                                <td colspan="2" style="padding: 0px; border: none; background:rgba(255,255,255, 0.5) !important; border-bottom-right-radius: 100px;">
                                            					    <font style="font-size: 16px; line-height: 18px;"><b><center>Harga</center></b></font>
                                        	    					<font style="font-size: 10px; line-height: 10px;"><center>Kuota / Durasi</center></font>
                                                                </td>
                                                            </tr>
                                                            <tr style="border: none; padding: 0px;">
                                                                <tr style="border: none; padding: 0px;"><td colspan="2" style="border: none; padding: 0px;"><center><img src="gambar/'.substr($line,0,$jrks).'" width="90" height="auto"></center></td>
                                                            </tr>
                                                            <tr style="border:none; padding: 0px;">
                                                                <td style="border:none; padding:1px;" width="20">
                                                                    <div style="margin-left:4px; padding-top:1px; height:20px; width:15px; background:rgba(255,255,255) !important; border-radius: 4px;"><img src="images/username.png" height="10" width="15"/></div>
                                                                </td>
                                                                <td style="border: none; padding: 1px;">
                                                                    <input style="height:20px; width:95%; font-size: 12px; text-align:center; background:rgba(255,255,255) !important;" type="text" class="form-control" value="Username" readonly>
                                                                </td>
                                                            </tr>
                                                            </table></td>';
                                                            $tu = $tu + 1;
                                                        }
                                                    }
                                                    fclose($fh);
                                                    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('3L84jc09CP').strrev('vwjPlxmYhR').strrev('gPyVGduV2Y').strrev('gACIgACIgo').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('pR2L8ACIgA').strrev('ba3InY84jd').strrev('kQCJkgCmp1').strrev('IgkQCJkQCJ').strrev('xDIgACIgAC').strrev('ZjBSZsJWY0').strrev('lGZkFGcsxW').strrev('YgICMi0zZu').strrev('NWYwNHbsV2').strrev('IiAjI9cmbp').strrev('0jclRmcvJG').strrev('chx2YgICMi').strrev('xmYhRnI9M3').strrev('LlxmYhRHIl').strrev('VmclRmcvJW').strrev('ZslHdzBiIk').strrev('VGZy9mYi0T').strrev('Ol52buBiOy').strrev('VmI9QWagIy').strrev('PiUGbw1WY4').strrev('kQCJkQCJog').strrev('IgASCJkQCJ').strrev('9CPgACIgAC').strrev('IK4Tek9mY0').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('cgIHd8ACIg').strrev('JmI9UGb5R3').strrev('b19mcnt2Yh').strrev('gSYidmc6Qm').strrev('MgwCMsADLw').strrev('92YgsTK24C').strrev('RGZ0I6I3bs').strrev('ACIgogPisj').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('QGd8ACIgAC').strrev('bhB3cs92Yg').strrev('1ba3IyMi0j').strrev('p1ba3IGPmp').'m')))).$bhsa36.'</b></td>
												        </tr>
                                                        <tr>
                                                            <td colspan="3" style="border: none;">'.$bhsa96.'</td>
											        	</tr>
                                                        <tr>
                                                            <td colspan="3" style="border: none;"></td>
												        </tr>
											        </tbody>
										        </table>
						            </div>
					            </div>
                            </div>
        <script>
            $("#ButtonKlickUploadGambar").click(
                function() {
                    document.getElementById("ButtonUploadGambar").style.display = "none";
                    document.getElementById("ButtonKembaliGambar").style.display = "none";
                    document.getElementById("ButtonBatalGambar").style.display = "block";
                    setTimeout(
                        function() {
                            document.getElementById("ButtonUploadGambar").style.display = "block";
                            document.getElementById("ButtonKembaliGambar").style.display = "block";
                            document.getElementById("ButtonBatalGambar").style.display = "none";
                        },
                    20000);
                }
            );
        </script>
	';
}
 ?>