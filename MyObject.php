<?php

require 'LogInterceptor.php';

class MyObject {
    function myMethod1(){
        print "myMethod1 called \n";
        $this->intercepted->myMethod2(); // called with "around" code
        $this->myMethod3(); // called directly
    }

    function myMethod2(){
        print "myMethod2 called \n";
    }

    function myMethod3(){
        print "myMethod3 called \n";
    }
}

$object = new MyObject();
$object = new LogInterceptor($object);
$object->myMethod1();

/* Output:
before myMethod1
myMethod1 called
before myMethod2
myMethod2 called
after myMethod2
myMethod3 called
after myMethod1
*/