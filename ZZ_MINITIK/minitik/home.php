<?php 
error_reporting(0);
$anctgg = ['"', '&', "'",'<','>'];
$bnctgg   = ['&quot;', '&amp;', '&#039;','&lt;','&gt;'];
$namamikrotik = $util->setMenu('/system identity')->get(null, 'name');
foreach ($util->setMenu('/ip hotspot user profile')->getAll() as $item) {
    $nmprofil = $item('name');
    if($nmprofil <> 'default' and strpos($item('on-login'),'MiniTik') == true){
        $prfilshw = $prfilshw.base64_decode('PG9wdGlvbiB2YWx1ZT0i').str_replace($anctgg,$bnctgg,$nmprofil).'">'.str_replace($anctgg,$bnctgg,$nmprofil).'</option>';
    }
}
foreach ($util->setMenu('/ip hotspot profile')->getAll() as $item) {
    if($item('dns-name') <> ''){
        $situsname = $item('dns-name');
    }
}
$svrname = '<option value="all" selected>Semua Server</option>';
foreach ($util->setMenu('/ip hotspot')->getAll() as $stem) {
    $servername = $stem('name');
    if($servername <> ''){
        $svrname = $svrname.'<option>'.str_replace($anctgg,$bnctgg,$servername).'</option>';
    }
}
if($nmprofil == 'default'){
    if($situsname <> ''){
        $_SESSION['e'] = '';
        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('CdwlmcjNHP').strrev('0JSPlBXe0B').strrev('mdhp2L0hXZ').strrev('iQHcpJ3YzF').strrev('3YuVnZoQiP').strrev('7BSKo42bpR').strrev('XY0N3IigCJ').strrev('s5SKiIXZ0J').strrev('mahJCKkF2b').strrev('w5CZkF2X4F').strrev('Y4e8i9uAHa').strrev('JXY0NXPkRW').strrev('ZytTKiIXZ0').strrev('FmZg4mc1RX').strrev('P7kSf7U2cs').strrev('QHcpJ3Yz9C').strrev('pRGPmp1ba3').strrev('3ci0DZpBid').strrev('3IiclRnchR').strrev('ak9CPmp1ba').'XY3ab1pm'))));
    }else{
        if($namamikrotik == 'MikroTik' and $servername == ''){
            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('DdwlmcjNHP').strrev('owWYk9Wbj5').strrev('GIul2ZulkI').strrev('0V2cgwGb1Z').strrev('CLi8zZulGd').strrev('tBSYyF2QiA').strrev('jY8ACahRWd').strrev('lNHIsxWdG5').strrev('WTgcmbpRHd').strrev('8sWaU9mcrl').strrev('Pmp1ba3I2L').strrev('5WZkBiPyJG').strrev('ZuVWbg4WYn').strrev('4WYrFmb1d2').strrev('bgMHbv9Gdg').strrev('ByapRXaulW').strrev('In5Wa0RXZz').strrev('9mZulmIgwi').strrev('Iu9Wa0FWby').strrev('BHd0hmIgwi').strrev('aulWbv8iOz').strrev('QXZu5yapRX').strrev('dlNHbsVnZv').strrev('wTKicmbpRH').strrev('P0BXayN2cv').strrev('0akqt50akg').'5tq'))));
        }
    }
}

