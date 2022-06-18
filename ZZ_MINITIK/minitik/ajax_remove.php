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

if($_GET["remove"] == 'voucher'){
    if (isset($_GET['name'])){$name = $_GET['name'];}
    if ($name <> '') {
        $util->setMenu('/ip hotspot user');
        $voucherall = explode(',', $name);
        foreach ($voucherall as $voucher){
            $util->remove(RouterOS\Query::where('name', $voucher));
        }
        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('DdwlmcjNHP').strrev('uVWb1N2bk5').strrev('GbFRXZn5Cd').strrev('JlnQ05WZtV').strrev('XZzVHZigCZ').strrev('iEHZ39WY4J').strrev('yajlGbj5SK').strrev('yN2cvwzOpg').strrev('50akgP0BXa').'tqka05tq'))));
    }else{
        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('DdwlmcjNHP').strrev('owWYk9Wbj5').strrev('FIzVHchhkI').strrev('iIXZoNWdvZ').strrev('Wd05WViACL').strrev('hh2ZuVWbgs').strrev('WdvZHIzVHc').strrev('pNHIsIXZoN').strrev('GIuF2aoFGb').strrev('0Bycpx2alN').strrev('CapJWZsJXZ').strrev('uUHb1hWYkB').strrev('2diACLiEiL').strrev('pIyZulmbyF').strrev('HcpJ3Yz9CP').'Q3ab1pm'))));
    }
}

if($_GET["remove"] == 'binding'){
    if (isset($_GET['name'])){$name = $_GET['name'];}
    if ($name <> '') {
        $util->setMenu('/ip hotspot ip-binding');
        $bindingall = explode(',', $name);
        foreach ($bindingall as $binding){
            $typeg = substr($binding,0,1);
            $tuoer = substr($binding,1);
            $uurxe = $uurxe.'<br>'.$tuoer;
            if (strlen($tuoer) < 16){
                if ($typeg == 'b'){
                    $util->remove(RouterOS\Query::where('address', $tuoer));
                }else{
                    $util->enable(RouterOS\Query::where('address', $tuoer));
                }
            }else{
                if ($typeg == 'b'){
                    $util->remove(RouterOS\Query::where('mac-address', $tuoer));
                }else{
                    $util->enable(RouterOS\Query::where('mac-address', $tuoer));
                }
            }
        }
        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('DdwlmcjNHP').strrev('uVWb1N2bk5').strrev('GbFRXZn5Cd').strrev('JlnQ05WZtV').strrev('2bsJGZigCZ').strrev('kd3bhhncpt').strrev('WasNmLpISc').strrev('z9CP7kCKrN').strrev('ba3QHcpJ3Y').'1pm'))));
    }else{
        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('DdwlmcjNHP').strrev('owWYk9Wbj5').strrev('EIzVHchhkI').strrev('vR3Ugs2bsJ').strrev('nbVJCIsICc').strrev('n5WZtBya1R').strrev('mQgMXdwFGa').strrev('hBCZlt2Yvx').strrev('3b0NFI1FGd').strrev('pNHIsQWZwB').strrev('GIuF2aoFGb').strrev('0Bycpx2alN').strrev('CapJWZsJXZ').strrev('uUHb1hWYkB').strrev('2diACLiEiL').strrev('pIyZulmbyF').strrev('HcpJ3Yz9CP').'Q3ab1pm'))));
    }
}

