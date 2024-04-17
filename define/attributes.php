<?php
$attributes = [
    "key"=>["define"=>"key","ko"=>"기본키","en"=>"Primary Key","required"=>"yes"],
    "text"=>[
        "define"=>"text",
        "ko"=>"평문",
        "en"=>"Plain text",
        "options"=>[
            "length"=>["type"=>"variable","id"=>"length","ko"=>"문자열 길이","en"=>"Text length","required"=>"no","multiple"=>"no","default"=>"text"],
            "regexp"=>["type"=>"variable","id"=>"regexp","ko"=>"유효성 검사","en"=>"Validator regular expression","required"=>"no","multiple"=>"no","default"=>""],
            "multilingual"=>[
                "type"=>"select",
                "id"=>"multilingual",
                "ko"=>"다국어 사용여부",
                "en"=>"multilingual usage",
                "required"=>"no",
                "multiple"=>"no",
                "default"=>"no",
                "items"=>[
                    ["id"=>"no","ko"=>"다국어 사용 안함","en"=>"multilingual No"],
                    ["id"=>"yes","ko"=>"다국어 사용","en"=>"multilingual Yes"]
                ]
            ],
            "default"=>["type"=>"variable","id"=>"default","ko"=>"기본값","en"=>"Default value","required"=>"no","multiple"=>"no","default"=>""]
        ]
    ],
    "number"=>[
        "define"=>"number",
        "ko"=>"숫자",
        "en"=>"Number",
        "options"=>[
            "scale"=>["type"=>"variable","id"=>"scale","ko"=>"규모","en"=>"Scale","required"=>"no","multiple"=>"no","default"=>32],
            "precision"=>["type"=>"variable","id"=>"precision","ko"=>"정밀도","en"=>"Precision","required"=>"no","multiple"=>"no","default"=>8],
            "unsigned"=>[
                "type"=>"select",
                "id"=>"unsigned",
                "ko"=>"양수만 사용",
                "en"=>"Unsigned value",
                "required"=>"no",
                "multiple"=>"no",
                "default"=>"no",
                "items"=>[
                    ["id"=>"no","ko"=>"양수음수 모두 사용","en"=>"Signed value"],
                    ["id"=>"yes","ko"=>"양수만 사용","en"=>"Unsigned value"]
                ]
            ],
            "default"=>["type"=>"variable","id"=>"default","ko"=>"기본값","en"=>"Default value","required"=>"no","multiple"=>"no","default"=>0]
        ]
    ],
    "integer"=>[
        "define"=>"integer",
        "ko"=>"정수",
        "en"=>"Integer",
        "options"=>[
            "size"=>[
                "type"=>"select",
                "id"=>"size",
                "ko"=>"크기",
                "en"=>"Size of integer",
                "required"=>"no",
                "multiple"=>"no",
                "default"=>"big",
                "items"=>[
                    ["id"=>"big","ko"=>"가장큰","en"=>"Big size"],
                    ["id"=>"normal","ko"=>"보통","en"=>"Normal size"],
                    ["id"=>"medium","ko"=>"중간","en"=>"Medium size"],
                    ["id"=>"small","ko"=>"작은","en"=>"Small size"],
                    ["id"=>"tiny","ko"=>"제일작은","en"=>"Tiny size"]
                ]
            ],
            "unsigned"=>[
                "type"=>"select",
                "id"=>"unsigned",
                "ko"=>"양수만 사용",
                "en"=>"Unsigned value",
                "required"=>"no",
                "multiple"=>"no",
                "default"=>"no",
                "items"=>[
                    ["id"=>"no","ko"=>"양수음수 모두 사용","en"=>"Signed value"],
                    ["id"=>"yes","ko"=>"양수만 사용","en"=>"Unsigned value"]
                ]
            ],
            "default"=>["type"=>"variable","id"=>"default","ko"=>"기본값","en"=>"Default value","required"=>"no","multiple"=>"no","default"=>0]
        ]
    ],
    "boolean"=>[
        "define"=>"boolean",
        "ko"=>"여부",
        "en"=>"Boolean",
        "multilingual"=>"yes",
        "default"=>"no",
        "options"=>[
            "no"=>["type"=>"variable","id"=>"no","ko"=>"아니오 명칭","en"=>"Naming of no","required"=>"no","multiple"=>"no","default"=>"아니오"],
            "yes"=>["type"=>"variable","id"=>"yes","ko"=>"예 명칭","en"=>"Naming of yes","required"=>"no","multiple"=>"no","default"=>"예"],
            "default"=>[
                "type"=>"select",
                "id"=>"default",
                "ko"=>"기본값",
                "en"=>"Default value",
                "required"=>"no",
                "multiple"=>"no",
                "default"=>"no",
                "items"=>[
                    ["id"=>"no","ko"=>"아니오","en"=>"No"],
                    ["id"=>"yes","ko"=>"예","en"=>"Yes"]
                ]
            ]
        ]
    ],
    "datetime"=>[
        "define"=>"datetime",
        "ko"=>"일시",
        "en"=>"Date and Time",
        "options"=>[
            "datetype"=>[
                "type"=>"select",
                "id"=>"datetype",
                "ko"=>"양력/음력",
                "en"=>"Solar/Lunar",
                "required"=>"no",
                "multiple"=>"no",
                "default"=>"solar",
                "items"=>[
                    ["id"=>"solar","ko"=>"양력","en"=>"Solar"],
                    ["id"=>"lunar","ko"=>"음력","en"=>"Lunar"]
                ]
            ],
            "timezone"=>["type"=>"variable","id"=>"timezone","ko"=>"타임존","en"=>"Timezone","required"=>"no","multiple"=>"no","default"=>"Asia/Seoul"],
            "format"=>["type"=>"variable","id"=>"format","ko"=>"포맷","en"=>"Format","required"=>"no","multiple"=>"no","default"=>"Y-m-d H:i:s"]
        ]
    ],
    "parent"=>[
        "define"=>"parent",
        "ko"=>"참조",
        "en"=>"Reference",
        "options"=>[
            "target"=>["type"=>"parent","id"=>"target","ko"=>"참조 엔티티 선택","en"=>"Select a target entity","required"=>"yes","multiple"=>"no"]
        ]
    ],
    "password"=>[
        "define"=>"password",
        "ko"=>"비밀번호",
        "en"=>"Password",
        "options"=>[
            "encryption"=>[
                "type"=>"select",
                "id"=>"encryption",
                "ko"=>"암호화 알고리즘",
                "en"=>"Encryption algorithm",
                "required"=>"no",
                "multiple"=>"no",
                "default"=>"sha512",
                "items"=>[
                    ["id"=>"sha512","ko"=>"SHA512","en"=>"SHA512"]
                ]
            ],
            "regexp"=>["type"=>"variable","id"=>"regexp","ko"=>"유효성 검사","en"=>"Validator regular expression","required"=>"no","multiple"=>"no","default"=>""]
        ]
    ],
    "geometry"=>[
        "define"=>"geometry",
        "ko"=>"지구좌표",
        "en"=>"Geometry",
        "attributes"=>[
            "number"=>["define"=>"number","id"=>"longitude","ko"=>"경도","en"=>"Longitude","scale"=>32,"precision"=>20,"unsigned"=>"no"]
        ]
    ],
    "email"=>[
        "define"=>"email",
        "ko"=>"이메일",
        "en"=>"Email",
        "attributes"=>[
            "text"=>["define"=>"text","id"=>"email","ko"=>"주소","en"=>"Address","length"=>255,"default"=>""],
            "password"=>["define"=>"password","id"=>"certify","ko"=>"본인인증 코드값","en"=>"Certify code","encryption"=>"sha512"],
            "boolean"=>["define"=>"boolean","id"=>"permited","ko"=>"인증 여부","en"=>"Permited","default"=>"no"],
            "datetime"=>["define"=>"datetime","id"=>"permited_date","ko"=>"인증일","en"=>"Permited time","datetype"=>"solar","timezone"=>"Asia/Seoul","format"=>"Y-m-d H:i:s"]
        ]
    ],
    "phone"=>[
        "define"=>"phone",
        "ko"=>"전화",
        "en"=>"Phone",
        "options"=>[
            "location"=>[
                "type"=>"select",
                "id"=>"location",
                "ko"=>"지역",
                "en"=>"Location",
                "required"=>"no",
                "multiple"=>"no",
                "default"=>+82,
                "items"=>[
                    ["id"=>+1,"ko"=>"미국","en"=>"United States"],
                    ["id"=>+7,"ko"=>"러시아","en"=>"Russia"],
                    ["id"=>+20,"ko"=>"이집트","en"=>"Egypt"],
                    ["id"=>+27,"ko"=>"남아프리카 공화국","en"=>"South Africa"],
                    ["id"=>+30,"ko"=>"그리스","en"=>"Greece"],
                    ["id"=>+31,"ko"=>"네덜란드","en"=>"Netherlands"],
                    ["id"=>+32,"ko"=>"벨기에","en"=>"Belgium"],
                    ["id"=>+33,"ko"=>"프랑스","en"=>"France"],
                    ["id"=>+34,"ko"=>"스페인","en"=>"Spain"],
                    ["id"=>+36,"ko"=>"헝가리","en"=>"Hungary"],
                    ["id"=>+39,"ko"=>"이탈리아","en"=>"Italy"],
                    ["id"=>+40,"ko"=>"루마니아","en"=>"Romania"],
                    ["id"=>+41,"ko"=>"스위스","en"=>"Switzerland"],
                    ["id"=>+43,"ko"=>"오스트리아","en"=>"Austria"],
                    ["id"=>+44,"ko"=>"영국","en"=>"United Kingdom"],
                    ["id"=>+45,"ko"=>"덴마크","en"=>"Denmark"],
                    ["id"=>+46,"ko"=>"스웨덴","en"=>"Sweden"],
                    ["id"=>+47,"ko"=>"노르웨이","en"=>"Norway"],
                    ["id"=>+48,"ko"=>"폴란드","en"=>"Poland"],
                    ["id"=>+49,"ko"=>"독일","en"=>"Germany"],
                    ["id"=>+51,"ko"=>"페루","en"=>"Peru"],
                    ["id"=>+52,"ko"=>"멕시코","en"=>"Mexico"],
                    ["id"=>+53,"ko"=>"쿠바","en"=>"Cuba"],
                    ["id"=>+54,"ko"=>"아르헨티나","en"=>"Argentina"],
                    ["id"=>+55,"ko"=>"브라질","en"=>"Brazil"],
                    ["id"=>+56,"ko"=>"칠레","en"=>"Chile"],
                    ["id"=>+57,"ko"=>"콜롬비아","en"=>"Colombia"],
                    ["id"=>+58,"ko"=>"베네수엘라","en"=>"Venezuela"],
                    ["id"=>+60,"ko"=>"말레이시아","en"=>"Malaysia"],
                    ["id"=>+61,"ko"=>"호주","en"=>"Australia"],
                    ["id"=>+62,"ko"=>"인도네시아","en"=>"Indonesia"],
                    ["id"=>+63,"ko"=>"필리핀","en"=>"Philippines"],
                    ["id"=>+64,"ko"=>"뉴질랜드","en"=>"New Zealand"],
                    ["id"=>+65,"ko"=>"싱가포르","en"=>"Singapore"],
                    ["id"=>+66,"ko"=>"태국","en"=>"Thailand"],
                    ["id"=>+81,"ko"=>"일본","en"=>"Japan"],
                    ["id"=>+82,"ko"=>"대한민국","en"=>"South Korea"],
                    ["id"=>+84,"ko"=>"베트남","en"=>"Vietnam"],
                    ["id"=>+86,"ko"=>"중국","en"=>"China"],
                    ["id"=>+90,"ko"=>"터키","en"=>"Turkey"],
                    ["id"=>+91,"ko"=>"인도","en"=>"India"],
                    ["id"=>+92,"ko"=>"파키스탄","en"=>"Pakistan"],
                    ["id"=>+93,"ko"=>"아프가니스탄","en"=>"Afghanistan"],
                    ["id"=>+94,"ko"=>"스리랑카","en"=>"Sri Lanka"],
                    ["id"=>+95,"ko"=>"미얀마","en"=>"Burma"],
                    ["id"=>+98,"ko"=>"이란","en"=>"Iran"],
                    ["id"=>+212,"ko"=>"모로코","en"=>"Morocco"],
                    ["id"=>+213,"ko"=>"알제리","en"=>"Algeria"],
                    ["id"=>+216,"ko"=>"튀니지","en"=>"Tunisia"],
                    ["id"=>+218,"ko"=>"리비아","en"=>"Libya"],
                    ["id"=>+220,"ko"=>"감비아","en"=>"Gambia"],
                    ["id"=>+221,"ko"=>"세네갈","en"=>"Senegal"],
                    ["id"=>+222,"ko"=>"모리타니","en"=>"Mauritania"],
                    ["id"=>+223,"ko"=>"말리","en"=>"Mali"],
                    ["id"=>+224,"ko"=>"기니","en"=>"Guinea"],
                    ["id"=>+225,"ko"=>"코트디부아르","en"=>"Ivory Coast"],
                    ["id"=>+226,"ko"=>"부르키나파소","en"=>"Burkina Faso"],
                    ["id"=>+227,"ko"=>"니제르","en"=>"Niger"],
                    ["id"=>+228,"ko"=>"토고","en"=>"Togo"],
                    ["id"=>+229,"ko"=>"베냉","en"=>"Benin"],
                    ["id"=>+230,"ko"=>"모리셔스","en"=>"Mauritius"],
                    ["id"=>+231,"ko"=>"리베리아","en"=>"Liberia"],
                    ["id"=>+232,"ko"=>"시에라리온","en"=>"Sierra Leone"],
                    ["id"=>+233,"ko"=>"가나","en"=>"Ghana"],
                    ["id"=>+234,"ko"=>"나이지리아","en"=>"Nigeria"],
                    ["id"=>+235,"ko"=>"차드","en"=>"Chad"],
                    ["id"=>+236,"ko"=>"중앙아프리카 공화국","en"=>"Central African Republic"],
                    ["id"=>+237,"ko"=>"카메룬","en"=>"Cameroon"],
                    ["id"=>+238,"ko"=>"카보베르데","en"=>"Cape Verde"],
                    ["id"=>+239,"ko"=>"상투메 프린시페","en"=>"Sao Tome and Principe"],
                    ["id"=>+240,"ko"=>"적도 기니","en"=>"Equatorial Guinea"],
                    ["id"=>+241,"ko"=>"가봉","en"=>"Gabon"],
                    ["id"=>+242,"ko"=>"콩고 공화국","en"=>"Republic of the Congo"],
                    ["id"=>+243,"ko"=>"콩고 민주 공화국","en"=>"Democratic Republic of the Congo"],
                    ["id"=>+244,"ko"=>"앙골라","en"=>"Angola"],
                    ["id"=>+245,"ko"=>"기니비사우","en"=>"Guinea-Bissau"],
                    ["id"=>+246,"ko"=>"영국령 인도양 지역","en"=>"British Indian Ocean Territory"],
                    ["id"=>+248,"ko"=>"세이셸","en"=>"Seychelles"],
                    ["id"=>+249,"ko"=>"수단","en"=>"Sudan"],
                    ["id"=>+250,"ko"=>"르완다","en"=>"Rwanda"],
                    ["id"=>+251,"ko"=>"에티오피아","en"=>"Ethiopia"],
                    ["id"=>+252,"ko"=>"소말리아","en"=>"Somalia"],
                    ["id"=>+253,"ko"=>"지부티","en"=>"Djibouti"],
                    ["id"=>+254,"ko"=>"케냐","en"=>"Kenya"],
                    ["id"=>+255,"ko"=>"탄자니아","en"=>"Tanzania"],
                    ["id"=>+256,"ko"=>"우간다","en"=>"Uganda"],
                    ["id"=>+257,"ko"=>"부룬디","en"=>"Burundi"],
                    ["id"=>+258,"ko"=>"모잠비크","en"=>"Mozambique"],
                    ["id"=>+260,"ko"=>"잠비아","en"=>"Zambia"],
                    ["id"=>+261,"ko"=>"마다가스카르","en"=>"Madagascar"],
                    ["id"=>+262,"ko"=>"레위니옹","en"=>"Reunion"],
                    ["id"=>+263,"ko"=>"짐바브웨","en"=>"Zimbabwe"],
                    ["id"=>+264,"ko"=>"나미비아","en"=>"Namibia"],
                    ["id"=>+265,"ko"=>"말라위","en"=>"Malawi"],
                    ["id"=>+266,"ko"=>"레소토","en"=>"Lesotho"],
                    ["id"=>+267,"ko"=>"보츠와나","en"=>"Botswana"],
                    ["id"=>+268,"ko"=>"에스와티니","en"=>"Eswatini"],
                    ["id"=>+269,"ko"=>"코모로","en"=>"Comoros"],
                    ["id"=>+290,"ko"=>"세인트헬레나","en"=>"Saint Helena"],
                    ["id"=>+291,"ko"=>"에리트레아","en"=>"Eritrea"],
                    ["id"=>+297,"ko"=>"아루바","en"=>"Aruba"],
                    ["id"=>+298,"ko"=>"페로 제도","en"=>"Faroe Islands"],
                    ["id"=>+299,"ko"=>"그린란드","en"=>"Greenland"]
                ]
            ]
        ],
        "attributes"=>[
            "text"=>["define"=>"text","id"=>"number","ko"=>"번호","en"=>"number","length"=>32,"default"=>""],
            "password"=>["define"=>"password","id"=>"certify","ko"=>"본인인증 코드값","en"=>"Certify code","encryption"=>"sha512"],
            "boolean"=>["define"=>"boolean","id"=>"permited","ko"=>"인증 여부","en"=>"Permited","default"=>"no"],
            "datetime"=>["define"=>"datetime","id"=>"permited_date","ko"=>"인증일","en"=>"Permited time","datetype"=>"solar","timezone"=>"Asia/Seoul","format"=>"Y-m-d H:i:s"]
        ]
    ],
    "address"=>[
        "define"=>"address",
        "ko"=>"주소",
        "en"=>"Address",
        "options"=>[
            "location"=>[
                "type"=>"select",
                "id"=>"location",
                "ko"=>"지역",
                "en"=>"Location",
                "required"=>"no",
                "multiple"=>"no",
                "default"=>"KR",
                "items"=>[
                    ["id"=>"AD","ko"=>"안도라","en"=>"Andorra"],
                    ["id"=>"AE","ko"=>"아랍에미리트","en"=>"United Arab Emirates"],
                    ["id"=>"AF","ko"=>"아프가니스탄","en"=>"Afghanistan"],
                    ["id"=>"AG","ko"=>"앤티가 바부다","en"=>"Antigua & Barbuda"],
                    ["id"=>"AI","ko"=>"앵귈라","en"=>"Anguilla"],
                    ["id"=>"AL","ko"=>"알바니아","en"=>"Albania"],
                    ["id"=>"AM","ko"=>"아르메니아","en"=>"Armenia"],
                    ["id"=>"AO","ko"=>"앙골라","en"=>"Angola"],
                    ["id"=>"AQ","ko"=>"남극 대륙","en"=>"Antarctica"],
                    ["id"=>"AR","ko"=>"아르헨티나","en"=>"Argentina"],
                    ["id"=>"AS","ko"=>"아메리칸 사모아","en"=>"American Samoa"],
                    ["id"=>"AT","ko"=>"오스트리아","en"=>"Austria"],
                    ["id"=>"AU","ko"=>"오스트레일리아","en"=>"Australia"],
                    ["id"=>"AW","ko"=>"아루바","en"=>"Aruba"],
                    ["id"=>"AX","ko"=>"올란드 제도","en"=>"Åland Islands"],
                    ["id"=>"AZ","ko"=>"아제르바이잔","en"=>"Azerbaijan"],
                    ["id"=>"BA","ko"=>"보스니아 헤르체고비나","en"=>"Bosnia & Herzegovina"],
                    ["id"=>"BB","ko"=>"바베이도스","en"=>"Barbados"],
                    ["id"=>"BD","ko"=>"방글라데시","en"=>"Bangladesh"],
                    ["id"=>"BE","ko"=>"벨기에","en"=>"Belgium"],
                    ["id"=>"BF","ko"=>"부르키나파소","en"=>"Burkina Faso"],
                    ["id"=>"BG","ko"=>"불가리아","en"=>"Bulgaria"],
                    ["id"=>"BH","ko"=>"바레인","en"=>"Bahrain"],
                    ["id"=>"BI","ko"=>"부룬디","en"=>"Burundi"],
                    ["id"=>"BJ","ko"=>"베냉","en"=>"Benin"],
                    ["id"=>"BL","ko"=>"생바르텔레미","en"=>"St. Barthélemy"],
                    ["id"=>"BM","ko"=>"버뮤다","en"=>"Bermuda"],
                    ["id"=>"BN","ko"=>"브루나이","en"=>"Brunei"],
                    ["id"=>"BO","ko"=>"볼리비아","en"=>"Bolivia"],
                    ["id"=>"BQ","ko"=>"네덜란드령 카리브","en"=>"Caribbean Netherlands"],
                    ["id"=>"BR","ko"=>"브라질","en"=>"Brazil"],
                    ["id"=>"BS","ko"=>"바하마","en"=>"Bahamas"],
                    ["id"=>"BT","ko"=>"부탄","en"=>"Bhutan"],
                    ["id"=>"BV","ko"=>"부베섬","en"=>"Bouvet Island"],
                    ["id"=>"BW","ko"=>"보츠와나","en"=>"Botswana"],
                    ["id"=>"BY","ko"=>"벨라루스","en"=>"Belarus"],
                    ["id"=>"BZ","ko"=>"벨리즈","en"=>"Belize"],
                    ["id"=>"CA","ko"=>"캐나다","en"=>"Canada"],
                    ["id"=>"CC","ko"=>"코코스 제도","en"=>"Cocos (Keeling) Islands"],
                    ["id"=>"CD","ko"=>"콩고-킨샤사","en"=>"Congo - Kinshasa"],
                    ["id"=>"CF","ko"=>"중앙 아프리카 공화국","en"=>"Central African Republic"],
                    ["id"=>"CG","ko"=>"콩고-브라자빌","en"=>"Congo - Brazzaville"],
                    ["id"=>"CH","ko"=>"스위스","en"=>"Switzerland"],
                    ["id"=>"CI","ko"=>"코트디부아르","en"=>"Côte d’Ivoire"],
                    ["id"=>"CK","ko"=>"쿡 제도","en"=>"Cook Islands"],
                    ["id"=>"CL","ko"=>"칠레","en"=>"Chile"],
                    ["id"=>"CM","ko"=>"카메룬","en"=>"Cameroon"],
                    ["id"=>"CN","ko"=>"중국","en"=>"China"],
                    ["id"=>"CO","ko"=>"콜롬비아","en"=>"Colombia"],
                    ["id"=>"CR","ko"=>"코스타리카","en"=>"Costa Rica"],
                    ["id"=>"CU","ko"=>"쿠바","en"=>"Cuba"],
                    ["id"=>"CV","ko"=>"카보베르데","en"=>"Cape Verde"],
                    ["id"=>"CW","ko"=>"퀴라소","en"=>"Curaçao"],
                    ["id"=>"CX","ko"=>"크리스마스섬","en"=>"Christmas Island"],
                    ["id"=>"CY","ko"=>"키프로스","en"=>"Cyprus"],
                    ["id"=>"CZ","ko"=>"체코","en"=>"Czechia"],
                    ["id"=>"DE","ko"=>"독일","en"=>"Germany"],
                    ["id"=>"DJ","ko"=>"지부티","en"=>"Djibouti"],
                    ["id"=>"DK","ko"=>"덴마크","en"=>"Denmark"],
                    ["id"=>"DM","ko"=>"도미니카","en"=>"Dominica"],
                    ["id"=>"DO","ko"=>"도미니카 공화국","en"=>"Dominican Republic"],
                    ["id"=>"DZ","ko"=>"알제리","en"=>"Algeria"],
                    ["id"=>"EC","ko"=>"에콰도르","en"=>"Ecuador"],
                    ["id"=>"EE","ko"=>"에스토니아","en"=>"Estonia"],
                    ["id"=>"EG","ko"=>"이집트","en"=>"Egypt"],
                    ["id"=>"EH","ko"=>"서사하라","en"=>"Western Sahara"],
                    ["id"=>"ER","ko"=>"에리트리아","en"=>"Eritrea"],
                    ["id"=>"ES","ko"=>"스페인","en"=>"Spain"],
                    ["id"=>"ET","ko"=>"에티오피아","en"=>"Ethiopia"],
                    ["id"=>"FI","ko"=>"핀란드","en"=>"Finland"],
                    ["id"=>"FJ","ko"=>"피지","en"=>"Fiji"],
                    ["id"=>"FK","ko"=>"포클랜드 제도","en"=>"Falkland Islands"],
                    ["id"=>"FM","ko"=>"미크로네시아","en"=>"Micronesia"],
                    ["id"=>"FO","ko"=>"페로 제도","en"=>"Faroe Islands"],
                    ["id"=>"FR","ko"=>"프랑스","en"=>"France"],
                    ["id"=>"GA","ko"=>"가봉","en"=>"Gabon"],
                    ["id"=>"GB","ko"=>"영국","en"=>"United Kingdom"],
                    ["id"=>"GD","ko"=>"그레나다","en"=>"Grenada"],
                    ["id"=>"GE","ko"=>"조지아","en"=>"Georgia"],
                    ["id"=>"GF","ko"=>"프랑스령 기아나","en"=>"French Guiana"],
                    ["id"=>"GG","ko"=>"건지","en"=>"Guernsey"],
                    ["id"=>"GH","ko"=>"가나","en"=>"Ghana"],
                    ["id"=>"GI","ko"=>"지브롤터","en"=>"Gibraltar"],
                    ["id"=>"GL","ko"=>"그린란드","en"=>"Greenland"],
                    ["id"=>"GM","ko"=>"감비아","en"=>"Gambia"],
                    ["id"=>"GN","ko"=>"기니","en"=>"Guinea"],
                    ["id"=>"GP","ko"=>"과들루프","en"=>"Guadeloupe"],
                    ["id"=>"GQ","ko"=>"적도 기니","en"=>"Equatorial Guinea"],
                    ["id"=>"GR","ko"=>"그리스","en"=>"Greece"],
                    ["id"=>"GS","ko"=>"사우스조지아 사우스샌드위치 제도","en"=>"South Georgia & South Sandwich Islands"],
                    ["id"=>"GT","ko"=>"과테말라","en"=>"Guatemala"],
                    ["id"=>"GU","ko"=>"괌","en"=>"Guam"],
                    ["id"=>"GW","ko"=>"기니비사우","en"=>"Guinea-Bissau"],
                    ["id"=>"GY","ko"=>"가이아나","en"=>"Guyana"],
                    ["id"=>"HK","ko"=>"홍콩(중국 특별행정구),","en"=>"Hong Kong SAR China"],
                    ["id"=>"HM","ko"=>"허드 맥도널드 제도","en"=>"Heard & McDonald Islands"],
                    ["id"=>"HN","ko"=>"온두라스","en"=>"Honduras"],
                    ["id"=>"HR","ko"=>"크로아티아","en"=>"Croatia"],
                    ["id"=>"HT","ko"=>"아이티","en"=>"Haiti"],
                    ["id"=>"HU","ko"=>"헝가리","en"=>"Hungary"],
                    ["id"=>"ID","ko"=>"인도네시아","en"=>"Indonesia"],
                    ["id"=>"IE","ko"=>"아일랜드","en"=>"Ireland"],
                    ["id"=>"IL","ko"=>"이스라엘","en"=>"Israel"],
                    ["id"=>"IM","ko"=>"맨 섬","en"=>"Isle of Man"],
                    ["id"=>"IN","ko"=>"인도","en"=>"India"],
                    ["id"=>"IO","ko"=>"영국령 인도양 식민지","en"=>"British Indian Ocean Territory"],
                    ["id"=>"IQ","ko"=>"이라크","en"=>"Iraq"],
                    ["id"=>"IR","ko"=>"이란","en"=>"Iran"],
                    ["id"=>"IS","ko"=>"아이슬란드","en"=>"Iceland"],
                    ["id"=>"IT","ko"=>"이탈리아","en"=>"Italy"],
                    ["id"=>"JE","ko"=>"저지","en"=>"Jersey"],
                    ["id"=>"JM","ko"=>"자메이카","en"=>"Jamaica"],
                    ["id"=>"JO","ko"=>"요르단","en"=>"Jordan"],
                    ["id"=>"JP","ko"=>"일본","en"=>"Japan"],
                    ["id"=>"KE","ko"=>"케냐","en"=>"Kenya"],
                    ["id"=>"KG","ko"=>"키르기스스탄","en"=>"Kyrgyzstan"],
                    ["id"=>"KH","ko"=>"캄보디아","en"=>"Cambodia"],
                    ["id"=>"KI","ko"=>"키리바시","en"=>"Kiribati"],
                    ["id"=>"KM","ko"=>"코모로","en"=>"Comoros"],
                    ["id"=>"KN","ko"=>"세인트키츠 네비스","en"=>"St. Kitts & Nevis"],
                    ["id"=>"KP","ko"=>"북한","en"=>"North Korea"],
                    ["id"=>"KR","ko"=>"대한민국","en"=>"South Korea"],
                    ["id"=>"KW","ko"=>"쿠웨이트","en"=>"Kuwait"],
                    ["id"=>"KY","ko"=>"케이맨 제도","en"=>"Cayman Islands"],
                    ["id"=>"KZ","ko"=>"카자흐스탄","en"=>"Kazakhstan"],
                    ["id"=>"LA","ko"=>"라오스","en"=>"Laos"],
                    ["id"=>"LB","ko"=>"레바논","en"=>"Lebanon"],
                    ["id"=>"LC","ko"=>"세인트루시아","en"=>"St. Lucia"],
                    ["id"=>"LI","ko"=>"리히텐슈타인","en"=>"Liechtenstein"],
                    ["id"=>"LK","ko"=>"스리랑카","en"=>"Sri Lanka"],
                    ["id"=>"LR","ko"=>"라이베리아","en"=>"Liberia"],
                    ["id"=>"LS","ko"=>"레소토","en"=>"Lesotho"],
                    ["id"=>"LT","ko"=>"리투아니아","en"=>"Lithuania"],
                    ["id"=>"LU","ko"=>"룩셈부르크","en"=>"Luxembourg"],
                    ["id"=>"LV","ko"=>"라트비아","en"=>"Latvia"],
                    ["id"=>"LY","ko"=>"리비아","en"=>"Libya"],
                    ["id"=>"MA","ko"=>"모로코","en"=>"Morocco"],
                    ["id"=>"MC","ko"=>"모나코","en"=>"Monaco"],
                    ["id"=>"MD","ko"=>"몰도바","en"=>"Moldova"],
                    ["id"=>"ME","ko"=>"몬테네그로","en"=>"Montenegro"],
                    ["id"=>"MF","ko"=>"생마르탱","en"=>"St. Martin"],
                    ["id"=>"MG","ko"=>"마다가스카르","en"=>"Madagascar"],
                    ["id"=>"MH","ko"=>"마셜 제도","en"=>"Marshall Islands"],
                    ["id"=>"MK","ko"=>"북마케도니아","en"=>"North Macedonia"],
                    ["id"=>"ML","ko"=>"말리","en"=>"Mali"],
                    ["id"=>"MM","ko"=>"미얀마","en"=>"Myanmar (Burma)"],
                    ["id"=>"MN","ko"=>"몽골","en"=>"Mongolia"],
                    ["id"=>"MO","ko"=>"마카오(중국 특별행정구)","en"=>"Macao SAR China"],
                    ["id"=>"MP","ko"=>"북마리아나제도","en"=>"Northern Mariana Islands"],
                    ["id"=>"MQ","ko"=>"마르티니크","en"=>"Martinique"],
                    ["id"=>"MR","ko"=>"모리타니","en"=>"Mauritania"],
                    ["id"=>"MS","ko"=>"몬트세라트","en"=>"Montserrat"],
                    ["id"=>"MT","ko"=>"몰타","en"=>"Malta"],
                    ["id"=>"MU","ko"=>"모리셔스","en"=>"Mauritius"],
                    ["id"=>"MV","ko"=>"몰디브","en"=>"Maldives"],
                    ["id"=>"MW","ko"=>"말라위","en"=>"Malawi"],
                    ["id"=>"MX","ko"=>"멕시코","en"=>"Mexico"],
                    ["id"=>"MY","ko"=>"말레이시아","en"=>"Malaysia"],
                    ["id"=>"MZ","ko"=>"모잠비크","en"=>"Mozambique"],
                    ["id"=>"NA","ko"=>"나미비아","en"=>"Namibia"],
                    ["id"=>"NC","ko"=>"뉴칼레도니아","en"=>"New Caledonia"],
                    ["id"=>"NE","ko"=>"니제르","en"=>"Niger"],
                    ["id"=>"NF","ko"=>"노퍽섬","en"=>"Norfolk Island"],
                    ["id"=>"NG","ko"=>"나이지리아","en"=>"Nigeria"],
                    ["id"=>"NI","ko"=>"니카라과","en"=>"Nicaragua"],
                    ["id"=>"NL","ko"=>"네덜란드","en"=>"Netherlands"],
                    ["id"=>"NO","ko"=>"노르웨이","en"=>"Norway"],
                    ["id"=>"NP","ko"=>"네팔","en"=>"Nepal"],
                    ["id"=>"NR","ko"=>"나우루","en"=>"Nauru"],
                    ["id"=>"NU","ko"=>"니우에","en"=>"Niue"],
                    ["id"=>"NZ","ko"=>"뉴질랜드","en"=>"New Zealand"],
                    ["id"=>"OM","ko"=>"오만","en"=>"Oman"],
                    ["id"=>"PA","ko"=>"파나마","en"=>"Panama"],
                    ["id"=>"PE","ko"=>"페루","en"=>"Peru"],
                    ["id"=>"PF","ko"=>"프랑스령 폴리네시아","en"=>"French Polynesia"],
                    ["id"=>"PG","ko"=>"파푸아뉴기니","en"=>"Papua New Guinea"],
                    ["id"=>"PH","ko"=>"필리핀","en"=>"Philippines"],
                    ["id"=>"PK","ko"=>"파키스탄","en"=>"Pakistan"],
                    ["id"=>"PL","ko"=>"폴란드","en"=>"Poland"],
                    ["id"=>"PM","ko"=>"생피에르 미클롱","en"=>"St. Pierre & Miquelon"],
                    ["id"=>"PN","ko"=>"핏케언 섬","en"=>"Pitcairn Islands"],
                    ["id"=>"PR","ko"=>"푸에르토리코","en"=>"Puerto Rico"],
                    ["id"=>"PS","ko"=>"팔레스타인 지구","en"=>"Palestinian Territories"],
                    ["id"=>"PT","ko"=>"포르투갈","en"=>"Portugal"],
                    ["id"=>"PW","ko"=>"팔라우","en"=>"Palau"],
                    ["id"=>"PY","ko"=>"파라과이","en"=>"Paraguay"],
                    ["id"=>"QA","ko"=>"카타르","en"=>"Qatar"],
                    ["id"=>"RE","ko"=>"리유니온","en"=>"Réunion"],
                    ["id"=>"RO","ko"=>"루마니아","en"=>"Romania"],
                    ["id"=>"RS","ko"=>"세르비아","en"=>"Serbia"],
                    ["id"=>"RU","ko"=>"러시아","en"=>"Russia"],
                    ["id"=>"RW","ko"=>"르완다","en"=>"Rwanda"],
                    ["id"=>"SA","ko"=>"사우디아라비아","en"=>"Saudi Arabia"],
                    ["id"=>"SB","ko"=>"솔로몬 제도","en"=>"Solomon Islands"],
                    ["id"=>"SC","ko"=>"세이셸","en"=>"Seychelles"],
                    ["id"=>"SD","ko"=>"수단","en"=>"Sudan"],
                    ["id"=>"SE","ko"=>"스웨덴","en"=>"Sweden"],
                    ["id"=>"SG","ko"=>"싱가포르","en"=>"Singapore"],
                    ["id"=>"SH","ko"=>"세인트헬레나","en"=>"St. Helena"],
                    ["id"=>"SI","ko"=>"슬로베니아","en"=>"Slovenia"],
                    ["id"=>"SJ","ko"=>"스발바르제도-얀마웬섬","en"=>"Svalbard & Jan Mayen"],
                    ["id"=>"SK","ko"=>"슬로바키아","en"=>"Slovakia"],
                    ["id"=>"SL","ko"=>"시에라리온","en"=>"Sierra Leone"],
                    ["id"=>"SM","ko"=>"산마리노","en"=>"San Marino"],
                    ["id"=>"SN","ko"=>"세네갈","en"=>"Senegal"],
                    ["id"=>"SO","ko"=>"소말리아","en"=>"Somalia"],
                    ["id"=>"SR","ko"=>"수리남","en"=>"Suriname"],
                    ["id"=>"SS","ko"=>"남수단","en"=>"South Sudan"],
                    ["id"=>"ST","ko"=>"상투메 프린시페","en"=>"São Tomé & Príncipe"],
                    ["id"=>"SV","ko"=>"엘살바도르","en"=>"El Salvador"],
                    ["id"=>"SX","ko"=>"신트마르턴","en"=>"Sint Maarten"],
                    ["id"=>"SY","ko"=>"시리아","en"=>"Syria"],
                    ["id"=>"SZ","ko"=>"에스와티니","en"=>"Eswatini"],
                    ["id"=>"TC","ko"=>"터크스 케이커스 제도","en"=>"Turks & Caicos Islands"],
                    ["id"=>"TD","ko"=>"차드","en"=>"Chad"],
                    ["id"=>"TF","ko"=>"프랑스 남부 지방","en"=>"French Southern Territories"],
                    ["id"=>"TG","ko"=>"토고","en"=>"Togo"],
                    ["id"=>"TH","ko"=>"태국","en"=>"Thailand"],
                    ["id"=>"TJ","ko"=>"타지키스탄","en"=>"Tajikistan"],
                    ["id"=>"TK","ko"=>"토켈라우","en"=>"Tokelau"],
                    ["id"=>"TL","ko"=>"동티모르","en"=>"Timor-Leste"],
                    ["id"=>"TM","ko"=>"투르크메니스탄","en"=>"Turkmenistan"],
                    ["id"=>"TN","ko"=>"튀니지","en"=>"Tunisia"],
                    ["id"=>"TO","ko"=>"통가","en"=>"Tonga"],
                    ["id"=>"TR","ko"=>"터키","en"=>"Turkey"],
                    ["id"=>"TT","ko"=>"트리니다드 토바고","en"=>"Trinidad & Tobago"],
                    ["id"=>"TV","ko"=>"투발루","en"=>"Tuvalu"],
                    ["id"=>"TW","ko"=>"대만","en"=>"Taiwan"],
                    ["id"=>"TZ","ko"=>"탄자니아","en"=>"Tanzania"],
                    ["id"=>"UA","ko"=>"우크라이나","en"=>"Ukraine"],
                    ["id"=>"UG","ko"=>"우간다","en"=>"Uganda"],
                    ["id"=>"UM","ko"=>"미국령 해외 제도","en"=>"U.S. Outlying Islands"],
                    ["id"=>"US","ko"=>"미국","en"=>"United States"],
                    ["id"=>"UY","ko"=>"우루과이","en"=>"Uruguay"],
                    ["id"=>"UZ","ko"=>"우즈베키스탄","en"=>"Uzbekistan"],
                    ["id"=>"VA","ko"=>"바티칸 시국","en"=>"Vatican City"],
                    ["id"=>"VC","ko"=>"세인트빈센트그레나딘","en"=>"St. Vincent & Grenadines"],
                    ["id"=>"VE","ko"=>"베네수엘라","en"=>"Venezuela"],
                    ["id"=>"VG","ko"=>"영국령 버진아일랜드","en"=>"British Virgin Islands"],
                    ["id"=>"VI","ko"=>"미국령 버진아일랜드","en"=>"U.S. Virgin Islands"],
                    ["id"=>"VN","ko"=>"베트남","en"=>"Vietnam"],
                    ["id"=>"VU","ko"=>"바누아투","en"=>"Vanuatu"],
                    ["id"=>"WF","ko"=>"왈리스-푸투나 제도","en"=>"Wallis & Futuna"],
                    ["id"=>"WS","ko"=>"사모아","en"=>"Samoa"],
                    ["id"=>"YE","ko"=>"예멘","en"=>"Yemen"],
                    ["id"=>"YT","ko"=>"마요트","en"=>"Mayotte"],
                    ["id"=>"ZA","ko"=>"남아프리카","en"=>"South Africa"],
                    ["id"=>"ZM","ko"=>"잠비아","en"=>"Zambia"],
                    ["id"=>"ZW","ko"=>"짐바브웨","en"=>"Zimbabwe"]
                ]
            ]
        ],
        "attributes"=>[
            "text"=>["define"=>"text","id"=>"town","ko"=>"읍면동","en"=>"Town","length"=>32,"default"=>"","multilingual"=>"yes"],
            "geometry"=>["define"=>"geometry","id"=>"geometry","ko"=>"좌표","en"=>"Geometry","length"=>32]
        ]
    ],
    "select"=>["define"=>"select","ko"=>"선택","en"=>"Select"],
    "sex"=>["define"=>"sex","ko"=>"성별","en"=>"Sex","multilingual"=>"yes","default"=>"none"],
    "gender"=>["define"=>"gender","ko"=>"성별","en"=>"Gender","multilingual"=>"yes","default"=>"none"],
    "file"=>[
        "define"=>"file",
        "ko"=>"파일",
        "en"=>"File",
        "options"=>[
            "target"=>["type"=>"parent","id"=>"target","ko"=>"참조 엔티티 선택","en"=>"Select a target entity","required"=>"no","multiple"=>"no"],
            "filter"=>["type"=>"variable","id"=>"filter","ko"=>"확장자 필터","en"=>"File extension filter","required"=>"no","multiple"=>"yes"]
        ]
    ],
    "image"=>[
        "define"=>"image",
        "ko"=>"이미지",
        "en"=>"Image",
        "options"=>[
            "target"=>["type"=>"parent","id"=>"target","ko"=>"참조 엔티티 선택","en"=>"Select a target entity","required"=>"no","multiple"=>"no"],
            "filter"=>[
                "type"=>"select",
                "id"=>"filter",
                "ko"=>"확장자 필터",
                "en"=>"File extension filter",
                "required"=>"no",
                "multiple"=>"yes",
                "items"=>[
                    ["id"=>"png","ko"=>"PNG","en"=>"PNG"],
                    ["id"=>"jpg","ko"=>"JPEG","en"=>"JPEG"],
                    ["id"=>"gif","ko"=>"GIF","en"=>"GIF"]
                ]
            ],
            "resize"=>[
                "type"=>"select",
                "id"=>"resize",
                "ko"=>"크기조절 방식",
                "en"=>"Resizing type",
                "required"=>"no",
                "multiple"=>"no",
                "default"=>"cover",
                "items"=>[
                    ["id"=>"cover","ko"=>"잘리더라도 꽉차게","en"=>"Cover"],
                    ["id"=>"contain","ko"=>"여백생겨도 모두 보이게","en"=>"Contain"]
                ]
            ]
        ]
    ],
    "count"=>[
        "define"=>"count",
        "ko"=>"총수",
        "en"=>"Count",
        "function"=>"yes",
        "options"=>[
            "target"=>["type"=>"child","id"=>"target","ko"=>"대상 엔티티 선택","en"=>"Select a target entity","required"=>"no","multiple"=>"no"],
            "operator"=>["type"=>"operator","id"=>"operator","ko"=>"추가 조건값","en"=>"Additional operator","required"=>"no","multiple"=>"yes"]
        ]
    ],
    "sum"=>[
        "define"=>"sum",
        "ko"=>"합계",
        "en"=>"Sum",
        "function"=>"yes",
        "options"=>[
            "target"=>["type"=>"child","id"=>"target","ko"=>"대상 엔티티 선택","en"=>"Select a target entity","required"=>"no","multiple"=>"no"],
            "operator"=>["type"=>"operator","id"=>"operator","ko"=>"추가 조건값","en"=>"Additional operator","required"=>"no","multiple"=>"yes"]
        ]
    ],
    "min"=>[
        "define"=>"min",
        "ko"=>"최소",
        "en"=>"Minimum",
        "function"=>"yes",
        "options"=>[
            "target"=>["type"=>"child","id"=>"target","ko"=>"대상 엔티티 선택","en"=>"Select a target entity","required"=>"no","multiple"=>"no"],
            "operator"=>["type"=>"operator","id"=>"operator","ko"=>"추가 조건값","en"=>"Additional operator","required"=>"no","multiple"=>"yes"]
        ]
    ],
    "max"=>[
        "define"=>"max",
        "ko"=>"최대",
        "en"=>"Maximum",
        "function"=>"yes",
        "options"=>[
            "target"=>["type"=>"child","id"=>"target","ko"=>"대상 엔티티 선택","en"=>"Select a target entity","required"=>"no","multiple"=>"no"],
            "operator"=>["type"=>"operator","id"=>"operator","ko"=>"추가 조건값","en"=>"Additional operator","required"=>"no","multiple"=>"yes"]
        ]
    ],
    "average"=>[
        "define"=>"average",
        "ko"=>"평균",
        "en"=>"Average",
        "function"=>"yes",
        "options"=>[
            "target"=>["type"=>"child","id"=>"target","ko"=>"대상 엔티티 선택","en"=>"Select a target entity","required"=>"no","multiple"=>"no"],
            "operator"=>["type"=>"operator","id"=>"operator","ko"=>"추가 조건값","en"=>"Additional operator","required"=>"no","multiple"=>"yes"]
        ]
    ],
    "latest"=>[
        "define"=>"latest",
        "ko"=>"최근날짜",
        "en"=>"Latest",
        "function"=>"yes",
        "options"=>[
            "target"=>["type"=>"child","id"=>"target","ko"=>"대상 엔티티 선택","en"=>"Select a target entity","required"=>"no","multiple"=>"no"],
            "operator"=>["type"=>"operator","id"=>"operator","ko"=>"추가 조건값","en"=>"Additional operator","required"=>"no","multiple"=>"yes"]
        ]
    ]
]
?>