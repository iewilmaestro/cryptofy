<?php
error_reporting(0);
$a = ["iewil","cryptofy","1.0"];
$reg = "https://bit.ly/34hUi7J";
$server = "https://pastebin.com/raw/JGzBgSKe";
$yt = "https://youtube.com/c/iewil";
$disable = col("Script mati karena web update / scam!","m")."\nSupport Channel saya dengan cara\nSubscribe ".col("https://www.youtube.com/c/iewil","k")."\nkarena subscribe itu gratis :D\nUntuk mendapatkan info Script terbaru\nJoin grub via telegram ~> ".col("https://t.me/Iewil_G","c")."\nðŸ‡®ðŸ‡© ".col("Family-Team-Function-INDO","b")."\n";bn();Short();
$zone = json_decode(file_get_contents("http://ip-api.com/json"),1)["timezone"];if($zone){date_default_timezone_set($zone);}
Save('Cookie');Save('User_Agent');
bn();
function host(){
	return "https://cryptofy.club";
}
function ref(){
	return $host."?ref=262";
}
function head(){
	//$user = Save('User_Agent');
	//$cookie = Save('Cookie');
	$cookie = "_ga=GA1.2.2132980794.1643879952; HstCfa4531111=1643879954616; HstCmu4531111=1643879954616; c_ref_4531111=https%3A%2F%2Fwww.google.com%2F; __dtsu=51A016418759290C221C93A1391ED7F8; _cc_id=ca2a8dd5148851fbf2d397321a758840; panoramaId=4ae7c0665c5035a0b8dbb880d17d16d539386ba512eac927bb16061735067c44; PHPSESSID=74c57ed3500c3a45d53585e5ad46dec8; _gid=GA1.2.1200999519.1643973488; HstCnv4531111=2; refer=262; panoramaId_expiry=1644579568496; HstCns4531111=4; _data_cpm=11-1_116-1_129-1; _data_html=1-1_11-1_26-1_55-1_93-1_116-1_129-1; _data_cpc=69-3_77-5_125-3_259-5; HstCla4531111=1643976285935; HstPn4531111=44; HstPt4531111=81; prefetchAd_4412105=true";
	$user = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99 Safari/537.36";
	return [
	"Host: cryptofy.club",
    "user-agent: ".$user,
	"referer: https://cryptofy.club/Autofaucet.php",
	"cookie: ".$cookie];
}
function auto(){
	$url = host()."/Autofaucet.php";
	return Run($url,head());
}
while(true){
	$r = auto();
	preg_match('#<h3>Address</h3>(.*?)<h3>Balance</h3>(.*?)<br />#is',$r,$tk);
	echo col("Balance ","h").col($tk[1],"c").col(" ~> ","m").col("$tk[2]","k")."\n";
	tmr(60);
}
function Run($url, $httpheader = 0, $post = 0, $proxy = 0){$ch = curl_init();curl_setopt($ch, CURLOPT_URL, $url);curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);curl_setopt($ch, CURLOPT_COOKIE,TRUE);
	//curl_setopt($ch, CURLOPT_COOKIEFILE,"cookie.txt");curl_setopt($ch, CURLOPT_COOKIEJAR,"cookie.txt");
	if($post){curl_setopt($ch, CURLOPT_POST, true);curl_setopt($ch, CURLOPT_POSTFIELDS, $post);}if($httpheader){curl_setopt($ch, CURLOPT_HTTPHEADER, $httpheader);}if($proxy){curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, true);curl_setopt($ch, CURLOPT_PROXY, $proxy);}curl_setopt($ch, CURLOPT_HEADER, true);$response = curl_exec($ch);$httpcode = curl_getinfo($ch);if(!$httpcode) return "Curl Error : ".curl_error($ch); else{$header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));$body = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));curl_close($ch);return array($header, $body)[1];}}
