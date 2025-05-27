<?php
require("Snoopy.class.php");

$ATPT_OFCDC_SC_CODE = "";
$SD_SCHUL_CODE = "";
$date = date('Ymd');

$URL = "https://open.neis.go.kr/hub/mealServiceDietInfo?KEY=c2a4b8fcdab24f92aaea45e7a1fa4512&Type=json&ATPT_OFCDC_SC_CODE=$ScCode&SD_SCHUL_CODE=$SdCode&MLSV_YMD=$date";

$snoopy = new Snoopy;
$snoopy->fetch($URL);

$return = json_decode($snoopy->results);
$meal = explode("<br />", $return->mealServiceDietInfo[1]->row[0]->DDISH_NM);
?>

<?php 
for ($i = 0; $i < sizeof($meal); $i++) {
    echo '<h2>' . preg_replace("/[0-9,.,()]/", "", $meal[$i]) . '</h2><br/>';
}
?>
