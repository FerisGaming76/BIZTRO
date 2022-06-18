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

if($_GET["show"] == 'profile'){
    if (isset($_GET['name'])){$name = $_GET['name'];}
    if ($name <> '') {
        $btin = '0';
        $btout = '0';
        $uptm = '00:00:00';
        foreach ($util->setMenu('/ip hotspot user')->getAll() as $counprof){
            if ($counprof('profile') == $name){
                $btin = $btin + $counprof('bytes-in');
                $btout = $btout + $counprof('bytes-out');
            }
        }
        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('DdwlmcjNHP').strrev('owWYk9Wbj5').strrev('3cpRXY0NlI').strrev('vJHUgM3YpR').strrev('CIsISZslmZ').strrev('uV3Zn5WZQJ').strrev('GdhRGIuFWY').strrev('slmZvJHcgE').'ZSAka05tq')))).$name.'<br>Upload: '.round(($btin/1000000000)).'Gb<br>Download: '.round(($btout/1000000000)).'Gb<br>TOTAL: '.round((($btin + $btout)/1000000000)).'Gb<br>Catatan: Data dari seluruh user yang belum di hapus..!", "success")</script>';
    }else{
        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('DdwlmcjNHP').strrev('owWYk9Wbj5').strrev('3cpRXY0NlI').strrev('vJHUgM3YpR').strrev('CIsISZslmZ').strrev('tBya1RnbVJ').strrev('GbpBXbh5WZ').strrev('0FGdzBibht').strrev('GIzNWa0NXa').strrev('vJHcgkmchR').strrev('2cgwSZslmZ').strrev('g4WYrhWYsl').strrev('GdggWaslGc').strrev('ggWaiVGbyV').strrev('iL1xWdoFGZ').strrev('hdnIgwiIh4').strrev('CLicmbp5mc').strrev('yN2cvwTKiI').strrev('50akgP0BXa').'tqka05tq'))));
    }
} 
?>