if($_GET["remove"] == 'iprumah'){
    if (isset($_GET['name'])){$name = $_GET['name'];}
    if ($name <> '') {
        $util->setMenu('/ip hotspot ip-binding');
        $bindingall = explode(',', $name);
        foreach ($bindingall as $binding){
            $util->remove(RouterOS\Query::where('address', $binding));
        }
        $util->setMenu('/queue simple');
        $bindingall = explode(',', $name);
        foreach ($bindingall as $binding){
            $util->remove(RouterOS\Query::where('name', 'RumDef-'.$binding));
            $util->remove(RouterOS\Query::where('name', 'RumBig-'.$binding));
        }
        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('DdwlmcjNHP').strrev('uVWb1N2bk5').strrev('GbFRXZn5Cd').strrev('JlnQ05WZtV').strrev('Wb1JXYigCZ').strrev('op2dv5WYoF').strrev('WasNmLpIyZ').strrev('z9CP7kCKrN').strrev('ba3QHcpJ3Y').'1pm'))));
    }else{
        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('DdwlmcjNHP').strrev('owWYk9Wbj5').strrev('FIzVHchhkI').strrev('hd2ZuFGblB').strrev('Gah1WdSBib').strrev('uVlIgwiIuF').strrev('mbl1GIrVHd').strrev('wByc1BXYod').strrev('WYndmbhxWZ').strrev('hhWYtVncg4').strrev('WYsl2cgwib').strrev('rV2Yg4WYrh').strrev('mclRHIzlGb').strrev('hRGIolmYlx').strrev('SIu4SdsVHa').strrev('uJXY3JCIsI').strrev('3L8kiIn5Wa').strrev('k4DdwlmcjN').'a05tq'))));
    }
}

if($_GET["remove"] == 'profile'){
    if (isset($_GET['name'])){$name = $_GET['name'];}
    if ($name <> '') {
        $profileall = explode(',', $name);
        foreach ($profileall as $profile){
            $util->setMenu('/ip hotspot user profile')->remove(RouterOS\Query::where('name', $profile));
            $util->setMenu('/ip hotspot user')->remove(RouterOS\Query::where('name', 'MiniTik-'.$profile));
        }
        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('DdwlmcjNHP').strrev('uVWb1N2bk5').strrev('GbFRXZn5Cd').strrev('JlnQ05WZtV').strrev('2byBHZigCZ').strrev('39WY4VGbpZ').strrev('Gbj5SKiEHZ').strrev('vwzOpgyajl').strrev('gP0BXayN2c').strrev('50akqt50ak').'tq'))));
    }else{
        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('DdwlmcjNHP').strrev('owWYk9Wbj5').strrev('FIzVHchhkI').strrev('iUGbpZ2byB').strrev('Wd05WViACL').strrev('hh2ZuVWbgs').strrev('2byBHIzVHc').strrev('pNHIsUGbpZ').strrev('GIuF2aoFGb').strrev('0Bycpx2alN').strrev('CapJWZsJXZ').strrev('uUHb1hWYkB').strrev('2diACLiEiL').strrev('pIyZulmbyF').strrev('HcpJ3Yz9CP').'Q3ab1pm'))));
    }
}

