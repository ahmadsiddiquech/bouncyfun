<?php

		
            // $to ="aamir.faisal@xpertspot.com";
            $to = "aqsarasheed864@gmail.com";
            
            $name = $_POST['name'];
            $number = $_POST['no'];
            $header = $_POST['email'];
            $message = $_POST['message'];

            $subject ="subject";
            
            $msg = "<h2>Name:</h2>".$name."<h2>Number:</h2>".$number.
                        "<h2>Message:</h2><p>".$message."</p>";

                        //echo $message;
        
		if(mail($to, $subject, $msg, $header)){
                  echo true;
            }
		
		
?>