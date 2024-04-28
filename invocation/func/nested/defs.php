<?php

namespace A {
    function first_def(){
        function inner_def(){
            function callee1(){ echo "inside of func test callee1\n";}
            function callee2(){ echo "inside of func test callee2\n";}
        } // line 7
    }
}

namespace B {
    \A\first_def();     // Line 4
}

namespace C{
    \A\inner_def();     // Line 5
    \A\callee1();       // Line 6
    \A\callee2();       // Line 7
}