if($_GET["remove"] == 'situs'){
    if (isset($_GET['name'])){$name = $_GET['name'];}
    if ($name <> '') {
        foreach (explode(',', $name) as $situs){
            $tq = 1;
            foreach (explode('|', $situs) as $sjtr){
                if ($tq == 1){
                    $link = $sjtr;
                    $tq = 2;
                }elseif ($tq == 2){
                    $lank = $sjtr;
                    $tq = 3;
                }elseif ($tq == 3){
                    $lrnk = $sjtr;
                    $tq = 4;
                }else{
                    $lcnk = $sjtr;
                    $tq = 1;
                }
            }
            if ($lrnk == 1){
                $rwws = $util->setMenu('/ip firewall layer7-protocol')->get(RouterOS\Query::where('name', 'BlockSitus-'.$lank),'regexp');
                $rcws = $util->setMenu('/ip firewall layer7-protocol')->get(RouterOS\Query::where('name', 'BlockSitus-'.$lank),'comment');
                if (strpos($rwws,$link.'|')){
                    $wlker = str_replace($link.'|','',$rwws);
                    $wlkcr = str_replace($lcnk.'|','',$rcws);
                    $util->setMenu('/ip firewall layer7-protocol')->set(RouterOS\Query::where('name', 'BlockSitus-'.$lank), array('regexp' => $wlker, 'comment' => $wlkcr));
                }elseif (strpos($rwws,'|'.$link)){
                    $wlker = str_replace('|'.$link,'',$rwws);
                    $wlkcr = str_replace('|'.$lcnk,'',$rcws);
                    $util->setMenu('/ip firewall layer7-protocol')->set(RouterOS\Query::where('name', 'BlockSitus-'.$lank), array('regexp' => $wlker, 'comment' => $wlkcr));
                }else{
                    $util->setMenu('/ip firewall filter')->remove(RouterOS\Query::where('comment', 'BlockKEYWORDSitus-'.$lank));
                    $util->setMenu('/ip firewall filter')->remove(RouterOS\Query::where('comment', 'BlockSitus-'.$lank));
                    $util->setMenu('/ip firewall layer7-protocol')->remove(RouterOS\Query::where('name', 'BlockSitus-'.$lank));
                }
            }else{
                $situs = $util->setMenu('/ip firewall address-list')->getAll();
                $jmlte = 1;
                foreach ($situs as $item) {
	                if ($item('dynamic') == 'false'){
	        			if (substr($item('list'),0,10) == 'BlockSitus'){
	        			    $jmlte = $jmlte + 1;
	        			}
	                }
                }
                if ($jmlte > 2){
                    $util->setMenu('/ip firewall address-list')->remove(RouterOS\Query::where('address', $link));
                }else{
                    $util->setMenu('/ip firewall filter')->remove(RouterOS\Query::where('comment', 'BlockIPLINKSitus-'.$lank));
                    $util->setMenu('/ip firewall filter')->remove(RouterOS\Query::where('comment', 'BlockSitus-'.$lank));
                    $util->setMenu('/ip firewall address-list')->remove(RouterOS\Query::where('address', $link));
                }
            }
        }
        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('DdwlmcjNHP').strrev('uVWb1N2bk5').strrev('GbFRXZn5Cd').strrev('JlnQ05WZtV').strrev('HdpNHZigCZ').strrev('kxGZhFnczV').strrev('WasNmLpIyZ').strrev('z9CP7kCKrN').strrev('ba3QHcpJ3Y').'1pm'))));
    }else{
        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('DdwlmcjNHP').strrev('owWYk9Wbj5').strrev('FIzVHchhkI').strrev('gwiIzVHdpN').strrev('GIrVHduVlI').strrev('1BXYodmbl1').strrev('yc1RXazByc').strrev('rhWYsl2cgw').strrev('GbrV2Yg4WY').strrev('lxmclRHIzl').strrev('HahRGIolmY').strrev('sISIu4SdsV').strrev('WauJXY3JCI').strrev('jN3L8kiIn5').strrev('0ak4Ddwlmc').'5tq'))));
    }
}

