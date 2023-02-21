<?php

require 'AbstractInterceptor.php';

class LogInterceptor extends AbstractInterceptor {
    function around($object, $method, $args){
        print "before $method \n";
        $value = $this->callMethod($method, $args);
        print "after $method \n";
        return $value;
    }
}