function Col($str,$color){if($color=="rand"){$color=['h','k','b','u','m'][array_rand(['h','k','b','u','m'])];}$war=array('rw'=>"\033[107m\033[1;31m",'rt'=>"\033[106m\033[1;31m",'ht'=>"\033[0;30m",'p'=>"\033[1;37m",'a'=>"\033[1;30m",'m'=>"\033[1;31m",'h'=>"\033[1;32m",'k'=>"\033[1;33m",'b'=>"\033[1;34m",'u'=>"\033[1;35m",'c'=>"\033[1;36m",'rr'=>"\033[101m\033[1;37m",'rg'=>"\033[102m\033[1;34m",'ry'=>"\033[103m\033[1;30m",'rp1'=>"\033[104m\033[1;37m",'rp2'=>"\033[105m\033[1;37m");return $war[$color].$str."\033[0m";}
function Bn(){global $a,$reg;system('clear');$m="\033[1;31m";$p="\033[1;37m";$k="\033[1;33m";$h="\033[1;32m";$u="\033[1;35m";$b="\033[1;34m";$c="\033[1;36m";$mp="\033[101m\033[1;37m";$cl="\033[0m";$mm="\033[101m\033[1;31m";$hp="\033[1;7m";$z=trim(strtoupper($a[1]));$x=18;$y=strlen($z);$line=str_repeat('_',$x-$y);echo "\n{$m}[{$p}Script{$m}]->{$k}[".$h.$z."{$k}]-[".$h.$a[2].$k."]".$p.$line.".\n{$u}.__              .__.__ 	    {$p}| \n{$u}|__| ______  _  _|__|  |	\n|  |/ __ \ \/ \/ /  |  |\n|  \  ___/\     /|  |  |__\n|__|\___  >\/\_/ |__|____/\n        \/\n{$mm}[{$mp}▶{$mm}]{$cl} {$k}https://www.youtube.com/c/iewil\n{$c}{$hp} >_{$cl}{$b} Team-Function-INDO\n{$p}────────────────────────────────────\nLink Reg : ".$reg."\n\n";}
function Save($namadata){global $a;if(file_exists($a[1]."/".$namadata)){$datauser=file_get_contents($a[1]."/".$namadata);}else{$datauser=readline(col("Input ".$namadata,"m").col(" > ","p")."\n");echo "\n";file_put_contents($a[1]."/".$namadata,$datauser);}return $datauser;}
function Short(){global $a,$server,$disable;$d=date("D");if(file_exists($_SERVER["TMPDIR"]."/".$a[1])){$day=trim(file_get_contents($_SERVER["TMPDIR"]."/".$a[1]));}else{file_put_contents($_SERVER["TMPDIR"]."/".$a[1],$d);$day=trim(file_get_contents($_SERVER["TMPDIR"]."/".$a[1]));}if($d==$day){}else{unlink($a[1]."/key.txt");unlink($_SERVER["TMPDIR"]."/".$a[1]);}$script = file_get_contents($server);$status = explode('|',explode('#'.$a[1].':',$script)[1])[0];if($status == "on"){RETRY:$rand = rand(0,14);$short = json_decode(file_get_contents('https://pastebin.com/raw/EiKBhp8U'),1);$link = file_get_contents($short[$rand]['url']);$pass = trim(explode(' ',explode('Password: ',$link)[1])[0]);$read = file_get_contents($a[1]."/key.txt");if(file_exists($a[1]."/key.txt")){}else{bn();echo col(" Link Password : ","h").col($short[$rand]['short'],'k')."\n";$p = readline(col(" Password : ","h"));if($pass == $p){file_put_contents($a[1]."/key.txt",$p);}else{echo col(" Password salah!","m")."\n";line();goto RETRY;}}}elseif($status == "off" or $status == null){bn();echo col("The script is disabled","m")."\n\n";echo Slow($disable);exit;}}
function Tmr($tmr){$timr=time()+$tmr;while(true){echo "\r                       \r";$res=$timr-time(); if($res < 1){break;}echo col(date('i:s',$res),"rand");sleep(1);}}
function Slow($msg){$slow = str_split($msg);foreach( $slow as $slowmo ){echo $slowmo; usleep(70000);}}
