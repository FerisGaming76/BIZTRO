<?php 
error_reporting(0);
session_start();
if (isset($_SERVER['HTTP_CLIENT_IP'])){
    $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
}else if(isset($_SERVER['HTTP_X_FORWARDED_FOR'])){
    $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
}else if(isset($_SERVER['HTTP_X_FORWARDED'])){
    $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
}else if(isset($_SERVER['HTTP_FORWARDED_FOR'])){
    $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
}else if(isset($_SERVER['HTTP_FORWARDED'])){
    $ipaddress = $_SERVER['HTTP_FORWARDED'];
}else if(isset($_SERVER['REMOTE_ADDR'])){
    $ipaddress = $_SERVER['REMOTE_ADDR'];
}
if ($_SESSION['username'] <> ''){
    if($e->getMessage() == 'Transmitter is invalid. Sending aborted.') {
        echo '<script>cmodal("Access denied!", "'.$bhsa8.'", "error")</script>';
        $_SESSION['username'] = '';
    }elseif($e->getMessage() == 'Error getting property') {
        echo '<script>cmodal("Access denied!", "'.$bhsa8.'", "error")</script>';
        $_SESSION['username'] = '';
    }elseif($e->getMessage() == 'Error connecting to RouterOS') {
        if($_SESSION['infologin'] == 'TimeOut'){
            echo '<script>cmodal("No response!", "'.$bhsa9.'", "error")</script>';
            $_SESSION['username'] = '';
        }else{
            echo '<script>cmodal("Unable to connect!", "'.$bhsa10.'", "error")</script>';
            $_SESSION['username'] = '';
        }
    }else{
        echo '<script>cmodal("Something is wrong!", "'.$bhsa11.'", "error")</script>';
        $_SESSION['username'] = '';
    }
}
?>
<div class="container">
	<div class="row" thumbnail style="border: none;"><center>
            <table style="border: none;"><tr><td valign="top" width="300" style="border: none; border-radius: 0.3em;background-color:rgba(0,0,0,0.6);">
					<form class="form-horizontal" id="loginform" action="" method="POST">
						<div class="form-group form-group-sm">
                            <div class="col-sm-12">
							    <center><label class="control-label" style="color: White;"><?php echo $bhsa0; ?></label></center>
                            </div>
						</div>
						<div class="form-group form-group-sm">
                            <div class="col-sm-12">
							    <label class="control-label" style="color: White;"><?php if (file_exists('offline.txt')) {echo 'IP MikroTik';}else{echo $bhsa1.' (<a href="#" onclick="document.getElementById('."'".'username'."'".').value='."'".$ipaddress."'".';"><b>'.$ipaddress.'</b></a>)';} ?></label>
							</div>
                            <div class="col-sm-12">
								<input type="text" id="username" name="username" placeholder="<?php if (file_exists('offline.txt')) {echo 'IP mikrotik as in winbox';}else{echo 'IP public or DNS name';} ?>" required class="form-control" autofocus>
							</div>
                            <div class="col-sm-12">
							    <label class="control-label" style="color: White;"><?php echo $bhsa2; ?></label>
							</div>
                            <div class="col-sm-12">
								<input type="text" name="user" placeholder="Username" value="admin" class="form-control" required>
							</div>
                            <div class="col-sm-12">
							    <label class="control-label" style="color: White;"><?php echo $bhsa3; ?></label>
							</div>
                            <div class="col-sm-12">
								<input type="password" name="password" placeholder="Password mikrotik" class="form-control">
							</div>
                            <div class="col-sm-12">
							    <label class="control-label" style="color: White;">API Port <?php if (file_exists('offline.txt')) {echo $bhsa6;}else{echo $bhsa4;} ?></label>
							</div>
                            <div class="col-sm-12">
                                <input type="number" name="port" placeholder="Port API" value="8728" class="form-control">
							</div>
                            <div class="col-sm-12">
							    <label class="control-label" style="color: White;"><?php echo $bhsa12; ?></label>
							</div>
                            <div class="col-sm-12">
							    <select id="bhsa" name="bhsa" class="form-control">
							        <?php
							            if($bahasa <> ''){echo '<option value="'.$bahasa.'" hidden>'.ucfirst(str_replace('aaa','',$bahasa)).'</option>';}
                                        foreach (scandir('tools/bahasa') as $folder){
                                            if ($folder <> '.' and $folder <> '..' and $folder <> 'index.php'){
                                                echo '<option value="'.str_replace('.php','',$folder).'">'.ucfirst(str_replace('aaa','',str_replace('.php','',$folder))).'</option>';
                                            }
                                        }
							        ?>
						        </select>
							</div>
						</div>
						<div class="form-group form-group-sm">
							<div class="col-sm-12">
                                <script type="text/javascript">
                                    $(function() {
                                        $('#qrmlginq a').click(function() {
                                            var url = $(this).attr('href');
                                            $('#qrmlgin').load(url).focus();
                                            return false;
                                        });
                                    });
                                </script>
                                <table style="border: none; width:100%"><tbody>
                                    <tr><td style="border: none;">
                                        <div id="qrmlginq"><center><button id="btn_update" name="btn_update" type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-transfer" aria-hidden="true"></span>&nbsp;<?php echo $bhsa5; ?></button> <?php if (empty(file_exists('offline.txt'))) {echo '<a href="mtikqrlogin.php" class="btn btn-success" data-toggle="modal"><img src="images/qrcode.png" width="18" height="18"></a>';} ?></center></div>
                                    </td><td class="col-sm-12 visible-xs" style="border: none;">
                                        <center>&nbsp;<p class="btn btn-danger" onclick="window.location.href='https://minitik.net/download.php'"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></p></center>
                                    </td></tr>
                                </tbody></table>
							</div>
						</div>
						<div class="form-group form-group-sm">
                            <div class="col-sm-12 hidden-xs">
							    <label class="control-label" style="color: White;">Use MiniTik <?php if (file_exists('offline.txt')) {if (gethostname() <> ''){echo gethostname();}else{echo gethostbyaddr($_SERVER['REMOTE_ADDR']);}}else{echo 'Online';} ?></label>
							    <p style="color: White;">Connected: <? echo $berfiledata.'x'; ?><br>Visited: <? echo $gagfiledata.'x'; ?></p>
							</div>
						</div>
					</form>
				</td><td valign="top" class="hidden-xs" style="border: none; border-radius: 0.3em; background-color:rgba(0,0,0,0.4);">
				    <div class="panel panel-heading" style="border: 0; background-color: rgba(135, 206, 235, 0.8);">
					    <p><strong style="color: White;"><center><button class="btn btn-danger btn-sm" onclick="window.location.href='https://minitik.net/fullsetting'"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>&nbsp;Setting Mikrotik</button>&nbsp;<button class="btn btn-danger btn-sm" onclick="window.location.href='https://minitik.net/vpnremote'"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span>&nbsp;VPN Remote</button>&nbsp;<button class="btn btn-danger btn-sm" onclick="window.location.href='https://minitik.net/webgui'"><span class="glyphicon glyphicon-subtitles" aria-hidden="true"></span>&nbsp;Console Mode</button>&nbsp;<?php if (file_exists('offline.txt')) {if (gethostname() == 'OpenWrt' or gethostname() == 'MiniTik'){echo '<button class="btn btn-success btn-sm" onclick="window.location.href='."'".'cgi-bin/luci/'."'".'"><span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span>&nbsp;OpenWrt</button>&nbsp;';} echo '<button class="btn btn-danger btn-sm" onclick="window.location.href='."'".'https://youtu.be/eSB9SLoiv5k'."'".'"><span class="glyphicon glyphicon-facetime-video"></span>&nbsp;Tutorial MiniTik OFFLINE</button>';}else{echo '<button class="btn btn-danger btn-sm" onclick="window.location.href='."'".'http://minitik.net/download.php'."'".'"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>&nbsp;MiniTik Offline</button>';} ?>&nbsp;<button class="btn btn-success btn-sm blinking" onclick="window.location.href='https://minitik.net/donations'"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>&nbsp;What is MiniTik?</button></center></strong></p>
				    </div>
				    <div class="panel-body" style="height: 400px; overflow:auto; width:100%; margin:0px; padding: 0px;">
				        <table style="border: none; width:99%;"><tbody>
				            <?php 
				                echo '<tr><td style="width:70%; border: none;" rowspan="2" valign="top">';
				                include_once('youtube.php');
        				        echo '</td><td style="color: White; border: none; background-color:rgba(0,0,0,0.4);" valign="top">
        				            <b>MiniTik has been tested on several latest MikroTik firmwares:</b><br>
        				            <div style="height: 400px; overflow:auto; width:100%; margin:0px; padding: 0px;">';
        				            $testfile = "tools/versifirmware.txt";
                                    $file = fopen($testfile,"r");
                                    $filedata = fread($file,filesize($testfile));
                                    fclose($file);
                                    $angka = explode('//',$filedata);
                                    rsort($angka);
                                    foreach ($angka as $firval){
                                        if ($firval <> ''){
                                            echo 'Release '.$firval.'<br>';
                                        }
                                    }
                                echo '</div></td></tr>
        				        <tr><td style="color: White; border: none; background-color:rgba(0,0,0,0.4);" valign="top">
        				            <b>MiniTik testing is carried out on the following MikroTik types:</b><br>
        				            <div style="height: 400px; overflow:auto; width:100%; margin:0px; padding: 0px;">';
        				            $testfile = "tools/versirouterboard.txt";
                                    $file = fopen($testfile,"r");
                                    $filedata = fread($file,filesize($testfile));
                                    fclose($file);
                                    $angka = explode('//',$filedata);
                                    rsort($angka);
                                    foreach ($angka as $mikval){
                                        if ($mikval <> 'RB' and $mikval <> ''){
                                            echo 'MikroTik '.$mikval.'<br>';
                                        }
                                    }
                                echo '</div></td></tr>';
				            ?>
                            <tr><td style="color: White; border: none; background-color:rgba(0,0,0,0.4);" valign="top" colspan="2">
                                MiniTik is a remote online MikroTik hotspot generator site to make it easier to make wifi or home vouchers and other devices such as mobile phones, computers, cctv routers and stb smart tvs which are perfect for office, home, warkop, business schools, rt rw net and others.<br>
                                Besides being able to be controlled remotely, MiniTik also provides windows software (pc / computer) and android applications (mobile / cellphone) that can be used offline as an advanced option if needed when there is no internet connection.<br>
                                MiniTik doesn't aim to be the best, it just strives to be reliable.<br><br>
                                Some of the excellent features of MiniTik are:<br>
                                - Management of user vouchers.<br>
                                - PPPoE user management.<br>
                                - Monthly user management for home customers.<br>
                                - and others (see video)<br>
                            </td></tr>';
				        </tbody></table>
                    </div>
                </td>
            </table></center>
	</div>
