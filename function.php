<?php

// NOTE: NEVER CALL BOTH FUNCTIONS inside each other. 

  
    // Tho we can call function before initialization. Cause first the entire code is executed then function is called.

    showUserDetails();
    showUserDetails();
    showUserDetails();
    showUserDetails();

    function showUserDetails(){
        Heading();
        echo "Username: akashnai"."<br>";
        echo "Email: akashnai@mail.com"."<br>";
        echo "Phone no: 9876543210"."<br>";
        echo "Address: vastral, Ahmedabad"."<br>";
        echo "<hr>";
    }

    function Heading(){
        echo "<h1>User Details</h1>";
    }

    showUserDetails();
    showUserDetails();
    showUserDetails();
    showUserDetails();
?>