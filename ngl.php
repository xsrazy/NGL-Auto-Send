<?php
/**
 * CREATE : @Xsrazy
 *December 31, 2022
 **/
date_default_timezone_set('Asia/Jakarta');





$default = "\033[0;37m";
$cyan = "\033[1;36m";
$blue = "\033[1;35m";
$merah = "\033[1;36m";

$tekss = file_get_contents('msg.txt');


$pecah = explode("|", $tekss);
$hitung = count($pecah);

echo $default."__________________________________".PHP_EOL;
echo $cyan."Auto Send NGL.Link".PHP_EOL;
echo "v1.0 -  December 31, 2022".PHP_EOL;
echo "MADE BY @Xsrazy | Rahmatul Usra | https://github.com/xsrazy/NGL-Auto-Send".PHP_EOL;
echo $default."__________________________________".PHP_EOL;
echo "Just Input Your Username, ex: wkwk".PHP_EOL;
echo "Input Your Username         : ";
$target = trim(fgets(STDIN));


for ($i=0; $i < $hitung; $i++) { 
$msg = $pecah[$i];
$server = "https://ngl.link/".$target;
$ch1 = curl_init($server);
$payload1 = json_encode(array("question" => $msg));
curl_setopt($ch1, CURLOPT_POSTFIELDS, $payload1);
curl_setopt($ch1, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
$result1 = curl_exec($ch1);
curl_close($ch1);
$data = json_decode($result1, TRUE);
echo $cyan."Sending message ".$msg." to $target".PHP_EOL;
sleep(1);
}





echo $default."__________________________________".PHP_EOL;









echo " ".PHP_EOL;

?>