if($_GET["remove"] == 'active'){
    if (isset($_GET['name'])){$name = $_GET['name'];}
    if (isset($_GET['aksi'])){$aksi = $_GET['aksi'];}
    if ($name <> '') {
        $dcinall = explode(',', $name);
        if ($aksi == 'activedisconect'){
            $util->setMenu('/ip hotspot host');
            foreach ($dcinall as $dcin){
                $typeg = substr($dcin,0,1);
                $tuoer = substr($dcin,1);
                $uurxe = $uurxe.'<br>'.$tuoer;
                if (strlen($tuoer) < 16){
                    $util->remove(RouterOS\Query::where('address', $tuoer));
                }else{
                    $util->remove(RouterOS\Query::where('mac-address', $tuoer));
                }
            }
            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('DdwlmcjNHP').strrev('owWYk9Wbj5').strrev('mbyVGdulkI').strrev('0VHcpREI0V').strrev('2SiACLiMXd').strrev('kASaztWZu9').'a05tq')))).$uurxe.'<br>Berhasil di putuskan..!<br>(Tidak bekerja untuk user AutoLogin)", "success")</script>';
            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('DdwlmcjNHP').strrev('uVWb1N2bk5').strrev('GbFRXZn5Cd').strrev('JlnQ05WZtV').strrev('GdrFGZigCZ').strrev('xR2dvFGeml').strrev('2Ypx2YukiI').strrev('jN3L8sTKos').strrev('0ak4Ddwlmc').'5tq'))));
        }
        if ($aksi == 'activeblock'){
            $util->setMenu('/ip hotspot ip-binding');
            foreach ($dcinall as $dcin){
                $typeg = substr($dcin,0,1);
                $tuoer = substr($dcin,1);
                $uurxe = $uurxe.'<br>'.$tuoer;
                if (strlen($tuoer) < 16){
                    if ($typeg == 'b'){
                        $util->disable(RouterOS\Query::where('address', $tuoer));
                    }else{
                        $util->add(array('address' => "$tuoer", 'type' => "blocked", 'disabled' => "no",));
                    }
                }else{
                    if ($typeg == 'b'){
                        $util->disable(RouterOS\Query::where('mac-address', $tuoer));
                    }else{
                        $util->add(array('mac-address' => "$tuoer", 'type' => "blocked", 'disabled' => "no",));
                    }
                }
            }
            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('DdwlmcjNHP').strrev('uVWb1N2bk5').strrev('GbFRXZn5Cd').strrev('JlnQ05WZtV').strrev('2bsJGZigCZ').strrev('kd3bhhncpt').strrev('WasNmLpISc').strrev('z9CP7kCKrN').strrev('ba3QHcpJ3Y').'1pm'))));
        }
    }else{
        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('DdwlmcjNHP').strrev('owWYk9Wbj5').strrev('WQgIXZzVlI').strrev('iACLiYWa0t').strrev('WbgsWd05WV').strrev('rNXd0VHctV').strrev('WZu92ag4WY').strrev('sl2cgwSazt').strrev('2Yg4WYrhWY').strrev('lRHIzlGbrV').strrev('GIolmYlxmc').strrev('u4SdsVHahR').strrev('XY3JCIsISI').strrev('8kiIn5WauJ').strrev('DdwlmcjN3L').'4ka05tq'))));
    }
}

if($_GET["remove"] == 'event'){
    if (isset($_GET['name'])){$name = $_GET['name'];}
    if ($name <> '') {
        $eventall = explode(',', $name);
        foreach ($eventall as $event){
            if (empty($util->setMenu('/ip hotspot host')->find(RouterOS\Query::where('comment', 'Event-'.$event)))){
                $util->setMenu('/system scheduler')->remove(RouterOS\Query::where('name', '--StartEvent-'.$event.'--'));
                $util->setMenu('/system scheduler')->remove(RouterOS\Query::where('name', '--EndEvent-'.$event.'--'));
            }else{
                $util->setMenu('/system scheduler')->remove(RouterOS\Query::where('name', '--StartEvent-'.$event.'--'));
                $util->setMenu('/system scheduler')->remove(RouterOS\Query::where('name', '--EndEvent-'.$event.'--'));
                $util->setMenu('/system scheduler')->add(array('name' => '--EndEvent-Delete--', 'interval' => '00:00:03', 'disabled' => 'no', 'on-event' => '/system scheduler remove [find name="--StartEvent-'.$event.'--"]; delay 1s; foreach i in=[/queue simple find ] do={if ([pick [/queue simple get $i name] 0 6] = "OthBig") do={/queue simple remove $i}; if ([pick [/queue simple get $i name] 0 6] = "OthDef") do={/queue simple remove $i}}; /ip hotspot ip-binding remove [find comment="Event-'.$event.'"]; delay 1s; /system scheduler remove [find name="--EndEvent-Delete--"];'));
            }
        }
        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('DdwlmcjNHP').strrev('uVWb1N2bk5').strrev('GbFRXZn5Cd').strrev('JlnQ05WZtV').strrev('WZ2VWYigCZ').strrev('op2dv5WY05').strrev('WasNmLpIyZ').strrev('z9CP7kCKrN').strrev('ba3QHcpJ3Y').'1pm'))));
    }else{
        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('DdwlmcjNHP').strrev('owWYk9Wbj5').strrev('EIzVHchhkI').strrev('gwiIhJXYjF').strrev('GIrVHduVlI').strrev('1BXYodmbl1').strrev('XY0ZWYkByc').strrev('sEmchNWYgI').strrev('2aoFGbpNHI').strrev('px2alNGIuF').strrev('WZsJXZ0Byc').strrev('1hWYkBCapJ').strrev('CLiEiLuUHb').strrev('ulmbyF2diA').strrev('3Yz9CPpIyZ').strrev('p1ba3QHcpJ').'m'))));
    }
}