</div>
<div id="qrmlgin"></div>
<style type="text/css">
#pageshare {
  position:fixed;
  bottom:0%;
  right:0px;
  -webkit-border-radius:0 5px 5px 0;
  -moz-border-radius:0 5px 5px 0;
  border-radius:10px 0px 0px 0;
  background-color:rgba(0,0,0,0.6);
  padding:0 0 2px 0;
  z-index:1000;
  -webkit-box-shadow:0 0 2px rgba(0,0,0,0.7);
  -moz-box-shadow:0 0 2px rgba(0,0,0,0.7);
  box-shadow:0 0 2px rgba(0,0,0,0.7);
}

#pageshare .sbutton {
  float:left;
  clear:both;
  margin:5px 5px 0 5px;
}
</style>
<div id="pageshare" class="hidden-xs">
    <div class="sbutton">
    <a href="http://www.facebook.com/sharer.php?u=https://minitik.net" target="_blank">
        <img src="/images/facebook.png" alt="Facebook" />
    </a>
    </div>
    <div class="sbutton">
    <a href="https://twitter.com/share?url=https://minitik.net" target="_blank">
        <img src="/images/twitter.png" alt="Twitter" />
    </a>
    </div>
    <div class="sbutton">
    <a href="https://plus.google.com/share?url=https://minitik.net" target="_blank">
        <img src="/images/google.png" alt="Google" />
    </a>
    </div>
    <div class="sbutton">
    <a href="http://www.digg.com/submit?url=https://minitik.net" target="_blank">
        <img src="/images/diggit.png" alt="Digg" />
    </a>
    </div>
    <div class="sbutton">
    <a href="https://bufferapp.com/add?url=https://minitik.net" target="_blank">
        <img src="/images/buffer.png" alt="Buffer" />
    </a>
    </div>
    <div class="sbutton">
    <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https://minitik.net" target="_blank">
        <img src="/images/linkedin.png" alt="LinkedIn" />
    </a>
    </div>
    <div class="sbutton">
    <a href="http://reddit.com/submit?url=https://minitik.net" target="_blank">
        <img src="/images/reddit.png" alt="Reddit" />
    </a>
    </div>
    <div class="sbutton">
    <a href="http://www.stumbleupon.com/submit?url=https://minitik.net" target="_blank">
        <img src="/images/stumbleupon.png" alt="StumbleUpon" />
    </a>
    </div>
    <div class="sbutton">
    <a href="http://www.tumblr.com/share/link?url=https://minitik.net" target="_blank">
        <img src="/images/tumblr.png" alt="Tumblr" />
    </a>
    </div>
    <div class="sbutton">
    <a href="http://vkontakte.ru/share.php?url=https://minitik.net" target="_blank">
        <img src="/images/vk.png" alt="VK" />
    </a>
    </div>
    <div class="sbutton">
    <a href="http://www.yummly.com/urb/verify?url=https://minitik.net" target="_blank">
        <img src="/images/yummly.png" alt="Yummly" />
    </a>
    </div>
</div>