<?php 
error_reporting(0);
session_start();
echo '<!DOCTYPE html>';
echo '<html lang="id" id="MiniTik">';
$logintime = strtotime("now");
$sturlxa = $_SERVER["QUERY_STRING"];
if ($_POST['bhsa'] <> ''){$_SESSION['bhsa'] = $_POST['bhsa']; $bahasa = $_POST['bhsa'];}
if ($bahasa <> ''){
    include('tools/bahasa/'.$bahasa.'.php');
}elseif ($_SESSION['bhsa'] <> ''){
    $bahasa = $_SESSION['bhsa'];
    include('tools/bahasa/'.$bahasa.'.php');
}else{
    include('tools/bahasa/default.php');
}
if (isset($_POST['btn_update'])){
	$_SESSION['username'] = base64_encode(base64_encode($_POST['username']));
    $_SESSION['password'] = base64_encode(base64_encode($_POST['password']));
    $_SESSION['user'] = $_POST['user'];
	$_SESSION['port'] = $_POST['port'];
	if (file_exists('offline.txt')) {
        $id = str_replace('=','kQ2m7gp4',str_replace('+','Uc9Ts3L0',base64_encode(base64_decode(base64_decode($_SESSION['username'])).','.$_SESSION['user'].','.base64_decode(base64_decode($_SESSION['password'])).','.$_SESSION['port'])));
        $fp = fopen("offline.ico", "w");
        fwrite($fp, '<?php $ylcqnmskj = '."'".$id."'".'; ?>');
        fclose($fp);
    }
}elseif ($_GET['fbclid'] <> ''){
    echo '<script>window.location = "https://minitik.net?'.substr($sturlxa,0,strpos($sturlxa,'fbclid') -1).'";</script>';
}elseif (isset($_GET['a'])){
    $_SESSION['username'] = base64_encode(base64_encode($_GET['a']));
    $_SESSION['password'] = base64_encode(base64_encode($_GET['b']));
    $_SESSION['user'] = $_GET['c'];
    $_SESSION['port'] = $_GET['d'];
    if (file_exists('offline.txt')) {
        $id = str_replace('=','kQ2m7gp4',str_replace('+','Uc9Ts3L0',base64_encode(base64_decode(base64_decode($_SESSION['username'])).','.$_SESSION['user'].','.base64_decode(base64_decode($_SESSION['password'])).','.$_SESSION['port'])));
        $fp = fopen("offline.ico", "w");
        fwrite($fp, '<?php $ylcqnmskj = '."'".$id."'".'; ?>');
        fclose($fp);
    }
    echo '<script>window.location = "http://'.$_SERVER['HTTP_HOST'].'";</script>';
}elseif(isset($_GET['e'])){
    $_SESSION['e'] = $_GET['e'];
    echo '<script>window.location = "http://'.$_SERVER['HTTP_HOST'].'";</script>';
}elseif ($sturlxa <> ''){
    header("Location: https://minitik.net/print.php?".$sturlxa);
    exit();
}
echo '<head>';
include('header.php');
echo '</head><body>';
if($_SESSION['infopesan'] <> ''){
    echo '<script>cmodal("Informasi", " '.$_SESSION['infopesan'].'", "information")</script>';
    $_SESSION['infopesan'] = '';
}
$gaglogfile = "tools/totalkunjungan.txt";
$gagfile = fopen($gaglogfile,"r");
$gagfiledata = fread($gagfile,filesize($gaglogfile));
fclose($gagfile);
$gagfr = fopen($gaglogfile, 'w');
fwrite($gagfr, ($gagfiledata + 1));
fclose($gagfr);
$berlogfile = "tools/totalberhasillogin.txt";
$berfile = fopen($berlogfile,"r");
$berfiledata = fread($berfile,filesize($berlogfile));
fclose($berfile);
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
        $util = new RouterOS\Util($client = new RouterOS\Client(base64_decode(base64_decode($_SESSION['username'])),$_SESSION['user'],base64_decode(base64_decode($_SESSION['password'])),$_SESSION['port'],false,10));
    }
    include_once('home.php');
    $berfr = fopen($berlogfile, 'w');
    fwrite($berfr, ($berfiledata + 1));
    fclose($berfr);
}
catch (Exception $e) {
    if ((strtotime("now") - $logintime) > 8){$_SESSION['infologin'] = 'TimeOut';}else{$_SESSION['infologin'] = 'Normal';}
    include_once('settings.php');
    echo '<br>';
}
echo '</body></html>';
?>