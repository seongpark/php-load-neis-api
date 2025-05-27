// XML 방식
<?php

$date = date("Ymd");

$xmlfile = 'https://open.neis.go.kr/hub/mealServiceDietInfo?ATPT_OFCDC_SC_CODE=K10&SD_SCHUL_CODE=' . $sch_code . '&MLSV_YMD=202309&KEY=c2a4b8fcdab24f92aaea45e7a1fa4512';

$food_api = simplexml_load_file($xmlfile) or die("급식 정보를 불러오지 못했습니다!");

$serial = 1;

foreach ($food_api as $food):
    $date_api = $food->MLSV_YMD;
    $menu = $food->DDISH_NM;
    $cal = $food->CAL_INFO;

    if ($date == $date_api) {
        echo $menu;
        echo '<br><span style="font-size:12px;color:gray;">' . $cal . '</span>';
    }

    $serial++;

endforeach;

?>
