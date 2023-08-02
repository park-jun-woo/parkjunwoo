<?php
class Request{
	protected User $user;
	protected string $uri, $route, $method, $type, $locale;
	protected array $sequences;
	/**
	 * 요청 분석하는 생성자
	 */
	public function __construct(){
		//세션 설정
		$this->user = new User();
		echo $_SERVER["PHP_SELF"]."<br>";
		echo $_SERVER["QUERY_STRING"]."<br>";
		print_r($_GET);
		exit;
		//URI 분석
		//$uriParse = explode("?",$_SERVER["REQUEST_URI"]);
		$this->uri = $_SERVER["PHP_SELF"];//$uriParse[0].(substr($uriParse[0],-1)==="/"?"":"/");
		//if(isset($uriParse[1])){parse_str($uriParse[1],$_GET);}
		//Method 분석
		$this->method = $_SERVER["REQUEST_METHOD"];
		//ContentType 분석
		if(array_key_exists("CONTENT_TYPE", $_SERVER)){
			switch(strtolower($_SERVER["CONTENT_TYPE"])){
				default:$this->type = "HTML";break;
				case "json":case "application/json":$this->type = "JSON";break;
				case "xml":case "application/xml":$this->type = "XML";break;
			}
		}else{$this->type = "HTML";}
		//사용자 환경 언어 처리
		if(!array_key_exists("HTTP_ACCEPT_LANGUAGE",$_SERVER)){$_SERVER["HTTP_ACCEPT_LANGUAGE"] = "";}
		else{$languageList = explode("-",preg_split("[;,]",$_SERVER["HTTP_ACCEPT_LANGUAGE"])[0]);}
		if($_SERVER["HTTP_ACCEPT_LANGUAGE"]=="" || $languageList[0]==""){$languageList = array("ko");}
		//사용자 사용언어 지정
		if(array_key_exists("language",$_GET) && $_GET["language"]!=""){
			$language = $_GET["language"];
			$this->user->set("language",$language);
		}else if(array_key_exists("lang",$_GET) && $_GET["lang"]!=""){
			$language = $_GET["lang"];
			$this->user->set("language",$language);
		}else if($this->user->is("language")){
			$language = $this->user->get("language");
		}else if($languageList[0]!=""){$language = $languageList[0];}
		else{$language = "ko";}
		$this->locale = strtolower($language);
		$app = Parkjunwoo::app($appId);//Parkjunwoo::domainApp($_SERVER["SERVER_NAME"]);
		//구문 분석된 주소에 대한 컨트롤러를 생성하고 리소스 메서드를 호출
		if(array_key_exists($this->method.$this->type, $app)){
			if(array_key_exists($this->uri, $app[$this->method.$this->type])){
				$this->sequences = $app[$this->method.$this->type][$this->uri];
				$this->route = $this->uri;
			}else{
				foreach($app[$this->method.$this->type] as $pattern=>$sequences){
					if(substr($pattern, -1)!=="/"){$pattern .= "/";}$matches = null;
					if(preg_match("/^".preg_replace("/\[([^\/]+)\]/i", "(?P<$1>[^\/]+)", str_replace("/", "\/", $pattern))."$/i",$this->uri,$matches)){
						foreach($matches as $key=>$value){if(is_string($key)){$_GET[$key] = $value;}}
						$this->route = $pattern;
						$this->sequences = $sequences;
						break;
					}
				}
			}
		}
		//라우터를 찾을 수 없다면
		if(!isset($this->route)){$this->route = "404";$this->sequences = [["method"=>"view","layout"=>"none","view"=>"404"]];}
	}
	/**
	 * 사용자 객체
	 * @return User
	 */
	public function user():User{return $this->user;}
	/**
	 * URI
	 * @return string URI
	 */
	public function uri():string{return $this->uri;}
	/**
	 * 라우트 패턴
	 * @return string 패턴
	 */
	public function route():string{return $this->route;}
	/**
	 * HTTP 메서드
	 * @return string 메서드
	 */
	public function method():string{return $this->method;}
	/**
	 * 컨텐트 타입
	 * @return string 컨텐트 타입
	 */
	public function type():string{return $this->type;}
	/**
	 * 사용언어 코드
	 * @return string 코드
	 */
	public function locale():string{return $this->locale;}
	/**
	 * 시퀀스 배열
	 * @return array 시퀀스 배열
	 */
	public function sequences():array{return $this->sequences;}
}
?>