<?php
$fkUsrUserId= "2801f4c90d2343758d9e993bb1fae34e";
$time= 5;  //giây.
// id acc của bạn😂😂😂
Echo "       ‼️ 😁😁😁Bot Tool Spin Easy Money V1😁😁😁‼️
🔜🔜🔜🔜🔜Mạnh Master collapse HAYKAL HERNANDEZ AND HĂN C_GAMER 🔚🔚🔚🔚🔚\n"; 
Echo " 🏁 Đang khởi động bot ! Mạnh Master - HĂN C_GAMER 🏁\n";
Echo "          👉MẠNH MASTER FB VÀ HĂN C_GAMER👈 
☢️☢️☢️☢️☢️☢️☢️☢️☢️☢️☢️☢️☢️☢️☢️☢️☢️☢️☢️☢️☢️☢️☢️☢️☢️☢️☢️☢️☢️☢️☢️☢️☢️☢️☢️☢️☢️☢️☢️☢️☢️☢️☢️☢️☢️☢️☢️☢️☢️☢️☢️☢️☢️☢️
YOUTUBE HAYKAL HERNANDEZ OR HAYKAL TUTORIAL CODE REFF: RSI7L8 SELAMAT MENCOBA DAN SEMOGA BERHASIL!!! \n"; 
Echo " ❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️ \n";
$coin = array(0,2,8,10,16,24,40,50,100);
while(1){
$m= file_get_contents("http://39.106.250.13:7500/easy_money/api/gm/gametype/gmGameType/getByUserAndGameType?fkUsrUserId=".$fkUsrUserId."&fkGmGameTypeId=d7e1c39877254d2b8eca3030ec0281be");
$jn = json_decode($m,true); 
$spin = $jn['data']['userResidue'];
$next_time= $jn['data']['nextAddResidueTime']/1000;

if( $spin!=0){
for( $a=0; $a < $spin ; $a++){
$data = "fkUsrUserId=".$fkUsrUserId."&fkGmGameTypeId=d7e1c39877254d2b8eca3030ec0281be&awardAmount=".$coin[rand(0,8)];
$data1  = "fkUsrUserId=".$fkUsrUserId."&fkGmGameTypeId=d7e1c39877254d2b8eca3030ec0281be";
$url = "http://39.106.250.13:7500/easy_money/api/gm/gametype/gmGameType/consumeGameLife";
$url2 = "http://39.106.250.13:7500/easy_money/api/gm/gametype/gmGameType/awardGameRecord";

$curl = curl_init();
    curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => $url,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $data1
    ));
echo   curl_exec($curl);                                  
curl_close($curl);
$curl = curl_init();
echo "\n";
$curl = curl_init();
    curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => $url2,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $data
    ));
echo   curl_exec($curl);          
echo "\n";                        
curl_close($curl);
$curl = curl_init();
echo "\n";
sleep($time);
 }
 }else {
 	$giay= $next_time  - time() + 1 ;
 	Echo " Next spin sau : ".$giay." giây \n ";
 	sleep($giay);
 }
}
?>
