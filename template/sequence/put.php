<?php
$entity = &$this->source["entities"][$sequence["entity"]];
$condition = "\"key=\".\$this->request->param(\"{$sequence["entity"]}\")";
$controllerCode .= "        \$values = [
";
foreach($sequence["value"] as $attr=>$param){
    if(strpos($param,".")!==false){
        list($arr,$key) = explode(".",$param);
        switch($arr){
            case "request":
                $var = "\$this->request->param(\"{$key}\")";
                $controllerCode .= "            \"{$attr}\"=>{$var},\n";
                break;
        }
    }
}
$controllerCode .= "        ];\n";
$controllerCode .= "        \$this->put(\"{$sequence["entity"]}\",\$values,{$condition});\n";
?>