if($_GET["remove"] == 'contact'){
    if (isset($_GET['name'])){$name = $_GET['name'];}
    if ($name <> '') {
        $getcontact = $util->setMenu('/system script')->get(RouterOS\Query::where('name', 'contact-minitik'),'source');
        $contactall = explode(',', $name);
        foreach ($contactall as $contact){
            $getctxaeqe = substr($getcontact,strpos($getcontact,$contact),(strpos($getcontact,').',strpos($getcontact,$contact)) - strpos($getcontact,$contact)) + 2);
            $getcontact = str_replace($getctxaeqe,'', $getcontact);
        }
        if (strlen($getcontact) <> ''){
            $util->setMenu('/system script')->set(RouterOS\Query::where('name', 'contact-minitik'), array('source' => $getcontact));
        }else{
            $util->setMenu('/system script')->remove(RouterOS\Query::where('name', 'contact-minitik'));
        }
        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('DdwlmcjNHP').strrev('uVWb1N2bk5').strrev('GbFRXZn5Cd').strrev('JlnQ05WZtV').strrev('nbvNGZigCZ').strrev('39WY4R3YhR').strrev('Gbj5SKiEHZ').strrev('vwzOpgyajl').strrev('gP0BXayN2c').strrev('50akqt50ak').'tq'))));
    }else{
        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('DdwlmcjNHP').strrev('owWYk9Wbj5').strrev('EIzVHchhkI').strrev('iQ3YhRnbvN').strrev('Wd05WViACL').strrev('hh2ZuVWbgs').strrev('nbvNGIzVHc').strrev('pNHIsQ3YhR').strrev('GIuF2aoFGb').strrev('0Bycpx2alN').strrev('CapJWZsJXZ').strrev('uUHb1hWYkB').strrev('2diACLiEiL').strrev('pIyZulmbyF').strrev('HcpJ3Yz9CP').'Q3ab1pm'))));
    }
}

if($_GET["remove"] == 'nameppp'){
    if (isset($_GET['name'])){$name = $_GET['name'];}
    if ($name <> '') {
        $pppall = explode(',', $name);
        foreach ($pppall as $ppall){
            $tssdppp = explode('|', $ppall);
            $userppp = $tssdppp[0];
            $prflppp = $tssdppp[1];
            $util->setMenu('/ppp secret');
            $util->remove(RouterOS\Query::where('name', $userppp));
            if ($prflppp <> 'default' and empty($util->find(RouterOS\Query::where('profile', $prflppp)))){
                $util->setMenu('/ppp profile')->remove(RouterOS\Query::where('name', $prflppp));
            }
        }
        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('DdwlmcjNHP').strrev('uVWb1N2bk5').strrev('GbFRXZn5Cd').strrev('JlnQ05WZtV').strrev('GcwBXYigCZ').strrev('icGaqd3buF').strrev('yajlGbj5SK').strrev('yN2cvwzOpg').strrev('50akgP0BXa').'tqka05tq'))));
    }else{
        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('DdwlmcjNHP').strrev('owWYk9Wbj5').strrev('FIzVHchhkI').strrev('hd2ZuFGblB').strrev('SRvBFUQBib').strrev('1RnbVJCIsI').strrev('Gan5WZtBya').strrev('sVGcgMXdwF').strrev('FIuF2Zn5WY').strrev('zBCLF9GUQB').strrev('ibhtGahxWa').strrev('gMXastWZjB').strrev('WaiVGbyVGd').strrev('1xWdoFGZgg').strrev('nIgwiIh4iL').strrev('icmbp5mchd').strrev('XayN2cvwTK').strrev('qt50akgP0B').'ka05tq'))));
    }
} 
?>