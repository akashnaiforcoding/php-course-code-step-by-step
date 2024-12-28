<?php
    function test(){
        echo "This is test function";
        function abc(){
            
            echo "This is abc function";
        }

        // You can call function after its declared in functions
        abc();
    }


    test();
    abc();

    // You can't call inside function before calling outside function
    // abc();
    // test();
?>