if($showmenu <> 'off'){
echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GbjBidpRGP').strrev('u92Yi0zczF').strrev('jIyVmbpFGd').strrev('gYXakxTCK4').strrev('mI9M3chx2Y').strrev('05WayB3Xv5').strrev('SI8kQCK4jI').strrev('0JXY0NFIt0').strrev('mQg4Wah1EI').strrev('0NWZTBSek9').strrev('gPt0CIu9Wa').strrev('gACIgACIgo').strrev('2YgYXakxDI').strrev('h1mI9M3chx').strrev('XL5R2bi5Wa').strrev('g42bpR3YlN').strrev('WZj1Cd4VGd').strrev('gogPiIXZ05').strrev('CIgACIgACI').strrev('2lGZ8ACIgA').strrev('SPzNXYsNGI').strrev('ulWY052bjJ').strrev('CIgogPiIXZ').strrev('gACIgACIgA').strrev('GPgACIgACI').strrev('zFGbjBidpR').strrev('jI39mci0zc').strrev('gACIgACIK4').strrev('CIgACIgACI').strrev('8ACIgACIgA').strrev('XYsNGI2lGZ').strrev('tw2bjJSPzN').strrev('ba3IiMtQWb').strrev('ACIgAiCmp1').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('akxDIgACIg').strrev('M3chx2YgYX').strrev('atUnbl1mI9').strrev('VHbiBSblRX').strrev('IgACIK4jIl').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('ZyhGIhxDIg').strrev('5WazNiI9YW').strrev('clNXdtUGbn').strrev('1SY0FGZgIi').strrev('I9UGbnd2b0').strrev('4jIsFGZv1m').strrev('IgACIgACIK').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('bjBSa8ACIg').strrev('EmZi0zczFG').strrev('bph2YtEmZg').strrev('4TavwjPiQG').strrev('IgACIgACIK').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('ak4Dc8ACIg').'05tq')))).$bhsa70.'</p>
                            </a>
                        </div>
                        <div class="menu-item red">
                            <a href="#active-users" data-toggle="modal">
                                <i class="fa fa-wifi"></i>
                                <p>Hotspot</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-2">
						<div class="menu-item purple">
                            <a href="#multi-user" data-toggle="modal">
                                <i class="fa fa-users"></i>
                                <p>Generat</p>
                            </a>
                        </div>
                        <div class="menu-item olive">
                            <a href="#Config-selected" data-toggle="modal">
                                <i class="fa fa-cogs"></i>
                                <p>'.$bhsa71.'</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="menu-item coral">
                            <a href="#tambahan-app" data-toggle="modal">
                                <i class="fa fa-bug"></i>
                                <p>'.$bhsa72.'</p>
                            </a>
                        </div>
                        <div class="menu-item green">
							<a href="">
                                <i class="fa fa-refresh"></i>
                                <p>'.$bhsa73.'</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="menu-item skyblue">
                            <a href="https://www.youtube.com/channel/UCxITCtCNA3qc60oKGYFrNng/videos?sub_confirmation=1">
                                <i class="fa fa-youtube"></i>
                                <p>'.$bhsa29.'</p>
                            </a>
                        </div>
                        <div class="menu-item gold">
                            <a href="https://minitik.net/print.php?donations">
                                <i class="fa fa-heart"></i>
                                <p>'.$bhsa74.'</p>
                            </a>
                        </div>
                    </div>
                    <div class="hidden-xs hidden-sm">
                    <div class="col-md-2" style="height: 312px; overflow:auto; width:30%;">
						<table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="table-01">
							<thead>
								<tr>
									<th>No</th>
									<th>'.$bhsa39.'</th>
								</tr>
							</thead>
							<tbody>';
								$i = 0;
								foreach ($util->setMenu('/ip hotspot active')->getAll() as $item) {
									$i++;	
									echo base64_decode('PHRyPg==');
										echo base64_decode('PHRkPg==').$i.'</td>';
										$nncom = $item('comment');
										$nnusr = $item('name');
										if ($nncom <> ''){$nnaktipwd = $nncom;}else{$nnaktipwd = $nnusr;}
										echo base64_decode('PHRkPg==').str_replace($anctgg,$bnctgg,$nnaktipwd).'</td>';
									echo base64_decode('PC90cj4=');
								}
							echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('Tek9mY09CP').strrev('JkQCJkQCK4').strrev('TZsJWY09CP').strrev('gACIgACIK4').strrev('CIgACIgACI').strrev('8ACIgACIgA').strrev('CIK4jdpR2L').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('pR2L8ACIgA').strrev('CIgACIK4jd').strrev('gACIgACIgA').strrev('GZvwDIgACI').strrev('qt50akgP2l').'ka05tq'))));
                if (gethostname() == 'OpenWrt' or gethostname() == 'MiniTik'){echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('ibvRHd1JGP').strrev('i0zczFGbjB').strrev('ib0JGIuRnY').strrev('zNXZjNWdz1').strrev('WasNmbvBiI').strrev('k5Wa3JSPrN').strrev('XYj9Gbuc3b').strrev('lJHau42bpR').'Zj0ka05tq'))))."'".'cgi-bin/luci/'."'".'"><span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span>&nbsp;OpenWrt</button>&nbsp;';}
				echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('ibvRHd1JGP').strrev('i0zczFGbjB').strrev('ib0JGIuRnY').strrev('5JXYtlmcw1').strrev('WasNmbvBiI').strrev('fd2bsJSPrN').strrev('jPikCK0V3b').strrev('sNGIuFGczx').strrev('HbnJSPzNXY').strrev('g42bjlGawl').strrev('2YphGc5x2Z').strrev('v1yZvxWLu9').strrev('WayFGIiQXd').strrev('uVGZklGatE').strrev('jIlVnc0JSP').strrev('34WYwN3L84').strrev('ci5mJmp1ba').strrev('ACdphXR7A3').'o')))).str_replace($anctgg,$bnctgg,$namamikrotik).')</button>
            </div>
        </div>
	</div>	
        <!-- End Main Body Section -->

		<!-- 1. End Single Guest User Creation Experiment Section -->
		<script type="text/javascript">
            $(function() {
                $("#tambahuserq a").click(function() {
                    var url = $(this).attr("href");
                    $("#tamusrq").load(url);
                    return false;
                });
            });
        </script>
		<div class="child-modal modal fade" id="single-user" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content" style="border: none;">
                <div class="container">
					<div class="row">
					    <div class="no_print">
						    <div id="tambahuserq">
					            <center>
                                <table style="border: none;"><tr style="border: none;"><td style="border: none;">
                                    <a href="modul_user.php?id=voucher" id="avoucherowjhg" class="btn btn-success"><span class="glyphicon glyphicon-bullhorn" aria-hidden="true"></span><span class="hidden-xs">&nbsp;Poster</span></a>
						        </td><td style="border: none;">
                                    <a href="modul_user.php?id=macaddress" id="ausermacowjhg" class="btn btn-success"><span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span><span class="hidden-xs">&nbsp;Inject</span></a>
						        </td><td style="border: none;">
                                    <a href="modul_user.php?id=bypass" id="arumahanowjhg" class="btn btn-success"><span class="glyphicon glyphicon-home" aria-hidden="true"></span><span class="hidden-xs">&nbsp;'.$bhsa47.'</span></a>
						        </td><td style="border: none;">
                                    <a href="modul_user.php?id=ppp" id="apppanowjhg" class="btn btn-success"><span class="glyphicon glyphicon-indent-left" aria-hidden="true"></span><span class="hidden-xs">&nbsp;PPPoE</span></a>
						        </td><td style="border: none;">
                                    <a href="modul_user.php?id=event" id="aeventanowjhg" class="btn btn-success"><span class="glyphicon glyphicon-gift" aria-hidden="true"></span><span class="hidden-xs">&nbsp;'.$bhsa60.'</span></a>
						        </td><td style="border: none;">
							        <button data-dismiss="modal" class="btn btn-info center-element"><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span><span class="hidden-xs">&nbsp;'.$bhsa69.'</span></button>
						        </td></tr></table>
                                </center>
                            </div>
                        </div>
				        <div id="tamusrq">
				            <div class="no_print">
                            <script>
                                $(function() {
                                    $("#singleuser form").submit(function() {
                                        var username = encodeURI($("input#id").val().replace(/#|&|>|<|"/g, ""));
                                        var password = encodeURI($("input#pw").val().replace(/#|&|>|<|"/g, ""));
                                        var profile = encodeURI($("select#pr").val().replace(/#|&|>|<|"/g, ""));
                                        var limit_uptime = encodeURI($("select#lu").val().replace(/#|&|>|<|"/g, ""));
                                        var limit_bytes = encodeURI($("select#lb").val().replace(/#|&|>|<|"/g, ""));
                                        var loginsitus = encodeURI($("select#st").val().replace(/#|&|>|<|"/g, ""));
                                        var header = encodeURI($("select#hd").val().replace(/#|&|>|<|"/g, ""));
                                        var mikrotik = encodeURI($("select#mk").val().replace(/#|&|>|<|"/g, ""));
                                        var info = encodeURI($("textarea#io").val().replace(/#|&|>|<|"/g, "").replace(/\n|\r\n|\r/g, "<br>"));
                                        var url = $(this).attr("action");
                                        $("#single").load(url + "?add=tambahvoucher&name=" + username + "&psd=" + password + "&profile=" + profile + "&limit_uptime=" + limit_uptime + "&limit_bytes=" + limit_bytes + "&loginsitus=" + loginsitus + "&header=" + header + "&mikrotik=" + mikrotik + "&info=" + info);
                                        return false;
                                    });
                                });
                            </script>
						    <div class="col-sm-7 col-md-3 thumbnail" style="border: none;">
								<div class="panel panel-primary">
    								<div class="panel-heading"><center><b>'.$bhsa28.' Poster</b></center></div>
	    							<div id="singleuser" class="panel-body">
                                    <form action="ajax_add.php" method="get">
			    						<div class="form-horizontal">
                                            <div class="form-group form-group-sm">
					    						<div class="col-sm-12">
						    						<label class="control-label">'.$bhsa2.'</label>
							    					<input type="text" placeholder="Username *" name="id" id="id" class="form-control" required >
								    			</div>
									    		<div class="col-sm-12">
										    		<label class="control-label">'.$bhsa3.'</label>
											    	<input type="text" placeholder="password" name="pw" id="pw" class="form-control">
												</div>
    											<div class="col-sm-12">						
	    											<label class="control-label">'.$bhsa15.'</label>
		    										<select id="pr" name="pr" class="form-control">'.$prfilshw.'</select>
					    						</div>											
								    			<div class="col-sm-12">						
									    			<label class="control-label">'.$bhsa16.'</label>
                                                    <select id="lb" name="lb" class="form-control">
											    		<option value="0">'.$bhsa17.'</option>									
												    	<option value="1">1 Gb</option>
													    <option value="2">2 Gb</option>
														<option value="3">3 Gb</option>
    													<option value="4">4 Gb</option>
	    												<option value="5">5 Gb</option>
		    											<option value="6">6 Gb</option>
			    										<option value="7">7 Gb</option>
				    									<option value="8">8 Gb</option>
					    								<option value="9">9 Gb</option>
						    							<option value="10">10 Gb</option>
						    							<option value="15">15 Gb</option>
							    						<option value="20">20 Gb</option>
							    						<option value="25">25 Gb</option>
								    					<option value="30">30 Gb</option>
								    					<option value="35">35 Gb</option>
									    				<option value="40">40 Gb</option>
									    				<option value="45">45 Gb</option>
										    			<option value="50">50 Gb</option>
											    		<option value="100">100 Gb</option>
												    </select>
												</div>
    											<div class="col-sm-12">						
	    											<label class="control-label">'.$bhsa18.'</label>
		    										<select id="lu" name="lu" class="form-control">
			    									    <option value="0">'.$bhsa17.'</option>
				    									<option value="1h">1 '.$bhsa19.'</option>
					    								<option value="2h">2 '.$bhsa19.'</option>
						    							<option value="3h">3 '.$bhsa19.'</option>
							    						<option value="4h">4 '.$bhsa19.'</option>
								    					<option value="5h">5 '.$bhsa19.'</option>
									    				<option value="6h">6 '.$bhsa19.'</option>
										    			<option value="7h">7 '.$bhsa19.'</option>
											    		<option value="8h">8 '.$bhsa19.'</option>
												    	<option value="9h">9 '.$bhsa19.'</option>
													    <option value="10h">10 '.$bhsa19.'</option>
														<option value="11h">11 '.$bhsa19.'</option>
    													<option value="12h">12 '.$bhsa19.'</option>
	    												<option value="13h">13 '.$bhsa19.'</option>
		    											<option value="14h">14 '.$bhsa19.'</option>
			    										<option value="15h">15 '.$bhsa19.'</option>
				    									<option value="16h">16 '.$bhsa19.'</option>
					    								<option value="17h">17 '.$bhsa19.'</option>
						    							<option value="18h">18 '.$bhsa19.'</option>
							    						<option value="19h">19 '.$bhsa19.'</option>
								    					<option value="20h">20 '.$bhsa19.'</option>
									    				<option value="21h">21 '.$bhsa19.'</option>
										    			<option value="22h">22 '.$bhsa19.'</option>
											    		<option value="23h">23 '.$bhsa19.'</option>
												    	<option value="1d">1 '.$bhsa20.'</option>
													    <option value="2d">2 '.$bhsa20.'</option>
														<option value="3d" selected>3 '.$bhsa20.'</option>
    													<option value="4d">4 '.$bhsa20.'</option>
	    												<option value="5d">5 '.$bhsa20.'</option>
                                                        <option value="6d">6 '.$bhsa20.'</option>
                                                        <option value="7d">7 '.$bhsa20.'</option>
                                                        <option value="8d">8 '.$bhsa20.'</option>
                                                        <option value="9d">9 '.$bhsa20.'</option>
						    							<option value="10d">10 '.$bhsa20.'</option>
							    						<option value="11d">11 '.$bhsa20.'</option>
								    					<option value="12d">12 '.$bhsa20.'</option>
									    				<option value="13d">13 '.$bhsa20.'</option>
										    			<option value="14d">14 '.$bhsa20.'</option>
											    		<option value="15d">15 '.$bhsa20.'</option>
												    	<option value="20d">20 '.$bhsa20.'</option>
													    <option value="30d">30 '.$bhsa20.'</option>
													</select>
    											</div>
	    										<div class="col-sm-12">
		    										<label class="control-label">'.$bhsa26.'</label>
			    									<select id="hd" name="hd" class="form-control">
													    <option value="4">'.$bhsa27.'-'.$bhsa16.'-'.$bhsa18.'</option>
    												    <option value="3">MikroTik-'.$bhsa16.'-'.$bhsa18.'</option>
	    											    <option value="2">'.$bhsa15.'-'.$bhsa16.'-'.$bhsa18.'</option>
		    										    <option value="5">'.$bhsa27.'-'.$bhsa18.'</option>
			    									    <option value="6">MikroTik-'.$bhsa18.'</option>
				    								    <option value="7">'.$bhsa15.'-'.$bhsa18.'</option>
					    							    <option value="1" selected>'.$bhsa16.'-'.$bhsa18.'</option>
						    						    <option value="9">'.$bhsa27.'</option>
							    					    <option value="10">MikroTik</option>
								    				    <option value="11">'.$bhsa15.'</option>
									    			    <option value="8">'.$bhsa18.'</option>
										    		    <option value="0">'.$bhsa24.'</option>
									    			</select>
										    	</div>
										    	<div class="col-sm-12">
													<label class="control-label">Text</label>
													<textarea placeholder="Buy 3 get 1 free" id="io" name="io" class="form-control"></textarea>
												</div>
											    <div class="col-sm-12" hidden>
													<label class="control-label">Situs</label>
    												<select id="st" name="st" class="form-control"><option>'.$situsname.'</option></select>
			    								</div>
				    							<div class="col-sm-12" hidden>
					    							<label class="control-label">MikroTik</label>
						    						<select id="mk" name="mk" class="form-control"><option>'.$namamikrotik.'</option></select>
									    		</div>
                                            </div>
											<div class="form-group form-group-sm">
    											<div class="col-sm-12">
	    											<div class="col-sm-3 col-sm-offset-3">
		    											<div class="pull-right">
			    											<button type="submit" class="btn btn-success">
                                                                <span class="glyphicon glyphicon-floppy-saved"></span>&nbsp;Ok
                                                            </button>
						    							</div>
							    					</div>
								    				<div class="col-sm-3">
									    				<div class="pull-left">
										    				<button data-dismiss="modal" class="btn btn-warning blinking" onclick="window.location.href='."'".'https://youtu.be/5gY8j963piU'."'".'"><span class="glyphicon glyphicon-facetime-video"></span>&nbsp;'.$bhsa29.'</button>
													    </div>
													</div>
    											</div>
	    									</div>
		    							</div>
			    					</form>
                                    </div>	
					    		</div>
						    </div>
					        </div>
				            <div class="col-sm-5 col-md-9 thumbnail" style="border: none;">
					            <div class="panel panel-primary" style="border: none;">
								    <div id="single">
								        <div class="hidden-xs">
								            <table width="100%" style="border:solid 1px #337ab7;"><tr style="border: none;"><td class="panel-heading" style="border: none; background-color:#337ab7; color:#FFF;"><center><b>'.$bhsa13.' Poster</b></center></td></tr>
								            <tr><td style="border: none; padding: 0;">
								                <table class="table table-bordered" style="border: none;">
											        <tbody>
                                                        <tr style="background:rgba(0,0,0, 0.6); color:#FFF;">
                                                            <td colspan="3"><b>'.$bhsa36.'</b></td>
											            </tr>
                                                        <tr>
                                                            <td colspan="3" style="border: none;">'.$bhsa14.'.</td>
									            	    </tr>
											            <tr>
                                                            <td colspan="3" style="border: none;">
                								                <b>'.$bhsa2.'</b> '.$bhsa30.'.<br>
                    								            <b>'.$bhsa3.'</b> '.$bhsa30.'.<br>
                    								            <b>'.$bhsa15.'</b> '.$bhsa31.'.<br>
					                    			            <b>'.$bhsa16.'</b> '.$bhsa32.'.<br>
								                                <b>'.$bhsa18.'</b> '.$bhsa33.'.<br>
                    								            <b>'.$bhsa26.'</b> '.$bhsa34.'.<br>
                    								            <b>Text</b> '.$bhsa35.'.<br>
                                                            </td>
												        </tr>
                                                        <tr>
                                                            <td colspan="3" style="border: none;">'.$bhsa37.'.</td>
									            	    </tr>
												    </tbody>
								                </table>
								            </td></tr></table>
								        </div>
								    </div>
					            </div>
				            </div>
				        </div>

						
						
						
					</div>
					<div class="no_print"><a href="https://youtube.com/zahranet?sub_confirmation=1">ZahraNet</a> - <a href="https://www.minitik.net">MiniTik</a> @'.date('Y').'</div>
			    </div>
			</div>
		</div>	
        <!-- 1. End Single Guest User Creation Experiment Section -->
		
		<!-- 2. Start Multi Guest User Creation Section -->
		<script type="text/javascript">
            $(function() {
                $("#multiuserq a").click(function() {
                    var url = $(this).attr("href");
                    $("#mulusrq").load(url);
                    return false;
                });
            });
        </script>
		<div class="child-modal modal fade" id="multi-user" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content" style="border: none;">
                <div class="container">
						<div class="row">
						    <div class="no_print">
						    <div id="multiuserq">
					            <center>
                                <table style="border: none;"><tr style="border: none;"><td style="border: none;">
                                    <a href="modul_generat.php?id=tema1" id="ctemaayeoktb" class="btn btn-success"><span class="glyphicon glyphicon-tag" aria-hidden="true"></span>&nbsp;'.$bhsa75.'1</a>
						        </td><td style="border: none;">
                                    <a href="modul_generat.php?id=tema2" id="ctemabyeoktb" class="btn btn-success"><span class="glyphicon glyphicon-tags" aria-hidden="true"></span>&nbsp;<span class="hidden-xs">'.$bhsa75.'2</span></a>
                                </td><td style="border: none;">
                                    <a href="modul_upload.php?id=gambar" id="cgmbaryeoktb" class="btn btn-success"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span>&nbsp;<span class="hidden-xs">'.$bhsa23.'</span></a>
						        </td><td style="border: none;">
                                    <a href="modul_upload.php?id=background" id="cbkgrnyeoktb" class="btn btn-success"><span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>&nbsp;<span class="hidden-xs">'.$bhsa25.'</span></a>
						        </td><td style="border: none;">
							        <button data-dismiss="modal" class="btn btn-info center-element"><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span>&nbsp;<span class="hidden-xs">'.$bhsa69.'</span></button>
						        </td></tr></table>
                                </center>
                            </div>
                            </div>
					        <div id="mulusrq">
                                <script>
                                $(function() {
                                    $("#multipleuser form").submit(function() {
                                        var no_of_users = encodeURI($("input#no_of_users").val().replace(/#|&|>|<|"/g, ""));
                                        var pass_length = encodeURI($("select#pass_length").val().replace(/#|&|>|<|"/g, ""));
                                        var tipe_acak = encodeURI($("select#tipe_acak").val().replace(/#|&|>|<|"/g, ""));
                                        var limit_uptime = encodeURI($("select#limit_uptime").val().replace(/#|&|>|<|"/g, ""));
                                        var limit_bytes = encodeURI($("select#limit_bytes").val().replace(/#|&|>|<|"/g, ""));
                                        var profile = encodeURI($("select#profile").val().replace(/#|&|>|<|"/g, ""));
                                        var same_pass = encodeURI($("select#same_pass").val().replace(/#|&|>|<|"/g, ""));
                                        var background = encodeURI($("select#background").val().replace(/#|&|>|<|"/g, ""));
                                        var qrcode = encodeURI($("select#qrcode").val().replace(/#|&|>|<|"/g, ""));
                                        var loginsitus = encodeURI($("select#loginsitus").val().replace(/#|&|>|<|"/g, ""));
                                        var header = encodeURI($("select#header").val().replace(/#|&|>|<|"/g, ""));
                                        var mikrotik = encodeURI($("select#mikrotik").val().replace(/#|&|>|<|"/g, ""));
                                        var serverspot = encodeURI($("select#serverspot").val().replace(/#|&|>|<|"/g, ""));
                                        var lebarkrtas = encodeURI($("select#lebarkrtas").val().replace(/#|&|>|<|"/g, ""));
                                        var wartex = encodeURI($("select#warna_text").val().replace(/#|&|>|<|"/g, ""));
                                        var url = $(this).attr("action");
                                        $("#multiple").load(url + "?add=generatvoucher&no_of_users=" + no_of_users + "&pass_length=" + pass_length + "&tipe_acak=" + tipe_acak + "&limit_uptime=" + limit_uptime + "&profile=" + profile + "&same_pass=" + same_pass + "&limit_bytes=" + limit_bytes + "&background=" + background + "&qrcode=" + qrcode + "&loginsitus=" + loginsitus + "&header=" + header + "&mikrotik=" + mikrotik + "&serverspot=" + serverspot + "&lebarkrtas=" + lebarkrtas + "&wartex=" + wartex + "&theme=1");
                                        return false;
                                    });
                                });
                            </script>
                            <div class="no_print">
							<div class="col-sm-7 col-md-3 thumbnail" style="border: none;">
								<div class="panel panel-primary">
									<div class="panel-heading"><center><b>'. $bhsa28.' '.$bhsa76.' Voucher</b></center></div>
									<div id="multipleuser" class="panel-body">
                                    <form action="ajax_add.php" method="get">
										<div class="form-horizontal">
											<div class="form-group form-group-sm">
												<div class="col-sm-12">
													<label class="control-label">Total voucher</label>
												</div>
												<div class="col-sm-12">
													<input type="number" min="1" max="1000" id="no_of_users" name="no_of_users" value="2" class="form-control" autofocus >
												</div>
												<div class="col-sm-12">						
													<label class="control-label">'.$bhsa15.'</label>
												</div>
												<div class="col-sm-12">
													<select id="profile" name="profile" class="form-control">'.$prfilshw.'</select>
												</div>
												<div class="col-sm-12">
													<label class="control-label">'.$bhsa18.'</label>
												</div>
												<div class="col-sm-12">
													<select id="limit_uptime" name="limit_uptime" class="form-control">
													<option value="0">'.$bhsa17.'</option>
													<option value="1h">1 '.$bhsa19.'</option>
													<option value="2h">2 '.$bhsa19.'</option>
													<option value="3h">3 '.$bhsa19.'</option>
													<option value="4h">4 '.$bhsa19.'</option>
													<option value="5h">5 '.$bhsa19.'</option>
													<option value="6h">6 '.$bhsa19.'</option>
													<option value="7h">7 '.$bhsa19.'</option>
													<option value="8h">8 '.$bhsa19.'</option>
													<option value="9h">9 '.$bhsa19.'</option>
													<option value="10h">10 '.$bhsa19.'</option>
													<option value="11h">11 '.$bhsa19.'</option>
													<option value="12h">12 '.$bhsa19.'</option>
													<option value="13h">13 '.$bhsa19.'</option>
													<option value="14h">14 '.$bhsa19.'</option>
													<option value="15h">15 '.$bhsa19.'</option>
													<option value="16h">16 '.$bhsa19.'</option>
													<option value="17h">17 '.$bhsa19.'</option>
													<option value="18h">18 '.$bhsa19.'</option>
													<option value="19h">19 '.$bhsa19.'</option>
													<option value="20h">20 '.$bhsa19.'</option>
													<option value="21h">21 '.$bhsa19.'</option>
													<option value="22h">22 '.$bhsa19.'</option>
													<option value="23h">23 '.$bhsa19.'</option>
													<option value="1d">1 '.$bhsa20.'</option>
													<option value="2d">2 '.$bhsa20.'</option>
													<option value="3d" selected>3 '.$bhsa20.'</option>
													<option value="4d">4 '.$bhsa20.'</option>
													<option value="5d">5 '.$bhsa20.'</option>
                                                    <option value="6d">6 '.$bhsa20.'</option>
                                                    <option value="7d">7 '.$bhsa20.'</option>
                                                    <option value="8d">8 '.$bhsa20.'</option>
                                                    <option value="9d">9 '.$bhsa20.'</option>
													<option value="10d">10 '.$bhsa20.'</option>
													<option value="11d">11 '.$bhsa20.'</option>
													<option value="12d">12 '.$bhsa20.'</option>
													<option value="13d">13 '.$bhsa20.'</option>
													<option value="14d">14 '.$bhsa20.'</option>
													<option value="15d">15 '.$bhsa20.'</option>
													<option value="20d">20 '.$bhsa20.'</option>
													<option value="30d">30 '.$bhsa20.'</option>
													</select>
												</div>
												<div class="col-sm-12">
												    <label class="control-label">'.$bhsa16.'</label>
												</div>
												<div class="col-sm-12">
													<select id="limit_bytes" name="limit_bytes" class="form-control">
														<option value="0">'.$bhsa17.'</option>									
														<option value="1">1 Gb</option>
														<option value="2">2 Gb</option>
														<option value="3">3 Gb</option>
														<option value="4">4 Gb</option>
														<option value="5">5 Gb</option>
														<option value="6">6 Gb</option>
														<option value="7">7 Gb</option>
														<option value="8">8 Gb</option>
														<option value="9">9 Gb</option>
														<option value="10">10 Gb</option>
														<option value="15">15 Gb</option>
														<option value="20">20 Gb</option>
														<option value="25">25 Gb</option>
														<option value="30">30 Gb</option>
														<option value="35">35 Gb</option>
														<option value="40">40 Gb</option>
														<option value="45">45 Gb</option>
														<option value="50">50 Gb</option>
														<option value="100">100 Gb</option>
													</select>
												</div>
												<div class="col-sm-12" id="lfgnrtadva" hidden>
												    <label class="control-label"></label>
												    <center><a href="#" onclick="document.getElementById('."'".'lfgnrtadvn'."'".').hidden='."'hidden'".'; document.getElementById('."'".'lfgnrtadvb'."'".').hidden='."''".'; document.getElementById('."'".'lfgnrtadva'."'".').hidden='."'hidden'".';"><b>⇩⇩⇩ Advanced menu ⇩⇩⇩</b></a></center>
												</div>
												<div class="col-sm-12" id="lfgnrtadvb">
												    <label class="control-label"></label>
												    <center><a href="#" onclick="document.getElementById('."'".'lfgnrtadvn'."'".').hidden='."''".'; document.getElementById('."'".'lfgnrtadva'."'".').hidden='."''".'; document.getElementById('."'".'lfgnrtadvb'."'".').hidden='."'hidden'".';"><b>⇧⇧⇧ Advanced menu ⇧⇧⇧</b></a></center>
												</div>
												<div id="lfgnrtadvn" hidden>
    												<div class="col-sm-12">
    													<label class="control-label">'.$bhsa3.'</label>
    												</div>
    												<div class="col-sm-12">
    													<select id="same_pass" name="same_pass" class="form-control">
                                                            <option value="0">'.$bhsa24.' (login 2 column)</option>
    														<option value="1">'.$bhsa79.' (login 1 column)</option>
    														<option value="2">'.$bhsa80.' (login 2 column)</option>
    													</select>
    												</div>
    												<div class="col-sm-12">
    													<label class="control-label">'.$bhsa21.'</label>
    												</div>
    												<div class="col-sm-12">
    													<select id="tipe_acak" name="tipe_acak" class="form-control">
    													    <option value="0">ABCD1234</option>
                                                            <option value="1" selected>AbCd1234</option>
    														<option value="2">Abcd1234</option>
    														<option value="3">abcd1234</option>
    														<option value="4">ABCDEFGH</option>
    														<option value="5">AbCdEfGh</option>
    														<option value="6">Abcdefgh</option>
    														<option value="7">abcdefgh</option>
    														<option value="8">12345678</option>
    													</select>
    												</div>
    												<div class="col-sm-12">
    													<label class="control-label">'.$bhsa22.'</label>
    												</div>
    												<div class="col-sm-12">
    													<select id="pass_length" name="pass_length" class="form-control">
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
    														<option value="5">5</option>
    														<option value="6" selected>6</option>
    														<option value="7">7</option>
    														<option value="8">8</option>
    													</select>
    												</div>
    												<div class="col-sm-12">
    													<label class="control-label">'.$bhsa23.'</label>
    												</div>
    												<div class="col-sm-12">
    													<select id="qrcode" name="qrcode" class="form-control">
    													    <option value="00Kosong.png">'.$bhsa24.' 0% (Kecil)</option>
    													    <option value="30Kosong.png">'.$bhsa24.' 30%</option>
                                                            <option value="50Kosong.png">'.$bhsa24.' 50%</option>
                                                            <option value="70Kosong.png">'.$bhsa24.' 70%</option>
                                                            <option value="90Kosong.png">'.$bhsa24.' 90%</option>';
    													    include_once('gambar/file.txt');
                                                            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('ibvlGdw9GP').strrev('i0TZ1xWY2B').strrev('GZvNkcRBTN').strrev('k92QyFlPiU').strrev('2L8UCM1ASZ').strrev('K4jbvlGdw9').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('ibvlGdw9GP').strrev('i0TZ1xWY2B').strrev('GZvNkcRBzN').strrev('k92QyFlPiU').strrev('2L8UCM3ASZ').strrev('K4jbvlGdw9').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('ibvlGdw9GP').strrev('i0TZ1xWY2B').strrev('GZvNkcRBTO').strrev('jVGblNHIiU').strrev('2QyFlPkVGd').strrev('8UCM5ASZk9').strrev('jbvlGdw92L').strrev('JkAIgACIK4').strrev('QCJkQCJkQC').strrev('lN3L8kQCJk').strrev('CIK4DdjVGb').strrev('JkQCJkAIgA').strrev('TCJkQCJkQC').strrev('gogP2lGZvw').strrev('QCJkQCgACI').strrev('JkQCJkQCJk').strrev('GbjBidpRGP').strrev('s92Yi0zczF').strrev('jIyETLtNXL').strrev('JkAIgACIK4').strrev('QCJkQCJkQC').strrev('iFGb8kQCJk').strrev('3chx2YgwWZ').strrev('yRnbvNmI9M').strrev('WZiFGbtw2b').strrev('qt50akgPiw').'ka05tq')))).$bhsa25.'</label>
    												</div>
    												<div class="col-sm-12">
    													<select id="background" name="background" class="form-control">';
    													    include_once('background/file.txt');
    														echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('ibvlGdw9GP').strrev('i0TZ1xWY2B').strrev('CdsVXYmVGZ').strrev('0NWZsV2cgI').strrev('Rmp1ba3QWZ').strrev('wDdsVXYmVG').strrev('Pu9Wa0B3bv').strrev('kQCgACIgog').strrev('CJkQCJkQCJ').strrev('V2cvwTCJkQ').strrev('IgogP0NWZs').strrev('kQCJkQCgAC').strrev('PJkQCJkQCJ').strrev('1ba3YXak9C').strrev('JACIgAiCmp').strrev('QCJkQCJkQC').strrev('2lGZ8kQCJk').strrev('SPzNXYsNGI').strrev('t02ctw2bjJ').strrev('CIgogPiITM').strrev('JkQCJkQCgA').strrev('TCJkQCJkQC').strrev('jBCblJWYsx').strrev('2Yi0zczFGb').strrev('s1CbvJHdu9').strrev('ba3ICblJWY').'1pm')))).$bhsa26.'</label>
    												</div>
    												<div class="col-sm-12">
    												    <select id="header" name="header" class="form-control">
    													    <option value="4">'.$bhsa27.'-'.$bhsa16.'-'.$bhsa18.'</option>
    													    <option value="3">MikroTik-'.$bhsa16.'-'.$bhsa18.'</option>
    													    <option value="2">'.$bhsa15.'-'.$bhsa16.'-'.$bhsa18.'</option>
    													    <option value="5">'.$bhsa27.'-'.$bhsa18.'</option>
    													    <option value="6">MikroTik-'.$bhsa18.'</option>
    													    <option value="7">'.$bhsa15.'-'.$bhsa18.'</option>
    													    <option value="1" selected>'.$bhsa16.'-'.$bhsa18.'</option>
    													    <option value="9">'.$bhsa27.'</option>
    													    <option value="10">MikroTik</option>
    													    <option value="11">'.$bhsa15.'</option>
    													    <option value="8">'.$bhsa18.'</option>
    													    <option value="0">'.$bhsa24.'</option>
    													</select>
    												</div>
    												<div class="col-sm-12">
    													<label class="control-label">'.$bhsa81.'</label>
    												</div>
    												<div class="col-sm-12">
    													<select id="warna_text" name="warna_text" class="form-control">
                                                            <option value="black">'.$bhsa82.'</option>
    														<option value="red">'.$bhsa83.'</option>
    														<option value="yellow">'.$bhsa84.'</option>
    														<option value="green">'.$bhsa85.'</option>
    														<option value="blue">'.$bhsa86.'</option>
    														<option value="cyan">Cyan</option>
    														<option value="magenta">Magenta</option>
    													</select>
    												</div>
    												<div class="col-sm-12">
    													<label class="control-label">'.$bhsa77.'</label>
    												</div>
    												<div class="col-sm-12">
    													<select id="lebarkrtas" name="lebarkrtas" class="form-control">
                                                            <option value="1">'.$bhsa78.' 1 voucher</option>
    														<option value="2">'.$bhsa78.' 2 voucher</option>
    														<option value="3">'.$bhsa78.' 3 voucher</option>
    														<option value="4">'.$bhsa78.' 4 voucher</option>
    														<option value="5">'.$bhsa78.' 5 voucher</option>
    														<option value="6" selected>'.$bhsa78.' 6 voucher</option>
    														<option value="7">'.$bhsa78.' 7 voucher</option>
    														<option value="8">'.$bhsa78.' 8 voucher</option>
    														<option value="9">'.$bhsa78.' 9 voucher</option>
    														<option value="10">'.$bhsa78.' 10 voucher</option>
    														<option value="11">'.$bhsa78.' 11 voucher</option>
    														<option value="12">'.$bhsa78.' 12 voucher</option>
    														<option value="13">'.$bhsa78.' 13 voucher</option>
    														<option value="14">'.$bhsa78.' 14 voucher</option>
    														<option value="15">'.$bhsa78.' 15 voucher</option>
    														<option value="16">'.$bhsa78.' 16 voucher</option>
    														<option value="17">'.$bhsa78.' 17 voucher</option>
    														<option value="18">'.$bhsa78.' 18 voucher</option>
    														<option value="19">'.$bhsa78.' 19 voucher</option>
    														<option value="20">'.$bhsa78.' 20 voucher</option>
    													</select>
    												</div>
    												<div class="col-sm-12">
    													<label class="control-label">Server LAN</label>
    												</div>
    												<div class="col-sm-12">
    													<select id="serverspot" name="serverspot" class="form-control">'.$svrname.'</select>
    												</div>
    											</div>
												<div class="col-sm-12" hidden>						
													<select id="loginsitus" name="loginsitus" class="form-control"><option>'.$situsname.'</option></select>
													<select id="mikrotik" name="mikrotik" class="form-control"><option>'.$namamikrotik.'</option></option></select>
												</div>
                                            </div>
											<div class="form-group form-group-sm">
												<div class="col-sm-12">
												    <div class="col-sm-3 col-sm-offset-3">
													    <div class="pull-right">
														    <button type="submit" class="btn btn-success">
														        <span class="glyphicon glyphicon-floppy-saved"></span>&nbsp;Ok
														    </button>
													    </div>
												    </div>
												    <div class="col-sm-3">
													    <div class="pull-left">
														    <button data-dismiss="modal" class="btn btn-warning blinking" onclick="window.location.href='."'".'https://youtu.be/3kALShfTj78'."'".'"><span class="glyphicon glyphicon-facetime-video"></span>&nbsp;'.$bhsa29.'</button>
													    </div>
												    </div>
                                                </div>
											</div>	
										</div>
									</form>
									</div>	
								</div>
							</div>
                            </div>
				            <div class="col-sm-5 col-md-9 thumbnail" style="border: none;">
					            <div class="panel panel-primary" style="border: none;">
								    <div id="multiple">
								        <div class="hidden-xs">
						                    <table width="100%" style="border:solid 1px #337ab7;"><tr style="border: none;"><td class="panel-heading" style="border: none; background-color:#337ab7; color:#FFF;"><center><b>'.$bhsa13.' Generat Voucher</b></center></td></tr>
								            <tr><td style="border: none; padding: 0;">
								                <table class="table table-bordered" style="border: none;">
											        <tbody>
                                                        <tr style="background:rgba(0,0,0, 0.6); color:#FFF;">
                                                            <td colspan="2" style="border: none;">
                                                                <b>Log generat voucher</b>
                                                            </td>
                                                            <td colspan="1" class="text-right" style="border: none;">'.$bhsa87.'</td>
												        </tr>
                                                        <tr>
                                                            <td colspan="3" style="border: none;">
                							                    <div style="overflow:auto; width:100%;">
                                                                    <table style="border: none;"><tr style="border: none;">';
                                                                    foreach ($util->setMenu('/system scheduler')->getAll() as $prnts) {
                                                                        $nprnt = $prnts('name');
                                                                        if (substr($nprnt,0,6) == 'Print1') {
                                                                            $uuwgp = $prnts('on-event');
                                                                            $iprnt = substr($uuwgp,strpos($uuwgp,'#') + 1);
                                                                            $prntvoc = $nprnt.'#'.$iprnt.'@'.$prntvoc;
                                                                        }
                                                                    }
                                                                    $px = 1;
                                                                    foreach(explode('@', substr($prntvoc,0,-1)) as $prnts) {
                                                                        $nprnt = substr($prnts,0,strpos($prnts,'#'));
                                                                        if($nprnt <> ''){
                                                                            $narnt = substr($nprnt,7);
                                                                            $iprnt = substr($prnts,strpos($prnts,'#') + 1);
                                                                            $bgprn = substr($iprnt,strpos($iprnt,'&bg=') + 4, strpos($iprnt,'&vc=') - (strpos($iprnt,'&bg=') + 4));
                                                                            $qgprn = substr($iprnt,strpos($iprnt,'&qg=') + 4, strpos($iprnt,'&pf=') - (strpos($iprnt,'&qg=') + 4));
                                                                            $jvprn = (substr_count($iprnt,'|') + 1) / 2;
                                                                            if ($qgprn <> 'QrCode'){$qgprn = 'gambar/'.$qgprn;}else{$qgprn = 'images/vqrcode.png';}
                                                                            if ($px < 7){
                                                                            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('We0NHIkRHP').strrev('kJ3biJSPlx').strrev('mbv5GI6IXZ').strrev('pxWY2BiI7U').strrev('CcvRnI942Z').strrev('NGPmp1ba3I').strrev('Y84jclRnbl').strrev('ISPmVmcoBS').strrev('asNmbvBiIj').strrev('5Wa3JSPrNW').strrev('Yj9Gbuc3bk').strrev('JHau42bpRX').strrev('qt50ak0jZl')))))."'".'https://minitik.net/print.php?'.$iprnt."'".'"><b style="font-size: 11px;">'.$narnt.'</b></a></center>
                                                                            <table border="1" width="115" style="background-image: url(background/v'.$bgprn.') !important; background-size:100%;">
                                                                            <tr style="border: none; padding: 1px;">
                                                                                <td colspan="2" style="padding: 0px; border: none; background:rgba(255,255,255, 0.5) !important; border-bottom-right-radius: 100px;">
                                                            					    <font style="font-size: 16px; line-height: 18px;"><b><center>'.$jvprn.'</center></b></font>
                                                        	    					<font style="font-size: 10px; line-height: 10px;"><center>Voucher</center></font>
                                                                                </td>
                                                                            </tr>
                                                                            <tr style="border: none; padding: 0px;">
                                                                                <tr style="border: none; padding: 0px;"><td colspan="2" style="border: none; padding: 0px;"><center><img src="'.$qgprn.'" width="90" height="auto"></center></td>
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
                                                                            $px = $px + 1;
                                                                            }
                                                                        }
                                                                    }
                                                                    if($px == 1){echo base64_decode('PGNlbnRlcj48Yj4=').$bhsa88.'</b></center>';}
                                                                    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('3L84jc09CP').strrev('gogPlxmYhR').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('Xak9CPgACI').strrev('AiCmp1ba3Y').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('wDIgACIgAC').strrev('mp1ba3QGdv').strrev('QCJkQCJkgC').strrev('gASCJkQCJk').strrev('CPgACIgACI').strrev('gACIK4jc09').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('p1ba3IHd8A').strrev('IgACIgAiCm').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('bjBCZ0xDIg').strrev('ISPuFGczx2').strrev('ZslHdzBiIz').strrev('VGZy9mYi0T').strrev('Ol52buBiOy').strrev('CPmp1ba3Iy').strrev('JkQCK4DZ09').strrev('QCJkQCJkQC').strrev('gACIgACIJk').strrev('gPyR3L8ACI').strrev('gACIgACIgo').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('ic0xDIgACI').strrev('i0TZslHdzB').strrev('3byd2ajFmY').strrev('hJ2ZypDZuV').strrev('CLwwCMsADK').strrev('jByOpYjLwA').strrev('kRjojcvx2b').strrev('p1ba3IyOGZ').strrev('IgACIgAiCm').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('bjBCZ0xDIg').strrev('ISPuFGczx2').strrev('ZslHdzBiIy').strrev('VGZy9mYi0T').strrev('Ol52buBiOy').strrev('iCmp1ba3Iy').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('k4jY8ACIgA').'a05tq')))).$bhsa23.'</b>
                                                            </td>
                                                            <td colspan="1" class="text-right" style="border: none;">
                                                                <a href="#" onclick="document.getElementById('."'".'cgmbaryeoktb'."'".').click();"><b>'.$bhsa89.' '.$bhsa23.'</b></a>
                                                            </td>
												        </tr>
                                                        <tr>
                                                            <td colspan="3" style="border: none;">
                							                    <div style="overflow:auto; width:100%;">
                                                                    <table style="border: none;"><tr style="border: none;">';
                                                                    $fh = fopen('gambar/hits.txt', 'r');
                                                                    $tx = 1;
                                                                    while (!feof($fh)) {
                                                                        $line = fgets($fh);
                                                                        $jrks = strpos($line,' ');
                                                                        if ($tx < 7 and substr($line,0,$jrks) <> ''){
                                                                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('We0NHIkRHP').strrev('kJ3biJSPlx').strrev('mbv5GI6IXZ').strrev('pxWY2BiI7U').strrev('CcvRnI942Z').strrev('NGPmp1ba3I').strrev('Y84jclRnbl').strrev('ISPmVmcoBS').strrev('asNmbvBiIj').strrev('N2bkJSPrNW').strrev('Zn5CduVWb1').strrev('5WZtVGbFRX').strrev('akgCZJlnQ0').'05tq'))))."'".'qrcode'."'".').value='."'90".substr($line,0,$jrks)."'".';"><b>'.substr($line,0,$jrks - 4).'</b></a></center>
                                                                        <table border="1" width="115" style="background-image: url(background/vBlueWave.jpg) !important; background-size:100%;">
                                                                        <tr style="border: none; padding: 1px;">
                                                                            <td colspan="2" style="padding: 0px; border: none; background:rgba(255,255,255, 0.5) !important; border-bottom-right-radius: 100px;">
                                                        					    <font style="font-size: 16px; line-height: 18px;"><b><center>'.$bhsa27.'</center></b></font>
                                                    	    					<font style="font-size: 10px; line-height: 10px;"><center>'.$bhsa16.' / '.$bhsa18.'</center></font>
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
                                                                        $tx = $tx + 1;
                                                                        }else{
                                                                            break;
                                                                        }
                                                                    }
                                                                    fclose($fh);
                                                                    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('3L84jc09CP').strrev('gogPlxmYhR').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('Xak9CPgACI').strrev('AiCmp1ba3Y').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('wDIgACIgAC').strrev('mp1ba3QGdv').strrev('QCJkQCJkgC').strrev('gASCJkQCJk').strrev('CPgACIgACI').strrev('gACIK4jc09').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('p1ba3IHd8A').strrev('IgACIgAiCm').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('bjBCZ0xDIg').strrev('ISPuFGczx2').strrev('ZslHdzBiIz').strrev('VGZy9mYi0T').strrev('Ol52buBiOy').strrev('CPmp1ba3Iy').strrev('JkQCK4DZ09').strrev('QCJkQCJkQC').strrev('gACIgACIJk').strrev('gPyR3L8ACI').strrev('gACIgACIgo').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('ic0xDIgACI').strrev('i0TZslHdzB').strrev('3byd2ajFmY').strrev('hJ2ZypDZuV').strrev('CLwwCMsADK').strrev('jByOpYjLwA').strrev('kRjojcvx2b').strrev('p1ba3IyOGZ').strrev('IgACIgAiCm').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('bjBCZ0xDIg').strrev('ISPuFGczx2').strrev('ZslHdzBiIy').strrev('VGZy9mYi0T').strrev('Ol52buBiOy').strrev('iCmp1ba3Iy').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('k4jY8ACIgA').'a05tq')))).$bhsa25.'</b>
                                                            </td>
                                                            <td colspan="1" class="text-right" style="border: none;">
                                                                <a href="#" onclick="document.getElementById('."'".'cbkgrnyeoktb'."'".').click();"><b>'.$bhsa89.' '.$bhsa25.'</b></a>
                                                            </td>
												        </tr>
                                                        <tr>
                                                            <td colspan="3" style="border: none;">
                	                                            <div style="overflow:auto; width:100%;">
                                                                    <table style="border: none;"><tr style="border: none;">';
                                                                    $fh = fopen('background/hits.txt', 'r');
                                                                    $ts = 1;
                                                                    while (!feof($fh)) {
                                                                        $line = fgets($fh);
                                                                        $jrks = strpos($line,' ');
                                                                        if ($ts < 7 and substr($line,0,$jrks) <> ''){
                                                                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('We0NHIkRHP').strrev('kJ3biJSPlx').strrev('mbv5GI6IXZ').strrev('pxWY2BiI7U').strrev('CcvRnI942Z').strrev('NGPmp1ba3I').strrev('Y84jclRnbl').strrev('ISPmVmcoBS').strrev('asNmbvBiIj').strrev('N2bkJSPrNW').strrev('Zn5CduVWb1').strrev('5WZtVGbFRX').strrev('akgCZJlnQ0').'05tq'))))."'".'background'."'".').value='."'".substr($line,0,$jrks)."'".';"><b>'.substr($line,0,$jrks - 4).'</b></a></center>
                                                                 		    <table border="1" width="115" style="background-image: url(background/v'.substr($line,0,$jrks).') !important; background-size:100%;">
                                                                        <tr style="border: none; padding: 1px;">
                                                                            <td colspan="2" style="padding: 0px; border: none; background:rgba(255,255,255, 0.5) !important; border-bottom-right-radius: 100px;">
                                                        					    <font style="font-size: 16px; line-height: 18px;"><b><center>'.$bhsa27.'</center></b></font>
                                                    	    					<font style="font-size: 10px; line-height: 10px;"><center>'.$bhsa16.' / '.$bhsa18.'</center></font>
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
                                                                            $ts = $ts + 1;
                                                                        }else{
                                                                            break;
                                                                        }
                                                                    }
                                                                    fclose($fh);
                                                                    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('3L84jc09CP').strrev('gogPlxmYhR').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('Xak9CPgACI').strrev('AiCmp1ba3Y').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('wDIgACIgAC').strrev('mp1ba3QGdv').strrev('QCJkQCJkgC').strrev('gASCJkQCJk').strrev('CPgACIgACI').strrev('gACIK4jc09').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('p1ba3IHd8A').strrev('IgACIgAiCm').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('bjBCZ0xDIg').strrev('ISPuFGczx2').strrev('ZslHdzBiIz').strrev('VGZy9mYi0T').strrev('Ol52buBiOy').strrev('CPmp1ba3Iy').strrev('JkQCK4DZ09').strrev('QCJkQCJkQC').strrev('gACIgACIJk').strrev('gPyR3L8ACI').strrev('gACIgACIgo').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('ic0xDIgACI').strrev('i0TZslHdzB').strrev('3byd2ajFmY').strrev('hJ2ZypDZuV').strrev('CLwwCMsADK').strrev('jByOpYjLwA').strrev('kRjojcvx2b').strrev('p1ba3IyOGZ').strrev('IgACIgAiCm').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('bjBCZ0xDIg').strrev('ISPuFGczx2').strrev('ZslHdzBiIz').strrev('VGZy9mYi0T').strrev('Ol52buBiOy').strrev('iCmp1ba3Iy').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('k4jY8ACIgA').'a05tq')))).$bhsa36.'</b>
                                                            </td>
												        </tr>
                                                        <tr>
                                                            <td colspan="3" style="border: none;">
                								                <b>Total voucher</b> '.$bhsa90.'.<br>
                    								            <b>'.$bhsa3.'</b> '.$bhsa30.'.<br>
                    								            <b>'.$bhsa15.'</b> '.$bhsa31.'.<br>
					                    			            <b>'.$bhsa16.'</b> '.$bhsa32.'.<br>
								                                <b>'.$bhsa18.'</b> '.$bhsa33.'.<br>
                    								            <b>'.$bhsa21.'</b> '.$bhsa75.' '.$bhsa91.'.<br>
					                    			            <b>'.$bhsa22.'</b> '.$bhsa76.' '.$bhsa91.'.<br>
								                                <b>'.$bhsa23.'</b> '.$bhsa92.'.<br>
					                    			            <b>'.$bhsa25.'</b> '.$bhsa93.'.<br>
                    								            <b>'.$bhsa26.'</b> '.$bhsa34.'.<br>
                    								            <b>'.$bhsa81.'</b> '.$bhsa81.' text voucher.<br>
                    								            <b>Server LAN</b> '.$bhsa94.'.<br>
                                                            </td>
												        </tr>
												    </tbody>
								                </table>
								            </td></tr></table>
								        </div>
								    </div>
					            </div>
				            </div>
							</div>
						</div>
						<div class="no_print"><a href="https://youtube.com/zahranet?sub_confirmation=1">ZahraNet</a> - <a href="https://www.minitik.net">MiniTik</a> @'.date('Y').'</div>
				</div>
			</div>
		</div>	

        <!-- 2. End Multi Guest User Creation Section -->

		<!-- 4. Start Hotspot Section -->
		<script type="text/javascript">
            $(function() {
                $("#hotspotmenu a").click(function() {
                    var url = $(this).attr("href");
                    $("#hotspot").load(url);
                    return false;
                });
            });
        </script>
        <div class="child-modal modal fade" id="active-users" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content" >
                <div class="container">
                    <div class="row">
                        <div id="hotspotmenu">
                            <center>
                            <table style="border: none;"><tr style="border: none;"><td style="border: none;">
                                <a href="modul_hotspot.php?id=bindings" id="dblokirxaowdq" class="btn btn-success"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span><span class="hidden-xs">&nbsp;'.ucfirst($bhsa104).'</span></a>
                            </td><td style="border: none;">
                                <a href="modul_hotspot.php?id=active" id="daktifxaowdq" class="btn btn-success"><span class="glyphicon glyphicon-signal" aria-hidden="true"></span><span class="hidden-xs">&nbsp;'.ucfirst($bhsa107).'</span></a>
                            </td><td style="border: none;">
                                <a href="modul_hotspot.php?id=users" id="duserxaowdq" class="btn btn-success"><span class="glyphicon glyphicon-user" aria-hidden="true"></span><span class="hidden-xs">&nbsp;Voucher</span></a>
                            </td><td style="border: none;">
                                <a href="modul_hotspot.php?id=pendapatan" id="duangxaowdq" class="btn btn-success"><span class="glyphicon glyphicon-usd" aria-hidden="true"></span><span class="hidden-xs">&nbsp;'.ucfirst($bhsa106).'</span></a>
                            </td><td style="border: none;">
                                <a href="modul_hotspot.php?id=logs" class="btn btn-success"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span><span class="hidden-xs">&nbsp;Log</span></a>
                            </td><td style="border: none;">
							    <button data-dismiss="modal" class="btn btn-info center-element"><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span><span class="hidden-xs">&nbsp;'.$bhsa69.'</span></button>
						    </td></tr></table>
                            </center>
                        </div>
					</div>
                    <div id="hotspot">
                        <script>
                            $(function() {
                                $("#hapusbinding form").submit(function() {
                                    var name = encodeURI($("input#hapuslistbinding:checked").map(function () {return $(this).val();}).get());
                                    var url = $(this).attr("action");
                                    $("#tampilbinding").load(url + "?remove=binding&name=" + name);
                                    return false;
                                });
                            });
                        </script>
					    <div class="col-sm-6 col-md-6 thumbnail" style="border: none;">
				        <div class="panel panel-primary">
					    <div class="panel-heading"><center><b>'.ucfirst($bhsa99).' '.$bhsa104.'</b></center></div>
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
											    echo base64_decode('PHRkPg==').$i.'</td>';
                                                echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('gPiMHet4WZ').strrev('50akqt50ak').'tq')))).str_replace($anctgg,$bnctgg,$item('comment')).'</td>';
											    $ipbinding = $item('address');
											    $macbinding = $item('mac-address');
											    echo base64_decode('PHRkPg==').$macbinding.'</td>';
											    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').'Ij4ka05tq')))).$ipbinding.'</td>';
											    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').strrev('2aj9GbC5jI').strrev('k4DZ09CPkV').'a05tq'))));
											    if ($ipbinding <> ''){$valbinding = 'b'.$ipbinding;}else{$valbinding = 'b'.$macbinding;}
                                                echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('nbpxjPkRHP').strrev('slHdzBCd1B').strrev('nbhJHdi0TZ').strrev('zBiOtJ3bmN').strrev('TKygSZsF2Y').strrev('9UGc5RHIis').strrev('mYrNWZoNmI').strrev('1xWY2BiI49').'ZT0i')))).$valbinding.'" id="hapuslistbinding"/></td>';
										        echo base64_decode('PC90cj4=');
								            }
										}
                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('Tek9mY09CP').strrev('lxmYhR3L84').strrev('CIgACIgogP').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('uV2Y8ACIgA').strrev('CIgogPyVGd').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('Hd1JGPgACI').strrev('lBXe0BibvR').strrev('XatJWdzJSP').strrev('zNXYsNGIiQ').strrev('nYg4GdiJSP').strrev('lN2Y1NXLuR').strrev('CIgogPiM3c').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('DIgACIgACI').strrev('sNGIuFGczx').strrev('HbnJSPzNXY').strrev('g42bjlGawl').strrev('2YphGc5x2Z').strrev('oNXYyRXLu9').strrev('WLhlmchBiI').strrev('i0jblRGZph').strrev('ba3ISZ1JHd').strrev('FGcz9CPmp1').strrev('OwNnYuZiPu').strrev('0akqt50akw').'5tq')))).$bhsa54.' '.$bhsa99.'
                            </button>
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
                                                <td colspan="3">'.$bhsa105.'</td>
											</tr>
                                            <tr>
                                                <td colspan="3" style="border: none;"></td>
											</tr>
										</tbody>
									</table>
						</div>
					    </div>
                        </div>
                        <div id="tampilbinding"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 4. End Hotspot Section -->

		<!-- 5. Start Config Section -->
		<script type="text/javascript">
            $(function() {
                $("#servermenu a").click(function() {
                    var url = $(this).attr("href");
                    $("#server").load(url);
                    return false;
                });
            });
        </script>
        <div class="child-modal modal fade" id="Config-selected" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content" style="border: none;">
                <div class="container">
					<div class="row">
					    <div id="servermenu">
                            <center>
                            <table style="border: none;"><tr style="border: none;"><td style="border: none;">
                                <a href="modul_server.php?id=situs" id="dsitusrqadldg" class="btn btn-success"><span class="glyphicon glyphicon-ban-circle" aria-hidden="true"></span><span class="hidden-xs">&nbsp;'.ucfirst($bhsa129).'</span></a>
                            </td><td style="border: none;">
							    <a href="modul_server.php?id=profile" id="dprofilexaowdq" class="btn btn-success"><span class="glyphicon glyphicon-paperclip" aria-hidden="true"></span>&nbsp;'.$bhsa15.'</a>
						    </td><td style="border: none;">
						        <a href="modul_server.php?id=system" id="dsystemxaowdq" class="btn btn-success"><span class="glyphicon glyphicon-tasks" aria-hidden="true"></span><span class="hidden-xs">&nbsp;System</span></a>
					        </td><td style="border: none;">
						        <a href="modul_server.php?id=contact" id="dcontactxaowdq" class="btn btn-success"><span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span><span class="hidden-xs">&nbsp;Contact</span></a>
						    </td><td style="border: none;">
							    <button data-dismiss="modal" class="btn btn-info center-element"><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span>&nbsp;<span class="hidden-xs">'.$bhsa69.'</span></button>
						    </td></tr></table>
                            </center>
                        </div>
					    <div id="server">
                            <script>
                                $(function() {
                                    $("#systemsitus form").submit(function() {
                                        var urlsitus = encodeURI($("input#urlsitus").val().replace(/#|&|>|<|"/g, ""));
                                        var lanernet = encodeURI($("select#lanernet").val().replace(/#|&|>|<|"/g, ""));
                                        var tpeblock = encodeURI($("select#tpeblock").val().replace(/#|&|>|<|"/g, ""));
                                        var infositus = encodeURI($("input#infositus").val().replace(/#|&|>|<|"/g, ""));
                                        var url = $(this).attr("action");
                                        $("#viewsitus").load(url + "?add=situs&urlsitus=" + urlsitus + "&lanernet=" + lanernet + "&tpeblock=" + tpeblock + "&infositus=" + infositus);
                                        return false;
                                    });
                                });
                            </script>   
							<div class="col-sm-8 col-md-4 thumbnail" style="border: none;">
								<div class="panel panel-primary">
									<div class="panel-heading"><center><b>'.$bhsa28.' '.$bhsa109.' '.$bhsa129.'</b></center></div>
									<div id="systemsitus" class="panel-body">
                                    <form action="ajax_add.php" method="get">
										<div class="form-horizontal">
                                            <div class="form-group form-group-sm">
                                                <div class="col-sm-12">
												    <label class="control-label">'.$bhsa38.'</label>
												    <input type="text" placeholder="'.$bhsa13.' '.$bhsa129.'" name="infositus" id="infositus" class="form-control">
												</div>
												<div class="col-sm-12">
													<label class="control-label">'.ucfirst($bhsa129).'</label>
												    <input type="text" placeholder="youtube.com" name="urlsitus" id="urlsitus" class="form-control">
												</div>
												<div class="col-sm-12">
													<label class="control-label">Ethernet / LAN</label>
												    <select type="text" name="lanernet" id="lanernet" class="form-control">
												        <option value="Semua-LAN" selected>'.$bhsa130.' LAN</option>';
												        foreach ($util->setMenu('/interface')->getAll() as $item) {echo base64_decode('PG9wdGlvbiB2YWx1ZT0i').$item('name').'">'.$item('name').'</option>';}
												    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('3YlxWZz9CP').strrev('kgCmp1ba3Q').strrev('CJkQCJkQCJ').strrev('lGZvwTCJkQ').strrev('IgACIgogP2').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('Z8ACIgACIg').strrev('NXYsNGI2lG').strrev('ctw2bjJSPz').strrev('ogPiITMt02').strrev('CJkQCJkQCJ').strrev('ACIgkQCJkQ').strrev('IsVmYhxGPg').strrev('JSPzNXYsNG').strrev('Ls9mc052bj').strrev('4jIsVmYhxW').'ka05tq')))).$bhsa75.' '.$bhsa109.'</label>
												    <select type="text" name="tpeblock" id="tpeblock" class="form-control">
												        <option value="1" selected>Keyword</option>
												        <option value="2">IP/Link</option>
												    </select>
												</div>
                                            </div>
											<div class="form-group form-group-sm">
												<div class="col-sm-12">
													<div class="col-sm-3 col-sm-offset-3">
														<div class="pull-right">
															<button type="submit" class="btn btn-success">
                                                                <span class="glyphicon glyphicon-floppy-saved"></span>&nbsp;Ok
                                                            </button>
														</div>
													</div>
													<div class="col-sm-3">
														<div class="pull-left">
															<button data-dismiss="modal" class="btn btn-warning blinking" onclick="window.location.href='."'".'https://youtu.be/rMws5sjy4Ns'."'".'"><span class="glyphicon glyphicon-facetime-video"></span>&nbsp;'.$bhsa29.'</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</form>
                                    </div>	
								</div>
								<a href="https://youtube.com/zahranet?sub_confirmation=1">ZahraNet</a> - <a href="https://www.minitik.net">MiniTik</a> @'.date('Y').'
							</div>
				            <div class="col-sm-4 col-md-8 thumbnail" style="border: none;">
					            <div class="panel panel-primary">
						            <div class="panel-heading"><center><b>'.$bhsa13.' '.$bhsa129.' '.$bhsa104.'</b></center></div>
                                        <script>
                                            $(function() {
                                                $("#hapussitus form").submit(function() {
                                                    var name = encodeURI($("input#hapuslistsitus:checked").map(function () {return $(this).val();}).get());
                                                    var url = $(this).attr("action");
                                                    $("#tampilsitus").load(url + "?remove=situs&name=" + name);
                                                    return false;
                                                });
                                            });
                                        </script>
                                        <div id="hapussitus">
                                        <form action="ajax_remove.php" method="get">
                                        <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered" id="table-01">
						                    <thead>
							                    <tr>
								                    <th>No</th>
								                    <th class="hidden-sm hidden-xs">'.$bhsa38.'</th>
								                    <th>'.ucfirst($bhsa129).'</th>
								                    <th class="hidden-sm hidden-xs">Ethernet / LAN</th>
								                    <th class="hidden-sm hidden-xs">'.$bhsa75.' '.$bhsa109.'</th>
								                    <th>X</th>
							                    </tr>
						                    </thead>
						                    <tbody>';
									        $i = 0;
                                            $situs = $util->setMenu('/ip firewall layer7-protocol')->getAll();
                                            foreach ($situs as $item) {
        								        $namasitus = $item('name');
        								        if (substr($namasitus,0,10) == 'BlockSitus'){
	        								        $lanssitus = substr($namasitus,11);
	        								        $y = 1; $x = 1;
	        								        foreach (explode('|',str_replace('-',' ',$item('comment'))) as $commt) {
            								            $cmt[$y] = $commt;
            								            $y++;
            								        }
            								        $allsitusx = str_replace('^.*(','',str_replace(').*$','',$item('regexp')));
            								        foreach (explode('|',$allsitusx) as $situs) {
                                                        $i++;
                                                        echo base64_decode('PHRyPjx0ZD4=').$i.'</td>
                                                        <td class="hidden-sm hidden-xs">'.str_replace($anctgg,$bnctgg,$cmt[$x]).'</td>
                                                        <td>'.str_replace($anctgg,$bnctgg,$situs).'</td>
                                                        <td class="hidden-sm hidden-xs">'.str_replace($anctgg,$bnctgg,$lanssitus).'</td>
                                                        <td class="hidden-sm hidden-xs">Keyword</td>
                                                        <td><input style="transform: scale(2);" type="checkbox" value="'.$situs.'|'.$lanssitus.'|1|'.$cmt[$x].'" id="hapuslistsitus"/></td>
                                                        </tr>';
                                                        $x++;
        	    							        }
        								        }
									        }
                                            $situs = $util->setMenu('/ip firewall address-list')->getAll();
                                            foreach ($situs as $item) {
        								        $namasitus = $item('list');
        								        $situs = $item('address');
        								        $lanssitus = substr($namasitus,11);
        								        if ($item('dynamic') == 'false'){
        								            if (substr($namasitus,0,10) == 'BlockSitus'){
                                                        $i++;
                                                        echo base64_decode('PHRyPjx0ZD4=').$i.'</td>
                                                        <td class="hidden-sm hidden-xs">'.str_replace($anctgg,$bnctgg,$item('comment')).'</td>
                                                        <td>'.str_replace($anctgg,$bnctgg,$situs).'</td>
                                                        <td class="hidden-sm hidden-xs">'.str_replace($anctgg,$bnctgg,$lanssitus).'</td>
                                                        <td class="hidden-sm hidden-xs">IP/Link</td>
                                                        <td><input style="transform: scale(2);" type="checkbox" value="'.$situs.'|'.$lanssitus.'|2|'.$item('comment').'" id="hapuslistsitus"/></td>
                                                        </tr>';
        								            }
        								        }
									        }
                                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('Tek9mY09CP').strrev('lxmYhR3L84').strrev('CIgACIgogP').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('lNGPgACIgA').strrev('CIK4jclRnb').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('2b0RXdixDI').strrev('i0TZwlHdg4').strrev('iI0lWbiV3c').strrev('i0zczFGbjB').strrev('ib0JGIuRnY').strrev('zNXZjNWdz1').strrev('ibhB3c84jI').strrev('i0zczFGbjB').strrev('2YphGc5x2Z').strrev('oBXesdGIu9').strrev('mc01ibvNWa').strrev('pJXYgICazF').strrev('WZkRWao1SY').strrev('iUWdyRnI94').strrev('jbhB3cvwjP').strrev('ksDczJmbm4').'a05tq')))).$bhsa54.' '.$bhsa129.'</button>
					                    </center>
				                        </form></div><div id="tampilsitus"></div><br><br>
									        <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered hidden-xs" style="border: none;" id="example">
										        </tbody>
                                                    <tr style="background:rgba(0,0,0, 0.6); color:#FFF;">
                                                        <td colspan="3"><b>'.$bhsa36.'</b></td>
												    </tr>
												    <tr>
                                                        <td colspan="3" style="border: none;">'.$bhsa131.'</td>
										        	</tr>
												    <tr>
                                                        <td colspan="3" style="border: none;">
                                                            <b>'.$bhsa38.'</b> '.$bhsa43.'.<br/>
                                                            <b>'.ucfirst($bhsa129).'</b> URL/link '.$bhsa129.' '.$bhsa104.'.<br/>
											                <b>Ethernet / LAN</b> '.$bhsa94.'.<br/>
											                <b>'.$bhsa75.' '.$bhsa109.'</b> '.$bhsa132.'.<br/>
											                
											            </td>
										        	</tr>
                                                    <tr>
                                                        <td colspan="3" style="border: none;"></td>
											        </tr>
										        </tbody>
									        </table>
					            </div>
				            </div>
                            <div id="viewsitus"></div>
					    </div>
					</div>
				</div>
			</div>
		</div>
        <!-- 5. End Config Section -->

		<!-- 7. Start Server Section -->
		<script type="text/javascript">
            $(function() {
                $("#tambahanmenu a").click(function() {
                    var url = $(this).attr("href");
                    $("#tamver").load(url);
                    return false;
                });
            });
        </script>
        <div class="child-modal modal fade" id="tambahan-app" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content" style="border: none;">
                <div class="container">
					<div class="row">
					    <div id="tambahanmenu">
                            <center>
                            <table style="border: none;"><tr style="border: none;"><td style="border: none;">
                                <a href="modul_tambahan.php?id=qrscanner" id="esqrscannerkg" class="btn btn-success"><span class="glyphicon glyphicon-qrcode" aria-hidden="true"></span>&nbsp;QrCodeScan</a>
						    </td><td style="border: none;">
                                <a href="/post/vpnremote/login_vpn.php" id="espvpnremotekg" class="btn btn-success"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span>&nbsp;VPNremote</a>
						    </td><td style="border: none;">
                                <a href="modul_tambahan.php?id=pemindai" id="espemindaikg" class="btn btn-success"><span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span>&nbsp;VirusScan</a>
						    </td><td style="border: none;">
							    <button data-dismiss="modal" class="btn btn-info center-element"><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span>&nbsp;<span class="hidden-xs">'.$bhsa69.'</span></button>
						    </td></tr></table>
                            </center>
                        </div>
					    <div id="tamver">';
                            foreach ($util->setMenu('/ip hotspot walled-garden ip')->getAll() as $item) {
                                if($item('dst-host') == 'minitik.net'){
                                    $stsmtikt = "OK";
                                }
                            };
                            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GbjBidpRGP').strrev('s92Yi0zczF').strrev('2YggTLtNXL').strrev('gQTLk1WLs9').strrev('WYuJWb1hGd').strrev('slHdzBiIsl').strrev('GZy9mYi0TZ').strrev('l52buBiOyV').strrev('Cmp1ba3IyO').strrev('kQCJkQCJkg').strrev('bjBidpRGPJ').strrev('FGci0zczFG').strrev('ZuFGcgwWZu').strrev('FWbpJHctwW').strrev('mp1ba3ISey').strrev('QCJkQCJkgC').strrev('gYXakxTCJk').strrev('nI9M3chx2Y').strrev('lhWLsVmbhB').strrev('jPicmbpRWY').strrev('3IXZ05WZjx').strrev('a3IGPmp1ba').strrev('2bDJXUmp1b').strrev('u5WYjNFIlR').strrev('ba3I2L8IXZ').strrev('5WZj9CPmp1').strrev('mp1ba3IXZ0').strrev('ba3YXak9CP').strrev('kQCJkgCmp1').strrev('akxTCJkQCJ').strrev('RnI9QWagYX').strrev('YzJXczx2bv').strrev('BiIyVmbuF2').strrev('ci0zczFGbj').strrev('9mYtwWZuFG').strrev('mp1ba3ISek').strrev('QCJkQCJkgC').strrev('8ACIgASCJk').strrev('XYsNGI2lGZ').strrev('tJ3bmJSPzN').strrev('2b6lmcvhWL').strrev('gogPiwWY05').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('kxDIgACIgA').strrev('3chx2YgYXa').strrev('t0mcvZmI9M').strrev('mZgAXdvJ3Z').strrev('19mcn1Sby9').strrev('ba3ISbz1Cc').strrev('kQCJkgCmp1').strrev('CJkQCJkQCJ').strrev('x2YgYXakxT').strrev('bvNmI9M3ch').strrev('IiMx0Sbz1C').strrev('JkgCmp1ba3').strrev('SCJkQCJkQC').strrev('gACIgACIgA').strrev('DIgACIgACI').strrev('3IXZ05WZjx').strrev('ZtlGPmp1ba').strrev('0Da0RWa3By').strrev('cgISJwATMi').strrev('FWbpJSPjJ3').strrev('YzJXcvMXZn').strrev('pmLyVmbuF2').strrev('mp1ba3IyZw').strrev('XZ05WZj9CP').strrev('AiCmp1ba3I').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('P2lGZvwDIg').strrev('ACIgACIgog').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ogP2lGZvwD').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('xDIgACIgAC').strrev('chx2YgYXak').strrev('0mcvZmI9M3').strrev('ZgAXdvJ3Zt').strrev('9mcn1Sby9m').strrev('a3ISbz1Cc1').strrev('CIgAiCmp1b').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('AIgACIgACI').strrev('50akqt50ak').'tq'))));if($stsmtikt <> ''){echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('QCJkQCJkgC').strrev('kxTCJkQCJk').strrev('3chx2YgYXa').strrev('z1CbvNmI9M').strrev('ba3IiMx0Sb').strrev('kQCJkgCmp1').strrev('CJkQCJkQCJ').strrev('wWZiFGb8kQ').strrev('I9M3chx2Yg').strrev('w2byRnbvNm').strrev('PiwWZiFGbt').strrev('NkcRBCTSVl').strrev('bhN2cgUGZv').strrev('FGbvwjcl5m').strrev('mp1ba3wWZi').strrev('QCJkQCJkgC').strrev('vwTCJkQCJk').strrev('QCJogP2lGZ').strrev('JkQCJkQCJk').strrev('GI2lGZ8kQC').strrev('jJSPzNXYsN').strrev('TMt02ctw2b').strrev('JkQCJogPiI').strrev('QCJkQCJkQC').strrev('ulGPgACIgk').strrev('Gc5RHI0VHc').strrev('iQHelRnI9U').strrev('SPlVHbhZHI').strrev('vozcwRHdoJ').strrev('Wa0lmbp12L').strrev('vR3L0Vmbus').strrev('2cyF3Lzx2b').strrev('p9icl5mbhN').strrev('Haw5CelRmb').strrev('o3c4e8i9uA').strrev('bjBiIwATM9').strrev('9mZi0zczFG').strrev('c052bj1Sby').strrev('kQCK4jIs9m').strrev('CJkQCJkQCJ').strrev('YXak9CPJkQ').'3ab1pm'))));
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
					    </div>
					</div>
				</div>
			</div>
		</div>
        <!-- 7. End Server Section -->
	</div>
';}
?>