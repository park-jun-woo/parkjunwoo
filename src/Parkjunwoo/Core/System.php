<?php
namespace Parkjunwoo\Core;

use Parkjunwoo\Parkjunwoo;

class System{
    protected Parkjunwoo $man;
    
    public function __construct(Parkjunwoo $man){
        $this->man = $man;
    }
}
?>