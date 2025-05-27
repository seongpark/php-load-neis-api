# PHP 나이스 급식 API 불러오기
나이스에서 제공하는 급식 정보 API를 활용하여 급식 정보를 불러옵니다.
## 사용 방법
* XML방식/JSON방식 코드 둘 다 있으니 원하는 방식으로 사용하실 수 있습니다.
* 시/도 교육청 코드 및 학교 코드를 준비합니다. <a href="https://open.neis.go.kr/portal/data/service/selectServicePage.do?page=1&rows=10&sortColumn=&sortDirection=&infId=OPEN17020190531110010104913&infSeq=1">#</a>
### JSON 방식 
1. <a href="https://github.com/endroy/Snoopy">Snoopy.class.php</a>를 로드합니다.
2. ```ATPT_OFCDC_SC_CODE``` 변수에 시/도 교육청 코드를 넣습니다.
3. ```SD_SCHUL_CODE```에 학교 코드를 넣습니다.
### XML 방식
1. ```ATPT_OFCDC_SC_CODE``` 변수에 시/도 교육청 코드를 넣습니다.
2. ```SD_SCHUL_CODE```에 학교 코드를 넣습니다.
