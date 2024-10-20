<?php
namespace Parkjunwoo\Util;

use DOMDocument;
use DOMAttr;
use DOMXPath;

class Security{
    /**
     * RSA 키쌍이 없을 경우 생성.
     * @param string $path 키를 생성할 경로
     * @param bool $clear 강제로 초기화할지 여부
     */
    public static function generateRSA():array{
        $privateKey = null;
        $privateKeyResource = openssl_pkey_new(["digest_alg" => "sha512","private_key_bits"=>2048,"private_key_type"=>OPENSSL_KEYTYPE_RSA]);
        openssl_pkey_export($privateKeyResource, $privateKey);
        $publicKey = openssl_pkey_get_details($privateKeyResource)['key'];
        return [$privateKey, $publicKey];
    }
    /**
     * SQL 인젝션 공격 필터링
     * @param array $param 필터링할 매개 변수 값의 배열
     */
    public static function sqlInjectionClean(array &$param){
        foreach($param as &$value){
            if(is_array($value)){self::sqlInjectionClean($value);}
            else{$value = addSlashes($value);}
        }
    }
    public static function valid(string $value, string $type="key"):bool{
        switch($type){
            case "key":case "unsigned int":$regex = "/^\d+$/";break;
            case "int":$regex = "/^-?\d+$/";break;
            case "name":$regex = "/^[0-9a-zA-Z가-힣]+$/";break;
            default:return false;
        }
        return preg_match($regex, $value);
    }
    /**
     * XSS 공격 필터링
     * @param string $html 필터링할 입력 값
     * @param array $allowed 필터링하거나 허용할 태그 및 속성
     * @return string 필터링한 HTML 문자열
     */
    public static function purifyHTML(string $html,array $allowed):string {
        $dom = new DOMDocument();
        @$dom->loadHTML($html);
        $xpath = new DOMXPath($dom);
        $query ="//*[not(self::".implode(" or self::",array_keys($allowed)).")]";
        foreach($xpath->query($query) as $node){
            $node->parentNode->removeChild($node);
        }
        /** @var DOMAttr $attribute */
        foreach($xpath->query("//@*") as $attribute) {
            if(!in_array($attribute->nodeName,$allowed[$attribute->ownerElement->nodeName] ?? [])) {
                $attribute->ownerElement->removeAttributeNode($attribute);
            }
        }
        $result = $dom->saveHTML();
        return $result;
    }
    /**
     * XSS 공격 필터링 for articles
     * @param string $html 필터링할 입력 값
     * @return string 필터링한 HTML 문자열
     */
    public static function purifyArticle(string $html):string {
        return self::purifyHTML($html,[
            "article"=>["class","style"],"p"=>["id","style"],"ul"=>["class","style"],"ol"=>["class","style"],"li"=>["class","style"],"caption"=>["class","style"]
            ,"img"=>["src","alt","width","height","ismap","loading","style","data-filename"],"figure"=>["class","style"],"figcaption"=>["class","style"]
            ,"h1"=>["class","style"],"h2"=>["class","style"],"h3"=>["class","style"],"h4"=>["class","style"],"h5"=>["class","style"],"h6"=>["class","style"]
            ,"table"=>["class","style"],"tr"=>["class","style"],"th"=>["class","scope","style"],"td"=>["class","style"],"colgroup"=>["class","style"],"col"=>["class","style"]
        ]);
    }
}