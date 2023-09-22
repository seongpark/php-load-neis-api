//JSON 방식
<?php
    require("Snoopy.class.php");
    

    $URL = "https://open.neis.go.kr/hub/mealServiceDietInfo?KEY=c2a4b8fcdab24f92aaea45e7a1fa4512&Type=json&ATPT_OFCDC_SC_CODE=$ScCode&SD_SCHUL_CODE=$SdCode&MLSV_YMD=$date";
    $snoopy = new Snoopy; // snoopy 생성
    $snoopy->fetch($URL);
    $return = json_decode($snoopy->results);
    $meal = explode("<br />", $return->mealServiceDietInfo[1]->row[0]->DDISH_NM);

    ?>
<?php for($i=0; $i<sizeof($meal); $i++){ echo '<h2>'.preg_replace("/[0-9,.,()]/", "", $meal[$i]).'</h2><br/>'; } ?>

//XML 방식
          <?php

$date = date("Ymd");

$xmlfile    = 'https://open.neis.go.kr/hub/mealServiceDietInfo?ATPT_OFCDC_SC_CODE=K10&SD_SCHUL_CODE='.$sch_code.'&MLSV_YMD=202309&KEY=c2a4b8fcdab24f92aaea45e7a1fa4512';

$food_api      = simplexml_load_file($xmlfile) or die("급식 정보를 불러오지 못했습니다!");

    $serial = 1;

    foreach ($food_api as $food):
        $date_api  =  $food->MLSV_YMD;
        $menu  =  $food->DDISH_NM;
        $cal  =  $food->CAL_INFO;
        if($date == $date_api) {
            echo $menu;
            echo '<br><span style="font-size:12px;color:gray;">'.$cal.'</span>';
        }




        $serial++;

    endforeach;

?>
